<?php

namespace App;
// use App\User;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['foto','nama_barang', 'detail', 'user_id','status'];

    public function user(){
        return $this->belongsTo( User::class, 'user_id', 'id' );
    }
}
