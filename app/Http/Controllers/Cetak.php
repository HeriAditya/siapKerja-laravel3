<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


use App\File_PKWT;
use App\PKWT_model;
use App\PKWT_file_jenis;

class Cetak extends Controller
{
    
    public function pkwt()
    {
        ////**
        $filter= array();
        $filter['isPKWT']= 1;
        $filter['kodeStatus']= 3;
        $data['daftar'] = PKWT_model::join('list_perusahaan', 'pkwt.idPerusahaan', '=', 'list_perusahaan.idPerusahaan')->where($filter)->orderBy('updated_at', 'desc')->get();
        return view('cetakView',$data);
    }
    public function kontrak()
    {
        $filter= array();
        $filter['isKontrak']= 1;
        $filter['kodeStatus']= 3;
        $data['daftar'] = PKWT_model::join('list_perusahaan', 'pkwt.idPerusahaan', '=', 'list_perusahaan.idPerusahaan')->where($filter)->orderBy('updated_at', 'desc')->get();
        return view('cetakView',$data);
    }
    public function getBerkas(Request $request){
        $bulan = array(" ","Januari", "Maret", "April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
        
       //dd($request);
        $filter['tokenPKWT']= $request->input('token');
        $data = PKWT_model::join('list_Perusahaan', 'pkwt.idPerusahaan', '=', 'list_Perusahaan.idPerusahaan')->where($filter)->orderBy('updated_at', 'desc')->get();


        //echo Carbon::now()->format('l, d F Y H:i');
        // Sabtu, 04 Maret 2017 07:38
        //dd($request);
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('KONTRAK.docx');
        if($data->pluck('isPKWT')[0]==1){
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('PKWT.docx');
        }else if($data->pluck('isKontrak')[0]==1){
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('KONTRAK.docx');
 
           
        }
        $templateProcessor->setValue('tanggal', Carbon::now()->format('d ').$bulan[(int)Carbon::now()->format('m')].Carbon::now()->format(' Y'));
        $templateProcessor->setValue('namaPerusahaan', $data->pluck('namaPerusahaan')[0]);
        $templateProcessor->setValue('alias', $data->pluck('aliasPKWT')[0]);
        
        //$templateProcessor->setValue('alamat', 'John Doe');
        //$templateProcessor->setValue(
        //    ['nama', 'street'],
        //    ['alamat', '123 International Lane']);
         
        $templateProcessor->saveAs('Temporary.docx');
        //dd(public_path(). "\MyWordFile.docx");
        $file= public_path(). "\Temporary.docx";
        //dd($file);
        $headers = array(
                  'Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                );

        return Response::download($file, $request->input('token').'.docx', $headers);
    }
    
}
