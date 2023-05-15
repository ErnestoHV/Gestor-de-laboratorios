<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\CarreraModel;
use App\Models\LaboratorioModel;

class Usuarios extends Controller{


    public function index(){
        $users =new UserModel();
        $datos_carr=$users->orderBy('id_usuario','ASC')->datos_carr();
        $datos_user=$users->orderBy('id_usuario','ASC')->findAll();
        $carre =new CarreraModel();
        $editar_carr=$carre->orderBy('id_carrera','ASC')->findAll(); 
        return view('usuarios', ['usuario'=>$datos_user, 'carrera'=>$datos_carr, 'carrers'=>$editar_carr, ]);  
    }

public function registro(){
    $user =new CarreraModel();
    $datos['carrera']=$user->orderBy('id_carrera','ASC')->findAll();
    return view('registro',$datos);
}

public function registro_admin(){
    $user =new CarreraModel();
    $datos['carrera']=$user->orderBy('id_carrera','ASC')->findAll();
    return view('registro_admin',$datos);
}

public function alta_usuario(){
    $session = session();
    $user =new UserModel();
    $datos=[
    'matricula' =>$this->request->getPost('mat'),
    'nombre_usuario' =>$this->request->getPost('nom'),
    'apellidos_usuario' =>$this->request->getPost('ape'),
    'correo_usuario' =>$this->request->getPost('corr'),
    'telefono_usuario' =>$this->request->getPost('tel'),
    //ENCRIPTAR CONTRASEÑA
    'password_usuario' => password_hash($this->request->getPost('pass'), PASSWORD_BCRYPT),
    'nss_usuario' =>$this->request->getPost('nss'),
    'id_carrera' =>$this->request->getPost('carrera'),
    'rol' =>$this->request->getPost('rol')
    ];
  
//validacion de matricula no exista en base de datos
$matricula=$user->where('matricula',$datos['matricula'])->findAll();
$nombre=$user->where('nombre_usuario',$datos['nombre_usuario'])->findAll();
    if($matricula){
        $session->setFlashdata('success', 'La matricula/ID ya existe en la base de datos.');
        if($session->get('rol') == "" || $session->get('rol') == 2 || $session->get('rol') == 3 ){
            return redirect()->to(base_url('registro'));
        }else{
            if( $session->get('rol') == 0 || $session->get('rol') == 1 ){
                return redirect()->to(base_url('registro_admin'));
            }
        }
    }
    
    $respuesta=$user->insert($datos);
    $session->setFlashdata('success', 'El usuario ha sido creado con éxito.');
    if($session->get('rol') == "" || $session->get('rol') == 2 || $session->get('rol') == 3 ){
        return redirect()->to(base_url('login'));
    }else{
        if( $session->get('rol') == 0 || $session->get('rol') == 1 ){
            return redirect()->to(base_url('registro_admin'));
        }
    }
            

}


    public function eliminar($id){
        $modelo = new UserModel();
        $modelo->where('id_usuario', $id)->delete($id);
        return redirect()->to(base_url('usuarios'))->with('status', 'usuario eliminado correctamente');
    }

    public function editar($id){
        $user =new UserModel();
    $datos=[
    'matricula' =>$this->request->getPost('idUsuario'),
    'nombre_usuario' =>$this->request->getPost('EingNombre'),
    'apellidos_usuario' =>$this->request->getPost('EingPaterno'),
    'correo_usuario' =>$this->request->getPost('EingCorreo'),
    'telefono_usuario' =>$this->request->getPost('EingTel'),
    'nss_usuario' =>$this->request->getPost('EingNSS'),
    'id_carrera' =>$this->request->getPost('EingCarrera'),
    'rol' =>$this->request->getPost('EingRol'),
    ];
    $user->update($id,$datos);
    $session = session();
    $session->setFlashdata('success', 'El usuario ha sido actualizado con éxito.');
    return redirect()->to(base_url('usuarios'));
    }

    public function docs(){
        return view('documentacion');
    }

}
