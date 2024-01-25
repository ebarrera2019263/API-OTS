<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direcciones;

class direccionController extends Controller
{
    public function postDireccion(Request $request)
    {

        $request->validate([

            'Numero' => 'required',
            'Nombre' => 'required',
            'Apellido' => 'required',
            'Nit' => 'required',
            'Direccion' => 'required',
            'email' => 'required|email',
            'id_tienda' => 'required',
            'Indicacion' => 'nullable',
            'Pais' => 'nullable',
            'Departamento' => 'nullable',
            'Ciudad' => 'nullable',
            'Municipio' => 'nullable',
        ]);


        $address = new Direcciones([
            'Numero' => $request->input('Numero'),
            'Nombre' => $request->input('Nombre'),
            'Apellido' => $request->input('Apellido'),
            'Nit' => $request->input('Nit'),
            'Direccion' => $request->input('Direccion'),
            'Indicacion' => $request->input('Indicacion'),
            'Pais' => $request->input('Pais'),
            'Departamento' => $request->input('Departamento'),
            'Ciudad' => $request->input('Ciudad'),
            'Municipio' => $request->input('Municipio'),
            'email' => $request->input('email'),
            'id_tienda' => $request->input('id_tienda'),



        ]);

        $address->save();

        return response()->json([
            'ok' => true,
            'status' => 201,
            'message' => 'Dirección creada exitosamente.',
            'body' => $address,
        ], 201);
    }

    public function getDireccionesByPhone($numero)
    {
        $address = Direcciones::where('Numero', $numero)->get();

        return response()->json([
            'ok' => true,
            'status' => 200,
            'body' => $address,
        ]);
    }


    public function deleteDireccion($id)
    {
        $address = Direcciones::find($id);

        if (!$address) {
            return response()->json([
                'ok' => false,
                'status' => 404,
                'message' => 'Dirección no encontrada.',
            ], 404);
        }

        $address->delete();

        return response()->json([
            'ok' => true,
            'status' => 200,
            'message' => 'Dirección eliminada exitosamente.',
        ]);
    }

    public function putDireccion(Request $request, $id)
    {
        $request->validate([
            // Validaciones similares a las del método postDireccion
        ]);

        $address = Direcciones::find($id);

        if (!$address) {
            return response()->json([
                'ok' => false,
                'status' => 404,
                'message' => 'Dirección no encontrada.',
            ], 404);
        }

        $address->fill($request->all());
        $address->save();

        return response()->json([
            'ok' => true,
            'status' => 200,
            'message' => 'Dirección actualizada exitosamente.',
            'body' => $address,
        ]);
    }





}

