<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Productimage;
use App\Models\ProductVariable;
use App\Models\PurchaseDetails;
use App\Models\Size;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  

   public function getSubcategory(Request $request)
    {
        $subcategory = DB::table("subcategories")
            ->where("category_id", $request->category_id)
            ->pluck('name', 'id');
        return response()->json($subcategory);
    }
    public function getChildcategory(Request $request)
    {
        $childcategory = DB::table("childcategories")
            ->where("subcategory_id", $request->subcategory_id)
            ->pluck('name', 'id');
        return response()->json($childcategory);
    }

    
     public function index(Request $request)
    {
        $data = Product::latest()->select('id', 'name', 'category_id', 'new_price', 'topsale', 'feature_product', 'type', 'status')->with('image', 'category')->withSum('variables', 'stock');
        if ($request->keyword) {
            $data = $data->where('name', 'LIKE', '%' . $request->keyword . "%");
        }
        $data = $data->paginate(50);
        return view('backEnd.product.index', compact('data'));
    }

    public function stock_alert()
    {
        $products = Product::select('id', 'name', 'type', 'stock', 'stock_alert')->where('type', 1)->where('stock', '<=', DB::raw('stock_alert'))->with('image')->get();
        $variables = ProductVariable::whereHas('product', function ($query) {
            $query->whereRaw('product_variables.stock <= products.stock_alert');
        })->with('product', 'image')
            ->get();
        return view('backEnd.product.stock_alert', compact('products', 'variables'));
    }
    // barcode ace 

     public function create()
    {
        $categories = Category::where('status', 1)->select('id', 'name', 'status')->get();
        $brands = Brand::where('status', '1')->select('id', 'name', 'status')->get();
        $colors = Color::where('status', '1')->get();
        $sizes = Size::where('status', '1')->get();
        return view('backEnd.product.create', compact('categories', 'brands', 'colors', 'sizes'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);

        $max_id = DB::table('products')->max('id');
        $max_id = $max_id ? $max_id + 1 : '1';
        $input = $request->except(['image', 'product_type', 'files', 'sizes', 'colors', 'purchase_prices', 'old_prices', 'new_prices', 'stocks', 'images', 'pro_barcodes']);
        $input['slug'] = strtolower(preg_replace('/[\/\s]+/', '-', $request->name . '-' . $max_id));



        $input['status'] = $request->status ? 1 : 0;
        $input['topsale'] = $request->topsale ? 1 : 0;
        if ($request->type == 0) {
            $input['purchase_price'] = $request->purchase_prices[0];
            $input['old_price'] = $request->old_prices[0];
            $input['new_price'] = $request->new_prices[0];
            $input['stock'] = 0;
        } else {
            $input['pro_barcode'] = $request->pro_barcode ?? $this->barcode_generate();
        }
        $save_data = Product::create($input);

        $pro_image = $request->file('image');
        if ($pro_image) {
            foreach ($pro_image as $key => $image) {
                $name = time() . '-' . $image->getClientOriginalName();
                $name = strtolower(preg_replace('/\s+/', '-', $name));
                $uploadPath = 'public/uploads/product/';
                $image->move($uploadPath, $name);
                $imageUrl = $uploadPath . $name;
                $pimage = new Productimage();
                $pimage->product_id = $save_data->id;
                $pimage->image = $imageUrl;
                $pimage->save();
            }
        }
        if ($request->stocks) {
            $size = $request->sizes;
            $color = $request->colors;
            $stocks = array_filter($request->stocks);
            $purchase = $request->purchase_prices;
            $old_price = $request->old_prices;
            $new_price = $request->new_prices;
            $pro_barcode = $request->pro_barcodes;
            $images = $request->file('images');
            if (is_array($stocks)) {
                foreach ($stocks as $key => $stock) {
                    $imageUrl = null;

                    if (isset($images[$key]) && $images[$key] != null) {
                        $image = $images[$key];
                        $name = time() . '-' . $image->getClientOriginalName();
                        $name = strtolower(preg_replace('/\s+/', '-', $name));
                        $uploadPath = 'public/uploads/product/';
                        $image->move($uploadPath, $name);
                        $imageUrl = $uploadPath . $name;
                    }

                    $variable = new ProductVariable();
                    $variable->product_id = $save_data->id;
                    $variable->size = isset($size[$key]) ? $size[$key] : null;
                    $variable->color = isset($color[$key]) ? $color[$key] : null;
                    $variable->purchase_price = isset($purchase[$key]) ? $purchase[$key] : null;
                    $variable->old_price = isset($old_price[$key]) ? $old_price[$key] : null;
                    $variable->new_price = isset($new_price[$key]) ? $new_price[$key] : null;
                    $variable->pro_barcode = $pro_barcode[$key] ?? $this->barcode_generate();
                    $variable->stock = $stock;
                    $variable->image = $imageUrl;
                    $variable->save();

                    $parchase_var = new PurchaseDetails();
                    $parchase_var->product_id = $save_data->id;
                    $parchase_var->color = $variable->color;
                    $parchase_var->size = $variable->size;
                    $parchase_var->purchase_price = $variable->purchase_price;
                    $parchase_var->old_price = $variable->old_price;
                    $parchase_var->new_price = $variable->new_price;
                    $parchase_var->stock = $variable->stock;
                    $parchase_var->save();
                }
            }
        }
        if ($request->type == 1) {
            $parchase = new PurchaseDetails();
            $parchase->product_id = 1;
            $parchase->purchase_price = $request->purchase_price;
            $parchase->old_price = $request->old_price;
            $parchase->new_price = $request->new_price;
            $parchase->stock = $request->stock;
            $parchase->save();
        }

        Toastr::success('Success', 'Data insert successfully');
        return redirect()->route('products.index');
    }

}
