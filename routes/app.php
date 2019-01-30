<?php

use Illuminate\Http\Request;

Route::middleware('auth:app')->get('/user', function (Request $request) {
    return $request->user();
});
