<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Childcategory;
use App\Models\Subcategory;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use File;
use Illuminate\Http\Request;

class ChildcategoryController extends Controller
{
      public function index(Request $request)
    {
        $data = Childcategory::orderBy('id','DESC')->with('subcategory')->get();
        return view('backEnd.childcategory.index', compact('data'));
    }
    public function create()
    {
        $categories = Category::where('status', 1)->select('id', 'name')->get();
        return view('backEnd.childcategory.create', compact('categories'));
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'subcategory_id' => 'required',
            'name' => 'required',
            'status' => 'required',
        ]);
        
        
        $input = $request->all();
        $input['slug'] = strtolower(preg_replace('/\s+/', '-', $request->name));
        $input['slug'] = str_replace('/', '', $input['slug']);
        
        Childcategory::create($input);
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('childcategories.index');
    }
    
    public function edit($id)
    {
        $edit_data = Childcategory::find($id);
        $categories = Subcategory::select('id','name')->get();
        return view('backEnd.childcategory.edit',compact('edit_data','categories'));
    }
    
    public function update(Request $request)
    {
        $this->validate($request, [
            'subcategory_id' => 'required',
            'name' => 'required',
            'status' => 'required',
        ]);
        $update_data = Childcategory::find($request->id);
        $input = $request->all();
        
        $input['slug'] = strtolower(preg_replace('/\s+/', '-', $request->name));
        $input['slug'] = str_replace('/', '', $input['slug']);
        $input['status'] = $request->status?1:0;
        
        $update_data->update($input);

        Toastr::success('Success','Data update successfully');
        return redirect()->route('childcategories.index');
    }
 
    public function inactive(Request $request)
    {
        $inactive = Childcategory::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = Childcategory::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {

        $childcategory = Childcategory::find($request->hidden_id);
        foreach ($childcategory->products ?? [] as $product) {
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
        File::delete($childcategory->image);
        $childcategory->delete();

        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }         
}
