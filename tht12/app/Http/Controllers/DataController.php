<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class DataController extends Controller
{
  public function index(){

    $response = Http::get('https://api.myquran.com/v2/sholat/jadwal/1602/2025/1/30');
      
    $data = $response->json();
      
    return view('jadwal', compact('data'));
    
  }
}
