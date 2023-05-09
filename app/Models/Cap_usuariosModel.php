<?php 
namespace App\Models;

use CodeIgniter\Model;

class Cap_usuariosModel extends Model{
    protected $table      = 'usuario_capacitacion';
     protected $primaryKey = ' id_usuario_capacitacion';
     protected $allowedFields = ['fecha_inicio_capacitacion','fecha_fin_capacitacion','id_usuario','id_capacitacion'];

     public function datos_usuarios(){
        $builder = $this->db->table('usuario_capacitacion');
        $builder->select('usuario_capacitacion.*, usuario.nombre_usuario, usuario.apellidos_usuario, capacitacion.nombre_capacitacion');
        $builder->join('usuario', 'usuario_capacitacion.id_usuario = usuario.id_usuario');
        $builder->join('capacitacion', 'usuario_capacitacion.id_capacitacion = capacitacion.id_capacitacion');
        $query = $builder->get();

        return $query->getResult();
    }
}