<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direcciones;

class direccionController extends Controller
{
    public function postDireccion(Request $request)
    {
        // Validar los datos de la solicitud
        $request->validate([
            'Numero' => 'required',
            'Nombre' => 'required',
            'Apellido' => 'required',
            'Nit' => 'required',
            'Direccion' => 'required',
            'Indicacion' => 'required',
            'Pais' => 'required',
            'Departamento' => 'required',
            'Ciudad' => 'required',
            'Municipio' => 'required',
            'email' => 'required',
            'id_tienda' => 'required',
            // Otros campos y reglas de validación...
        ]);

        // Crear una nueva instancia del modelo Direccion con los datos de la solicitud
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

            
            // Otros campos...
        ]);

        // Guardar la nueva dirección en la base de datos
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
        // Buscar la dirección por ID
        $address = Direcciones::find($id);

        // Verificar si la dirección existe
        if (!$address) {
            return response()->json([
                'ok' => false,
                'status' => 404,
                'message' => 'Dirección no encontrada.',
            ], 404);
        }

        // Eliminar la dirección
        $address->delete();

        return response()->json([
            'ok' => true,
            'status' => 200,
            'message' => 'Dirección eliminada exitosamente.',
        ]);
    }
}

