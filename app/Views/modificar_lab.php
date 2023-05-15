<div class="modal fade" style="overflow-y: scroll;"  id="modalEditarLaboratorio<?php echo $laboratorios['id_laboratorio'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" style=" margin-top:40px;">
        <div class="modal-content">
          <div class="modal-header" style=" margin-top:70px;">
            <h4 class="modal-title" style="font-weight:bold;" id="exampleModalCenterTitle">Editar Laboratorios</h4>
          </div>
          <div class="modal-body" >
            <form action="<?= base_url('modificar_lab/'.$laboratorios['id_laboratorio']); ?>" method="post">
            <div class="form-floating">
                <label class="col-sm-5  col-form-label">Nombre</label>
                <input type="text" class="form-control form-control-user" id="nom" name="nom"  value="<?php echo $laboratorios['nombre_laboratorio'];?>" required>
            </div>
            <div class="form-floating">
                <label class="col-sm-5  col-form-label">Ubicación</label>
                <input type="text" class="form-control form-control-user"id="EingUbicacion" name="EingUbicacion"  value="<?php echo $laboratorios['ubicacion_laboratorio'];?>" required>
            </div>
            <div class="form-floating">
                <label class="col-sm-5  col-form-label">Responsable</label>
                <input type="text" class="form-control form-control-user" id="EingResponsable" name="EingResponsable"  value="<?php echo $laboratorios['nombre_responsable'];?>" required>
            </div>
            <div class="form-floating">
                <label class="col-sm-5  col-form-label">Observación</label>
                <input type="text" class="form-control form-control-user" id="EingObservacion" name="EingObservacion"  value="<?php echo $laboratorios['observacion_laboratorio'];?>" required>
            </div>
            <div class="form-floating">
                <label class="col-sm-5  col-form-label">Tipo</label>
                <input type="text" class="form-control form-control-user" id="EingTipo" name="EingTipo"  value="<?php echo $laboratorios['tipo_laboratorio'];?>" required> 
            </div>
            <div class="form-floating">
                <label class="col-sm-5  col-form-label">Estado</label>
                <input type="text" class="form-control form-control-user" id="EingEstado" name="EingEstado"  value="<?php echo $laboratorios['estado_laboratorio'];?>" required>
            </div>
          </div>
          <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary" type="submit">Editar</button>
          </div>
        </form>
        </div>
      </div>
    </div>