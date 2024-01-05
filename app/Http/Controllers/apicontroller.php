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
            $item['id_tienda'] = 1; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }
    
        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 1)->get(), // Filtra por el id_tienda
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
            $item['id_tienda'] = 2; // Asigna el id_tienda correspondiente a Petapa
            Petapa::create($item);
        }
    
        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => Petapa::where('id_tienda', 2)->get(), // Filtra por el id_tienda
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
            antiguaguatemala::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => antiguaguatemala::all(),
        ]);
    }

    public function listantigua()
    {
        $productos = antiguaguatemala::all();

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
            cascata::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => cascata::all(),
        ]);
    }

    public function listcascata()
    {
        $productos = cascata::all();

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
            centrohistorico::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => centrohistorico::all(),
        ]);
    }

    public function listcentrohistorico()
    {
        $productos = centrohistorico::all();

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
            chimaltenango::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => chimaltenango::all(),
        ]);
    }

    public function listchimaltenango()
    {
        $productos = chimaltenango::all();

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
            encinal::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => encinal::all(),
        ]);
    }

    public function listencinal()
    {
        $productos = encinal::all();

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
            escalacarretera::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => escalacarretera::all(),
        ]);
    }

    public function listescalacarretera()
    {
        $productos = escalacarretera::all();

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
            majadas::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => majadas::all(),
        ]);
    }

    public function listmajadas()
    {
        $productos = majadas::all();

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
            mazatenango::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => mazatenango::all(),
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
            metrocentrovillanueva::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => metrocentrovillanueva::all(),
        ]);
    }

    public function listmetrocentrovillanueva()
    {
        $productos = metrocentrovillanueva::all();

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
            minutoMuxbal::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => minutoMuxbal::all(),
        ]);
    }

    public function listminutoMuxbal()
    {
        $productos = minutoMuxbal::all();

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
            naranjomall::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => naranjomall::all(),
        ]);
    }

    public function listnaranjoMall ()
    {
        $productos = naranjomall::all();

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
            plazacentral::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => plazacentral::all(),
        ]);
    }

    public function listplazacentral ()
    {
        $productos = plazacentral::all();

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
            plazamadero::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => plazamadero::all(),
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
            praderaxela::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => praderaxela::all(),
        ]);
    }

    public function listpraderaxela ()
    {
        $productos = praderaxela::all();

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
            SanCristobalMixco::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => SanCristobalMixco::all(),
        ]);
    }

    public function listsanCristobal ()
    {
        $productos = SanCristobalMixco::all();

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
            telares::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => telares::all(),
        ]);
    }

    public function listtelares ()
    {
        $productos = telares::all();

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
            vistahermosa::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => vistahermosa::all(),
        ]);
    }

    public function listvistahermosa ()
    {
        $productos = vistahermosa::all();

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
            xelaminerva::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => xelaminerva::all(),
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
            zona4::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => zona4::all(),
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
            zona14::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => zona14::all(),
        ]);
    }

    public function listzona14 ()
    {
        $productos = zona14::all();

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
            zona10::create($item);
        }

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => zona10::all(),
        ]);
    }

    public function listzona10()
    {
        $productos = zona10::all();

        return response()->json([
            'ok'     => true,
            'status' => 200,
            'body'   => $productos,
        ]);
    }
}
