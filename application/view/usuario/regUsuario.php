  <!-- Content Wrapper. Contains page content -->
    <section class="content-header">
      <br>
      <ol class="breadcrumb">
        <li><a href="../../index.html"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Usuario</a></li>
        <li class="active">Registrar usuario</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="box box-primary" style="padding-right: 15px;">
        <div class="box-header with-border">
          <div class="box-header with-border" style="text-align: center;">
                <h3 class="box-title"><strong>REGISTRAR USUARIO</strong></h3>
          </div>
          <br>
          <br>
           <form action="<?php echo URL; ?>usuario/regUsuario" method="POST">
            <div class="row col-lg-12">
              <div class="form-group col-lg-2">
                <label for="tipo_de_documento" class="">*Tipo de documento: </label>
                <select class="form-control" name="tipo_Documento">
                  <option value="C.C" selected>C.C</option>
                  <option value="C.E">C.E</option>
                </select>
              </div>
              <div class="form-group col-lg-offset-2 col-lg-2">
                <label for="documento" class="">*Documento:</label>
                <input type="text" class="form-control" id="documento" placeholder="" name="documento">
              </div>
              <div class="form-group col-lg-offset-3 col-lg-3">
                <label for="Estado" class="">*Estado:</label>
                <select class="form-control" name="estado">
                  <option value="Habilitado" >Habilitado</option>
                  <option value="Inhabilitado">Inhabilitado</option>
                </select>
              </div>
            </div>
            <div class="row col-lg-12">
              <div class="form-group col-lg-3">
                <label for="nombre" class="">*Nombre: </label>
                <input type="text" class="form-control" id="nombre" placeholder="" name="nombre">
              </div>
              <div class="form-group col-lg-offset-1 col-lg-4">
                <label for="apellido" class="">*Apellido:</label>
                <input type="text" class="form-control" id="apellido" placeholder="" value="" name="apellido">
              </div>
              <div class="form-group col-lg-offset-1 col-lg-3">
                <label for="nombre_usuario" class="">*Nombre de usuario:</label>
                <input type="text" class="form-control" id="nombre_usuario" placeholder="" name="nombre_Usuario">
              </div>
            </div>
            <div class="row col-lg-12">
              <div class="form-group col-lg-3">
                <label for="acontraseña" class="">*Contraseña:</label>
                <input type="password" class="form-control" id="contraseña" placeholder="" value="" name="clave">
              </div>
              <div class="form-group col-lg-offset-1 col-lg-4">
                  <label for="Email" class="">*Email:</label>
                  <input type="text" class="form-control" id="email" placeholder="" name="email">
              </div>
              <div class="form-group col-lg-offset-1 col-lg-3">
                <label for="roles" class="">*Rol:</label>
                <select class="form-control" name="rol">
                  <option value="Administrador" selected>Administrador</option>
                  <option value="Supervisor">Supervisor</option>
                </select>
              </div>
            </div> 
            <br>
            <div class="row"> 
              <div class="form-group col-lg-12">
                <button type="submit" class="btn btn-primary col-lg-offset-9" style="margin-top: 15px;"               name="btnRegistrar">Registrar</button>
                <button type="reset" class="btn btn-danger" style="margin-left: 15px; margin-top: 15px;">Cancelar</button>
              </div>
            </div>         
             <!-- Modal Mensaje de botón Registrar Ficha -->
            <div class="modal fade" id="pedidoRegis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Mensaje</h4>
                  </div>
                  <div class="modal-body">Usuario Registrado Exitosamente!</div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Detalle Usuario</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <label for="nombre" class=" col-sm-2 control-label">Nombre</label>
                <div class="col-sm-10 ">
                  <input type="text" class="form-control" id="nombre" disabled="" value="Manuela">
                </div>
              </div>
              <div class="form-group">
                <label for="apellido" class="col-sm-2 control-label">Apellido</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="apellido" disabled="" value="Urrego">
                </div>
              </div>
              <div class="form-group">
                <label for="estado" class="col-sm-2 control-label">Tipo de documento</label>
                <div id="tipo_cedula" class="col-sm-10">
                  <select class="form-control" disabled="">
                    <option value="C.C" selected>C.C</option>
                    <option value="C.E">C.E</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="documento" class="col-sm-2 control-label">Documento</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="documento" value="1152710341" disabled>
                </div>
               </div>
              <div class="form-group">
                <label for="nombre_usuario" class="col-sm-2 control-label">Nombre usuario</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nombre_usuario" disabled="" value="ManuelaUrrego">
                </div>
              </div>
              <div class="form-group">
                <label for="contraseña" class="col-sm-2 control-label">Contraseña</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="contraseña" disabled="" value="Manuela">
                </div>
              </div>
              <div class="form-group">
                  <label for="tipo_documento" class="col-sm-2 control-label">Estado</label>
                <div id="esta" class="col-sm-10">
                  <select class="form-control" disabled="">
                    <option value="Habilitado" selected>Habilitado</option>
                    <option value="Inhanilitado">Inhabilitado</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                 <label for="tipo_documento" class="col-sm-2 control-label">Rol</label>
                <div id="esta" class="col-sm-10">
                  <select class="form-control" disabled="">
                    <option value="Administrador" selected>Administrador</option>
                    <option value="Supervisor">Supervisor</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="email" disabled="" value="amurrego6@misena.edu.co">
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Modificar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Guardar</button>
          </div>
        </div>
      </div>
    </div>
  