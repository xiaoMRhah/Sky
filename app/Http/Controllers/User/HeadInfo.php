<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeadInfo extends Controller
{
    public function index(){
		return view('welcome')->with('shows',\App\Mode\shows::all());
	}
}
