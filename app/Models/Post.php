<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Si no creas la variable table que apunta a una tabla, te busca la tabla
    //en este caso post en minúscula aunque sea singular o plural debe ser el mismo nombre
    //para que encuentre la tabla en BBDD.
    
    use HasFactory;

    //Administrar la tabla posts
    //protected $table = 'posts';

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            set: function($value){
                return strtolower($value);
            },
            get: function($value)
            {
                return ucfirst($value);
            }
        );
    }

    public function getRouteKeyName()
    {
        return 'category';
    }
}
