<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
	return View::make('pages.home');
});

Route::get('/resume', function() {
    return View::make('pages.resume', array('page_subtitle' => 'Resume'));
});

Route::get('/projects', function() {
    return View::make('pages.projects', array('page_subtitle' => 'Projects'));
});

Route::get('/contact', function() {
    return View::make('pages.contact', array('page_subtitle' => 'Contact'));
});
