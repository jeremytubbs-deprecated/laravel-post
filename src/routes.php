<?php

// Main default listing e.g. http://domain.com/blog
Route::get(Config::get('laravel-blog::routes.base_uri'), 'Fbf\LaravelBlog\PostsController@index');

if (Config::get('laravel-blog::routes.relationship_uri_prefix'))
{
	// Relationship filtered listing, e.g. by category or tag, e.g. http://domain.com/blog/category/my-category
	Route::get(Config::get('laravel-blog::routes.base_uri').'/'.Config::get('laravel-blog::routes.relationship_uri_prefix').'/{relationshipIdentifier}', 'Fbf\LaravelBlog\PostsController@indexByRelationship');
}

// Blog post detail page e.g. http://domain.com/blog/my-post
Route::get(Config::get('laravel-blog::routes.base_uri').'/{slug}', 'Fbf\LaravelBlog\PostsController@view');
