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
    	$data['region'] = Region::with('event')->get();
    	// dd($data['region']);

    	return view('region', $data);

    	// $region = Region::with('event')->first();
	    dd($region);
    }

}
