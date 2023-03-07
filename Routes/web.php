<?php

use Santa\Http\Route;
use App\Controllers\HomeController;
use App\Controllers\SoldController;
use App\Controllers\ItemsController;
use App\Controllers\LoginController;
use App\Controllers\MeetsController;
use App\Controllers\NeedsController;
use App\Controllers\UsersController;
use App\Controllers\LogOutController;
use App\Controllers\AnalyzeController;
use App\Controllers\HistoryController;
use App\Controllers\HowManyController;
use App\Controllers\LanguageController;
use App\Controllers\RegisterController;
use App\Controllers\CustomersController;
use App\Controllers\FailedSoldController;
use App\Controllers\IdiotItemsController;


Route::get('/',[HomeController::class,'index']);
Route::get('/signup',[RegisterController::class,'index']);

Route::get('/language',[LanguageController::class,'language']);

Route::post('/signup',[RegisterController::class,'store']);

Route::get('/items',[ItemsController::class,'index']);
Route::get('/items/create',[ItemsController::class,'viewCreate']);
Route::post('/items/create',[ItemsController::class,'create']);

Route::get('/idiotitems',[IdiotItemsController::class,'index']);
Route::get('/idiotitems/create',[IdiotItemsController::class,'viewCreate']);
Route::post('/idiotitems/create',[IdiotItemsController::class,'create']);

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'login']);

Route::get('/auth/logout',[LogOutController::class,'logout']);

Route::get('/customers',[CustomersController::class,'view']);
Route::get('/customers/create',[CustomersController::class,'viewCreate']);
Route::get('/customers/edit',[CustomersController::class,'editView']);
Route::post('/customers/create',[CustomersController::class,'create']);
Route::post('/customers/edit',[CustomersController::class,'edit']);
Route::get('/customers/delete',[CustomersController::class,'delete']);

Route::get('/meets',[MeetsController::class,'index']);
Route::get('/meets/create',[MeetsController::class,'viewCreate']);
Route::get('/meets/delete',[MeetsController::class,'delete']);
Route::post('/meets/create',[MeetsController::class,'create']);

Route::get('/users',[UsersController::class,'index']);
Route::get('/users/create',[UsersController::class,'viewCreate']);
Route::post('/users/create',[UsersController::class,'create']);
Route::get('/users/edit',[UsersController::class,'viewEdit']);
Route::post('/users/edit',[UsersController::class,'edit']);
Route::get('/users/delete',[UsersController::class,'delete']);

Route::get('/sold',[SoldController::class,'index']);
Route::get('/sold/create',[SoldController::class,'viewCreate']);
Route::post('/sold/create',[SoldController::class,'create']);

Route::get('/needs',[NeedsController::class,'index']);
Route::get('/needs/create',[NeedsController::class,'viewCreate']);
Route::get('/needs/edit',[NeedsController::class,'viewEdit']);
Route::post('/needs/edit',[NeedsController::class,'edit']);
Route::get('/needs/delete',[NeedsController::class,'delete']);
Route::post('/needs/create',[NeedsController::class,'create']);

Route::get('/history',[HistoryController::class,'index']);

Route::get('/failedsold',[FailedSoldController::class,'index']);
Route::get('/failedsold/create',[FailedSoldController::class,'viewCreate']);
Route::get('/failedsold/edit',[FailedSoldController::class,'viewEdit']);
Route::post('/failedsold/edit',[FailedSoldController::class,'edit']);
Route::post('/failedsold/create',[FailedSoldController::class,'create']);
Route::get('/failedsold/delete',[FailedSoldController::class,'delete']);


Route::get('/howmany',[HowManyController::class,'index']);

Route::get('/analyze',[AnalyzeController::class,'index']);
