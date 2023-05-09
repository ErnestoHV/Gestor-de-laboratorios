    <div class="modal fade" style="overflow-y: scroll;"  id="modalEditarUsuario<?php echo $usuarios['id_usuario']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" style=" margin-top:40px;">
        <div class="modal-content">
          <div class="modal-header" style=" margin-top:70px;">
            <h4 class="modal-title" style="font-weight:bold;" id="exampleModalCenterTitle">Editar Usuario</h4>
          </div>
          <div class="modal-body" >
            <form action="<?= base_url('modificar/'.$usuarios['id_usuario']);?>" method="post">
            <div class="form-floating">
                <label class="col-sm-5  col-form-label">Matricula</label>
                <input type="text" class="form-control form-control-user" id="idUsuario" name="idUsuario"  placeholder="Matricula" value="<?php echo $usuarios['matricula'];?>" required>
            </div>
            <div class="form-floating">
                <label class="col-sm-5  col-form-label">Nombre</label>
                <input type="text" class="form-control form-control-user"id="EingNombre" name="EingNombre"  value="<?php echo $usuarios['nombre_usuario'];?>" required>
            </div>
            <div class="form-floating">
                <label class="col-sm-5  col-form-label">Apellidos</label>
                <input type="text" class="form-control form-control-user" id="EingPaterno" name="EingPaterno"  value="<?php echo $usuarios['apellidos_usuario'];?>" required>
            </div>
            <div class="form-floating">
                <label class="col-sm-5  col-form-label">Email</label>
                <input type="email" class="form-control form-control-user" id="EingCorreo" name="EingCorreo"  value="<?php echo $usuarios['correo_usuario'];?>" required>
            </div>
            <div class="form-floating">
                <label class="col-sm-5  col-form-label">Telefono</label>
                <input type="text" class="form-control form-control-user" id="EingTel" name="EingTel"  value="<?php echo $usuarios['telefono_usuario'];?>" required> 
            </div>
            <div class="form-floating">
                <label class="col-sm-5  col-form-label">Nss</label>
                <input type="text" class="form-control form-control-user" id="EingNSS" name="EingNSS"  value="<?php echo $usuarios['nss_usuario'];?>" required>
            </div>
            <div class="form-group">
                <label class="col-sm-5 col-form-label " for="inputPassword3" >Carrera</label>
                <select class="form-control selct2" type="number" name="EingCarrera" required>
                <?php foreach ($carrers as $carr){
                echo '<option value="'.$carr['id_carrera'].'"';
                if($usuarios['id_carrera'] == $carr['id_carrera']){
                  echo ' selected';
                }
                echo '>'.$carr['nombre_carrera'].'</option>';}; ?>
            </select>
            </div>
            <div class="form-group"> 
                <label for="inputPassword3" class="col-sm-5 col-form-label " type="number">Rol</label>
                <select class="form-control select2" name="EingRol" required>
                    <option value="0" <?php if($usuarios['rol']==0) echo 'selected'?>>0. Administrador</option>    
                    <option value="1" <?php if($usuarios['rol']==1) echo 'selected'?>>1. Tec. laboratorio</option>
                    <option value="2" <?php if($usuarios['rol']==2) echo 'selected'?>>2. Docente</option>
                    <option value="3" <?php if($usuarios['rol']==3) echo 'selected'?>>3. Alumno</option>
                </select>
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