<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
		return view('admin/index');
	}
	
	public function addGoods(){
		return view('admin/products/add');
	}
	public function upload(){
		return view('welcome');
	}
	
	public function uploadProduct(Request $request){
		if($request->ajax()){
			DB::table('shows')->delete();
			\App\Mode\shows::create([
					'theme' => $request->get(''),
					'user_name'=>Auth::user()->name,
					'user_id' =>Auth::user()->id,
					'start_time' => $request->get(''),
					'end_time' => $request->get(''),
					'price' => $request->get(''),
					'Maxnumber' => $request->get(''),
					'count' => $request->get(''),
					'countent_introduction' => $request->get(''),
					'link' => $request->get(''),
					'img' => $request->get(''),
					'state' => '0',
			
			]);
		}
		
		return view('admin/products/add');
	}
}
