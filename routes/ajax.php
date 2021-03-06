<?php

//  Note we're inside the App\Http\Controllers\Ajax namespace

Route::resource('members', 'MemberController', ['only' => [
    'index',
    'show',
    'update',
]]);

Route::resource('posts', 'PostController', ['only' => [
    'index',
    'show',
    'update',
]]);
