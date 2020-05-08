<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
	 * Display fornt page
	 * @return response
    */
    public function index(){
    	return  view('welcome');
    }
}
