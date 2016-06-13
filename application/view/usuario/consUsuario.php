    <!-- Content Header (Page header) -->
    <section class="content-header">
      <br>
      <ol class="breadcrumb">
        <li><a href="<?php echo URL ?>home/index"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Usuario</a></li>
        <li class="active">Listar Usuarios</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="box box-info">
        <div class="box-header with-border"  style="text-align: center;">
          <h3 class="box-title"><strong>LISTAR USUARIOS</strong></h3>
        </div>
        <div class="row box-header">
          <div class="col-md-8"></div>
             <div class="col-md-4">
                <div class="form-group">
                        <div class="box-tools pull-right">   
                          <form action="#" method="get" class="form-horizontal">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Buscar">
                                  <span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                    </button>
                                  </span>
                            </div>
                          </form> 
                       </div>
                </div>
              </div>
        </div>
        <form class="form-horizontal">
          <div class="col-md-12">
            <div class="box">
             
              <!-- /.box-header -->
              <div class="box-body no-padding">
               <div class="table-responsive"> 
                <table class="table">
                  <thead>
                   <tr class="active">
                    <th>Codigo</th>
                    <th>Documento</th>
                    <th>Nombre de usuario</th>
                    <th>Rol</th>
                    <th>Estado</th>
                    <th style="width: 7%">Opcion</th>
                  </tr>
                  </thead>
                  <tbody>
                  <script type="text/javascript">
                        function botonHabilitar(){
                          alert("Registro habilitado exitosamente");
                        }
                        function botonDeshabilitar(){
                          confirm("¿Esta seguro que desea inhabilitar el registro?");
                        }
                     </script>
                    <?php foreach ($usuarios as $usuario) { ?>
                    <tr>
                      <td><?php if (isset($usuario->codigo)) echo htmlspecialchars($usuario->codigo, ENT_QUOTES, 'UTF-8'); ?></td>
                      <td><?php if (isset($usuario->documento)) echo htmlspecialchars($usuario->documento, ENT_QUOTES, 'UTF-8'); ?></td>
                      <td><?php if (isset($usuario->nombre_usuario)) echo htmlspecialchars($usuario->nombre_usuario, ENT_QUOTES, 'UTF-8'); ?></td>
                      <td><?php if (isset($usuario->rol)) echo htmlspecialchars($usuario->rol, ENT_QUOTES, 'UTF-8'); ?></td>
                      <td><?php if (isset($usuario->estado)) echo htmlspecialchars($usuario->estado, ENT_QUOTES, 'UTF-8'); ?></td>
                      <td>
                      <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#myModal3"><i class="fa fa-pencil-square-o"></i></button>
                      <button type="button"  onclick="botonDeshabilitar()" class="btn btn-box-tool"><i class="fa fa-minus-circle"></i></button>
                      </td>
                    </tr>
                    <?php } ?>
                    <!-- <td>
                      <button type="button" class="btn btn-box-tool"><i class="fa fa-pencil-square-o"></i></button>
                      <button type="button" onclick="botonHabilitar()" class="btn btn-box-tool"><i class="fa fa-check"></i></button>
                    </td> -->
                </tbody>
                </table>
               </div>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
            <!--Termina tabla colores seleccionados-->
          <div class="box-footer">
            <div class="box-tools">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li class="disabled"><a href="#">«</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
        </form>  
        <!-- Termina busqueda-->  
        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius: 25px;">
             
              <div class="modal-header with-border"  style="text-align: center;">
                <h3 class="box-title"><strong>MODIFICAR USUARIO</strong></h3>
              </div>
 
              <div class="modal-body">
                <form class="" role="form">
                  <div class="box-body">
                    <div class="form-group col-sm-5">
                      <label for="nombre" class="">Nombre</label>
                      <input type="text" class="form-control" id="nombre" placeholder="" value="Manuela">
                    </div>
                    <div class="form-group col-sm-offset-1 col-sm-5">
                      <label for="apellido" class="">Apellido</label>
                      <input type="text" class="form-control" id="apellido" placeholder="" value="Urrego">
                    </div>
                    <div class="form-group col-sm-5">
                      <label for="tipo_de_documento" class="">Tipo de documento</label>
                      <select class="form-control">
                        <option value="opcion1" selected>C.C</option>
                        <option value="opcion2">C.E</option>
                      </select>
                    </div>
                    <div class="form-group col-sm-offset-1 col-sm-5">
                      <label for="documento" class="">Documento</label>
                      <input type="text" class="form-control" id="documento" placeholder="" value="1152710341" >
                    </div>
                    <div class="form-group col-sm-5">
                      <label for="nombre de usuario" class="">Nombre de usuario</label>
                      <input type="text" class="form-control" id="nombre" placeholder="" value="ManuelaUrrego">
                    </div>
                    <div class="form-group  col-sm-offset-1 col-sm-5">
                       <label for="contraseña" class="">Contraseña</label>
                       <input type="text" class="form-control" id="apellido" placeholder="" value="1234">
                    </div>
                    <div class="form-group col-sm-5">
                      <label for="estado" class="">Rol</label>
                      <select class="form-control">
                        <option value="opcion1" selected>Supervisor</option>
                        <option value="opcion2">Administrador</option>
                      </select>
                    </div>
                    <div class="form-group col-sm-offset-1 col-sm-5">
                      <label for="nombre" class="">Email</label>
                      <input type="text" class="form-control" id="nombre" placeholder="" value="amurrego6@misena.edu.co">
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Guardar</button>
                <button type="button" class="btn btn-danger">Cancelar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
