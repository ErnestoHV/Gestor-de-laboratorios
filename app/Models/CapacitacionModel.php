<?php 
namespace App\Models;

use CodeIgniter\Model;

class CapacitacionModel extends Model{
    protected $table      = 'capacitacion';
    protected $primaryKey = 'id_capacitacion';
    protected $allowedFields = ['nombre_capacitacion','duracion_capacitacion','nombre_instructor','tipo_capacitacion'];
}