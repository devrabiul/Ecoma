<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Banner;
use App\Models\Admin\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BannerController extends Controller
{
    public function index()
    {
        $all_categories = Category::all();
        $all_banner = Banner::all();
        return view('admin.banners.index',[
            'all_categories'=>$all_categories,
            'all_banner'=>$all_banner,
        ]);
    }

    public function insert(Request $request)
    {
        $request->validate([
            'category_id'=>'required',
            'thumbnail'=>'required',
        ]);

        $extension = $request->thumbnail->getClientOriginalExtension();
        $thumbnail_name = 'thumbnail_'.time().'.'.$extension;

        Image::make($request->thumbnail)->fit(450,250)->save(public_path('uploads/banners/'.$thumbnail_name));

        Banner::insert([
            'category_id'=>$request->category_id,
            'thumbnail'=>$thumbnail_name,
            'created_at'=>Carbon::now(),
        ]);

        return back();
    }

    public function status($banner_id){
        $id = Banner::find($banner_id);

        if($id->status == 1){
            Banner::find($banner_id)->update([
                'status'=>0,
            ]);
        }else{
            Banner::find($banner_id)->update([
                'status'=>1,
            ]);
        }
        return back();
    }
}
