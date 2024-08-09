<?php

namespace App;


use Image;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = "fotos";
    protected $fillable = ['inmueble_id','nombre','portada'];

    public function inmueble(){
        return $this->belongsTo('App\Inmueble');
    }

    public function _uploadImage($image,$thum = false){
        $file = $image;
        $nombre = $file->getClientOriginalName();
        $trozos = explode(".", $nombre);
        $extension = end($trozos);

        if($extension=="svg" || $extension=="png" || $extension=="jpg" || $extension=="JPG"){
            //$path = \Storage::disk('impresion')->put($newImageName, \File::get($file));
            $newImageName = $this->id.md5($nombre).".".$image->getClientOriginalExtension();
            \Storage::disk('inmueble')->put($newImageName, \File::get($file));
            //$image->move($path, $newImageName);
            $this->nombre = $newImageName;
            $this->save();
        }

        if($thum){
            $image = Image::make( \Storage::disk('inmueble')->get($newImageName));

            $image->resize(400, null, function ($constraint) {
              $constraint->aspectRatio();
              $constraint->upsize();
            });

            \Storage::disk('inmueble')->put($newImageName, $image->encode('jpg', 60));
        }
    }

    public function _replaceImage($image,$oldName,$thum = false){
        $file = $image;
        $nombre = $file->getClientOriginalName();
        $trozos = explode(".", $nombre);
        $extension = end($trozos);

        if($extension=="svg" || $extension=="png" || $extension=="jpg" || $extension=="JPG"){
            $newImageName =  "1".$oldName;
            \Storage::disk('inmueble')->put($newImageName, \File::get($file));
            \Storage::disk('inmueble')->delete($oldName);
            //$image->move($path, $newImageName);
        }

        if($thum){
            $image = Image::make( \Storage::disk('inmueble')->get($newImageName));

            $image->resize(400, null, function ($constraint) {
              $constraint->aspectRatio();
              $constraint->upsize();
            });

            \Storage::disk('inmueble')->put($newImageName, $image->encode('jpg', 60));
        }
    }

    public function _deleteFoto($nombre){
        \Storage::disk('inmueble')->delete($nombre);
    }
}
