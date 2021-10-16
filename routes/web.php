<?php
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\FacadesController;
use App\Http\Controllers\PayOrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TimeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
	return 'Hello';
});

Route::get('/pay', [PayOrderController::class, 'store']);
Route::get('channels', [ChannelController::class, 'index']);
Route::get('create', [PostController::class, 'create']);

Route::get('postcards', [FacadesController::class, 'postcards']);
Route::get('facades', [FacadesController::class, 'facades']);

Route::get('posts', [PostController::class, 'index']);
Route::get('posts/delete', [PostController::class, 'destroy']);
Route::get('post/{id}/softdelete', [PostController::class, 'softDelete']);
Route::get('post/{id}/restore', [PostController::class, 'restore']);
Route::get('post/retrieve_soft_delete', [PostController::class, 'retrieveSoftDelete']);


Route::any('send-sms', [SmsController::class, 'send']);

Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customers/{customer}', [CustomerController::class, 'show']);
Route::get('/customers/{customer}/update', [CustomerController::class, 'update']);
Route::get('/customers/{customer}/delete', [CustomerController::class, 'destroy']);


Route::get('/time', [TimeController::class, 'time']);








	






