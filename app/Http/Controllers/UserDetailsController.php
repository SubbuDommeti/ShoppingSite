<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserDetailsController extends Controller
{
    public function Adminupdate(Request $request,$id)
    {
    	if($request->isMethod('post'))
		{
			$upd = User::findorFail($id);
		    $this->validate($request, [
		    'name' => 'required|min:3|max:50',
		    'email' => 'email',
		    'password' => 'required|confirmed|min:6',]);
			$upd->name =  $request->name;
		    $upd->email =  $request->email ;
			$upd->password= Hash::make( $request->password);
			$upd->update();
		 return back()->with('Msg','Profile Updated Successfully');
	    }
	    return view('Subpages.Admin.UpdateDetails.AdminupdateDetails'); 


    }
    public function Userupdate(Request $request,$id)
    {
    	  $upd = User::findorFail($id);
		    $this->validate($request, [
		    'name' => 'required|min:3|max:50',
		    'email' => 'email',
		    'password' => 'required|confirmed|min:6',]);
		   
		       
	        $upd->name =  $request->name;
	        $upd->email =  $request->email ;
		    $upd->password= Hash::make( $request->password);
		    $upd->update();

	        return back()->with('Msg','Profile Updated Successfully');


    }
}
