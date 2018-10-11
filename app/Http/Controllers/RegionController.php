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
    	return view('region', $data);
    }

}
