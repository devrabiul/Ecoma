<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Flasher\Notyf\Prime\NotyfFactory;

use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function index()
    {
        $all_categories = Category::all();
        return view('admin.products.category',[
            'all_categories'=>$all_categories,
        ]);
    }

    function insert(Request $request, NotyfFactory $flasher){

        $request->validate([
            'category_name'=>'required|unique:categories',
            'category_image'=>'required|unique:categories,category_slug',
        ]);

        $new_id = Category::insertGetId([
            'category_name'=>$request->category_name,
            'category_slug'=>strtolower(str_replace(' ', '-', $request->category_name)),
            'created_at'=>Carbon::now(),
        ]);

        $extension = $request->category_image->getClientOriginalExtension();
        $image_name = $new_id.'_Category_thumbnail.'.$extension;
        Image::make($request->category_image)->fit(400)->save(public_path('uploads/category/'.$image_name));

        Category::find($new_id)->update([
            'category_image'=>$image_name,
        ]);

        $flasher->addSuccess('Category insert successfully!');
        return back();
    }

    function edit($slug){



    }
}
