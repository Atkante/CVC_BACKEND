<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class TblImagene extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'tbl_imagenes';
    protected $fillable = [
        'id',
        'nombre',
        'idUbicacion',
        'idTipo'
    ];
    public $timestamps = false;
    
}
