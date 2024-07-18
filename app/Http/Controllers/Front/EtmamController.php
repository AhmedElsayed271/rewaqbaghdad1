<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Etmamcategory;

class EtmamController extends Controller
{
    public function index()
    {
        
        $etmamCategories = Etmamcategory::with('translation','emamnews.translation')->get();
        return view('front.etmam.index',compact('etmamCategories'));
    }
}
