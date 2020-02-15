<?php

Route::get('/', 'PagesController@home');
Route::get('category/{cat_name}', 'PagesController@ShowCat');
Route::get('product/{product_id}', 'PagesController@ShowProduct');
Route::get('pages/{page_name}', 'PagesController@ShowPage');




// Route::group(['middleware' => ['User_Order']], function () {

//     Route::prefix('order')->group(function () {
//         Route::get('/{user_id}', 'PagesController@ShowOrder');
//     });
// });




Route::prefix('shop')->group(function () {
    Route::get('AddToCart', 'ShopController@AddToCart');
    Route::get('RemoveFromCart', 'ShopController@RemoveFromCart');
    Route::get('UpdateCard', 'ShopController@UpdateCard');
    Route::get('GoToCart', 'ShopController@ShowCart');
    Route::get('save_order', 'ShopController@SaveOrder');
});



Route::prefix('user')->group(function () {
    Route::get('login', 'UserController@ShowLoginForm');
    Route::get('signup', 'UserController@ShowSignUpForm');
    Route::get('logout', 'UserController@LogOut');
    Route::post('login', 'UserController@ValidateUser');
    Route::post('signup', 'UserController@SignUpUser');
});

Route::group(['middleware' => ['CmsDashBoard']], function () {
    Route::prefix('cms')->group(function () {
        Route::get('dashboard', 'PagesController@ShowDashboard');
        Route::resource('category/categories', 'CmsCategories');
        Route::resource('product/products', 'CmsProducts');
        Route::resource('order/orders', 'CmsOrders');
        Route::resource('user/users', 'CmsUsers');
        Route::resource('page/pages', 'CmsPages');
        Route::resource('banner/banners', 'CmsBanners');
        Route::resource('contact/contacts', 'CmsContacts');
    });
});

Route::get('{{page}}', 'PagesController@ShowPage');



// Route::get('/redirect', 'FacebookController@redirect');
// Route::get('/callback', 'FacebookController@callback');

//facebook socilite
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
