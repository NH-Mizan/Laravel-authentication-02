<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   
    public function index()
    {
        $sliders = Banner::where(['status' => 1, 'category_id' => 1])
            ->select('id', 'image', 'link')
            ->get();

        $sliderrightads = Banner::where(['status' => 1, 'category_id' => 2  ])
            ->select('id', 'image', 'link')
            ->limit(2)
            ->get();

        $homecategory = Category::where(['front_view' => 1, 'status' => 1])
            ->select('id', 'name', 'slug', 'front_view', 'status')
            ->orderBy('id', 'ASC')
            ->get();
        
        
        $brands = Brand::where(['status' => 1])
            ->orderBy('id', 'ASC')
            ->get();


        return view('frontend.layouts.pages.index', compact('sliders', 'sliderrightads', 'homecategory', 'brands'));

        
    }
   
}
