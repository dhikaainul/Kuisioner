<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kuesioner;
use App\NilaiKuesioner;

class KuesionerController extends Controller
{
    public function kuesioner(Request $request){
        $value = new NilaiKuesioner();
        $data['keterangan'] = $value->keterangan;
        $data['kuesioner'] = $request->session()->get('kuesioner');
		return view('kuesioner', $data);
	} 
}
