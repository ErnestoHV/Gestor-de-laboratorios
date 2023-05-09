<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LaboratorioModel;
class Laboratorios extends Controller{
    public function index(){
        $user =new LaboratorioModel();
        $datos['laboratorio']=$user->orderBy('id_laboratorio','ASC')->findAll();
        return view('laboratorios',$datos);
   
    }

    public function registro(){
        return view('registro_lab');
    }
    public function alta_laboratorio(){
        $user =new LaboratorioModel();
        $datos=[
        'nombre_laboratorio' =>$this->request->getPost('labNombre'),
        'ubicacion_laboratorio' =>$this->request->getPost('labUbicacion'),
        'nombre_responsable' =>$this->request->getPost('labResponsable'),
        'tipo_laboratorio' =>$this->request->getPost('labTipo'),
        'estado_laboratorio' =>$this->request->getPost('labEstado'),
        ];
        $respuesta=$user->insert($datos);
        $session = session();
        $session->setFlashdata('success', 'El laboratorio ha sido creado con éxito.');
        return view('registro_lab');
        }

    public function eliminar($id){
        $modelo = new LaboratorioModel();
        $modelo->where('id_laboratorio', $id)->delete($id);
        return redirect()->to(base_url('laboratorios'))->with('status', 'laboratorio eliminado correctamente');
    }

            public function modificar($id){
            $user =new LaboratorioModel();
            $datos=[
            'nombre_laboratorio' =>$this->request->getPost('nom'),
            'ubicacion_laboratorio' =>$this->request->getPost('EingUbicacion'),
            'nombre_responsable' =>$this->request->getPost('EingResponsable'),
            'observacion_laboratorio' =>$this->request->getPost('EingObservacion'),
            'tipo_laboratorio' =>$this->request->getPost('EingTipo'),
            'estado_laboratorio' =>$this->request->getPost('EingEstado'),
            ];
            $user->update($id, $datos);
            $session = session();
            $session->setFlashdata('success', 'El laboratorio fue actualizado con éxito.');
            return redirect()->to(base_url('laboratorios'));
            }
}