<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class DeviceController extends Controller
{
	//Get Api From DB
    function list()
    {
    	return device::all();
    }
    function listparams($id)
    {
    	return device::find($id);
    }
    // function list($id=null)
    // {
    // 	return $id?device::find($id):device::all();
    // }


 
}
