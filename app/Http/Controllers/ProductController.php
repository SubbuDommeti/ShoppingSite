<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use Illuminate\Support\Facades\Input;
use Image;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
    	if($request->ismethod('post'))
    	{
    		$product=new ProductModel();
            $product->catId=$request->catId;
    		$product->prdName=$request->prdName;
    		$product->prdCode=$request->prgCode;
    		$product->prdColor=$request->prdColor;
    		$product->prdPrice=$request->prdPrice;
    		if(!empty($request->prdDescript))
    		{
    			$product->prdDescript=$request->prdDescript;
    		}
    		else
    		{
				$product->prdDescript='';
			}
	
    		
    		
    		//Upload Image

    		if($request->hasFile('image'))
    		{
    			$Image=Input::file('image');
    			if($Image->isValid())
    			{
    				$extension=$Image->getClientOriginalExtension();
	    			$filename=rand(111,999).'.'.$extension;
	    			$img_Path='public/Uploads/Products/'.$filename;
	    			Image::make($Image)->resize(500,500)->save($img_Path);
	    			$product->prdPic=$filename;
    			}
    		}
    		$product->save();
    		return redirect('AddProduct')->with('Msg','Product Uploaded Successfully');
    		
    	}
        return view('Subpages.Admin.Products.addproducts');

    }
    public function viewPoduct(Request $request)
    {
    	$temp=array('categories.id as catId','categories.parent_id as parent_id','categories.catName as catName','categories.url as url','categories.catDesc as catDesc','categories.status as catStatus','products.id as id','products.prdName  as prdName','products.prdColor as prdColor','products.prdCode  as prdCode','products.prdDescript as prdDescript','products.prdPrice as prdPrice','products.prdPic as prdPic','products.status as status','products.created_at as created_at','products.updated_at as updated_at');
        $product=ProductModel::select($temp)->leftjoin('categories','categories.id','=','products.catId')->get(); 
    	return view('Subpages.Admin.Products.viewproducts')->with('product',$product);
    }
    public function update(Request $request,$id)
    {
        
    	$product=ProductModel::findorFail($id);
        $product->catId=$request->catId;
    	$product->prdName=$request->prdName;
    		$product->prdCode=$request->prdCode;
    		$product->prdColor=$request->prdColor;
    		$product->prdPrice=$request->prdPrice;
    		if(!empty($request->prdDescript))
    		{
    			$product->prdDescript=$request->prdDescript;
    		}
    		else
    		{
				$product->prdDescript='';
			}
			//Upload Image

    		if($request->hasFile('image'))
    		{
    			$Image=Input::file('image');
    			if($Image->isValid())
    			{
    				$extension=$Image->getClientOriginalExtension();
	    			$filename=rand(111,999).'.'.$extension;
	    			$img_Path='public/Uploads/Products/'.$filename;
	    			Image::make($Image)->resize(500,500)->save($img_Path);
	    			$product->prdPic=$filename;
    			}
    		}
    		$product->update();
    		return redirect('ViewProduct')->with('Msg','Product Updated Successfully');
    	
	}
	public function delete(Request $request,$id)
    {
    	$product=ProductModel::findorFail($id);
    	$product->delete();
    	return back()->with('Msg',"Product Deleted Successfully");
    }
	
    
}
