<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Personal
 *
 * @property $id
 * @property $Nombre
 * @property $DUI
 * @property $Fehca_ingreso
 * @property $Cargo
 * @property $Nacimiento
 * @property $Contacto
 * @property $Parentesco
 * @property $Telefono
 * @property $Direccion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Personal extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre', 'DUI', 'Fehca_ingreso', 'Cargo', 'Nacimiento', 'Contacto', 'Parentesco', 'Telefono', 'Direccion'];



}
