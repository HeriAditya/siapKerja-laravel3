<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


use App\File_PKWT;
use App\PKWT_model;
use App\PKWT_file_jenis;

class FileController extends Controller
{

    public function fileUpload()
    {
    	return view('ajax_upload');

    }
    public function fileUploadPost(Request $request)
    {
        $request->validate([
            'file' => 'required',
		]);

        $fileName = time().'.'.request()->file->getClientOriginalExtension();
        $jenisfile = request()->jenis_doc;
        request()->file->move(public_path('files'), $fileName);
        $tokenPKWT = $request->input('token');
        $originalFileName = request()->file->getClientOriginalName();
        $jenisDoc= $request->input('jenis_doc');
        $alias = $request->input('xAlias');

        
        return self::storeFile($tokenPKWT,$originalFileName,$fileName,$jenisDoc,$request);
    }
    public function storeFile($tokenPKWT,$originalFileName,$onServerFileName,$jenisDoc,$request){
        if (isset($request->xAlias) && $request->input('xAlias')=='')
            return response()->json(['Gagal'=>'Alias Belum di Input']);
        try {
            if(PKWT_model::query()->where('tokenPKWT', '=', $tokenPKWT)->get()->count()<1){
                //insert pkwt table jika belum ada
                $PKWT_model = new PKWT_model();         
                $PKWT_model->idPerusahaan= 1;           
                $PKWT_model->kodeStatus= 1;
                $PKWT_model->aliasPKWT= $request->input('xAlias');
                $PKWT_model->keterangan= '';
                $PKWT_model->tokenPKWT= $tokenPKWT;
                if(self::getTypeDocbyJenisDoc($jenisDoc)==1)  {
                    $PKWT_model->isPKWT= 1;
                    $PKWT_model->isKontrak= 0;
                }else{
                    $PKWT_model->isPKWT= 0;
                    $PKWT_model->isKontrak= 1;
                }
                $PKWT_model->tokenPKWT= $tokenPKWT;
                $PKWT_model->save();         
            }else{
                $update['kodeStatus']=1;
                $update['updated_at']=Carbon::Now();
                if (isset($request->xAlias))
                    $update['aliasPKWT']=$request->input('xAlias');
                PKWT_model::query()
                  ->where(['tokenPKWT' =>  $tokenPKWT])
                  ->update($update);
            }
            $checkFilePKWT =file_PKWT::query()->where(['tokenPKWT' => $tokenPKWT,'jenisDoc'=>$jenisDoc])->get();
            if($checkFilePKWT->count()<1){
                //insert file jika belum pernah di upload 
                $file_PKWT_model = new File_PKWT();
                $file_PKWT_model->tokenPKWT= $tokenPKWT;
                $file_PKWT_model->originalFileName= $originalFileName;
                $file_PKWT_model->onServerFileName = $onServerFileName;
                $file_PKWT_model->verifikasi = 1;
                $file_PKWT_model->keterangan = '';
                $file_PKWT_model->jenisDoc = $jenisDoc;
                $file_PKWT_model->save();
            }else{
                //update pkwt table jika sudah ada
                File::delete('files/'.$checkFilePKWT->pluck('onServerFileName')[0]);
                file_PKWT::query()
                  ->where(['tokenPKWT' =>  $tokenPKWT, 'jenisDoc' => $jenisDoc])
                  ->update(['originalFileName' => $originalFileName,'onServerFileName'=>$onServerFileName,'updated_at'=>Carbon::Now()]);
            
            }
        } catch (Exception $e) {
            return $e;
        }
        return response()->json(['success'=>'File Telah Terkirim']);
    }
    public function download($path)
    { 
        $file= public_path(). "/files/";

        $headers = array(
                  'Content-Type: application/pdf',
                );

        return Response::download($file, '', $headers);
    }

    public function show($idFile)
    {
        $file=file_PKWT::query()->where(['idFile' => $idFile])->get();
        return response()->download(public_path('files/'.$file->pluck('onServerFileName')[0]),$file->pluck('originalFileName')[0]);
    }

    public function getTypeDocbyJenisDoc($jenisDoc){
        $file=PKWT_file_jenis::query()->where(['jenisDoc' => $jenisDoc])->get();
        if($file->pluck('isPKWTJasa')[0]=='1' or $file->pluck('isPKWTBorong')[0]=='1')
            return 1;
        else if($file->pluck('isKontrakJasa')[0]=='1' or $file->pluck('isKontrakBorong')=='1')
            return 2;
        else 
            return 0;
    }
}
