<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ColorController extends Controller
{
     public function index(Request $request)
    {
        $show_data = Color::orderBy('name','ASC')->get();
        return view('backEnd.color.index',compact('show_data'));
    }
    public function create()
    {
        return view('backEnd.color.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'status' => 'required',
        ]);
        
        $input = $request->all();
        
        Color::create($input);        
        
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('colors.index');
    }
    
    public function edit($id)
    {
        $edit_data = Color::find($id);
        return view('backEnd.color.edit',compact('edit_data'));
    }
    
    public function update(Request $request)
    { 
        $this->validate($request, [
            'status' => 'required',
        ]);
        // image one
        $update_data = Color::find($request->id);
        $input = $request->all();
        $update_data->update($input);

        Toastr::success('Success','Data update successfully');
        return redirect()->route('colors.index');
    }
 
    public function inactive(Request $request)
    {
        $inactive = Color::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = Color::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {       
        $delete_data = Color::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
}
