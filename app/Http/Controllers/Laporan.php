<?php

namespace App\Http\Controllers;
use App\Models\Modellaporan;
use Illuminate\Http\Request;

class Laporan extends Controller
{
    public function lihatLaporan(){
        $data=[
            'dataLaporan' => Modellaporan::all()
        ];
        return View('Laporan.data', $data);
    }

    public function peminjaman(){
        return View('Laporan.formpinjam');
    }

    public function simpan(Request $r){
        $trans_id = $r->trans_id;
        $isbn = $r->isbn;
        $nim = $r->nim;
        $tgl_pinjam = $r->tgl_pinjam;
        $tgl_kembali = $r->tgl_kembali;
        //$set_tgl_kembali = $r->set_tgl_kembali;

    try{

        $lapor = new Modellaporan;
        $lapor->trans_id = $trans_id;
        $lapor->isbn = $isbn;
        $lapor->nim = $nim;
        $lapor->tgl_pinjam = $tgl_pinjam;
        $lapor->tgl_kembali = $tgl_kembali;
        $lapor->save();
        
        //echo "<script>alert('Data Tersimpan.')</script>";
        $r->session()->flash('msg', 'Data Tersimpan');
        return redirect('/sip/pinjam');
    } catch (Throwable $e) {
        echo $e;
    }
    }
}
