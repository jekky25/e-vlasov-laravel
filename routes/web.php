<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');


function pr (...$ar)
{
	global $USER;
	if (!$USER->isAdmin()) return false;
	foreach ($ar as $_ar)
	{
		echo '<pre>'; print_r ($_ar); echo '</pre>';
	}
}