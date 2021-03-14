<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class putcontroller extends Controller
{
    function putdata(Request $req)
    {	
    	$device=Device::find($req->id);
    	$device->name=$req->name;
    	$device->member_id=$req->member_id;
    	$result=$device->save();
    	if($result)
    	{
    		return ["result"=>"Data has been updated successfully"];
    	}
    	else
    	{
    		return ["result"=>"Update Failed"];
    	}
    }
}
