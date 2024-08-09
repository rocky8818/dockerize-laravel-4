<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inmueble;

class ControllerIndex extends Controller
{
    public function index()
    {


       
        $inmuebles = Inmueble::orderBy('updated_at','DESC')->where('portada','=',1)->with(array('fotos' => function($query){
            $query->where('portada','=',1);
        }))->paginate(10);

        //dd($inmuebles);

        $lista =Inmueble::distinct()->pluck('ciudad');
        $titulo = "Inmuebles Vip";
        return view('app.index')->with('inmuebles', $inmuebles)->with('lista',$lista)->with('titulo',$titulo);
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function show($inmueble)
    {
        $inmueble = Inmueble::find($inmueble);
        if($inmueble == null){
            $inmuebles = Inmueble::orderBy('id','DESC')->where('portada','=',1)->paginate(10);
            $lista =Inmueble::distinct()->pluck('ciudad');
            $titulo = "¡Ups! No encontramos lo que estás buscando.";
            return view('app.index')->with('inmuebles', $inmuebles)->with('lista',$lista)->with('titulo',$titulo);
        }else{
            $lista =Inmueble::distinct()->pluck('ciudad');
        }    return view('app.show')->with('inmueble',$inmueble)->with('lista',$lista);
    }

    public function search(Request $request)
    {
        $categoria = $request->search_param;
        $listaPost = $request->lista;



        if($listaPost =='all'){
            if($categoria != "all"){
                if($categoria == "Terreno"){
                    $inmuebles = Inmueble::orderBy('id','DESC')
                        ->where('tipo','=',1)
                        ->paginate(10);
                }else{
                     $inmuebles = Inmueble::orderBy('id','DESC')
                        ->where('tipo','=',2)
                        ->paginate(10);
                }
            }else{
                $inmuebles = Inmueble::orderBy('id','DESC')
                        ->paginate(10);  
            }
        }else{
            if($categoria != "all"){
                if($categoria == "Terreno"){
                    $inmuebles = Inmueble::orderBy('id','DESC')
                        ->where('tipo','=',1)
                        ->where('ciudad','=',$listaPost)
                        ->paginate(10);
                }else{
                     $inmuebles = Inmueble::orderBy('id','DESC')
                        ->where('tipo','=',2)
                        ->where('ciudad','=',$listaPost)
                        ->paginate(10);
                }
            }else{
                $inmuebles = Inmueble::orderBy('id','DESC')
                        ->where('ciudad','=',$listaPost)
                        ->paginate(10);  
            }
        }


        $lista = Inmueble::distinct()->pluck('ciudad');
        if($categoria == "all"){
            $titulo ="Busqueda de inmuebles en ".$listaPost;
        }else{
            $titulo = "Busqueda de inmuebles en ".$categoria." ciudad ".$listaPost;
        } 
        return view('app.index')->with('inmuebles', $inmuebles)->with('lista',$lista)->with('titulo',$titulo);
    }
}
