<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend/pages/index');
    }

    public function about() {
        return view('frontend/pages/about');
    }

    public function team() {
        return view('frontend/pages/team');
    }

    public function services() {
        return view('frontend/pages/services');
    }

    public function trucks () {
        return view('frontend/pages/trucks');
    }
 }
