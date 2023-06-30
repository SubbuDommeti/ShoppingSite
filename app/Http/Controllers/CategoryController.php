<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;

class CategoryController extends Controller
{
	public function addCategory(Request $request)
	{
		$category=\App\Models\CategoryModel::with('subcategory')->get();
		if($request->isMethod('post'))
		{
			$category=new CategoryModel();
			$category->catName=$request->catName;
			$category->parent_id=$request->catPr;
			$category->url=$request->catUrl;
			$category->catDesc=$request->catDesc;
			
			

			$category->save();
			return back()->with('Msg','Category Added Successfully');
		}
	
    	return view('Subpages.Admin.Category.addCategory')->with('category',$category);
    	/* $categories = CategoryModel::whereNull('parent_id')
            ->with('childCategories')
            ->orderby('id', 'asc')
            ->get();
        return view('Subpages.Admin.Category.addCategory')->with('categories',$categories);*/
	}
	public function viewCategory(Request $request)
	{
		$category=\App\Models\CategoryModel::all();
    	return view('Subpages.Admin.Category.viewCategory')->with('category',$category);
	}
	public function update(Request $request,$id)
    {
        
    	$category=CategoryModel::findorFail($id);
    	
    	
    	$category->catName=$request->catName;
		$category->url=$request->catUrl;
		$category->catDesc=$request->catDesc;
		

		$category->update();
		return back()->with('Msg','Category Updated Successfully');
    	
	}
	public function delete(Request $request,$id)
    {
    	$product=CategoryModel::findorFail($id);
    	$product->delete();
    	return back()->with('Msg',"Category Deleted Successfully");
    }
    
}
