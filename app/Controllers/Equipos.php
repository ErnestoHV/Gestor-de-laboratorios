<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EquiposModel;
use App\Models\LaboratorioModel;
class Equipos extends Controller{

    public function index(){
        $user =new EquiposModel();
        $datos_labs=$user->orderBy('id_equipo', 'ASC')->datos_lab();
        $datos_equ=$user->orderBy('id_equipo','ASC')->findAll();
        $lab = new LaboratorioModel();
        $editar_labs=$lab->orderBy('id_laboratorio','ASC')->findAll();
        return view('equipos', ['equipo'=>$datos_equ, 'lab'=>$datos_labs, 'laboratorio'=>$editar_labs]);
   
    }

    public function registro(){
        $user =new LaboratorioModel();
        $datos['laboratorio']=$user->orderBy('id_laboratorio','ASC')->findAll();
        return view('registro_equipos',$datos);
    }
    public function alta_equipos(){
        $user =new EquiposModel();
        //'nombre','marca','modelo','tipo','descripcion','nivel_riesgo', 'idlaboratorio'
        $datos=[
        'nombre_equipo' =>$this->request->getPost('eqNombre'),
        'marca_equipo' =>$this->request->getPost('eqMarca'),
        'modelo_equipo' =>$this->request->getPost('eqModelo'),
        'tipo_equipo' =>$this->request->getPost('eqTipo'),
        'descripcion_equipo' =>$this->request->getPost('eqDesc'),
        'riesgo_equipo' =>$this->request->getPost('eqRiesgo'),
        'id_laboratorio' =>$this->request->getPost('eqLabid'),
        ];
        $respuesta=$user->insert($datos);
        $session = session();
        $session->setFlashdata('success', 'El equipo ha sido creado con éxito.');
        return redirect()->to(base_url('equipos'));
        }

        public function eliminar($id){
            $modelo = new EquiposModel();
            $modelo->where('id_equipo', $id)->delete($id);
            return redirect()->to(base_url('equipos'))->with('status', 'equipo eliminado correctamente');
        }

        public function editar_equipo($id){
            $user =new EquiposModel();
        $datos=[
            'nombre_equipo' =>$this->request->getPost('eqNombre'),
            'marca_equipo' =>$this->request->getPost('eqMarca'),
            'modelo_equipo' =>$this->request->getPost('eqModelo'),
            'tipo_equipo' =>$this->request->getPost('eqTipo'),
            'descripcion_equipo' =>$this->request->getPost('eqDesc'),
            'riesgo_equipo' =>$this->request->getPost('eqRiesgo'),
            'id_laboratorio' =>$this->request->getPost('eqLabid'),
        ];
        $user->update($id,$datos);
        $session = session();
        $session->setFlashdata('success', 'El equipo ha sido actualizado con éxito.');
        return redirect()->to(base_url('equipos'));
        } 
}