<?php

namespace CrossRoads\Http\Controllers;

use CrossRoads\Http\Requests;
use CrossRoads\User;
use CrossRoads\Http\Controllers\Auth;

class Front extends Controller
{
    public function index()
    {
       $cred = Input::only('email','password');
		var_dump($cred);
		if(Auth::attempt($cred)){
		return Redirect::intended('welcome');
		}else{
		$error = "Username or password is incorrect.";
		return Redirect::to('welcome');
		}
    }

	public function register() {
		if (Request::isMethod('post')) {
			User::create([
						'name' => Request::get('name'),
						'email' => Request::get('email'),
						'password' => bcrypt(Request::get('password')),
			]);
		} 
    
    return Redirect::away('login');
}
public function authenticate() {
		if (Auth::attempt(['email' => Request::get('email'), 'password' => Request::get('password')])) {
			return redirect()->intended('checkout');
		} else {
			return view('login', array('title' => 'Welcome', 'description' => '', 'page' => 'Home'));
		}
}
public function logout() {
		Auth::logout();

		return Redirect::away('login');
	}

}
