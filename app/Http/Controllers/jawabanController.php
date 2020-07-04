<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jawabanModel;


class jawabanController extends Controller
{
    public function index($id)
    {
        $items = jawabanModel::indexById($id);
        return view('jawaban.index',compact('items'));
    }

    public function store(Request $request,$id)
    {   
        $array_baru = array(
            'pertanyaan_id' => $id, 
            'isi' => $request['isi'],
        );
        $new_item = jawabanModel::save($array_baru);
        return redirect('/jawaban/'.$id);
    }
}
