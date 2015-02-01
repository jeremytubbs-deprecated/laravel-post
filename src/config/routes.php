<?php

return array(

	/**
	 * Determines whether to load the package routes. If you want to specify them yourself in your own `app/routes.php`
	 * file then set this to false.
	 */
	'use_package_routes' => true,

	/**
	 * Base URI of the package's pages, e.g. "blog" in http://domain.com/blog and http://domain.com/blog/my-post
	 */
	'base_uri' => 'posts',

	/**
	 * Before filter for admin routes.
	 */
	'before_filter' => 'auth',

	/**
	 * Route prefix for admin area.
	 */
	'route_prefix' => 'admin'

);
