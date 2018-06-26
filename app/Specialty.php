<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    public $timestamps = false;

	protected $table = 'specialtys';

    protected $fillable = ['name','resumen','description','timeCite'];

    // protected $casts = [
	//     'citaDate' => 'date:Y-m-d'
	// ];
}
