<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class searchcontroller extends Controller
{
    function searchdata($name)
    {
    	// For search All Data
    	// return Device::where('name',$name)->get();
    	$result=Device::where('name','like',"%".$name."%")->get();
    	if($result)
    	{
    		return ['result'=>$result];
    	}
    	else
    	{
    		return['No Data Found'];
    	}
    }
}
