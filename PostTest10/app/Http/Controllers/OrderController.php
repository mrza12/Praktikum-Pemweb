<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class OrderController extends Controller
{
public function showFormPesan()
{
    return view('pesan');
    }
    public function submitData(Request $request)
    {
        $data = [
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'provinsi' => $request->input('provinsi'),
            'kota' => $request->input('kota'),
            'nomortelepon' => $request->input('nomortelepon'),
            ];
        return view('dashboardAdmin', compact('data'));
    }
}