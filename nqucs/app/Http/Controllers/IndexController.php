<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
//use App\Services\PostService;

class IndexController extends Controller
{
    //
    public function home()
    {
        return view('frontend.home');
    }
}
