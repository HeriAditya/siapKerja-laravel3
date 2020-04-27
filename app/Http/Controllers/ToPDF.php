<?php

namespace App\Http\Controllers;

  

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Item;
use PDF;
use DB;

  

class ToPDF extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function generatePDF($id_kegiatan)
    {
        //$id_kegiatan ='LP01';
        //return 'jalan';
        $daftar_hadir = DB::table('daftar_hadir')
                ->leftJoin('daftar_kegiatan', 'daftar_hadir.id_kegiatan', '=', 'daftar_kegiatan.id_kegiatan')
                ->where('daftar_hadir.id_kegiatan', $id_kegiatan)
                ->orderBy('id_peserta', 'asc')
                ->get();
        $daftar_kegiatan = DB::table('daftar_kegiatan')
                ->leftJoin('daftar_skpd', 'daftar_kegiatan.id_skpd', '=', 'daftar_skpd.id_skpd')
                ->where('id_kegiatan', $id_kegiatan)
                ->get();
        //return $daftar_hadir;
        //return $daftar_kegiatan;

        $data = ['title' => 'Daftar Hadir',
                'daftar_hadir'=> $daftar_hadir,
                'daftar_kegiatan' => $daftar_kegiatan
                ];  

        $pdf = PDF::loadView('exportPDF', $data);

  

        return $pdf->download('itsolutionstuff.pdf');

    }

}