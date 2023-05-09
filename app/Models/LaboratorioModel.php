<?php 
namespace App\Models;

use CodeIgniter\Model;

class LaboratorioModel extends Model{
    protected $table      = 'laboratorio';
    protected $primaryKey = 'id_laboratorio';
    protected $allowedFields = ['nombre_laboratorio','ubicacion_laboratorio','nombre_responsable','observacion_laboratorio','tipo_laboratorio','estado_laboratorio'];
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
}