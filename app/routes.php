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


Route::get('/routes', function()
{
	$route_info = File::get(app_path(). '/routes.php');
	echo Pre::render($route_info, 'Routes');
	//echo app_path() ."<br />";
	//echo public_path() ."<br />";
	//echo base_path() ."<br />";
	//echo storage_path() ."<br />";
	
});

#Homepage
Route::get('/', function()
{
	return View::make('index');
	//return 'Wewlcome to P3';
});

#Display form for Lorem
Route::get('/lorem', function()
{
	return View::make('lorem');
	//$generator = new Badcow\LoremIpsum\Generator();
	//$paragraphs = $generator->getParagraphs(5);
	//echo implode('<p>', $paragraphs);

	//return 'Lorem';
});

#Display form for Random User
Route::get('/random_user', function()
{
	$faker = Faker\Factory::create();
	echo Pre::render($faker->name, 'Random Name');
	echo Pre::render($faker->address, 'Address');
	//return 'Random User';
});

#Process Lorem form
Route::post('/lorem', function()
{
	$num = Input::get('para_num');
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($num);
	//$result = echo implode('<p>', $paragraphs);
	return View::make('lorem')
        ->with('paragraphs', $paragraphs);
});

#Process Random Users form
Route::post('/random_user', function()
{
	return 'Random User POST';
});


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

