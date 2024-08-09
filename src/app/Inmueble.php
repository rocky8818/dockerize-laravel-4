<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    protected $table = "inmuebles";
    protected $fillable = ['titulo','tipo','categoria','direccion','cp','colonia','ciudad','estado','latitud','longitud','cuartos','descripcion','metros','precio','portada'];

    public function fotos(){
        return $this->hasMany('App\Foto');
    }

    public function getFotos(){
        return $this->hasMany('App\Foto')->where('portada','=',0);
    }

    public function getFoto(){
    	return $this->hasMany('App\Foto')->where('portada','=',1)->first();
    }
    public function getHayFoto(){
    	$foto = $this->hasMany('App\Foto')->where('portada','=',1)->first();
    	if(empty($foto)){
    		return false;
    	}else{
    		return true;
    	}
    }
    public function getCuantas(){
    	return $this->fotos()->count();
    }

    public function getTipo(){
        $tipo = $this->tipo;
        switch ($tipo) {
            case "0":
                return "Departamento";
            break;
            case "1":
                return "Terreno";
            break;
            case "2":
                return "Casa";
            break;
            case "3":
                return "Oficina";
            break;
            case "4":
                return "Otro";
            break;
        } 
    }

    public function getCategoria(){
        $categoria = $this->categoria;
        switch ($categoria) {
            case "0":
                return "Venta";
            break;
            case "1":
                return "Renta";
            break;
        } 
    }

    public static function boot()
    {
        parent::boot();    
    
        // cause a delete of a product to cascade to children so they are also deleted
        static::deleted(function($inmueble)
        {
            $inmueble->fotos()->delete();
        });
    }
}