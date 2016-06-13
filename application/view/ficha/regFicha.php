    <!-- Content Header (Page header) -->
    <section class="content-header">
      <br>
      <ol class="breadcrumb">
        <li><a href="<?php echo URL; ?>home/index"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Ficha Técnica</a></li>
        <li class="active">Registrar Ficha</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="box box-info" style="padding-right: 15px;">
        <div class="box-header with-border" style="text-align: center;">
          <h3 class="box-title"><strong>REGISTRAR FICHA TÉCNICA</strong></h3>
        </div>
        <form action="<?php echo URL; ?>ficha/regFicha" method="POST">
          <div class="row col-lg-12">
            <!-- <div class="form-group  col-lg-1">
              <label for="id_ficha" class="">Código: </label>
              <input type="text" class="form-control" id="id_ficha" placeholder="" value="" disabled>
            </div> -->
            <div class="form-group col-lg-2">
              <label for="referencia" class="">*Referencia:</label>
              <input type="text" name="referencia" class="form-control" id="referencia" placeholder="" value="" required="" style="border-radius:5px;">
            </div>
            <div class="form-group col-lg-offset-1 col-lg-4">
              <label class="">Fecha Registro:</label>
              <div class="">
                <div class="input-group date">
                  <div class="input-group-addon" style="border-radius:5px;">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" name="fecha_reg" id="" placeholder="" required="" style="border-radius:5px;" min="2016-06-01" step="1" readonly="" value="<?php echo date("Y-m-d");?>">
                </div>
              </div>
            </div>
            <div class="form-group col-lg-offset-1 col-lg-4">
              <label for="estado" class="">*Estado:</label>
              <input type="text" name="estado" class="form-control" id="referencia" placeholder="" value="Habilitado" required="" readonly="" style="border-radius:5px;">
            </div>
          </div>
          <div class="row col-lg-12">
            <div class="form-group col-lg-2">
              <label for="color" class="">*Color:</label>
              <input type="text" name="color" class="form-control" id="color" placeholder="" value="" required="" style="border-radius:5px;">
            </div>
            <div class="form-group col-lg-offset-1 col-lg-4">
            <label for="tallas" class="" >*Tallas:</label>
            <select class="form-control js-example-tags" name="" required="" multiple="" style="border-radius:5px;">
              <option value="L">L</option>
              <option value="M">M</option>
              <option value="S">S</option>
            </select>
            </div>
            <div class="form-group col-lg-offset-1 col-lg-4">  
              <label for="stock_minimo" class="">*Stock Mínimo:</label>
              <input type="text" name="stock_min" class="form-control" id="stock_minimo" placeholder="" value="" required="" style="border-radius:5px;">
            </div>
          </div>
          <div class="form-group">
            <div class="table">
              <div class="col-lg-12 table-responsive">
                <table class="table table-hover" style="margin-top: 2%;">
                  <thead>
                    <tr class="active">
                      <th>Código</th>
                      <th>Nombre</th>
                      <th>Color</th>
                      <th>Unidad Medida</th>
                      <th>Cantidad</th>
                      <th>Valor</th>
                      <th>Cant_Nec_Unidad</th>
                      <th>Vlr_Unidad_Refer</th>
                      <th>Opción</th>
                      <th><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal"><b>+ Añadir</b></button></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="box box-solid collapsed-box">
                      <td>001</td>
                      <td>Tela</td>
                      <td>Azul</td>
                      <td>
                        <select class="form-control " disabled>
                          <option value="unidad1" class="">mt</option>
                          <option value="unidad2" selected>cm</option>
                          <option value="unidad3">mm</option>
                          <option value="unidad3">un</option>
                          <option value="unidad3">dc</option>
                        </select>
                      </td>
                      <td>100</td>
                      <td>$6200</td>
                      <td>9</td>
                      <td>$689</td>
                      <td><button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button></td>
                    </tr>
                    <tr>
                      <td>012</td>
                      <td>Sesgo</td>
                      <td>Blanco</td>
                      <td>
                        <select class="form-control " disabled>
                          <option value="unidad1">mt</option>
                          <option value="unidad2" selected>cm</option>
                          <option value="unidad3">mm</option>
                          <option value="unidad3">un</option>
                          <option value="unidad3">dc</option>
                        </select>
                      </td>
                      <td>100</td>
                      <td>$150</td>
                      <td>100</td>
                      <td>$150</td>
                      <td><button type="button" class="btn btn-box-tool" data-widget=""><i class="fa fa-times"></i></button></td>
                    </tr>
                    <tr>
                      <td>006</td>
                      <td>Encaje</td>
                      <td>Rojo</td>
                      <td>
                        <select class="form-control " disabled>
                          <option value="unidad1">mt</option>
                          <option value="unidad2" selected>cm</option>
                          <option value="unidad3">mm</option>
                          <option value="unidad3">un</option>
                          <option value="unidad3">dc</option>
                        </select>
                      </td>
                      <td>100</td>
                      <td>$700</td>
                      <td>58</td>
                      <td>$986</td>
                      <td><button type="button" class="btn btn-box-tool" data-widget=""><i class="fa fa-times"></i></button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
        <!--<div class="table">
              <div class="col-lg-2 table-responsive no-padding" style="margin-top: 2%;">
                <table class="table table-hover">
                  <thead>
                    <tr class="info">
                      <th>Talla</th>
                      <th>Opción</th>
                      <th><button type="button" class="btn btn-default btn-xs" type="button"><b>+</b></button></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>M</td>
                      <td><button type="button" class="btn btn-box-tool" data-widget=""><i class="fa fa-times"></i></button></td>
                    </tr>
                    <tr>
                      <td>L</td>
                      <td><button type="button" class="btn btn-box-tool" data-widget=""><i class="fa fa-times"></i></button></td>
                    </tr>
                    <tr>
                      <td>S</td>
                      <td><button type="button" class="btn btn-box-tool" data-widget=""><i class="fa fa-times"></i></button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div> -->
          </div>
          <div class="row col-lg-12">
            <div class="form-group col-lg-3">  
              <label for="vlr_producto" class="">*Valor Producto:</label>
              <input type="text" name="vlr_producto" class="form-control" id="vlr_producto" placeholder="" value="" required="" style="border-radius:5px;">
            </div>
            <div class="form-group col-lg-offset-5 col-lg-4">
              <label for="vlr_total" class="">Valor Producción:</label>
              <input type="text" name="vlr_produccion" class="form-control" id="vlr_total" placeholder="" placeholder="" required="" style="border-radius:5px;">
            </div>
          </div>
          <br>
          <div class="row"> 
            <div class="form-group col-lg-12">
              <button type="submit" class="btn btn-primary  col-lg-offset-9" style="margin-top: 15px;" name="btnRegFicha">Registrar</button>
              <button type="button" class="btn btn-danger" style="margin-left: 15px; margin-top: 15px;" name="btnCanFicha">Cancelar</button>
            </div>
          </div>
        </form>
      </div>
      <!-- Modal asociar insumos -->
      <div class="modal fade bs-example-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Insumos</h4>
            </div>
            <div class="modal-body">
              <table>
                <thead>
                  <tr>
                    <th>Nombre</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Juan</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar Cambios</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </section>

    <!-- para asociar

    <select name="select1">
    <option value="1">Number 1</option>
    <option value="2"  selected="selected">Number 2</option>
    <option value="3">Number 3</option>
    <option value="4">Number 4</option>
</select>

    // Consultar la base de datos
$consulta_mysql='select * from Amigos';
$resultado_consulta_mysql=mysql_query($consulta_mysql,$conexion);
  
echo "<select name='select1'>";
while($fila=mysql_fetch_array($resultado_consulta_mysql)){
    echo "<option value='".$fila['nombre']."'>".$fila['nombre']."</option>";
}
echo "</select>";
  
   -->