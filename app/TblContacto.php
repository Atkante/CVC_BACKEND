<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class TblContacto extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'tbl_contactos';
    protected $fillable = [
        'id',
        'nombre',
        'asunto',
        'mensaje',
 
    ];
    public $timestamps = false;
}
