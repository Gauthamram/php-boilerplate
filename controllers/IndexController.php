<?php
namespace App\Controllers;

class IndexController {
	public function index()
	{
		return view('index');
	}

	public function about()
	{
		return view('about');
	}

	public function contact() {
		return view('contact');
	}
}