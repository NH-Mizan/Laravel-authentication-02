<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
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
        return view('frontend.layouts.pages.index', compact('sliders', 'sliderrightads'));
    }
   
}
