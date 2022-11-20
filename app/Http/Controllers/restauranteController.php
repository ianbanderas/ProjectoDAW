<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\restaurante;
use App\Models\ciudad;
use App\Models\usuario;
use Auth;



class restauranteController extends Controller
{
    function main (){
        $restaurante = restaurante::all();
        $ciudad = ciudad::all();
        $usuario = usuario::all();
        return view("restaurante/main",["restaurante"=>$restaurante,"ciudad"=>$ciudad,"usuario"=>$usuario]);
    }

    function borrar(Request $req,$idTab) {

        $restaurante = restaurante::find($idTab);
        $restaurante->delete();
     
        return redirect('main');
        
    }
    function add(Request $req){
       // var_dump($req->all());
       // dd(Auth::id());
       $max = $this->selectMax();
       ++$max;
       DB::table("restaurante")->insert([
        "idRes" => $max,
        "nombre" => $req->input("formRes"),
        "idCiu" => $req->input("formCiu"),
        "idUsu" => Auth::id()    
       ]);

       return redirect('main');
    }

    public function selectMax() {
        $maxValue = restaurante::max('idRes');
        return $maxValue;
    }
}
