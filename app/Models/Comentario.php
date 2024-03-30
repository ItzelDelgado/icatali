<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = [
        'alias',
        'comentario',
        'img_path',
        'is_active'
    ];

    protected function image(): Attribute
    {
        return new Attribute(
            //get: fn () => $this->img_path ?? 'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg'
            get: function(){
                if($this->img_path){
                    //return $this->img_path;
                    //Verificar si la url comienza con http://
                        if (substr($this->img_path,0,8) === 'https://') {
                            return $this->img_path;
                        }
                        return Storage::url($this->img_path);
                }else{
                    return 'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg';
                }
            }
        );
    }
}
