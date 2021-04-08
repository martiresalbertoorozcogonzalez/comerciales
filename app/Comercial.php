<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comercial extends Model
{
    protected $fillable = [
      'nombre',
      'imagen_principal',
      'precio_contado',
      'precio_financiado',
      'millaje',
    //   'direccion',
    //   'colonia',
    //   'lat',
    //   'lng',
      'telefono',
      'descripcion',
      'apertura',
      'cierre',
      'uuid',
      'categoria_id',
      'condicion_id',
      'modelo_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function condicion()
    {
        return $this->belongsTo(Condicion::class);
    }

}
