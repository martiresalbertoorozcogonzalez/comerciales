<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //Leer las rutas por el slug
    public function getRouteKeyName()
    {
        return 'slug';
    }

    //Relacion 1:n para categorias y comerciales o establecimientos
    public function comerciales()
    {
        return $this->hasMany(Comercial::class);
    }
}
