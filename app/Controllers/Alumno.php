<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PrestamoModel;
use App\Models\UserModel;

class Alumno extends Controller{
 public function index(){
   $prest = new PrestamoModel();
   $user = new UserModel();
   $prestamo=$prest->datos_prestamos();
   $capacitacion = $user->datos_capacitacion();
    return view('alumno', ['prestamo'=>$prestamo, 'capacitacion'=>$capacitacion]);
 }
}