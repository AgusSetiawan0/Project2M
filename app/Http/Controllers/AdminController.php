<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
	public function adminDashboard()
	{
    	return view('admin');
	}
	public function index()
	{
      	$users = User::all();
      	return view('users.list', compact('users'));
  	}
}
