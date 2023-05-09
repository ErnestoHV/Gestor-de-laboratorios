<div class="modal fade" style="overflow-y: scroll;"  id="modalEditarCap_usuarios<?php echo $usuarios_capacitaciones['id_usuario_capacitacion'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" style=" margin-top:40px;">
        <div class="modal-content">
          <div class="modal-header" style=" margin-top:70px;">
            <h4 class="modal-title" style="font-weight:bold;" id="exampleModalCenterTitle">Editar préstamos</h4>
          </div>
          <div class="modal-body" >
            <form action="<?= base_url('modificar_cap_usuarios/'.$usuarios_capacitaciones['id_usuario_capacitacion']); ?>" method="post">

            <div class="form-floating">
                <label class="col-sm-5  col-form-label">fecha de fin</label>
                <input type="datetime" class="form-control form-control-user" id="EpresFechaFin" name="EpresFechaFin"  value="<?php echo $usuarios_capacitaciones['fecha_fin_capacitacion'];?>" required>
            </div>      
            <div class="form-floating">
            <label class="col-sm-5 col-form-label " for="inputPassword3" >Usuario</label>
            <select class="form-control selct2" type="number" name="presIdUsuario" required>
                <?php foreach ($Dusuario as $usuarios){
                echo '<option value="'.$usuarios['id_usuario'].'"';
                if($usuarios_capacitaciones['id_usuario'] == $usuarios['id_usuario']){
                  echo ' selected';
                }
                echo '>'.$usuarios['nombre_usuario']." ".$usuarios['apellidos_usuario'].'</option>';}; ?>
            </select>
        </div><br>  
            <div class="form-floating">
            <label class="col-sm-5 col-form-label " for="inputPassword3" >Capacitación</label>
            <select class="form-control selct2" type="number" name="presIdCapacitacion" required>
                <?php foreach ($Dcapacitacion as $Dcapacitaciones){
                 echo '<option value="' . $Dcapacitaciones['id_capacitacion'] . '"';
                 if ($usuarios_capacitaciones["id_capacitacion"] == $Dcapacitaciones["id_capacitacion"]) {
                   echo ' selected';
                 }
                 echo '>' . $Dcapacitaciones['nombre_capacitacion'] . '</option>';
               }?>
            </select>
        </div><br>
          </div>
          <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary" type="submit">Editar</button>
          </div>
        </form>
        </div>
      </div>
    </div>
    