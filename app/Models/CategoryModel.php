<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
	 protected $table='categories';
	 public function subcategory()
	 {
	 	return $this->hasMany('App\Models\CategoryModel','parent_id');
	 }

	/* public function categories()
    {
        return $this->hasMany('App\Models\CategoryModel', 'parent_id');
    }
 
    // This is method where we implement recursive relationship
    public function childCategories()
    {
        return $this->hasMany('App\Models\CategoryModel', 'parent_id')->with('categories');
    }*/
}
