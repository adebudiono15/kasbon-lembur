<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kasbon;

class KasbonController extends Controller
{
    public function index(){
        return view('admin.kasbon');
    }

    public function save(Request $request)
    {
        try {
            $tanggal = $request->tanggal;
            $kode_karyawan = $request->kode_karyawan;
            $nama = $request->nama;
            $total_kasbon = $request->total_kasbon;

            Kasbon::insert([
                'tanggal' =>$tanggal,
                'kode_karyawan' =>$kode_karyawan,
                'nama' => $nama,
                'total_kasbon' => $total_kasbon,
                'status' => 2,
                'created_at' => $tanggal,
                'updated_at' => $tanggal
            ]);

                
                // dd($request->all());
            \Session()->flash('kasbon');
            return redirect()->back();
        } catch (\Expetion $e) {
            \Session()->flash('gagal', $e->getMessage());
        }
    }
}
