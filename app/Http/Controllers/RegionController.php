<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use Datatables;

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

    public function getDataRegion()
    {
        $regions = Region::get([ 'name', 'number']);
		return Datatables::collection(Region::get(['name', 'number']))->make();
    }

}
