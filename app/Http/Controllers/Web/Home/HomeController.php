<?php

namespace App\Http\Controllers\Web\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        try{

            return view('web.home.home');

        }catch(\Exception $exception){

            return;
        }
    }

    public function advanceHome()
    {
        try{

            return view('web.home.advance_home');

        }catch(\Exception $exception){

            return;
        }
    }
}
