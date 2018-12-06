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

Route::get('/', 'WelcomeController@index');
Route::get('/product-category/{id}', 'WelcomeController@category');
Route::get('/product-details/{id}', 'WelcomeController@productDetails');

Route::post('/add-to-cart', 'CartController@addToCart');
Route::get('/show-cart', 'CartController@showCart');
Route::post('/update-cart-product', 'CartController@updateCart');
Route::get('/delete-cart-product/{id}', 'CartController@deleteCart');
Route::get('/direct-add-to-cart/{id}', 'CartController@directAddToCart');


Route::get('/checkout', 'CheckoutController@index');



Route::post('/new-customer', 'CheckoutController@saveCustomerInfo');//customer register
Route::post('/customer-login', 'CheckoutController@customerLogin');//customer login
Route::post('/customer-logout', 'CheckoutController@customerLogout');//customer logout

Route::get('/shipping-info', 'CheckoutController@showShippingInfo');
Route::post('/new-shipping', 'CheckoutController@saveShippingInfo');
Route::get('/payment-info', 'CheckoutController@showPaymentInfo');

Route::post('/new-order', 'CheckoutController@saveOrderInfo');

Route::get('/order-info', 'OrderController@showOrderInfo');
Route::get('/edit-order/{id}', 'OrderController@editOrderInfo');
Route::post('/update-order', 'OrderController@updateOrderInfo');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add-category', 'CategoryController@addCategory');
Route::post('/new-category', 'CategoryController@saveCategoryInfo');
Route::get('/manage-category', 'CategoryController@manageCategoryInfo');
Route::get('/unpublished-category/{id}', 'CategoryController@unpublishedCategoryInfo');
Route::get('/published-category/{id}', 'CategoryController@publishedCategoryInfo');
Route::get('/edit-category/{id}', 'CategoryController@editCategoryInfo');
Route::post('/update-category', 'CategoryController@updateCategoryInfo');
Route::get('/delete-category/{id}', 'CategoryController@deleteCategoryInfo');


Route::get('/add-brand', 'BrandController@addBrand');
Route::post('/new-brand', 'BrandController@saveBrandInfo');








Route::get('/add-product', 'ProductController@addProduct');
Route::post('/new-product', 'ProductController@saveProductInfo');
Route::get('/manage-product', 'ProductController@manageProductInfo');
Route::get('/view-product/{id}', 'ProductController@viewProductInfo');
Route::get('/edit-product/{id}', 'ProductController@editProductInfo');
Route::post('/update-product', 'ProductController@updateProductInfo');
