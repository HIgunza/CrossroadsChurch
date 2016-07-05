<?php

namespace CrossRoads\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use CrossRoads\Http\Requests;
use CrossRoads\Http\Controllers;

class ResourceCenterController extends Controller
{
    public function index()
	{
		return view('login');
	}
}
