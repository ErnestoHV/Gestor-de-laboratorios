<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PrestamoModel;
use App\Models\UserModel;
use App\Models\LaboratorioModel;
use App\Models\EquiposModel;
class Prestamos extends Controller{
    public function index(){
        $prest = new PrestamoModel();
        $datos_gen=$prest->orderBy('id_prestamo','ASC')->datos_gen();
        $datos_prestamo=$prest->orderBy('id_prestamo','ASC')->findAll();
        $user = new UserModel();
        $lab = new LaboratorioModel();
        $equ = new EquiposModel();
        $datos_user=$user->orderBy('id_usuario','ASC')->findAll();
        $datos_lab=$lab->orderBy('id_laboratorio','ASC')->findAll();
        $datos_equ=$equ->orderBy('id_equipo','ASC')->findAll();
        return view('prestamos',['prestamo'=>$datos_prestamo, 'general'=>$datos_gen, 'usuario'=>$datos_user, 'laboratorio'=>$datos_lab, 'equipo'=>$datos_equ]);
    }

    public function registro(){
        
        $user =new UserModel();
        $lab = new LaboratorioModel();
        $equ = new EquiposModel();
        $datos_user=$user->orderBy('id_usuario','ASC')->findAll();
        $datos_lab=$lab->orderBy('id_laboratorio','ASC')->findAll();
        $datos_equ=$equ->orderBy('id_equipo','ASC')->findAll();
        return view('registro_prestamo',['usuario'=>$datos_user, 'laboratorio'=>$datos_lab, 'equipo'=>$datos_equ]);

        
    }


    public function alta_prestamo(){
        $sessions = session();
        $user =new PrestamoModel();
        $equipo = $this->request->getPost('presIdEquipo');
        if($equipo != 0){
            $datos=[
                'hora_fin_prestamo' =>$this->request->getPost('presHoraFin'),
                'observacion_prestamo' =>$this->request->getPost('presObservacion'),
                'id_laboratorio' =>$this->request->getPost('presIdLaboratorio'),
                'id_usuario' =>$this->request->getPost('presIdUsuario'),
                'id_equipo' =>$this->request->getPost('presIdEquipo'),
                ];
        }else{
            $datos=[
                'hora_fin_prestamo' =>$this->request->getPost('presHoraFin'),
                'observacion_prestamo' =>$this->request->getPost('presObservacion'),
                'id_laboratorio' =>$this->request->getPost('presIdLaboratorio'),
                'id_usuario' =>$this->request->getPost('presIdUsuario'),
                'id_equipo' => NULL,
                ];
        }

        $respuesta=$user->insert($datos);
        $session = session();
        $session->setFlashdata('success', 'El préstamo ha sido creado con éxito.');
        if($sessions->get('rol')==0 || $sessions->get('rol')==1){
            return redirect()->to(base_url('prestamos'));
        }else{
            if($sessions->get('rol') == null || $sessions->get('rol')!=0 || $sessions->get('rol')!=1){
                return redirect()->to(base_url('alumno'));
            }
        }
    }

    public function eliminar($id){
        $modelo = new PrestamoModel();
        $modelo->where('id_prestamo', $id)->delete($id);
        return redirect()->to(base_url('prestamos'))->with('status', 'préstamo eliminado correctamente');
    }

    public function editar($id){
        $datos_user=$this->UserModel->findAll();
        $datos_lab=$this->LaboratorioModel->findAll();
        $datos_equ=$this->EquiposModel->findAll();
        return view('mod_prestamo',['usuario'=>$datos_user, 'laboratorio'=>$datos_lab, 'equipo'=>$datos_equ]);
    }

    public function modificar($id){
        $user =new PrestamoModel();
        $datos=[
        'fecha_prestamo' =>$this->request->getPost('fecha'),
        'hora_inicio_prestamo' =>$this->request->getPost('EpresHoraIn'),
        'hora_fin_prestamo' =>$this->request->getPost('EpresHoraFin'),
        'observacion_prestamo' =>$this->request->getPost('EpresObservacion'),
        'id_laboratorio' =>$this->request->getPost('EpresIdLaboratorio'),
        'id_usuario' =>$this->request->getPost('EpresIdUsuario'),
        'id_equipo' =>$this->request->getPost('EpresIdEquipo'),
        ];
        $user->update($id, $datos);
        $session = session();
        $session->setFlashdata('success', 'El préstamo fue actualizado con éxito.');
        return redirect()->to(base_url('prestamos'));
        }
    


}