<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class postcontroller extends Controller
{
       //Post Api
    function postdata(Request $req)
    {
    		// return ['result'=>'Data has been saved successfully'];
    	$device=new Device;
    	$device->name=$req->name;
    	$device->member_id=$req->member_id;
    	$result=$device->save();
    	if($result)
    	{
    		return ['result'=>'Data has been saved successfully'];
    	}
    	else
    	{
    		return ['result'=>'Data has been saved successfully'];	
    	}
    }
}
