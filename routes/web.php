<?php

/*
***************** Front End Route Are here ***********
*/
Route::group(['namespace' => 'Users'], function(){
    Route::resource('/', 'HomeController');
});


Route::get('/product', function(){
    return view('users.view_product');
});














































/*
***************** Back End Route Are here ***********
*/
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){

});
Route::get('/logout','SuperAdminController@index');
Route::get('/admin-register','SuperAdminController@create');
Route::get('/admin', 'admin\HomeController@index');
Route::get('/dashboard', 'admin\HomeController@show_dashboard');
Route::post('/admin-dashboard', 'admin\HomeController@dashboard')->name('admin-dashboard');

// ********************** Employee Releated Route **************************
Route::get('/all-employee', 'admin\EmployeeController@index');
Route::get('/create-employee', 'admin\EmployeeController@create');


// ********************** Type-Employee Releated Route **************************
Route::get('/type-employee', 'admin\TypeEmployeeController@index');
Route::post('/add-typeEmployee', 'admin\TypeEmployeeController@store');
Route::get('/edit-typeEmployee/{type_id}', 'admin\TypeEmployeeController@edit');
Route::get('/update-typeEmployee/{type_id}', 'admin\TypeEmployeeController@update');
Route::get('/delete-typeEmployee/{type_id}', 'admin\TypeEmployeeController@destroy');

// ********************** Product Releated Route **************************
Route::get('/all-products', 'admin\ProductController@index');

// ********************** Category Releated Route **************************
Route::get('/all-category', 'admin\CategoryController@index');
Route::post('/add-category', 'admin\CategoryController@store');
Route::get('/unactive-category/{cat_id}', 'admin\CategoryController@unactive_category');
Route::get('/active-category/{cat_id}', 'admin\CategoryController@active_category');
Route::get('/edit-category/{cat_id}', 'admin\CategoryController@edit');
Route::get('/update-category/{cat_id}', 'admin\CategoryController@update');
Route::get('/delete-category/{cat_id}', 'admin\CategoryController@destroy');




// ********************** Brand Releated Route **************************
Route::get('/all-brand', 'admin\BrandController@index');
Route::post('/add-brand', 'admin\BrandController@store');
Route::get('/unactive-brand/{brand_id}', 'admin\BrandController@unactive_brand');
Route::get('/active-brand/{brand_id}', 'admin\BrandController@active_brand');
Route::get('/edit-brand/{brand_id}', 'admin\BrandController@edit');
Route::get('/update-brand/{brand_id}', 'admin\BrandController@update');
Route::get('/delete-brand/{brand_id}', 'admin\BrandController@destroy');





// ********************** Unit Releated Route **************************
Route::get('/all-unit', 'admin\UnitController@index');
Route::post('/add-unit', 'admin\UnitController@store');
Route::get('/unactive-unit/{unit_id}', 'admin\UnitController@unactive_unit');
Route::get('/active-unit/{unit_id}', 'admin\UnitController@active_unit');
Route::get('/edit-unit/{unit_id}', 'admin\UnitController@edit');
Route::get('/update-unit/{unit_id}', 'admin\UnitController@update');
Route::get('/delete-unit/{unit_id}', 'admin\UnitController@destroy');


Route::get('/city', 'admin\CityController@index');
Route::get('/province', 'admin\ProvinceController@index');

// ********************** Supplier Releated Route **************************
Route::get('/all-supplier', 'admin\SupplierController@index');
Route::post('/add-supplier', 'admin\SupplierController@store');
Route::get('/edit-supplier/{supplier_id}', 'admin\SupplierController@edit');
Route::get('/unactive-supplier/{supplier_id}', 'admin\SupplierController@unactive_supplier');
Route::get('/unactive-supplier/{supplier_id}', 'admin\SupplierController@unactive_supplier');
Route::get('/active-supplier/{supplier_id}', 'admin\SupplierController@active_supplier');
Route::get('/update-supplier/{supplier_id}', 'admin\SupplierController@update');
Route::get('/delete-supplier/{supplier_id}', 'admin\SupplierController@destroy');





Route::get('/image_*', 'admin\ImagesController@index');
Route::get('/image-submit', 'admin\ImagesController@store');
