<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class TblUbicacionImagen extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'tbl_ubicacion_imagen';
    protected $fillable = [
        'id',
        'ubicacion'        
    ];
    public $timestamps = false;
}
