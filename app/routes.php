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
//##########################################################
#Print out route paths
//##########################################################
Route::get('/routes', function()
{
	$route_info = File::get(app_path(). '/routes.php');
	echo Pre::render($route_info, 'Routes');	
});

//##########################################################
#Homepage
//##########################################################
Route::get('/', function()
{
	return View::make('index');
});

//##########################################################
#Display form for Lorem
//##########################################################
Route::get('/lorem', function()
{
	return View::make('lorem');
});

//##########################################################
#Display form for Random User
//##########################################################
Route::get('/random_user', function()
{
	return View::make('random');
});

//##########################################################
#Process Lorem form
//##########################################################
Route::post('/lorem', function()
{
	$num = Input::get('para_num');
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($num);
	return View::make('lorem')
        ->with('paragraphs', $paragraphs);
});
//##########################################################
#Process Random Users form
//##########################################################
Route::post('/random_user', function()
{
	$selection = Input::all();
	return View::make('random')
		->with('selection', $selection);
});

//##########################################################
//Testing area
//##########################################################
Route::get('/books', function()
{
	return 'Here are all the books...';
});

Route::get('/books/{category}', function($category){
	return 'Here are the books for category of '.$category;
});

Route::get('/practice', function(){
/*	echo App::environment(); */
	$fruit = Array('Apples', 'Oranges', 'Pears');
	
	echo Pre::render($fruit,'Fruit');
});

