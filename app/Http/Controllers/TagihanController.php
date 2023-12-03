<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function tagihan(){
        $data = Tagihan::all();
        return view('tagihan', compact('data'));
    }

    public function createtagihan(){
        return view('tambahtagihan');
    }
}
