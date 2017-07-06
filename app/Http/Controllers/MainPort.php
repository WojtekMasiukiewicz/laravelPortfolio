<?php

namespace masaj\Http\Controllers;

use Illuminate\Http\Request;

class MainPort extends Controller
{
    public function index(){
		$this->layout->content = View::make('main');
    }
}
