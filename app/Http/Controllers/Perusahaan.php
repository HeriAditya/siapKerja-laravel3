<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\list_perusahaan_model;
use Auth;
class Perusahaan extends Controller
{
    //
    public function index()
    {
    	//dd(session()->all());
    	//dd($userId = Auth::user()->jenis);
    	$data['list_perusahaan']= list_perusahaan_model::all();
        return view('perusahaan',$data);
    }
}
