<?php

namespace CrossRoads\Http\Controllers;

use Illuminate\Http\Request;
use CrossRoads\Http\Requests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Http;
use Hash;
class UserController extends Controller
{
   public function __construct(){
	   $this->middleware('auth');
   }
public function index()
	{
		$cred = Input::only('email','password');
		var_dump($cred);
		if(Auth::attempt($cred)){
		return Redirect::intended('index');
		}else{
		$error = "Username or password is incorrect.";
		return Redirect::to('/resource');
		}
	}
public function create()
	{
		$user = new \CrossRoads\User;
		$user->username = input::get('name');
		$user->email  =   input::get('email');
		$user->password = Hash::make(input::get('password'));
		//$user->designation = input::get('profile_pic');
		$user->save();
		return view('index');
	}
}
