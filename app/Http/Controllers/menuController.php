<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\restaurante;
use App\Models\ciudad;
use App\Models\usuario;
use App\Models\platos;
use Auth;

class menuController extends Controller
{
    function main ($idRes){
        $platos = restaurante::find($idRes)->menu()->get();
        $prop = false;
        if(restaurante::find($idRes)->idUsu == Auth::user()->idUsu){
            $prop = true;
        }
        return view("menu/index",["platos"=>$platos,"prop"=>$prop,"idRes"=>$idRes]);
    }

    function add (Request $req){
        $idRes = intval($req->input("idRes"));
        $max = $this->selectMax();
       ++$max;
       DB::table("plato")->insert([
        "idPla" => $max,
        "nombre" => $req->input("name"),
        "descripcion" => $req->input("desc"),
       ]);
       $plato = platos::find($max);
       restaurante::find($idRes)->menu()->attach($max,["valoracion"=>0]);
       return redirect()->route("menu",["idRes"=>$idRes]);

    }

    public function selectMax() {
        $maxValue = platos::max('idPla');
        return $maxValue;
    }

    function verPlato ($idPla){
        $plato = platos::find($idPla);
        return view("menu.plato",["plato"=>$plato]);
    }
}
