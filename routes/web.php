<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('furniz.pages.home.index');
});

Route::get('/danh-muc-san-pham', function () {
    return view('furniz.pages.category-product.index');
});

Route::get('/san-pham', function () {
    return view('furniz.pages.product.index');
});

Route::get('/danh-muc-bai-viet', function () {
    return view('furniz.pages.category-article.index');
});

Route::get('/bai-viet', function () {
    return view('furniz.pages.article.index');
});

Route::get('/gio-hang', function () {
    return view('furniz.pages.cart.index');
});

Route::get('/thanh-toan', function () {
    return view('furniz.pages.order.checkout');
});

Route::get('/dat-hang-thanh-cong', function () {
    return view('furniz.pages.order.success');
});

Route::get('/tra-cuu-don-hang', function () {
    return view('furniz.pages.order.tracking');
});

Route::get('/lien-he', function () {
    return view('furniz.pages.contact-us.index');
});

Route::get('/bang-dieu-khien', function () {
    return view('furniz.pages.dashboard.index');
});

Route::get('/gioi-thieu', function () {
    return view('furniz.templates.about-us');
});

Route::get('/404', function () {
    return view('furniz.templates.404');
});

Route::group([
    'namespace' => 'App\Http\Controllers\Admin',
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    Route::resource('collections', CollectionController::class)->parameters(['collections' => 'item']);
    Route::resource('categoryArticles', CategoryArticleController::class)->parameters(['categoryArticles' => 'item']);
});
