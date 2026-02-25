<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagenesController extends Controller
{
    public function get_imagenes_by_ubicacion(Request $request)
    {
        $imagenes = \DB::table('tbl_imagenes')
            ->join('tbl_ubicacion_imagen', 'tbl_imagenes.idUbicacion', '=', 'tbl_ubicacion_imagen.id')
            ->join('tbl_imagen_tipo', 'tbl_imagenes.idTipo', '=', 'tbl_imagen_tipo.id')
            ->where('tbl_ubicacion_imagen.ubicacion', $request->ubicacion)
            ->select('tbl_imagenes.id', 'tbl_imagenes.nombre', 'tbl_ubicacion_imagen.ubicacion', 'tbl_imagen_tipo.tipo')
            ->get();

        return response()->json($imagenes);
    }    


}
