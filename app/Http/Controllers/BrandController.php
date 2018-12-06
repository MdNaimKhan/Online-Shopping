<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function addBrand(){
        return view('admin.brand.add-brand');
    }
    public function saveBrandInfo(Request $request){
       //return $request->all();
        $this->validate($request,[
            'brand_name' => 'required | alpha | max:10 |min: 2',
            'brand_description' => 'required'
        ]);
        $brand = new Brand();
        $brand->brand_name= $request->brand_name;
        $brand->brand_description= $request->brand_description;
        $brand->publication_status= $request->publication_status;
        $brand->save();

//        DB::table('brands')->insert([
//            'brand_name'=>$request->brand_name,
//            'brand_description'=>$request->brand_description,
//            'publication_status'=>$request->publication_status
//        ]);

//        Brand::create($request->all());

        return redirect('add-brand')->with('message', 'Brand Info Saved Successfully');


    }
}
