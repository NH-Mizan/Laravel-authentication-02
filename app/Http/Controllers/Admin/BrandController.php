<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Brian2694\Toastr\Facades\Toastr;
use File;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Str;

class BrandController extends Controller
{
    public function index(Request $request)
    {
        $data = Brand::orderBy('id', 'DESC')->get();
        return view('backEnd.brand.index', compact('data'));
    }
    public function create()
    {
        return view('backEnd.brand.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required',
        ]);

        $manager = new ImageManager(new Driver());
        $uploadpath = 'uploads/brand/';
        $image = $request->file('image');
        $imageUrl = null;

        if ($image) {
            // Create folder if not exists
            if (!file_exists(public_path($uploadpath))) {
                mkdir(public_path($uploadpath), 0755, true);
            }

            $name = time() . '-' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)) . '.webp';
            $imageUrl = $uploadpath . $name;

            $img = $manager->read($image->getRealPath());

            $width = 210;
            $height = 210;

            if ($img->height() > $img->width()) {
                $width = null;
            } else {
                $height = null;
            }

            $img->resize($width ?? 210, $height ?? 210);
            $img->toWebp(90)->save(public_path($imageUrl));
        }

        $input = $request->all();
        $input['slug'] = Str::slug($request->name);
        $input['image'] = $imageUrl;

        Brand::create($input);
        Toastr::success('Success', 'Data insert successfully');
        return redirect()->route('brands.index');
    }

    public function edit($id)
    {
        $edit_data = Brand::find($id);
        return view('backEnd.brand.edit', compact('edit_data'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $update_data = Brand::find($request->id);
        $input = $request->all();

        $manager = new ImageManager(new Driver());
        $uploadpath = 'uploads/brand/';
        $image = $request->file('image');

        if ($image) {
            // Folder create if not exists
            if (!file_exists(public_path($uploadpath))) {
                mkdir(public_path($uploadpath), 0755, true);
            }

            $name = time() . '-' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)) . '.webp';
            $imageUrl = $uploadpath . $name;

            $img = $manager->read($image->getRealPath());

            $width = 210;
            $height = 210;
            if ($img->height() > $img->width()) {
                $width = null;
            } else {
                $height = null;
            }

            $img->resize($width ?? 210, $height ?? 210);
            $img->toWebp(90)->save(public_path($imageUrl));

            // Delete old image
            if ($update_data->image && file_exists(public_path($update_data->image))) {
                File::delete(public_path($update_data->image));
            }

            $input['image'] = $imageUrl;
        } else {
            $input['image'] = $update_data->image;
        }

        $input['status'] = $request->status ? 1 : 0;

        $update_data->update($input);

        Toastr::success('Success', 'Data update successfully');
        return redirect()->route('brands.index');
    }

    public function inactive(Request $request)
    {
        $inactive = Brand::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = Brand::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = Brand::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }



}
