<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/
//  define('PAGINATION_COUNT',10);
 Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');

############################   Begin Languages Route  ###################################
Route::group(['prefix' => 'languages'], function () {
     Route::get('/','LanguagesController@index') -> name('admin.languages');
     Route::get('create','LanguagesController@create') -> name('admin.languages.create');
     Route::post('store','LanguagesController@store') -> name('admin.languages.store');

     Route::get('edit/{id}','LanguagesController@edit') -> name('admin.languages.edit');
     Route::post('update/{id}','LanguagesController@update') -> name('admin.languages.update');

     Route::get('delete/{id}','LanguagesController@destroy') -> name('admin.languages.delete');
}); 
############################   END Languages Route  ###################################

  ################################## categories routes ######################################
  Route::group(['prefix' => 'main_categories'], function () {
    Route::get('/', 'MainCategoriesController@index')->name('admin.maincategories');
    Route::get('create', 'MainCategoriesController@create')->name('admin.maincategories.create');
    Route::post('store', 'MainCategoriesController@store')->name('admin.maincategories.store');
    Route::get('edit/{id}', 'MainCategoriesController@edit')->name('admin.maincategories.edit');
    Route::post('update/{id}', 'MainCategoriesController@update')->name('admin.maincategories.update');
    Route::get('delete/{id}', 'MainCategoriesController@destroy')->name('admin.maincategories.delete');
});

################################## end categories    #######################################


 ######################### Begin Main Categoris Routes ########################
//  Route::group(['prefix' => 'main_categories'], function () {
//      Route::get('/','MainCategoriesController@index') -> name('admin.maincategories');
//      Route::get('create','MainCategoriesController@create') -> name('admin.maincategories.create');
//      Route::post('store','MainCategoriesController@store') -> name('admin.maincategories.store');
//      Route::get('edit/{id}','MainCategoriesController@edit') -> name('admin.maincategories.edit');
//      Route::post('update/{id}','MainCategoriesController@update') -> name('admin.maincategories.update');
//      Route::get('delete/{id}','MainCategoriesController@destroy') -> name('admin.maincategories.delete');
//      Route::get('changeStatus/{id}','MainCategoriesController@changeStatus') -> name('admin.maincategories.status');

//  });
 ######################### End  Main Categoris Routes  ########################

  ######################### Begin Sub Categoris Routes ########################
  Route::group(['prefix' => 'sub_categories'], function () {
     Route::get('/','SubCategoriesController@index') -> name('admin.subcategories');
     Route::get('create','SubCategoriesController@create') -> name('admin.subcategories.create');
     Route::post('store','SubCategoriesController@store') -> name('admin.subcategories.store');
     Route::get('edit/{id}','SubCategoriesController@edit') -> name('admin.subcategories.edit');
     Route::post('update/{id}','SubCategoriesController@update') -> name('admin.subcategories.update');
     Route::get('delete/{id}','SubCategoriesController@destroy') -> name('admin.subcategories.delete');
     Route::get('changeStatus/{id}','SubCategoriesController@changeStatus') -> name('admin.subcategories.status');

 });
 ######################### End  Sub Categoris Routes  ########################

   ################################## brands routes ######################################
   Route::group(['prefix' => 'brands'], function () {
    Route::get('/', 'BrandsController@index')->name('admin.brands');
    Route::get('create', 'BrandsController@create')->name('admin.brands.create');
    Route::post('store', 'BrandsController@store')->name('admin.brands.store');
    Route::get('edit/{id}', 'BrandsController@edit')->name('admin.brands.edit');
    Route::post('update/{id}', 'BrandsController@update')->name('admin.brands.update');
    Route::get('delete/{id}', 'BrandsController@destroy')->name('admin.brands.delete');
});
################################## end brands    #######################################


 ######################### Begin vendors Routes ########################
 Route::group(['prefix' => 'vendors'], function () {
     Route::get('/','VendorsController@index') -> name('admin.vendors');
     Route::get('create','VendorsController@create') -> name('admin.vendors.create');
     Route::post('store','VendorsController@store') -> name('admin.vendors.store');
     Route::get('edit/{id}','VendorsController@edit') -> name('admin.vendors.edit');
     Route::post('update/{id}','VendorsController@update') -> name('admin.vendors.update');
     Route::get('delete/{id}','VendorsController@destroy') -> name('admin.vendors.delete');
     Route::get('changeStatus/{id}','VendorsController@changeStatus') -> name('admin.vendors.status');
 });
 ######################### End  vendors Routes  ########################

 ################################## Tags routes ######################################
 Route::group(['prefix' => 'tags' ], function () {
    Route::get('/', 'TagsController@index')->name('admin.tags');
    Route::get('create', 'TagsController@create')->name('admin.tags.create');
    Route::post('store', 'TagsController@store')->name('admin.tags.store');
    Route::get('edit/{id}', 'TagsController@edit')->name('admin.tags.edit');
    Route::post('update/{id}', 'TagsController@update')->name('admin.tags.update');
    Route::get('delete/{id}', 'TagsController@destroy')->name('admin.tags.delete');
});
################################## end brands    #######################################

################################## products routes ######################################
Route::group(['prefix' => 'products'], function () {
    Route::get('/', 'ProductsController@index')->name('admin.products');
    Route::get('general-information', 'ProductsController@create')->name('admin.products.general.create');
    Route::post('store-general-information', 'ProductsController@store')->name('admin.products.general.store');

    Route::get('price/{id}', 'ProductsController@getPrice')->name('admin.products.price');
    Route::post('price', 'ProductsController@saveProductPrice')->name('admin.products.price.store');

    Route::get('stock/{id}', 'ProductsController@getStock')->name('admin.products.stock');
    Route::post('stock', 'ProductsController@saveProductStock')->name('admin.products.stock.store');

    Route::get('images/{id}', 'ProductsController@addImages')->name('admin.products.images');
    Route::post('images', 'ProductsController@saveProductImages')->name('admin.products.images.store');
    Route::post('images/db', 'ProductsController@saveProductImagesDB')->name('admin.products.images.store.db');
});
################################## end brands    #######################################

################################## attrributes routes ######################################
Route::group(['prefix' => 'attributes'], function () {
    Route::get('/', 'AttributesController@index')->name('admin.attributes');
    Route::get('create', 'AttributesController@create')->name('admin.attributes.create');
    Route::post('store', 'AttributesController@store')->name('admin.attributes.store');
    Route::get('delete/{id}', 'AttributesController@destroy')->name('admin.attributes.delete');
    Route::get('edit/{id}', 'AttributesController@edit')->name('admin.attributes.edit');
    Route::post('update/{id}', 'AttributesController@update')->name('admin.attributes.update');
});
################################## end attributes    #######################################

################################## brands options ######################################
Route::group(['prefix' => 'options'], function () {
    Route::get('/', 'OptionsController@index')->name('admin.options');
    Route::get('create', 'OptionsController@create')->name('admin.options.create');
    Route::post('store', 'OptionsController@store')->name('admin.options.store');
    //Route::get('delete/{id}','OptionsController@destroy') -> name('admin.options.delete');
    Route::get('edit/{id}', 'OptionsController@edit')->name('admin.options.edit');
    Route::post('update/{id}', 'OptionsController@update')->name('admin.options.update');
});
################################## end options    #######################################


################################## sliders ######################################
Route::group(['prefix' => 'sliders'], function () {
    Route::get('/', 'SliderController@addImages')->name('admin.sliders.create');
    Route::post('images', 'SliderController@saveSliderImages')->name('admin.sliders.images.store');
    Route::post('images/db', 'SliderController@saveSliderImagesDB')->name('admin.sliders.images.store.db');

});
################################## end sliders    #######################################

################################## roles ######################################
Route::group(['prefix' => 'roles'], function () {
    Route::get('/', 'RolesController@index')->name('admin.roles.index');
    Route::get('create', 'RolesController@create')->name('admin.roles.create');
    Route::post('store', 'RolesController@saveRole')->name('admin.roles.store');
    Route::get('/edit/{id}', 'RolesController@edit') ->name('admin.roles.edit') ;
    Route::post('update/{id}', 'RolesController@update')->name('admin.roles.update');
 });
################################## end roles ######################################
});

Route::group(['namespace' => 'admin', 'middleware' => 'guest:admin'], function () {
    Route::get('login', 'LoginController@getLogin')->name('get.admin.login');
    Route::post('login', 'LoginController@login')->name('admin.login');
});

// Route::get('subcateory',function (){

//     $mainCategory = \App\Models\MainCategory::find(3);

//  return       $mainCategory -> subCategories;
// });

// Route::get('maincategory',function (){

//   $subcategory = \App\Models\SubCategory::find(1);

//   return $subcategory -> mainCategory;


// });




