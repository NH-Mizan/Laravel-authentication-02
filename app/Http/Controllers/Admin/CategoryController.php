<?php

namespace App\Http\Controllers\admin;
use Brian2694\Toastr\Facades\Toastr;
use File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver; // অথবা Imagick
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $data = Category::orderBy('id', 'DESC')->get();
        return view('backEnd.category.index', compact('data'));
    }
    public function create()
    {
        return view('backEnd.category.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required',
        ]);


        $file = $request->file('image');
        $name = time() . $file->getClientOriginalName();
        $uploadPath = 'public/uploads/category/';
        $file->move($uploadPath, $name);
        $fileUrl = $uploadPath . $name;

        $input = $request->all();
        $input['image'] = $fileUrl;

        
        $input['status'] = $request->status ? 1 : 0;

        Category::create($input);
        return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }


        public function edit($id)
    {
        $edit_data = Category::find($id);
        $categories = Category::select('id','name')->get();
        return view('backEnd.category.edit',compact('edit_data','categories'));
    }


    public function update(Request $request)
{
    $this->validate($request, [
        'name' => 'required',
    ]);

    $update_data = Category::find($request->id);
    $input = $request->all();

    $image = $request->file('image');
    if ($image) {
        // Initialize the Image Manager
        $manager = new ImageManager(new Driver());

        // Prepare image name and path
        $name = time() . '-' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)) . '.webp';
        $uploadpath = 'public/uploads/category/';
        $imageUrl = $uploadpath . $name;

        // Create folder if not exist
        if (!file_exists(public_path($uploadpath))) {
            mkdir(public_path($uploadpath), 0755, true);
        }

        // Read and resize image
        $img = $manager->read($image->getRealPath());

        $width = 400;
        $height = 400;

        if ($img->height() > $img->width()) {
            $width = null;
        } else {
            $height = null;
        }

        $img->resize($width ?? 400, $height ?? 400);

        // Delete old image
        if (File::exists(public_path($update_data->image))) {
            File::delete(public_path($update_data->image));
        }

        // Save image
        $img->toWebp(90)->save(public_path($imageUrl));

        $input['image'] = $imageUrl;
    } else {
        $input['image'] = $update_data->image;
    }

    // Generate slug
    $input['slug'] = Str::slug($request->name);
    $input['slug'] = str_replace('/', '', $input['slug']);
    $input['front_view'] = $request->front_view ? 1 : 0;
    $input['status'] = $request->status ? 1 : 0;

    $update_data->update($input);

    Toastr::success('Success', 'Data update successfully');
    return redirect()->route('categories.index');
}
    

public function inactive(Request $request)
    {
        $inactive = Category::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = Category::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $category = Category::find($request->hidden_id);
        
        foreach ($category->subcategories ?? [] as $subcategory) {
            foreach ($subcategory->childcategories ?? [] as $childCategory) {
                $childCategory->delete();
            }
            File::delete($subcategory->image);
            $subcategory->delete();
        }
        foreach ($category->products ?? [] as $product) {
            foreach ($product->variables ?? [] as $variable) {
                File::delete($variable->image);
                $variable->delete();
            }
            foreach ($product->images ?? [] as $image) {
                File::delete($image->image);
                $image->delete();
            }
            foreach ($product->reviews ?? [] as $review) {
                $review->delete();
            }
            foreach ($product->campaigns ?? [] as $campaign) {
                File::delete($product->banner);
                $campaign->delete();
            }
            File::delete($product->image);
            $product->delete();
        }
        File::delete($category->image);
        $category->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
}
