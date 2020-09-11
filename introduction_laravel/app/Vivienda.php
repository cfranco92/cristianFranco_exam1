<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vivienda extends Model
{
    //attributes id, direccion , tipo, valor_comercial, created at, updated at 
    protected $fillable = [
        'direccion', 'tipo', 'valor_comercial'
    ];

    // Id - SET & GET
    public function getId() {
        return $this->attributes['id'];
    }
    public function setId($id) {
        $this->attributes['id'] = $id;
    }

    // Direccion - SET & GET
    public function getDireccion() {
        return $this->attributes['direccion'];
    }
    public function setDireccion($direccion) {
        $this->attributes['diraccion'] = $direccion;
    }

    // Tipo - SET & GET
    public function getTipo() {
        return $this->attributes['tipo'];
    }
    public function setTipo($tipo) {
        $this->attributes['tipo'] = $tipo;
    }

    // ValorComercial - SET & GET
    public function getValorComercial() {
        return $this->attributes['valor_comercial'];
    }
    public function setValorComercial($valor_comercial) {
        $this->attributes['valor_comercial'] = $valor_comercial;
    }
}
