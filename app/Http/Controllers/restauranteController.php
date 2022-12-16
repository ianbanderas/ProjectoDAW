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
    function main ($r=null){
        if($r==null){
        $restaurante = restaurante::all();
        }else{
        $restaurante = $r;
        }
        $x = [];
        foreach($restaurante as $valor){
            //dump($valor->menu()->get()->count());
            if ($valor->menu()->get()->count() > 0){
                array_push($x,$valor);
            }
        }
        $ciudad = ciudad::all();
        $usuario = usuario::all();
        $cat = [];
        $t = restaurante::all();
        foreach ($t as $item){
            array_push($cat,$item->categoria);
        }
        if(count($restaurante) == 0 ){
            $mensaje = true;
            return view("restaurante/main",["restaurante"=>$x,"ciudad"=>$ciudad,"usuario"=>$usuario,"cat"=>$cat,"mensaje"=>$mensaje]);
        }else{
            return view("restaurante/main",["restaurante"=>$x,"ciudad"=>$ciudad,"usuario"=>$usuario,"cat"=>$cat]);
        }
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
        "categoria" => $req->input("formResCat"),
        "idCiu" => $req->input("formCiu"),
        "idUsu" => Auth::id()    
       ]);

       return redirect('main');
    }

    public function selectMax() {
        $maxValue = restaurante::max('idRes');
        return $maxValue;
    }

    function cat(Request $req){
        $restaurante = restaurante::where("categoria",$req->input("cat"))->get();
        return $this->main($restaurante);
    }
    function ciu(Request $req){
        $restaurante = restaurante::where("idCiu",$req->input("ciudad"))->get();
        return $this->main($restaurante);
    }
}
