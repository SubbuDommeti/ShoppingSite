<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Route;





Route::get('/','IndexController@index');
Route::get('test',function()
{
    return App\Models\CategoryModel::with('categories')->where('parent_id','0')->get();
});
Route::get('about', function ()
{
    return view('Cart.about');
});
Route::get('blog-detail', function () {
    return view('Cart.blog-detail');
});
Route::get('blog', function () {
    return view('Cart.blog');
});
Route::get('contact', function () {
    return view('Cart.contact');
});
Route::get('home-02', function () {
    return view('Cart.home-02');
});
Route::get('home-03', function () {
    return view('home-03');
});
Route::get('product-detail', function () {
    return view('Cart.product-detail');
});
Route::get('product','IndexController@products');
Route::get('shoping-cart', function () {
    return view('Cart.shoping-cart');
});
Route::get('Update', function () { return view('Subpages.UserUpdateDetails.UserupdateDetails'); });
Route::put('Userupdate/{id}','UserDetailsController@Userupdate');




Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

/*Route::group(['middleware'=>(['auth','Admin']||['auth','customer'])],function()*/
Route::group(['middleware'=>['auth','Admin']],function()
{
            Route::get('dashboard', function () 
            {
                 return view('dashboard');
            });
            Route::get('users', function () 
            {
                return view('users');
            });

            //Products
            Route::match(['get','post'],'AddProduct','ProductController@addProduct');
            Route::get('ViewProduct','ProductController@viewPoduct');
            Route::post('UpdateProduct/{id}','ProductController@update');
            Route::get('DeleteProduct/{id}','ProductController@delete');

            //Category
            Route::match(['get','post'],'AddCategory','CategoryController@addCategory');
            Route::get('ViewCategory','CategoryController@viewCategory');
            Route::post('UpdateCategory/{id}','CategoryController@update');
            Route::get('DeleteCategory/{id}','CategoryController@delete');

            //Banners
             Route::match(['get','post'],'AddBanner','BannerController@addBanner');
             Route::get('ViewBanner','BannerController@viewBanner');
             Route::post('UpdateBanner/{id}','BannerController@update');
            Route::get('DeleteBanner/{id}','BannerController@delete');

            //Update Profile
            Route::get('AdminUpdateProfile', function () { return view('Subpages.Admin.UpdateDetails.AdminupdateDetails'); });
            Route::post('AdminUpdateProfile/{id}','UserDetailsController@Adminupdate');
         

            
            
            
            
            
               
            

                  
           
});

?>
