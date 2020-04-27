<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PKWT extends Model
{
	protected $table="pkwt";
	protected $primaryKey="idFPKWT";
	protected $fillable=['idPerusahaan','tokenPKWT','aliasPKWT','isPKWT','isKontrak'];
}
