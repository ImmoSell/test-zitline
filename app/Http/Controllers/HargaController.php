<?php

namespace App\Http\Controllers;

use App\Models\Harga;
use Illuminate\Http\Request;

class HargaController extends Controller
{
    public function harga(){

        $data = Harga::all();
        return view('harga', compact('data'));
    }

    public function tambahharga(){
        return view('tambahharga');
    }

    public function insertharga(Request $request){
        // dd($request->all());
        Harga::create($request->all());
        return redirect()->route('harga')->with('success', 'Data berhasil ditambahkan');
    }

    public function editharga($id)
    {
        // Logika untuk mengambil data harga dengan ID tertentu dan menampilkannya di form edit
        $harga = Harga::find($id);
    
        // Pastikan harga ditemukan
        if (!$harga) {
            abort(404); // Tampilkan halaman 404 jika harga tidak ditemukan
        }
    
        // Kirim data harga ke view
        return view('editharga', ['harga' => $harga]);
    }
    

public function uploadharga(Request $request, $id){
    $harga = Harga::find($id);
    $harga->update($request->all());

    // Pastikan untuk menyimpan perubahan ke dalam database
    $harga->save();

    return redirect()->route('harga')->with('success', 'Data berhasil diupdate');
}

      public function deleteharga($id){
        $harga = Harga::find($id);
        $harga->delete();
    return redirect()->route('harga')->with('success', 'Data berhasil dihapus');
      }
}
