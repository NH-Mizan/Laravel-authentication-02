<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\BannerCategory;
use Brian2694\Toastr\Facades\Toastr;
use File;
use DB;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Encoders\WebpEncoder;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index(Request $request)
    {
        $data = Banner::orderBy('id', 'DESC')->with('category')->get();
        return view('backEnd.banner.index', compact('data'));
    }
    public function create()
    {
        $bcategories = BannerCategory::orderBy('id', 'DESC')->select('id', 'name')->get();
        return view('backEnd.banner.create', compact('bcategories'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'link' => 'required',
            'status' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,webp'
        ]);

        // Setup image manager
        $manager = new ImageManager(new Driver());
        $image = $request->file('image');

        // Create webp file name
        $name = time() . '-' . $image->getClientOriginalName();
        $name = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp', $name);
        $name = strtolower(preg_replace('/\s+/', '-', $name));

        // Save path in public folder (real file system)
        $uploadFolder = 'public/uploads/banner/';
        $publicPath = public_path($uploadFolder);

        if (!file_exists($publicPath)) {
            mkdir($publicPath, 0755, true);
        }

        $fullImagePath = $publicPath . $name;

        // Read, resize, encode and save
        $img = $manager->read($image->getRealPath());
        $img->resize(500, null);
        $webp = new WebpEncoder(quality: 90);
        $img->encode($webp)->save($fullImagePath);

        // Save image path for database
        $input = $request->all();
        $input['image'] = $uploadFolder . $name; 
        $input['status'] = $request->status ? 1 : 0;
        Banner::create($input);

        Toastr::success('Success', 'Data insert successfully');
        return redirect()->route('banners.index');
    }


    public function edit($id)
    {
        $edit_data = Banner::find($id);
        $bcategories = BannerCategory::select('id', 'name')->get();
        return view('backEnd.banner.edit', compact('edit_data', 'bcategories'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'link' => 'required',
        ]);
        $update_data = Banner::find($request->id);
        $input = $request->all();
        $image = $request->file('image');
        if ($image) {
            // image with intervention
            $file = $request->file('image');
            $name = time() . $file->getClientOriginalName();
            $uploadPath = 'public/uploads/banner/';
            $file->move($uploadPath, $name);
            $fileUrl = $uploadPath . $name;
            $input['image'] = $fileUrl;
            File::delete($update_data->image);
        } else {
            $input['image'] = $update_data->image;
        }

        $input['status'] = $request->status ? 1 : 0;
        $update_data->update($input);

        Toastr::success('Success', 'Data update successfully');
        return redirect()->route('banners.index');
    }

    public function inactive(Request $request)
    {
        $inactive = Banner::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success', 'Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = Banner::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success', 'Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = Banner::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success', 'Data delete successfully');
        return redirect()->back();
    }

}
