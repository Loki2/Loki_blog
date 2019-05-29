<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\admin_model\category;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
Session_start();


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $all_product_info=DB::table('products')
                ->join('categories', 'products.cat_id','=', 'categories.cat_id')
                ->join('brands', 'products.brand_id','=', 'brands.brand_id')
                ->get();
        // echo "<pre>";
        // print_r($all_product_info);
        // echo "</pre>";
        $manage_product=view('admin.pages.product.product')
        ->with('all_product_info', $all_product_info );
        return view('admin.index')
            ->with('admin.all_product', $manage_product);
        return view('admin.pages.product.product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array();
        $data['product_bar']=$request->product_bar;
        $data['cat_id']=$request->cat_id;
        $data['brand_id']=$request->brand_id;
        $data['product_bar']=$request->product_bar;
        $data['product_name']=$request->product_name;
        $data['product_short_desc']=$request->product_short_desc;
        $data['product_long_desc']=$request->product_long_desc;
        $data['product_size']=$request->product_size;
        $data['product_color']=$request->product_color;
        $data['unit_id']=$request->unit_id;
        $data['product_price']=$request->product_price;
        $data['publication_status']=$request->publication_status;


        $image = $request->file('product_image');
        if($image){
            $image_name = str_random(20);
            $text=strtolower( $image->getClientOriginalExtension());
            $image_full_name = $image_name.'_'.$text;
            $upload_patch='images/';
            $image_url = $upload_patch.$image_full_name;
            $success = $image -> move($upload_patch,$image_full_name);
            if($success){
                  $data['product_image']=$image_url;
                    DB::table('products')->insert($data);
                    Session::put('message','Product Added successfuly...!');
                    return Redirect::to('/all-products');
            }
         }
        $data['product_image']='';
                DB::table('products')->insert($data);
                Session::put('message','Product added without image successfuly...!');
                return Redirect::to('/all-products');
        // return view('admin/pages/product/create_image');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($product_id)
    {
        $product_info = DB::table('products')
            ->where('product_id', $product_id)
            ->first(); 
            $product_info=view('admin.pages.product.update_product')
            ->with('product_info', $product_info );
            return view('admin.index')
                ->with('admin.pages.product.update_product', $product_info);
        return view('admin.pages.product.update_product');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_id)
    {
        $data=array();
        $data['product_bar']=$request->product_bar;
        $data['cat_id']=$request->cat_id;
        $data['brand_id']=$request->brand_id;
        $data['product_bar']=$request->product_bar;
        $data['product_name']=$request->product_name;
        $data['product_short_desc']=$request->product_short_desc;
        $data['product_long_desc']=$request->product_long_desc;
        $data['product_size']=$request->product_size;
        $data['product_color']=$request->product_color;
        $data['unit_id']=$request->unit_id;
        $data['product_price']=$request->product_price;
        $data['publication_status']=$request->publication_status;

        DB::table('products')
         ->where('product_id', $product_id)
         ->update($data); 

         Session::get('message','ສິນຄ້າໄດ້ແກ້ໄຂສຳເລັດແລ້ວ');
         return Redirect::to('/all-product');
        // return view('admin.pages.product.update_product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        DB::table('products')
        ->where('product_id', $product_id)
        ->delete();
        Session::get('message', 'ສິນຄ້າຖຶກລົບແລ້ວ !');
        return Redirect:: to('/all-products');
    }
    public function unactive_product($product_id)
    {
         DB::table('products')
            ->where('product_id', $product_id)
            ->update(['publication_status' => 0] );
            Session::put('message','ປະເພດສິນຄ້າປິດໃຊ້ງານສຳເລັດແລ້ວ...!');
            return Redirect::to('/all-products');
    }
    public function active_product($product_id)
    {
        DB::table('products')
            ->where('product_id', $product_id)
            ->update(['publication_status' => 1] );
            Session::put('message','ປະເພດສິນຄ້າເປິດໃຊ້ງານລຳເລັດແລ້ວ...!');
            return Redirect::to('/all-products');
    }
}
