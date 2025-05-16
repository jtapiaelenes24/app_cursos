<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Curso extends Model
{
    //
    use HasFactory;

    // protected $fillable = ['name', 'description', 'categoria'];

    protected $guarded = [];

    protected function name(): Attribute
    {
        return new Attribute(
            // Accesor: función que permite modificar los valores de los atributos del modelo 
            // después de que se hayan recuperado de la base datos
            get: function ($value) {
                return ucwords($value);
            },
            // Mutador: función que asegura que los datos estén en el formato correcto antes
            // de ser enviados a la base de datos
            set: function ($value) {
                return strtolower(filter_var($value, FILTER_SANITIZE_STRING));
            }
        );
    }
}
