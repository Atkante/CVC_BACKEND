<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class TblImagenTipo extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'tbl_imagen_tipo';
    protected $fillable = [
        'id',
        'tipo',
    ];
    public $timestamps = false;
}
