<?php

use Illuminate\Support\Facades\Auth;

//socialite

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');


// Start Admin Routes
Route::get('locale/{lang}', function($lang){
    Session::put('locale' , $lang);
    return redirect()->back();
});

Route::get('/lang/{locale}', ['as' => 'lang', 'uses' => 'LanguageController@changeLanguage']);


Route::group(['namespace' => 'Admin' , 'prefix' => 'admin' , 'middleware' => 'auth_login'] , function (){

    Route::get('dashboard' , 'homeController@index');

    // Users Routes
    Route::get('user' , 'AllUserController@index');
    Route::get('/add_user' , 'AllUserController@create');
    Route::post('/add_user' , 'AllUserController@store');
    Route::get('{id}/edit_user' , 'AllUserController@edit');
    Route::post('edit_user/{id}' , 'AllUserController@update');
    Route::get('{id}/delete_user' , 'AllUserController@destroy');

    // About Us Routes
    Route::get('about_us' , 'AboutController@index');
    Route::get('/add_about_us' , 'AboutController@create');
    Route::post('/add_about_us' , 'AboutController@store');
    Route::get('{id}/edit_about' , 'AboutController@edit');
    Route::post('edit_about/{id}' , 'AboutController@update');
    Route::get('{id}/delete_about' , 'AboutController@destroy');


    //  categories routes
    Route::get('categories' , 'CategoryController@index');
    Route::get('/add_category' , 'CategoryController@create');
    Route::post('/add_category' , 'CategoryController@store');
    Route::get('{id}/edit_category' , 'CategoryController@edit');
    Route::post('edit_category/{id}' , 'CategoryController@update');
    Route::get('{id}/delete_category' , 'CategoryController@destroy');



  //  Sub Categories routes
    Route::get('subs_categories' , 'CategoryController@indexSubsCategory');
    Route::get('/add_subs_category' , 'CategoryController@createSubsCategory');
    Route::post('/add_subs_category' , 'CategoryController@addSubsCategory');
    Route::get('{id}/edit_subs_category' , 'CategoryController@editSubsCategory');
    Route::post('edit_subs_category/{id}' , 'CategoryController@updateSubsCategory');
    Route::post('edit_subs_categoryDescription_2/{id}' , 'CategoryController@updateSubsCategoryDescription_2');
    Route::post('edit_subs_categoryDetails/{id}' , 'CategoryController@updateSubsCategoryDetails');
    Route::get('{id}/delete_subs_category' , 'CategoryController@destroy');
    Route::get('{id}/delete_rate' , 'CategoryController@destroyRate');





    // Products Routes
    Route::get('products' , 'ProductsController@index');
   Route::get('/add_product' , 'ProductsController@create');
   Route::post('/add_product' , 'ProductsController@store');
   Route::get('{id}/edit_product' , 'ProductsController@edit');
   Route::post('edit_product/{id}' , 'ProductsController@update');
   Route::get('{id}/delete_product' , 'ProductsController@destroy');


    //  categories Images routes
    Route::get('categoriesImages/{id}' , 'CategoryController@indexSubsImagesCategory');
    Route::get('/add_categoryImages/{id}' , 'CategoryController@createSubsImagesCategory');
    Route::post('/add_categoryImages/{id}' , 'CategoryController@addSubsImagesCategory');
    Route::get('{id}/edit_categoryImages' , 'CategoryController@editSubsImagesCategory');
    Route::post('edit_categoryImages/{id}' , 'CategoryController@updateSubsImagesCategory');
    Route::get('{id}/delete_categoryImages' , 'CategoryController@destroyImages');


    Route::get('categoryProfileImage' , 'ProfileCategoriesController@indexCategoryImage');
    Route::get('/add_categoryProfileImage' , 'ProfileCategoriesController@createCategoryImage');
    Route::post('/add_categoryProfileImage' , 'ProfileCategoriesController@storeCategoryImage');
    Route::get('{id}/edit_categoryProfileImage' , 'ProfileCategoriesController@editCategoryImage');
    Route::post('edit_categoryProfileImage/{id}' , 'ProfileCategoriesController@updateCategoryImage');
    Route::get('{id}/delete_categoryProfileImage' , 'ProfileCategoriesController@destroyCategoryImage');



    // Services Routes
    Route::get('services' , 'ServiceController@index');
    Route::get('/add_services' , 'ServiceController@create');
    Route::post('/add_services' , 'ServiceController@store');
    Route::get('{id}/edit_services' , 'ServiceController@edit');
    Route::post('edit_services/{id}' , 'ServiceController@update');
    Route::get('{id}/delete_services' , 'ServiceController@destroy');

   
    // Countries Routes
    Route::get('country' , 'CountriesController@index');
    Route::get('/add_country' , 'CountriesController@create');
    Route::post('/add_country' , 'CountriesController@store');
    Route::get('{id}/edit_country' , 'CountriesController@edit');
    Route::post('edit_country/{id}' , 'CountriesController@update');
    Route::get('{id}/delete_country' , 'CountriesController@destroy');



    // Slider Routes
    Route::get('slider' , 'SliderController@index');
    Route::get('/add_slider' , 'SliderController@create');
    Route::post('/add_slider' , 'SliderController@store');
    Route::get('{id}/edit_slider' , 'SliderController@edit');
    Route::post('edit_slider/{id}' , 'SliderController@update');
    Route::get('{id}/delete_slider' , 'SliderController@destroy');


    //   Advertisements Routes
    Route::get('advertisement' , 'AdvertisementsController@index');
    Route::get('/add_advertisement' , 'AdvertisementsController@create');
    Route::post('/add_advertisement' , 'AdvertisementsController@store');
    Route::get('{id}/edit_advertisement' , 'AdvertisementsController@edit');
    Route::post('edit_advertisement/{id}' , 'AdvertisementsController@update');
    Route::get('{id}/delete_advertisement' , 'AdvertisementsController@destroy');



      // Portfolio Routes
    Route::get('portfolio' , 'PortfolioController@index');
    Route::get('/add_portfolio' , 'PortfolioController@create');
    Route::post('/add_portfolio' , 'PortfolioController@store');
    Route::get('{id}/edit_portfolio' , 'PortfolioController@edit');
    Route::post('edit_portfolio/{id}' , 'PortfolioController@update');
    Route::get('{id}/delete_portfolio' , 'PortfolioController@destroy');

    // Setting Routes
    Route::get('setting' , 'SettingController@index');
    Route::get('/add_setting' , 'SettingController@create');
    Route::post('/add_setting' , 'SettingController@store');
    Route::get('{id}/edit_setting' , 'SettingController@edit');
    Route::post('edit_setting/{id}' , 'SettingController@update');
    Route::get('{id}/delete_setting' , 'SettingController@destroy');

    // Blog Routes
    Route::get('blog' , 'BlogController@index');
    Route::get('/add_blog' , 'BlogController@create');
    Route::post('/add_blog' , 'BlogController@store');
    Route::get('{id}/edit_blog' , 'BlogController@edit');
    Route::post('edit_blog/{id}' , 'BlogController@update');
    Route::get('{id}/delete_blog' , 'BlogController@destroy');


    // Meta Tags Routes
    Route::get('meta_tags' , 'MetaTags@index');
    Route::get('/add_meta_tags' , 'MetaTags@create');
    Route::post('/add_meta_tags' , 'MetaTags@store');
    Route::get('{id}/edit_meta_tags' , 'MetaTags@edit');
    Route::post('edit_meta_tags/{id}' , 'MetaTags@update');
    Route::get('{id}/delete_meta_tags' , 'MetaTags@destroy');

   

    // Messages Routes
    Route::get('message' , 'ContactFormController@index');
    Route::post('message' , 'ContactFormController@store');
    Route::get('show_message/{id}' , 'ContactFormController@show');
    Route::get('{id}/delete_message' , 'ContactFormController@destroy');

    Route::post('login' , 'AuthorizedController@check_login');

    Route::get('emails' , 'EmailFollowController@index');

});
    Route::get('admin/login', 'Admin\AuthorizedController@login');
    Route::post('admin/login_post', 'Admin\AuthorizedController@login_post');
    //Route::get('not_authorized', 'Admin\AuthorizedController@not_authorized');
    Route::get('/logout', 'AuthController@getLogout')->name('logout');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

// Payment System
//Route::get('paywithpaypal', array('as' => 'addmoney.paywithpaypal','uses' => 'PaymentController@payWithPaypal',));
Route::post('paypal', array('as' => 'addmoney.paypal','uses' => 'PaymentController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'payment.status','uses' => 'PaymentController@getPaymentStatus',));


// Website Routes

Route::group(['namespace' => 'Site'] , function () {
    Route::get('/', 'SiteController@index');
   
    Route::get('contactUs', 'SiteController@contactUs');
    Route::post('storeContactUs', 'SiteController@storeContactUs');
    Route::post('email/store', 'SiteController@emailStore');
    Route::get('products', 'SiteController@allProducts');
    Route::get('productProfile/{id}', 'SiteController@productProfile');
    Route::get('buyProduct', 'SiteController@buyProduct');
    Route::post('storeClientsOrders', 'SiteController@storeClientsOrders');
    Route::get('usePolicy', 'SiteController@usePolicy');
    
    Route::get('cartInDropdown', 'SiteController@cartInDropdown');
    Route::get('getAjexProducts', 'SiteController@getAjexProducts');
    
    //services
    Route::get('serviceProfile/{id}', 'SiteController@serviceProfile');

    Route::get('aboutUs', 'SiteController@aboutUs');

    //checkout
    Route::get('checkout', 'SiteController@checkout');
    Route::post('sendOrder', 'SiteController@sendOrder');


 
});

// Cart routes

Route::post('addToCart/{id}', 'Admin\ProductsController@addToCart');
Route::get('send_order', 'Admin\ProductsController@send_order');
Route::get('admin/allOrders', 'Admin\ProductsController@allOrders');
Route::post('admin/addToBill', 'Admin\ProductsController@addToBill');


Route::patch('update-cart', 'Admin\ProductsController@updateCart');

Route::delete('remove-from-cart', 'Admin\ProductsController@removeFromCart');



Route::post('admin/email_follow' , 'Admin\EmailFollowController@store');
