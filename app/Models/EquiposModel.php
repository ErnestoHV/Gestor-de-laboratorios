<?php 
namespace App\Models;

use CodeIgniter\Model;

class EquiposModel extends Model{
    protected $table      = 'equipo';
    protected $primaryKey = 'id_equipo';
    protected $allowedFields = ['nombre_equipo','marca_equipo','modelo_equipo','tipo_equipo','descripcion_equipo','riesgo_equipo', 'id_laboratorio'];
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';

    public function datos_lab(){
        $builder = $this->db->table('equipo');
        $builder->select('equipo.*, laboratorio.nombre_laboratorio');
        $builder->join('laboratorio', 'equipo.id_laboratorio = laboratorio.id_laboratorio');
        $query = $builder->get();

        return $query->getResult();
    }
}