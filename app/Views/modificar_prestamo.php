<div class="modal fade" style="overflow-y: scroll;"  id="modalEditarPrestamo<?php echo $prestamos['id_prestamo'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" style=" margin-top:40px;">
        <div class="modal-content">
          <div class="modal-header" style=" margin-top:70px;">
            <h4 class="modal-title" style="font-weight:bold;" id="exampleModalCenterTitle">Editar préstamos</h4>
          </div>
          <div class="modal-body" >
            <form action="<?= base_url('modificar_prestamo/'.$prestamos['id_prestamo']); ?>" method="post">

            <div class="form-floating">
                <label class="col-sm-5  col-form-label">Hora de fin</label>
                <input type="text" class="form-control form-control-user" id="EpresHoraFin" name="EpresHoraFin"  value="<?php echo $prestamos['hora_fin_prestamo'];?>" required>
            </div>
            <div class="form-floating">
                <label class="col-sm-5  col-form-label">Observación</label>
                <input type="text" class="form-control form-control-user" id="EpresObservacion" name="EpresObservacion"  value="<?php echo $prestamos['observacion_prestamo'];?>" required> 
            </div>
        
            <div class="form-floating">
            <label class="col-sm-5 col-form-label " for="inputPassword3" >Laboratorio</label>
            <select class="form-control selct2" type="number" name="presIdLaboratorio" required>
                <?php foreach ($laboratorio as $laboratorios){
                 echo '<option value="' . $laboratorios['id_laboratorio'] . '"';
                 if ($prestamos["id_laboratorio"] == $laboratorios["id_laboratorio"]) {
                   echo ' selected';
                 }
                 echo '>' . $laboratorios['nombre_laboratorio'] . '</option>';
               }?>
            </select>
        </div><br>
        <div class="form-floating">
            <label class="col-sm-5 col-form-label " for="inputPassword3" >Usuario</label>
            <select class="form-control selct2" type="number" name="presIdUsuario" required>
                <?php foreach ($usuario as $usuarios){
                echo '<option value="'.$usuarios['id_usuario'].'"';
                if($prestamos['id_usuario'] == $usuarios['id_usuario']){
                  echo ' selected';
                }
                echo '>'.$usuarios['nombre_usuario']." ".$usuarios['apellidos_usuario'].'</option>';}; ?>
            </select>
        </div><br>
        <div class="form-floating">
            <label class="col-sm-5 col-form-label " for="inputPassword3" >Equipo (opcional)</label>
            <select class="form-control selct2" type="number" name="presIdEquipo" >
            
                <?php foreach ($equipo as $equipos){
                echo '<option value="'.$equipos['id_equipo'].'"';
                if($prestamos['id_equipo'] == $equipos['id_equipo']){
                  echo ' selected';
                }
                echo '>'.$equipos['nombre_equipo'].'</option>';}; ?>
                <option value=null <?php if($equipos['id_equipo']==""){ echo ' selected';}?>></option>
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
    