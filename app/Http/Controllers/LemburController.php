<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Lembur;
use Illuminate\Http\Request;

class LemburController extends Controller
{
    public function index(){
        // $karyawan = Karyawan::get();
        // $lembur = Lembur::get();
        return view('admin.lembur');
    }

    public function lembur($kode_karyawan)
    {
        $item = Gaji::where('kode_karyawan', $kode_karyawan)->first();

        return response()->json([
            'data' => $item
        ]);
    }

    public function save(Request $request)
    {
        // $this->_validation($request);
        try {
            $tanggal = $request->tanggal;
            $kode_karyawan = $request->kode_karyawan;
            $nama = $request->nama;
            $lembur_sementara = $request->lembur_sementara;
            $waktu_lembur = $request->waktu_lembur;

            $total_lembur = $lembur_sementara * $waktu_lembur;


            Lembur::insert([
                'tanggal' =>$tanggal,
                'kode_karyawan' =>$kode_karyawan,
                'nama' => $nama,
                'total_lembur' => $total_lembur,
                'waktu_lembur' => $waktu_lembur,
                'created_at' => $tanggal,
                'updated_at' => $tanggal
            ]);

                
                // dd($request->all());
            \Session()->flash('lembur');
            return redirect()->back();
        } catch (\Expetion $e) {
            \Session()->flash('gagal', $e->getMessage());
        }
    }
}
