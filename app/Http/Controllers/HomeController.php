<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

//test
class HomeController extends Controller
{
	/**
	* Show the application dashboard.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		return view('home');
	}
}