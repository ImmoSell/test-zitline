<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $allData = Customer::all();
    
        if ($request->has('search')) {
            $data = Customer::where('nama', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Customer::paginate(5);
        }
    
        return view('customer', compact('allData', 'data'));
    }
    
     

    public function tambahcustomer(){
        return view('tambahcustomer');
    }

    public function insertdata(Request $request){
        $data = Customer::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotocustomer/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('customer')->with('success', 'Data Berhasil Ditambahkan');
    }

public function editcustomer($id)
{
    // Logika untuk mengambil data pelanggan dengan ID tertentu dan menampilkannya di form edit
    $customer = Customer::find($id);

    // Pastikan pelanggan ditemukan
    if (!$customer) {
        abort(404); // Tampilkan halaman 404 jika pelanggan tidak ditemukan
    }

    // Kirim data pelanggan ke view
    return view('editcustomer', ['customer' => $customer]);
}

public function uploadcustomer(Request $request, $id){
    $customer = Customer::find($id);
    $customer->update($request->all());

    // Pastikan untuk menyimpan perubahan ke dalam database
    $customer->save();

    return redirect()->route('customer')->with('success', 'Data berhasil diupdate');
}

public function deletecustomer($id)
{
    $customer = Customer::find($id);

    if ($customer) {
        $customer->delete();

        // Berikan respons JSON
        return response()->json(['success' => true]);
    }

    return response()->json(['success' => false]);
}

}
