<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Banner;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

   public function index(){
    $all_banners = Banner::where('status', 1)->get();
    return view('frontend.index',[
        'all_banners' =>$all_banners,
    ]);
   }
}
