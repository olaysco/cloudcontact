<?php
namespace App\Http\Controllers;
class PagesController extends Controller{
	public function welcome()
	{
		return view('welcome');
	}
	public function register(){
		return view('register');	
	}
	public function login(){
		return view('login');	
	}
	public function home(){
		return view('home');	
	}
	public function fresh(){
		redirect('login');
	}
	
}
?>