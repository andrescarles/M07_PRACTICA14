<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'article';
    protected $fillable =[
        'nom',
        'descripcio',
        'preu_compra',
        'preu_venta',
        'enviament_domicili',
        'stock',
        'observacions',
    ];
    protected $hidden =[];
    protected static function Factoria(){
        return \Database\Factories\ArticleFactory::new();
    }
}
