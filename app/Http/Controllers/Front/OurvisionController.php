<?php

namespace App\Http\Controllers\Front;

use App\Models\About;
use App\Models\AboutData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OurvisionController extends Controller
{
    public function ourvision()
    {   
        $visions = AboutData::where('type','vision')->get();

        $targets = AboutData::where('type','targets')->get();
        
        return view('front.ourvision.ourvision', compact('visions','targets'));
    }
}
