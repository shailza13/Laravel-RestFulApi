<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
	//Get Api 1st method
    function getData()
    {
    	return ['name'=>'anil','email'=>'anil@gmail.com'];
    }
}
