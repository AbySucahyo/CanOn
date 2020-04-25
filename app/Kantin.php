<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kantin extends Model
{
    protected $table = "kantin" ;
    protected $primaryKey = "id" ;
    protected $fillable = [
        'nama_kantin', 'id_penjual',
    ];

    public $timestamps = false ;
}
