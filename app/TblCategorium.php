<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class TblCategorium extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $table = 'tbl_categoria';
    
    protected $fillable = [
        'id',
        'nombre',
    ];
    public $timestamps = false;

}
