<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //

    function index() {
        return View('about')->with([
            'name' => "Fakhri Nurfauzan",
            'nim' => "11140910000144"
        ]);
    }
}
