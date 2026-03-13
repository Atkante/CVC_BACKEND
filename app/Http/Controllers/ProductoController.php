<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductoController extends Controller
{
    public function get_productos_and_categoria()
    {
        $productos = \DB::table('tbl_productos')
            ->join('tbl_categoria', 'tbl_productos.idCategoria', '=', 'tbl_categoria.id')
            ->select('tbl_productos.*', 'tbl_categoria.nombre as categoria')
            ->get();

        return response()->json($productos);
    }
}
