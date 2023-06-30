<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerModel;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{
    public function index(Request $request)
    {
    	$banner=BannerModel::where('status','1')->orderby('updated_at','desc')->get();
    	$temp=array('categories.id as catId','categories.parent_id as parent_id','categories.catName as catName','categories.url as url','categories.catDesc as catDesc','categories.status as catStatus','products.id as id','products.prdName  as prdName','products.prdColor as prdColor','products.prdDescript as prdDescript','products.prdPrice as prdPrice','products.prdPic as prdPic','products.status as status','products.created_at as created_at','products.updated_at as updated_at');
    	$product=ProductModel::select($temp)->leftjoin('categories','categories.id','=','products.catId')->get();  
    	$category=CategoryModel::where('status','1')->where('parent_id','0')->with('subcategory')->get();   
        return view('index')->with(compact('banner','product','category'));
    }
    public function products(Request $request)
    {
    	$banner=BannerModel::where('status','1')->orderby('updated_at','desc')->get();
    	$temp=array('categories.id as catId','categories.parent_id as parent_id','categories.catName as catName','categories.url as url','categories.catDesc as catDesc','categories.status as catStatus','products.id as id','products.prdName  as prdName','products.prdColor as prdColor','products.prdDescript as prdDescript','products.prdPrice as prdPrice','products.prdPic as prdPic','products.status as status','products.created_at as created_at','products.updated_at as updated_at');
    	$product=ProductModel::select($temp)->leftjoin('categories','categories.id','=','products.catId')->get();  
    	$category=CategoryModel::where('status','1')->where('parent_id','0')->with('subcategory')->get();   
        return view('Cart.product')->with(compact('banner','product','category'));
    }

   
}
