<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
   


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index($name = "john smith")
    {
        return('welcome '.$name);
    }
}
