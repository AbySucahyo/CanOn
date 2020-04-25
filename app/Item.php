<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "item" ;
    protected $primaryKey = "id" ;
    protected $fillable = [
        'id_jenis','id_kantin','nama_item','harga','status',
    ];

    public $timestamps = false ;
}
