<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OurvisionController extends Controller
{
    public function ourvision()
    {
        return view('front.ourvision.ourvision');
    }
}
