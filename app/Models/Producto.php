<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 
        'descripcion',
        'beneficios',
        'ingredientes',
        'precio',
        'precio_descuento',
        'img_path_principal',
        'img_path_paquete',
        'img_path_izq',
        'img_path_der',
        'is_active'
    ];

    protected function image(): Attribute
    {
        return new Attribute(
            //get: fn () => $this->img_path ?? 'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg'
            get: function(){
                if($this->img_path_principal){
                    //return $this->img_path;
                    //Verificar si la url comienza con http://
                        if (substr($this->img_path_principal,0,8) === 'https://') {
                            return $this->img_path_principal;
                        }
                        return Storage::url($this->img_path_principal);
                }else{
                    return 'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg';
                }
            }
        );
    }

    public function getImagePaAttribute()
    {
        if ($this->img_path_paquete) {
            // Verificar si la URL comienza con http:// o https://
            if (strpos($this->img_path_paquete, 'http://') === 0 || strpos($this->img_path_paquete, 'https://') === 0) {
                return $this->img_path_paquete;
            }
            // Si no es una URL completa, asumimos que es una ruta de almacenamiento y la convertimos en una URL pública
            return Storage::url($this->img_path_paquete);
        }
    
        // Si no hay una imagen principal definida, puedes devolver una URL predeterminada o null según tu necesidad
        return 'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg';
    }

    public function getImageIzqAttribute()
    {
        if ($this->img_path_izq) {
            // Verificar si la URL comienza con http:// o https://
            if (strpos($this->img_path_izq, 'http://') === 0 || strpos($this->img_path_izq, 'https://') === 0) {
                return $this->img_path_izq;
            }
            // Si no es una URL completa, asumimos que es una ruta de almacenamiento y la convertimos en una URL pública
            return Storage::url($this->img_path_izq);
        }
    
        // Si no hay una imagen principal definida, puedes devolver una URL predeterminada o null según tu necesidad
        return 'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg';
    }

    public function getImageDerAttribute()
    {
        if ($this->img_path_der) {
            // Verificar si la URL comienza con http:// o https://
            if (strpos($this->img_path_der, 'http://') === 0 || strpos($this->img_path_der, 'https://') === 0) {
                return $this->img_path_der;
            }
            // Si no es una URL completa, asumimos que es una ruta de almacenamiento y la convertimos en una URL pública
            return Storage::url($this->img_path_der);
        }
    
        // Si no hay una imagen principal definida, puedes devolver una URL predeterminada o null según tu necesidad
        return 'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg';
    }
    

    // protected function image_der(): Attribute
    // {
    //     return new Attribute(
    //         //get: fn () => $this->img_path ?? 'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg'
    //         get: function(){
    //             if($this->img_path_der){
    //                 //return $this->img_path;
    //                 //Verificar si la url comienza con http://
    //                     if (substr($this->img_path_der,0,8) === 'https://') {
    //                         return $this->img_path_der;
    //                     }
    //                     return Storage::url($this->img_path_der);
    //             }else{
    //                 return 'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg';
    //             }
    //         }
    //     );
    // }



}
