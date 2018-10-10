<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;

class RegionController extends Controller
{
    
    /**
     * [index description]
     * @return [type] [description]
     */
    public function index()
    {
    	$region = Region::all();
	    dd($region);

    	// return $region;
    }

}
