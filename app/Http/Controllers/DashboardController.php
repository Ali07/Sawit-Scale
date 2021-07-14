<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function index(Request $request)
	{

		$view = [
			'title'			=> 'Dashboard',
		];

		return view('admin.pages.dashboard.index')->with($view);
	}
}
