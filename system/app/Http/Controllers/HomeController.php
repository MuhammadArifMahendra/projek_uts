<?php

namespace App\Http\Controllers;

class HomeController extends Controller{


	function Showtemplate(){
		return view('template.base');
	}


	function Showblog(){
		return view('template.blog');
	}
}
