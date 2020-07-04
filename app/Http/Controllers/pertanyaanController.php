<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pertanyaanModel;

class pertanyaanController extends Controller{

    public function index()
    {   
        $all_item = pertanyaanModel::get_all();
        return view('pertanyaan.index',compact('all_item'));
    }

    public function create()
    {
        return view('pertanyaan.create');
    }

    public function store(Request $request)
    {   
        $array_baru = array(
            'judul' => $request['judul'], 
            'isi' => $request['isi'],
            'tanggal_dibuat' => $request['tanggal_dibuat'],

        );
        $new_item = pertanyaanModel::save($array_baru);
        return redirect('/pertanyaan');
    }
}
