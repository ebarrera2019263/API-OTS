<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zona14; /**/
use App\Models\Petapa; /**/
use App\Models\amatitlan;/**/
use App\Models\antiguaguatemala;/**/
use App\Models\cascata;/**/
use App\Models\centrohistorico;/**/
use App\Models\chimaltenango;/**/
use App\Models\encinal;/**/
use App\Models\escalacarretera;/**/
use App\Models\majadas;/**/
use App\Models\mazatenango;/**/
use App\Models\metrocentrovillanueva;/**/
use App\Models\minutoMuxbal;/**/
use App\Models\naranjomall;/**/
use App\Models\plazacentral;/**/
use App\Models\plazamadero;/**/
use App\Models\praderaxela;/**/
use App\Models\telares;/**/
use App\Models\vistahermosa;/**/
use App\Models\xelaminerva;/**/
use App\Models\zona4;/**/
use App\Models\SanCristobalMixco; /**/
use App\Models\zona10;/**/

class apicontroller extends Controller
{
    public function petapa(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 28; // Asigna el id_tienda correspondiente a Petapa
            $idFromJson = $item['ID']; // Extrae el ID del JSON
            unset($item['ID']); // Elimina el campo ID para evitar duplicados (ya que no es autoincremental)

            // Crea el modelo con el ID del JSON
            Petapa::updateOrCreate(['ID' => $idFromJson], $item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 28)->get(),
        ]);
    }

    public function listPetapa($id_tienda)
{
    $productos = Petapa::where('id_tienda', $id_tienda)->get();

    return response()->json([
        'ok'     => true,
        'status' => 200,
        'body'   => $productos,
    ]);
}







    public function amatitlan(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 23; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 23)->get(), // Filtra por el id_tienda
        ]);
    }

    public function listamatitlan($id_tienda)
    {
        $productos = Petapa::where('id_tienda', $id_tienda)->get();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }












    public function antigua(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 12; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 12)->get(), // Filtra por el id_tienda
        ]);
    }

    public function listantigua($id_tienda)
    {
        $productos = Petapa::where('id_tienda', $id_tienda)->get();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }
    public function cascata(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 22; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 22)->get(), // Filtra por el id_tienda
        ]);
    }

    public function listcascata($id_tienda)
    {
        $productos = Petapa::where('id_tienda', $id_tienda)->get();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }

    public function centrohistorico(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 13; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 13)->get(), // Filtra por el id_tienda
        ]);
    }

    public function listcentrohistorico($id_tienda)
    {
        $productos = Petapa::where('id_tienda', $id_tienda)->get();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }

    public function chimaltenango(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 25; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 25)->get(), // Filtra por el id_tienda
        ]);
    }

    public function listchimaltenango( $id_tienda)
    {
        $productos = Petapa::where('id_tienda', $id_tienda)->get();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }

    public function encinal(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 24; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 24)->get(), // Filtra por el id_tienda
        ]);
    }


    public function listencinal( $id_tienda)
    {
        $productos = Petapa::where('id_tienda', $id_tienda)->get();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }

    public function escalacarretera(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 18; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 18)->get(), // Filtra por el id_tienda
        ]);
    }

    public function listescalacarretera($id_tienda)
    {
        $productos = Petapa::where('id_tienda', $id_tienda)->get();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }

    public function majadas(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 7; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 7)->get(), // Filtra por el id_tienda
        ]);
    }

    public function listmajadas($id_tienda)
    {
        $productos = Petapa::where('id_tienda', $id_tienda)->get();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }

    public function mazatenango(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 26; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 26)->get(), // Filtra por el id_tienda
        ]);
    }

    public function listmazatenango()
    {
        $productos = mazatenango::all();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }

    public function metrocentrovillanueva(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 17; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 17)->get(), // Filtra por el id_tienda
        ]);
    }


    public function listmetrocentrovillanueva($id_tienda)
    {
        $productos = Petapa::where('id_tienda', $id_tienda)->get();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }

    public function minutoMuxbal(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 29; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 29)->get(), // Filtra por el id_tienda
        ]);
    }

    public function listminutoMuxbal( $id_tienda)
    {
        $productos = Petapa::where('id_tienda', $id_tienda)->get();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }

    public function naranjoMall(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 14; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 14)->get(), // Filtra por el id_tienda
        ]);
    }

    public function listnaranjoMall ($id_tienda)
    {
        $productos = Petapa::where('id_tienda', $id_tienda)->get();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }

    public function plazacentral(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 8; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 8)->get(), // Filtra por el id_tienda
        ]);
    }


    public function listplazacentral ($id_tienda)
    {
        $productos = Petapa::where('id_tienda', $id_tienda)->get();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }


    public function plazamadero(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 20; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 20)->get(), // Filtra por el id_tienda
        ]);
    }

    public function listplazamadero ()
    {
        $productos = plazamadero::all();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }

    public function praderaxela(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 10; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 10)->get(), // Filtra por el id_tienda
        ]);
    }

    public function listpraderaxela ($id_tienda)
    {
        $productos = Petapa::where('id_tienda', $id_tienda)->get();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }

    public function sanCristobal(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 5; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 5)->get(), // Filtra por el id_tienda
        ]);
    }

    public function listsanCristobal ($id_tienda)
    {
        $productos = Petapa::where('id_tienda', $id_tienda)->get();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }

    public function telares(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 30; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 30)->get(), // Filtra por el id_tienda
        ]);
    }

    public function listtelares ($id_tienda)
    {
        $productos = Petapa::where('id_tienda', $id_tienda)->get();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }

    public function vistahermosa(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 11; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 11)->get(), // Filtra por el id_tienda
        ]);
    }

    public function listvistahermosa ($id_tienda)
    {
        $productos = Petapa::where('id_tienda', $id_tienda)->get();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }

    public function xelaminerva(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 9; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 9)->get(), // Filtra por el id_tienda
        ]);
    }

    public function listxelaminerva ()
    {
        $productos = xelaminerva::all();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }

    public function zona4(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 16; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 16)->get(), // Filtra por el id_tienda
        ]);
    }


    public function listzona4 ()
    {
        $productos = zona4::all();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }

    public function zona14(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 6; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 6)->get(), // Filtra por el id_tienda
        ]);
    }

    public function listzona14 ($id_tienda)
    {
        $productos = Petapa::where('id_tienda', $id_tienda)->get();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }

    public function zona10(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $item) {
            $item['id_tienda'] = 21; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 21)->get(), // Filtra por el id_tienda
        ]);
    }

    public function listzona10($id_tienda)
    {
        $productos = Petapa::where('id_tienda', $id_tienda)->get();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }
}
