<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List_perusahaan_model extends Model
{
	protected $table="list_perusahaan";
	protected $primaryKey="idPerusahaan";
	protected $fillable=['namaPerusahaan'];
}
