<?php

namespace App\Http\Controllers;

use App\Models\Datakriteria;
use Illuminate\Http\Request;

class Tambahdatakriteria extends Controller
{
    public function datakriteria(Request $req) {
        return view('tambahdatakriteria'); 
    }
    public function add(Request $req){
        $datakriteria = new Datakriteria;
        
        $total_bobot_lama = $datakriteria->all()->sum('bobot');
        $total_bobot = $total_bobot_lama + $req->bobot;
        
        if ($total_bobot > 100) {
            return redirect()->back()->with('error', 'Total bobot melebihi 100%')->withInput();
        }
        
        $datakriteria->kode_kriteria = $req->kode_kriteria;
        $datakriteria->nama_kriteria = $req->nama_kriteria;
        $datakriteria->bobot = $req->bobot;
        $datakriteria->save();

        return redirect("/DRCLateks");
    }
    public function delete(Request $req){
        $datakriteria = Datakriteria::find($req->id);
        $datakriteria->delete();
        return redirect()->back();
    }
    public function edit(Request $req){  
        $datakriteria = Datakriteria::find($req->id);
        return view('editdatakriteria')->with('datakriteria',$datakriteria);
    }
    public function update(Request $req){
        $datakriteria = Datakriteria::find($req->id);
        // dd($req->all());
        $a = $datakriteria->update([
            'kode_kriteria' => $req->kode_kriteria,
            'nama_kriteria' => $req->nama_kriteria,
            'bobot' => $req->bobot,

        ]);
        return redirect('datakriteria');
    }
}
