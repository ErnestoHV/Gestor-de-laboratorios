<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CapacitacionModel;
use App\Models\UserModel;
use App\Models\EquiposModel;
use App\Models\Cap_usuariosModel;
use App\Models\Cap_equiposModel;


class Capacitacion extends Controller{
    public function index(){
        $user =new CapacitacionModel();
        $datos['capacitacion']=$user->orderBy('id_capacitacion','ASC')->findAll();
        return view('capacitacion',$datos);
   
    }

    public function registro(){
        return view('registro_capacitacion');
    }
    public function alta_capacitacion(){
        $user =new CapacitacionModel();
        $datos=[
        'nombre_capacitacion' =>$this->request->getPost('capNombre'),
        'duracion_capacitacion' =>$this->request->getPost('capDuracion'),
        'nombre_instructor' =>$this->request->getPost('capInstructor'),
        'tipo_capacitacion' =>$this->request->getPost('capTipo'),
        ];
        $respuesta=$user->insert($datos);
        $session = session();
        $session->setFlashdata('success', 'El curso de capacitación ha sido creado con éxito.');
        return redirect()->to(base_url('capacitacion'));
        }

    public function eliminar($id){
        $modelo = new CapacitacionModel();
        $modelo->where('id_capacitacion', $id)->delete($id);
        return redirect()->to(base_url('capacitacion'))->with('status', 'Capacitacion eliminada correctamente');
    }

            public function modificar($id){
            $user =new CapacitacionModel();
            $datos=[
                'nombre_capacitacion' =>$this->request->getPost('EcapNombre'),
                'duracion_capacitacion' =>$this->request->getPost('EcapDuracion'),
                'nombre_instructor' =>$this->request->getPost('EcapInstructor'),
                'tipo_capacitacion' =>$this->request->getPost('EcapTipo'),
            ];
            $user->update($id, $datos);
            $session = session();
            $session->setFlashdata('success', 'El capacitacion fue actualizado con éxito.');
            return redirect()->to(base_url('capacitacion'));
            }


            //Funciones EXTRA

//////////////////////////////////////////////////////////////////
            //FUNCION PARA USUARIOS-CAPACITACIÓN//
/////////////////////////////////////////////////////////////////
            public function index2(){
                $capuser =new Cap_usuariosModel();
                $user = new UserModel();
                $cap = new CapacitacionModel();
                $datos=$capuser->orderBy('id_usuario_capacitacion','ASC')->findAll();
                $datos_cap_usuarios=$capuser->orderBy('id_usuario_capacitacion','ASC')->datos_usuarios();

                $datos_usuario=$user->orderBy('id_usuario', 'ASC')->findAll();
                $datos_capacitacion=$cap->orderBy('id_capacitacion', 'ASC')->findAll();
                return view('capacitaciones/cap_usuarios',['Dcapacitacion'=>$datos_capacitacion, 'Dusuario'=>$datos_usuario, 'usuarios_capacitacion'=>$datos, 'general'=>$datos_cap_usuarios]);
            }

                public function registro_capuser(){
        
                    $user = new UserModel();
                    $cap = new CapacitacionModel();
                    $datos_usuario=$user->orderBy('id_usuario', 'ASC')->findAll();
                    $datos_capacitacion=$cap->orderBy('id_capacitacion', 'ASC')->findAll();
                    return view('capacitaciones/registro_cap_usuarios',['Dusuario'=>$datos_usuario, 'Dcapacitacion'=>$datos_capacitacion]);
            
                    
                }
                
            public function alta_capuser(){
                $sessions = session();
                $user =new Cap_usuariosModel();
                $datos=[
                    'fecha_fin_capacitacion' =>$this->request->getPost('datetime-local'),
                    'id_capacitacion' =>$this->request->getPost('CapIdCapacitacion'),
                    'id_usuario' =>$this->request->getPost('CapIdUsuario'),
                ];
                $respuesta=$user->insert($datos);
                $session = session();
                $session->setFlashdata('success', 'El curso de capacitación ha sido creado con éxito.');
                        if($sessions->get('rol')==0 || $sessions->get('rol')==1){
            return redirect()->to(base_url('cap_usuarios'));
        }else{
            if($sessions->get('rol') == null || $sessions->get('rol')!=0 || $sessions->get('rol')!=1){
                return redirect()->to(base_url('alumno'));
            }
        }
                }

            public function eliminar_capuser($id){
                $modelo = new Cap_usuariosModel();
                $modelo->where('id_usuario_capacitacion', $id)->delete($id);
                return redirect()->to(base_url('cap_usuarios'))->with('status', 'Registro eliminado correctamente');
            }

            public function modificar_capuser($id){
                $user =new Cap_usuariosModel();
                $datos=[
                    'fecha_fin_capacitacion' =>$this->request->getPost('EpresFechaFin'),
                    'id_capacitacion' =>$this->request->getPost('presIdCapacitacion'),
                    'id_usuario' =>$this->request->getPost('presIdUsuario'),
                ];
                $user->update($id, $datos);
                $session = session();
                $session->setFlashdata('success', 'El registro fue actualizado con éxito.');
                return redirect()->to(base_url('cap_usuarios'));
                }
//////////////////////////////////////////////////////////////////////
            //FUNCION PARA EQUIPOS-CAPACITACIÓN//
/////////////////////////////////////////////////////////////////////

            public function index3(){
                $capequ =new Cap_equiposModel();
                $equ = new EquiposModel();
                $cap = new CapacitacionModel();
                $datos=$capequ->orderBy('id_equipo_capacitacion','ASC')->findAll();
                $datos_cap_equipos=$capequ->orderBy('id_equipo_capacitacion','ASC')->datos_equipos();

                $datos_equipos=$equ->orderBy('id_equipo', 'ASC')->findAll();
                $datos_capacitacion=$cap->orderBy('id_capacitacion', 'ASC')->findAll();
                return view('capacitaciones/cap_equipos',['Dcapacitacion'=>$datos_capacitacion, 'Dequipo'=>$datos_equipos, 'equipos_capacitacion'=>$datos, 'general'=>$datos_cap_equipos]);
            }

                public function registro_capequ(){
        
                    $equ = new EquiposModel();
                    $cap = new CapacitacionModel();
                    $datos_equipos=$equ->orderBy('id_equipo', 'ASC')->findAll();
                    $datos_capacitacion=$cap->orderBy('id_capacitacion', 'ASC')->findAll();
                    return view('capacitaciones/registro_cap_equipos',['Dequipo'=>$datos_equipos, 'Dcapacitacion'=>$datos_capacitacion]);
            
                    
                }
                
            public function alta_capequ(){
                $user =new Cap_equiposModel();
                $datos=[
                    'id_capacitacion' =>$this->request->getPost('CapIdCapacitacion'),
                    'id_equipo' =>$this->request->getPost('CapIdEquipo'),
                ];
                $respuesta=$user->insert($datos);
                $session = session();
                $session->setFlashdata('success', 'El equipo con capacitación ha sido creado con éxito.');
                return redirect()->to(base_url('cap_equipos'));
                }

            public function eliminar_capequ($id){
                $modelo = new Cap_equiposModel();
                $modelo->where('id_equipo_capacitacion', $id)->delete($id);
                return redirect()->to(base_url('cap_equipos'))->with('status', 'Registro eliminado correctamente');
            }

            public function modificar_capequ($id){
                $user =new Cap_equiposModel();
                $datos=[
                    'id_capacitacion' =>$this->request->getPost('presIdCapacitacion'),
                    'id_equipo' =>$this->request->getPost('presIdUsuario'),
                ];
                $user->update($id, $datos);
                $session = session();
                $session->setFlashdata('success', 'El registro fue actualizado con éxito.');
                return redirect()->to(base_url('cap_equipos'));
                }
}