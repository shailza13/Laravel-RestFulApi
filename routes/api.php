<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PutController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\apivalidationcontroller;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ApiResourceController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|	
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("data",[dummyAPI::class,'getData']);

//Route::get('list/{id?}',[DeviceController::class,'list']);		FOR REPLACE BEK
Route::get('list',[DeviceController::class,'list']);
Route::get('list/{id}',[DeviceController::class,'listparams']);

//Post APi
Route::post('add',[PostController::class,'postdata']);

//Put APi
Route::put('update',[PutController::class,'putdata']);

//Delete APi
Route::delete('delete/{id}',[DeleteController::class,'deletedata']);

// Route::delete('delete',[DeleteController::class,'deletealldata']);

Route::get('search/{name}',[SearchController::class,'searchdata']);

//Validation Api
Route::post('validate',[apivalidationcontroller::class,'validatedata']);

//Upload file with api
Route::post('upload',[FileController::class,'upload']);
//Api With Resource Controller
// Route::apiResource("apiresource",ApiResourceController::class);
Route::post('apiresource',[ApiResourceController::class,'index']);
Route::post('storeapiresourcestore',[ApiResourceController::class,'store']);

Route::get('showoneapi/{id}',[ApiResourceController::class,'show']);
//Update with resource
Route::get('editapiresource/{id}',[ApiResourceController::class,'update']);
Route::put('editapiresource/{id}',[ApiResourceController::class,'update']);

//Delete Resources
Route::delete('deleteapiresource/{id}',[ApiResourceController::class,'destroy']);