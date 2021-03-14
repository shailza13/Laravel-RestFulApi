<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class deletecontroller extends Controller
{


	//Delete Api
	function deletedata($id)
	{
		$device=Device::find($id);
		$result=$device->delete();
		if($result)
    	{
    		return ["result"=>"Data has been deleted successfully"];
    	}
    	else
    	{
    		return ["result"=>"Delete Failed"];
    	}
	}

	//Delete All Api
	// function deletealldata()
	// {
	// 	$device=new Device;
	// 	$result=$device->delete();
	// 	if($result)
 //    	{
 //    		return ["result"=>"Data has been deleted successfully"];
 //    	}
 //    	else
 //    	{
 //    		return ["result"=>"Delete Failed"];
 //    	}
	// }
}
