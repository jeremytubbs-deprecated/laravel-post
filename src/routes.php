<?php

// Main default listing e.g. http://domain.com/posts
Route::get(Config::get('laravel-post::routes.base_uri'), 'JeremyTubbs\LaravelPost\PostsController@index');

// Blog post detail page e.g. http://domain.com/posts/my-post
Route::get(Config::get('laravel-post::routes.base_uri').'/{slug}', 'JeremyTubbs\LaravelPost\PostsController@show');

//Admin Area Routes e.g. http://domian/admin/posts/create
Route::group(array('before' => Config::get('laravel-post::routes.before_filter'), 'prefix' => Config::get('laravel-post::routes.route_prefix')), function() {
    Route::resource(Config::get('laravel-post::routes.base_uri'), 'JeremyTubbs\LaravelPost\PostsController', ['only' => ['create', 'update', 'destroy', 'store', 'edit']]);
});