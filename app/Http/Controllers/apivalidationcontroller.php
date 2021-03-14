<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Device;
class apivalidationcontroller extends Controller
{
    function validatedata(Request $req)
    {    	
    	$rules=array(
    		"member_id"=>"required | max:4",
    		"name"=>"required"
    	);
    	$validator=Validator::make($req->all(),$rules);
    	if($validator->fails())
    	{
    		return $validator->errors();
    	}
    	else
    	{
    		$device=new Device;
    		$device->name=$req->name;
    		$device->member_id=$req->member_id;
    		$result=$device->save();
    		if($result)
    		{
    			return["Data has been saved successfully"];
    		}
    		else
    		{
    			return["Operation Failed"];
    		}
    	}
    }
}
