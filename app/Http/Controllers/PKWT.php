<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PKWT_model;
use App\File_PKWT;
use App\PKWT_file_jenis;
use DB;
class PKWT extends Controller
{
    //
    public function PendaftaranJasa()
    {	
    	$data['token']=self::makeNewToken();
        $data['filePKWT'] = PKWT_file_jenis::where(['isPKWTJasa'=>1])->get();
        return view('pkwt_pendaftaran',$data);
    }
    public function PendaftaranBorong()
    {
        $data['token']=self::makeNewToken();
        $data['filePKWT'] = PKWT_file_jenis::where(['isPKWTBorong'=>1])->get();
        return view('pkwt_pendaftaran',$data);
    }
    public function lacak()
    {
    	$filter['idPerusahaan']= 1;
    	$data['daftarPKWT'] = PKWT_model::join('kode_status', 'pkwt.kodeStatus', '=', 'kode_status.kodeStatus')->where($filter)->orderBy('updated_at', 'desc')->take(100)->get();
        return view('pkwt_lacak',$data);
    }
    public function reUploadDocument($token=null){
        DB::enableQueryLog();
        $data['token']=$token;
        //select * from (SELECT * from `file_pkwt` where tokenPKWT ='ux43xi') as file_pkwt right join `pkwt_file_jenis` as `j` on `file_pkwt`.`jenisDoc` = `j`.`jenisDoc` where isPKWTJasa=1 and verifikasi is null or verifikasi !=3
        $data['daftarFile']= DB::table(DB::raw("(SELECT * from `file_pkwt` where tokenPKWT ='ux43xi') as file_pkwt"))
                     ->select('*')
                     ->rightjoin('pkwt_file_jenis as j', 'file_pkwt.jenisDoc', '=' ,'j.jenisDoc')
                     ->whereRaw('isPKWTJasa=1 and verifikasi is null or verifikasi !=3')
                     ->get();
        //dd(DB::getQueryLog());
        return view('pkwt_lacak_uploadUlangBerkas',$data);
    }
    public function makeNewToken(){
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle(str_repeat($pool, 5)), 0, 6);
    }
}
