<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Image;
use Illuminate\Http\Request;
use App\Models\BannerModel;

class BannerController extends Controller
{
    public function addBanner(Request $request)
    {
        if($request->ismethod('post'))
    	{
    		$banner=new BannerModel();
            $banner->ltext1=$request->ltext1;
    		$banner->ltext2=$request->ltext2;
    		$banner->ltext1Appear=$request->ltext1Appear;
    		$banner->ltext2Appear=$request->ltext2Appear;
            $banner->btnAppear=$request->btnAppear;
    		$banner->link=$request->link;
    		
    		
    		
    		//Upload Image

    		if($request->hasFile('image'))
    		{
    			$Image=Input::file('image');
    			if($Image->isValid())
    			{
    				$extension=$Image->getClientOriginalExtension();
	    			$filename=rand(111,999).'.'.$extension;
	    			$img_Path='public/Uploads/Banners/'.$filename;
	    			Image::make($Image)->resize(1920,930)->save($img_Path);
	    			$banner->image=$filename;
    			}
    		}
    		$banner->save();
    		return redirect('AddBanner')->with('Msg','Banner Uploaded Successfully');
    		
    	}
        return view('Subpages.Admin.Banner.addbanner');
    }
    public function viewBanner(Request $request)
    {
        $Banner=BannerModel::latest('updated_at')->get();
        return view('Subpages.Admin.Banner.viewbanner')->with('Banner',$Banner);
    }
    public function update(Request $request,$id)
    {
        
        $banner=BannerModel::findorFail($id);
        $banner->ltext1=$request->ltext1;
        $banner->ltext2=$request->ltext2;
        $banner->ltext1Appear=$request->ltext1Appear;
        $banner->ltext2Appear=$request->ltext2Appear;
        $banner->link=$request->link;
            
            //Upload Image

            if($request->hasFile('image'))
            {
                $Image=Input::file('image');
                if($Image->isValid())
                {
                    $extension=$Image->getClientOriginalExtension();
                    $filename=rand(111,999).'.'.$extension;
                    /*$img_Path='public/Uploads/Banners/'.$filename;*/ 
                    $img_Path='public/Uploads/Banners/'.$filename;
                    Image::make($Image)->resize(1920,930)->save($img_Path);
                    $banner->image=$filename;
                }
            }
           $banner->save();
            return redirect('ViewBanner')->with('Msg','Banner Updated Successfully');
        
    }
    public function delete(Request $request,$id)
    {
        $product=BannerModel::findorFail($id);
        $product->delete();
        return back()->with('Msg',"Banner Deleted Successfully");
    }
}
