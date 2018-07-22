<?php

namespace Lameck\Lauth\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
    * Index page login - signin.
    *
    * @return view
    */
    public function getDashboard()
    {
        return view('Lameck\Lauth::dashboard');
    }
}
