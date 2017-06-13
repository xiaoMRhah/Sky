<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Mode\shows;
use Faker\Provider\Image;

class UserController extends Controller {
	public function index() {
		return view ( 'admin/index' );
	}
	public function addGoods() {
		return view ( 'admin/products/add' );
	}
	public function upload() {
		return view ( 'welcome' );
	}
	public function uploadProduct(Request $request) {
		
		$show = new shows ();		
		$show->theme = $request->get ( 'theme' );
		$show->user_name = Auth::user ()->name;
		$show->user_id = Auth::user ()->id;
		$show->start_time = $request->get ( 'startTime' );
		$show->end_time = $request->get ( 'endTime' );
		$show->price = 0;
		$show->Maxnumber = $request->get( 'lagMumber' );
		$show->count = 23; /* $request->get(''), */
		$show->content_introduction= $request->get ( 'discription' );
		$show->link = $request->get ( 'img' );
		$show->img = $request->get ( 'img' );
		$show->state = '0';
		if ($show->save ()) {
			echo "成功";
			return view ( 'admin/products/add' );
		} else {
			return redirect ()->back ()->withIput ()->withErrors ( '保存失败！' );
		}
	}
}
