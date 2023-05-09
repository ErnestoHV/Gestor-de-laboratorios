<div class="modal fade" style="overflow-y: scroll;"  id="modalEditarCapacitacion<?php echo $capacitaciones['id_capacitacion'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" style=" margin-top:40px;">
        <div class="modal-content">
          <div class="modal-header" style=" margin-top:70px;">
            <h4 class="modal-title" style="font-weight:bold;" id="exampleModalCenterTitle">Editar capacitación</h4>
          </div>
          <div class="modal-body" >
    <form class="w3-container w3-card-4" action="<?= base_url('modificar_cap/'.$capacitaciones['id_capacitacion']); ?>" method="post">
        <div class="form-floating">
            <label class="col-sm-5 col-form-label ">Nombre de la capacitación</label>
            <input type="text" class="form form-control-user" name="EcapNombre" value="<?= $capacitaciones['nombre_capacitacion']; ?>">
        </div><br><br>
        <div class="form-floating">
            <label class="col-sm-5 col-form-label ">Duración de la capacitación (Hrs)</label>
            <input type="number" class="form form-control-user" name="EcapDuracion" value="<?= $capacitaciones['duracion_capacitacion']; ?>">
        </div><br><br>
        <div class="form-floating">
            <label class="col-sm-5 col-form-label ">Nombre del instructor</label>
            <input type="text" class="form form-control-user" name="EcapInstructor" value="<?= $capacitaciones['nombre_instructor']; ?>">
        </div><br><br>
        <div class="form-floating">
            <label class="col-sm-5 col-form-label ">Tipo de la capacitación</label>
            <input type="text" class="form form-control-user" name="EcapTipo" value="<?= $capacitaciones['tipo_capacitacion']; ?>">
        </div><br><br>
    <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary" type="submit">Editar</button>
          </div>
        </form>
        </div>
      </div>
    </div>