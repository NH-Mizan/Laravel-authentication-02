<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Brian2694\Toastr\Facades\Toastr;
use File;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Str;

class SubcategoryController extends Controller
{

    public function index(Request $request)
    {
        $data = Subcategory::orderBy('id', 'DESC')->select('id', 'name', 'category_id', 'status')->with('category')->get();
        return view('backEnd.subcategory.index', compact('data'));
    }
    public function create()
    {
        $categories = Category::select('id', 'slug', 'name', 'status')->where('status', 1)->get();
        return view('backEnd.subcategory.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required',
            'status' => 'required',
        ]);

        $manager = new ImageManager(new Driver()); // V3 image manager
        $uploadpath = 'uploads/subcategory/';
        $imageUrl = null;

        // Make sure folder exists
        if (!file_exists(public_path($uploadpath))) {
            mkdir(public_path($uploadpath), 0755, true);
        }

        $image = $request->file('image');
        if ($image != null) {
            $name = time() . '-' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)) . '.webp';
            $imageUrl = $uploadpath . $name;

            $img = $manager->read($image->getRealPath());

            $width = 400;
            $height = 400;
            if ($img->height() > $img->width()) {
                $width = null;
            } else {
                $height = null;
            }

            $img->resize($width ?? 400, $height ?? 400);

            $img->toWebp(90)->save(public_path($imageUrl));
        }

        $input = $request->all();
        $input['slug'] = str_replace('/', '', Str::slug($request->name));
        $input['image'] = $imageUrl;

        Subcategory::create($input);
        Toastr::success('Success', 'Data insert successfully');
        return redirect()->route('subcategories.index');
    }
    public function edit($id)
    {
        $edit_data = Subcategory::find($id);
        $categories = Category::select('id', 'slug', 'name', 'status')->where('status', 1)->get();
        return view('backEnd.subcategory.edit', compact('edit_data', 'categories'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required',
            'status' => 'required',
        ]);

        $update_data = Subcategory::find($request->id);
        $input = $request->all();

        $manager = new ImageManager(new Driver());
        $uploadpath = 'uploads/subcategory/';
        $image = $request->file('image');

        if ($image) {
            // Make sure folder exists
            if (!file_exists(public_path($uploadpath))) {
                mkdir(public_path($uploadpath), 0755, true);
            }

            $name = time() . '-' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)) . '.webp';
            $imageUrl = $uploadpath . $name;

            $img = $manager->read($image->getRealPath());

            // Resize logic
            $width = 400;
            $height = 400;
            if ($img->height() > $img->width()) {
                $width = null;
            } else {
                $height = null;
            }

            $img->resize($width ?? 400, $height ?? 400);
            $img->toWebp(90)->save(public_path($imageUrl));

            // Delete old image
            if (File::exists(public_path($update_data->image))) {
                File::delete(public_path($update_data->image));
            }

            $input['image'] = $imageUrl;
        } else {
            $input['image'] = $update_data->image;
        }

        // Slug & Status
        $input['slug'] = str_replace('/', '', Str::slug($request->name));
        $input['status'] = $request->status ? 1 : 0;

        $update_data->update($input);

        Toastr::success('Success', 'Data update successfully');
        return redirect()->route('subcategories.index');
    }


    public function inactive(Request $request)
    {
        $inactive = Subcategory::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success', 'Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = Subcategory::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success', 'Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {

        $subcategory = Subcategory::find($request->hidden_id);
        foreach ($subcategory->childcategories ?? [] as $childCategory) {
            $childCategory->delete();
        }
        foreach ($subcategory->products ?? [] as $product) {
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
        File::delete($subcategory->image);
        $subcategory->delete();
        Toastr::success('Success', 'Data delete successfully');
        return redirect()->back();
    }
}
