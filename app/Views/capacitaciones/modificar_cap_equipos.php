<div class="modal fade" style="overflow-y: scroll;"  id="modalEditarCap_equipos<?php echo $equipos_capacitaciones['id_equipo_capacitacion'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" style=" margin-top:40px;">
        <div class="modal-content">
          <div class="modal-header" style=" margin-top:70px;">
            <h4 class="modal-title" style="font-weight:bold;" id="exampleModalCenterTitle">Editar préstamos</h4>
          </div>
          <div class="modal-body" >
            <form action="<?= base_url('modificar_cap_equipos/'.$equipos_capacitaciones['id_equipo_capacitacion']); ?>" method="post">
  
            <div class="form-floating">
            <label class="col-sm-5 col-form-label " for="inputPassword3" >Equipo</label>
            <select class="form-control selct2" type="number" name="presIdUsuario" required>
                <?php foreach ($Dequipo as $equipos){
                echo '<option value="'.$equipos['id_equipo'].'"';
                if($equipos_capacitaciones['id_equipo'] == $equipos['id_equipo']){
                  echo ' selected';
                }
                echo '>'.$equipos['nombre_equipo'].'</option>';}; ?>
            </select>
        </div><br>  
            <div class="form-floating">
            <label class="col-sm-5 col-form-label " for="inputPassword3" >Capacitación</label>
            <select class="form-control selct2" type="number" name="presIdCapacitacion" required>
                <?php foreach ($Dcapacitacion as $Dcapacitaciones){
                 echo '<option value="' . $Dcapacitaciones['id_capacitacion'] . '"';
                 if ($equipos_capacitaciones["id_capacitacion"] == $Dcapacitaciones["id_capacitacion"]) {
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
    