<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $data = array(
        //     'title' => 'Dashboard',
        //     'menuDashboard' => 'active',
        // );
        return view('dashboard');
    }
}
