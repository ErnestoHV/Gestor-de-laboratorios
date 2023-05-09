<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class SigninController extends Controller{
    public function index()
    {
        helper(['form']);
        echo view('login');
    } 
  
    public function loginAuth()
    {
        $session = session();
        $userModel = new UserModel();
        $matricula = $this->request->getVar('username');
        $password = $this->request->getVar('uPassword');
        
        $data = $userModel->where('matricula', $matricula)->first();
        
        if($data){
            $pass = $data['password_usuario'];
            if($password == $pass){
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'matricula' => $data['matricula'],
                    'nombre_usuario' => $data['nombre_usuario'],
                    'apellidos_usuario' => $data['apellidos_usuario'],
                    'correo_usuario' => $data['correo_usuario'],
                    'telefono_usuario' => $data['telefono_usuario'],
                    'nss_usuario' => $data['nss_usuario'],
                    'id_carrera' => $data['id_carrera'],
                    'rol' => $data['rol'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);

                if($data['rol'] == 0){
                    return redirect()->to(base_url('usuarios'));  
                }else{
                    if($data['rol'] == 1){
                        return redirect()->to(base_url('laboratorios'));
                    }else{
                        if($data['rol'] == 2 || $data['rol'] == 3){
                            return redirect()->to(base_url('alumno'));
                        }
                    }
                }
            
            }else{
                $session->setFlashdata('msg', 'La contraseña no es valida.');
                return redirect()->to(base_url('login'));
            }
        }else{
            $session->setFlashdata('msg', 'La matricula/ID introducidos no son validos.');
            return redirect()->to(base_url('login'));
        }
    }

    public function logout(){
        $session = session();
        $session->remove('matricula','nombre_usuario','apellidos_usuario','correo_usuario','telefono_usuario','password_usuario','nss_usuario','id_carrera','rol');
        session_destroy();

        return redirect()->to(base_url('login'));
    }
}