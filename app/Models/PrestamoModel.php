<?php 
namespace App\Models;

use CodeIgniter\Model;

class PrestamoModel extends Model{
    protected $table      = 'prestamo';
    protected $primaryKey = 'id_prestamo';
    protected $allowedFields = ['fecha_prestamo','hora_fin_prestamo','observacion_prestamo','id_laboratorio','id_usuario','id_equipo',];
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';

    public function datos_gen(){
        $builder = $this->db->table('prestamo');
        $builder->select('prestamo.*, equipo.nombre_equipo, usuario.apellidos_usuario, laboratorio.nombre_laboratorio, usuario.nombre_usuario');
        $builder->join('equipo', 'prestamo.id_equipo = equipo.id_equipo');
        $builder->join('laboratorio', 'prestamo.id_laboratorio = laboratorio.id_laboratorio');
        $builder->join('usuario', 'prestamo.id_usuario = usuario.id_usuario');
        $query = $builder->get();

        return $query->getResult();
    }

    public function datos_prestamos(){
        $session = session();
        $matri = $session->get("matricula");
        $builder = $this->db->table('prestamo');
        $builder->select('prestamo.*, equipo.nombre_equipo, usuario.matricula, laboratorio.nombre_laboratorio, fecha_prestamo, hora_fin_prestamo, observacion_prestamo');
        $builder->join('equipo', 'prestamo.id_equipo = equipo.id_equipo');
        $builder->join('laboratorio', 'prestamo.id_laboratorio = laboratorio.id_laboratorio');
        $builder->join('usuario', 'prestamo.id_usuario = usuario.id_usuario');
        $builder->where('matricula', $matri);

        $query = $builder->get();

        return $query->getResult();
    }
}