<div class="modal fade" style="overflow-y: scroll;"  id="modalEditarEquipo<?php echo $equipos['id_equipo']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" style=" margin-top:40px;">
        <div class="modal-content">
          <div class="modal-header" style=" margin-top:70px;">
            <h4 class="modal-title" style="font-weight:bold;" id="exampleModalCenterTitle">Editar equipo</h4>
          </div>
          <div class="modal-body" >
    <form class="w3-container w3-card-4" action="<?= base_url('actualizar_eq/'.$equipos['id_equipo']); ?>" method="post">
    <div class="login-box-body">
    <div class="form-floating">
        <div class="form-floating">
            <label class="col-sm-5 col-form-label ">Nombre del equipo</label>
            <input type="text" class="form form-control-user" name="eqNombre" value="<?= $equipos['nombre_equipo']; ?>" required>
        </div><br>
        <div class="form-floating">
            <label class="col-sm-5 col-form-label ">Marca del equipo</label>
            <input type="text" class="form form-control-user" name="eqMarca" value="<?= $equipos['marca_equipo']; ?>" required>
        </div><br>
        <div class="form-floating">
            <label class="col-sm-5 col-form-label ">Modelo del equipo</label>
            <input type="text" class="form form-control-user" name="eqModelo" value="<?= $equipos['modelo_equipo']; ?>" required>
        </div><br>
        <div class="form-floating">
            <label class="col-sm-5 col-form-label ">Tipo de equipo</label>
            <input type="text" class="form form-control-user" name="eqTipo" value="<?= $equipos['tipo_equipo']; ?>" required>
        </div><br>
        <div class="form-floating">
            <label class="col-sm-5 col-form-label ">Descripción</label>
            <input type="text" class="form form-control-user"  name="eqDesc" value="<?= $equipos['descripcion_equipo']; ?>" >
        </div><br>
        <div class="form-floating">
            <label class="col-sm-5 col-form-label ">Nivel de riesgo del equipo</label>
            <input type="text" class="form form-control-user"  name="eqRiesgo" value="<?= $equipos['riesgo_equipo']; ?>" >
        </div><br><br>
        <div class="form-floating">
        <label class="col-sm-5 col-form-label ">Laboratorio en el que se ubica</label>
            <select class="form-control selct2" type="number" name="eqLabid" required>
                <?php foreach ($laboratorio as $laboratorios){
                echo '<option value="'.$laboratorios['id_laboratorio'].'"';
                if($equipos['id_laboratorio'] == $laboratorios['id_laboratorio']){
                    echo ' selected';
                }
                echo '>'.$laboratorios['nombre_laboratorio'].'</option>';}; ?>
            </select>
        </div><br><br>
    <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary" type="submit">Editar</button>
          </div>
        </form>
        </div>
      </div>
    </div>