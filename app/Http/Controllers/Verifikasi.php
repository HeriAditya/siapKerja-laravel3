<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PKWT_model;
use App\File_PKWT;
use Carbon\Carbon;
class Verifikasi extends Controller
{
 
    public function pkwt()
    {
        $filter= array();
    	$filter['isPKWT']= 1;
    	$data['daftarPKWT'] = PKWT_model::join('kode_status', 'pkwt.kodeStatus', '=', 'kode_status.kodeStatus')->join('list_perusahaan', 'pkwt.idPerusahaan', '=', 'list_perusahaan.idPerusahaan')->where($filter)->orderBy('updated_at', 'desc')->get();
        return view('verifikasi',$data);
    }
    public function kontrak()
    {
        $filter= array();
        $filter['isKontrak']= 1;
        $data['daftarPKWT'] = PKWT_model::join('kode_status', 'pkwt.kodeStatus', '=', 'kode_status.kodeStatus')->join('list_perusahaan', 'pkwt.idPerusahaan', '=', 'list_perusahaan.idPerusahaan')->where($filter)->orderBy('updated_at', 'desc')->get();
        return view('verifikasi',$data);
    }
    public function pkwtFile($token)
    {
        $filter= array();
        $filter['tokenPKWT']=$token;
    	//$filter['idPerusahaan']= 1;
    	$data['file_pkwt'] = File_PKWT::join('pkwt_file_jenis', 'file_pkwt.jenisDoc', '=', 'pkwt_file_jenis.jenisDoc')->where($filter)->get();
        $data['PKWT'] = PKWT_model::join('kode_status', 'pkwt.kodeStatus', '=', 'kode_status.kodeStatus')->join('list_perusahaan', 'pkwt.idPerusahaan', '=', 'list_perusahaan.idPerusahaan')->where($filter)->get();
    	$data['tokenPKWT']=$token;
        return view('verifikasi_pkwt_file',$data);
    }
    public function verifikasiPKWTFile(Request $request){
    	$PKWTVerifikasi = $request->input('verifikasi');
    	$keterangan = $request->input('keterangan');
    	$tokenPKWT = $request->input('tokenPKWT');
    	$daftarFile= File_PKWT::where(['tokenPKWT'=>$tokenPKWT])->get();
    	
    	foreach ($daftarFile as $file) {
    	File_PKWT::query()
                  ->where(['idFile' =>  $file->idFile])
                  ->update(['keterangan' => $request->input('keterangan'),'verifikasi' => $request->input('idFile'.$file->idFile)==''?1:3,'updated_at'=>Carbon::Now()]);
    	}
    	PKWT_model::query()
                  ->where(['tokenPKWT' =>  $tokenPKWT])
                  ->update(['keterangan' => $request->input('keterangan'),'kodeStatus' =>$request->input('verifikasi'),'updated_at'=>Carbon::Now()]);
    	return self::pkwtFile($tokenPKWT);
    }
}
