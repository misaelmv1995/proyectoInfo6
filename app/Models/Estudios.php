<?php

namespace App\Models;

use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudios extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $fillable = ['tipo', 'fecha_estudio', 'asistencia', 'fecha_entrega', 'fecha_proximo_estudio', 'fecha_revision_estudio', 'resultado'];
}
