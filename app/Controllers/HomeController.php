<?php

namespace App\Controllers;

use App\Core\View;

/**
 * 
 */
class HomeController
{
	
	public function index()
	{
		# code...
		View::load('home');
	}
	
}