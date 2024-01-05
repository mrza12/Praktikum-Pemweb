<?php
namespace App\Http\Controller;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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


Route::get ('/',[DataController::class,'index']);

// Route::get('/', function(){}

  //   try {
  
  //     $response = Http::get('https://api.myquran.com/v1/sholat/kota/cari/kediri');
      
  //     $data = $response->json();
      
  //     $schedule = $data['jadwal']['data'];
    
  //     return view('welcome', compact('schedule'));
  
  //   } catch (\Exception $e) {
  
  //     // handling error
  
  //   }
  
  // });