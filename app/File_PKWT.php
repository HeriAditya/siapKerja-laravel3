<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File_PKWT extends Model
{
	protected $table="file_pkwt";
	protected $primaryKey="idFile";
	protected $fillable=['idPKWT','originalFileName','onServerFileName','jenisDoc','verifikasi','keterangan'];
	
}
