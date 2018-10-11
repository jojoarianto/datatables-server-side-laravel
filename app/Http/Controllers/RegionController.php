<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;

class RegionController extends Controller
{
    
    /**
     * [index description]
     * @return [view] [description]
     */
    public function index()
    {
    	$region = Region::with('event')->first();
	    dd($region);
    }

}
