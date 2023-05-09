<?php 
namespace App\Models;

use CodeIgniter\Model;

class Cap_equiposModel extends Model{
    protected $table      = 'equipo_capacitacion';
     protected $primaryKey = 'id_equipo_capacitacion';
     protected $allowedFields = ['fecha_inicio_capacitacion','id_equipo','id_capacitacion'];

     public function datos_equipos(){
        $builder = $this->db->table('equipo_capacitacion');
        $builder->select('equipo_capacitacion.*, equipo.nombre_equipo, capacitacion.nombre_capacitacion');
        $builder->join('equipo', 'equipo_capacitacion.id_equipo = equipo.id_equipo');
        $builder->join('capacitacion', 'equipo_capacitacion.id_capacitacion = capacitacion.id_capacitacion');
        $query = $builder->get();

        return $query->getResult();
    }
}