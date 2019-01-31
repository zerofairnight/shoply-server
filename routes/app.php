<?php

use Illuminate\Http\Request;

Route::middleware('auth:app')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('app.')->group(function () {
    Route::post('login', 'LoginController@login');
    Route::post('register', 'RegisterController@register');
    Route::apiResource('shops', 'ShopController');
    Route::apiResource('shops.articles', 'ShopArticleController');
    Route::apiResource('articles', 'ArticleController');
    Route::put('trash/articles/{article}', 'TrashArticleController@update');
});
