<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PKWT_file_jenis extends Model
{
	protected $table="pkwt_file_jenis";
	protected $primaryKey="jenisDoc";
	protected $fillable=['namaJenis','isPKWTJasa'];
}
