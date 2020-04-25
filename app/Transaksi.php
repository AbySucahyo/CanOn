<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi" ;
    protected $primaryKey = "id" ;
    protected $fillable = [
        'id_pelanggan','id_kantin','tgl_transaksi','status', 
    ];

    public $timestamps = false ;
}
