<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class TblInteraccione extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'tbl_interacciones';
    protected $fillable = [
        'id',
        'idProducto',
        'created_at',
        'updated_at'
    ];
    public $timestamps = true;
}
