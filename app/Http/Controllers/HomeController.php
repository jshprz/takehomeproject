<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected function index()
    {
        return view('employee_maintenance.home.index');
    }
}
