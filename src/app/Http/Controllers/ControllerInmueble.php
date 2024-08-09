<?php

namespace App\Http\Controllers;

use App\Foto;

use App\Inmueble;
use Illuminate\Http\Request;

class ControllerInmueble extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inmuebles = Inmueble::orderBy('id','DESC')->paginate(10);
        return view('admin/inmueble/index')->with('inmuebles', $inmuebles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin/inmueble/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inmueble = new Inmueble($request->all());
        $inmueble->save();
        if($request->img){
            $foto = new Foto();
            $foto->inmueble_id = $inmueble->id;
            $foto->nombre = $inmueble->id;
            $foto->portada = 1;
            $foto->save();
            $foto->_uploadImage($request->img,true);
        }
        return redirect()->route('inmueble.upimg',$inmueble->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function show(Inmueble $inmueble)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function edit(Inmueble $inmueble)
    {
        return view('admin/inmueble/edidt')->with('inmueble',$inmueble);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inmueble $inmueble)
    {
        $inmueble->update($request->all());
        $inmueble->save();

        if(isset($request->img)){
            if($inmueble->getHayFoto()){
                $foto = Foto::find($inmueble->getFoto()->id);
                $nombre = $foto->nombre;
                $foto->_replaceImage($request->img,$nombre,true);
                $foto->nombre = "1".$nombre;
                $foto->save();
            }else{
                $foto = new Foto();
                $foto->inmueble_id = $inmueble->id;
                $foto->nombre = $inmueble->id;
                $foto->portada = 1;
                $foto->save();
                $foto->_uploadImage($request->img,true); 
            }
        }
        return redirect()->route('inmueble.upimg',$inmueble->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inmueble $inmueble)
    {
        if(!$inmueble->getCuantas()<=0){
            foreach ($inmueble->fotos as $foto) {
                $foto->_deleteFoto($foto->nombre);
            }
        }
        $inmueble->delete();
        return back();
    }

    public function upMultiImages(Inmueble $inmueble){
        return view('admin.inmueble.upimages')->with('inmueble',$inmueble);
    }

    public function upDataMultiImages(Request $request, Inmueble $inmueble){
        foreach ($request->img as $img) {
            $foto = new Foto();
            $foto->inmueble_id = $inmueble->id;
            $foto->nombre = $inmueble->id;
            $foto->portada = 0;
            $foto->save();
            $foto->_uploadImage($img);
        }
        return back();
    }

    public function deleteFoto($id){
        $foto = Foto::find($id);
        $foto->_deleteFoto($foto->nombre);
        $foto->delete();
        return back();
    }
}
