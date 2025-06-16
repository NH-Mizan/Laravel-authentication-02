<?php

namespace App\Http\Controllers\Admin;
use Intervention\Image\ImageManager;
use Intervention\Image\Encoders\WebpEncoder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Image;
use File;

class UserController extends Controller
{
     public function index(Request $request)
    {
        $data = User::orderBy('id','DESC')->get();
        return view('backEnd.users.index',compact('data'));
    }
    
    public function create()
    {
        
        return view('backEnd.users.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            
        ]);
        // image with intervention 
        $image = $request->file('image');
        $name =  time().'-'.$image->getClientOriginalName();
        $name = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp',$name);
        $name = strtolower(preg_replace('/\s+/', '-', $name));
        $uploadpath = 'public/uploads/users/';
        $imageUrl = $uploadpath.$name; 
        $img=Image::read($image->getRealPath());
        $img->encode('webp', 90);
        $width = 100;
        $height = 100;
        $img->height() > $img->width() ? $width=null : $height=null;
        $img->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($imageUrl);

        $input = $request->all();

        $input['password'] = Hash::make($input['password']);
        $input['image'] = $imageUrl;
        
        $user = User::create($input);

        Toastr::success('Success','Data insert successfully');

        return redirect()->route('users.index');
    }
    
    public function edit($id)
    {
        $edit_data = User::find($id);
        
        return view('backEnd.users.edit',compact('edit_data'));
    }
    
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$request->hidden_id,
            'password' => 'same:confirm-password',
            
        ]);
        
        $update_data = User::find($request->hidden_id);

        // new password
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }




       $image = $request->file('image');
        if ($image) {
            // image with intervention
            $file = $request->file('image');
            $name = time() . $file->getClientOriginalName();
            $uploadPath = 'public/uploads/user/';
            $file->move($uploadPath, $name);
            $fileUrl = $uploadPath . $name;
            $input['image'] = $fileUrl;
            File::delete($update_data->image);
        } else {
            $input['image'] = $update_data->image;
        }


        
        $input['status'] = $request->status?1:0;
        $update_data->update($input);

       
        
        return redirect()->route('users.index');
    }
 
    public function inactive(Request $request)
    {
        $inactive = User::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = User::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {

        $delete_data = User::find($request->hidden_id);
        File::delete($delete_data->image);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
}
