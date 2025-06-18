<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;

class GeneralSettingController extends Controller
{
    // data show display
    public function index(Request $request)
    {
        $show_data = GeneralSetting::orderBy('id', 'DESC')->get();
        return view('backEnd.settings.index', compact('show_data'));
    }
    // data create 
    public function create()
    {
        return view('backEnd.settings.create');
    }

    // data store
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'white_logo' => 'required|image',
            'dark_logo' => 'required|image',
            'favicon' => 'required|image',
            'status' => 'required',
        ]);

        $manager = new ImageManager(new Driver());
        $uploadPath = 'uploads/settings/';

        // Folder create if not exist
        if (!file_exists(public_path($uploadPath))) {
            mkdir(public_path($uploadPath), 0755, true);
        }

        // Helper Function for image processing
        function processImage($image, $manager, $uploadPath)
        {
            $name = time() . '-' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)) . '.webp';
            $imageUrl = $uploadPath . $name;
           
            $img->height() > $img->width() ? $width = null : $height = null;
            $img->resize($width ?? 100, $height ?? 100); // fallback size
            $img->toWebp(90)->save(public_path($imageUrl));
            return $imageUrl;
        }

        $imageUrl1 = processImage($request->file('white_logo'), $manager, $uploadPath);
        $imageUrl2 = processImage($request->file('dark_logo'), $manager, $uploadPath);
        $imageUrl3 = processImage($request->file('favicon'), $manager, $uploadPath);

        $input = $request->all();
        $input['white_logo'] = $imageUrl1;
        $input['dark_logo'] = $imageUrl2;
        $input['favicon'] = $imageUrl3;

        GeneralSetting::create($input);
        Toastr::success('Success', 'Data insert successfully');
        return redirect()->route('settings.index');
    }

    // Edit data
    public function edit($id)
    {
        $edit_data = GeneralSetting::find($id);
        
        return view('backEnd.settings.edit', compact('edit_data'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $manager = new ImageManager(new Driver());
        $uploadPath = 'uploads/settings/';

        if (!file_exists(public_path($uploadPath))) {
            mkdir(public_path($uploadPath), 0755, true);
        }

        $update_data = GeneralSetting::find($request->id);
        $input = $request->all();

        // Helper Function for Image Processing
        function processImage($image, $manager, $uploadPath)
        {
            $name = time() . '-' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)) . '.webp';
            $imageUrl = $uploadPath . $name;
            $img = $manager->read($image->getRealPath());
            $img->height() > $img->width() ? $width = null : $height = null;
            $img->resize($width ?? 100, $height ?? 100); // fallback size
            $img->toWebp(90)->save(public_path($imageUrl));
            return $imageUrl;
        }

        // White Logo
        if ($request->hasFile('white_logo')) {
            $input['white_logo'] = processImage($request->file('white_logo'), $manager, $uploadPath);
        } else {
            $input['white_logo'] = $update_data->white_logo;
        }

        // Dark Logo
        if ($request->hasFile('dark_logo')) {
            $input['dark_logo'] = processImage($request->file('dark_logo'), $manager, $uploadPath);
        } else {
            $input['dark_logo'] = $update_data->dark_logo;
        }

        // Favicon
        if ($request->hasFile('favicon')) {
            $input['favicon'] = processImage($request->file('favicon'), $manager, $uploadPath);
        } else {
            $input['favicon'] = $update_data->favicon;
        }

        $input['status'] = $request->has('status') ? 1 : 0;
        

        $update_data->update($input);

        Toastr::success('Success', 'Data update successfully');
        return redirect()->route('settings.index');
    }
    public function inactive(Request $request)
    {
        $inactive = GeneralSetting::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success', 'Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = GeneralSetting::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success', 'Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = GeneralSetting::find($request->hidden_id);
        File::delete($delete_data->image);
        $delete_data->delete();
        Toastr::success('Success', 'Data delete successfully');
        return redirect()->back();
    }

}
