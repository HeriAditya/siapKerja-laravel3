<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\list_perusahaan_model;
class Bursa extends Controller
{
    //
    public function lowonganAdmin()
    {
    	$data['list_perusahaan']= list_perusahaan_model::all();
        return view('bursaKerja_lowongan_admin',$data);
    }
}
