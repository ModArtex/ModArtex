    <!-- Content Header (Page header) -->
    <section class="content-header">
      <br>
      <ol class="breadcrumb">
        <li><a href="<?php echo URL ?>home/index"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Pedido</a></li>
        <li class="active">Listar Pedidos</li>
      </ol>
    </section>
    <section class="content">
      <div class="box box-primary">

         <div class="box-header with-border"  style="text-align: center;">
          <h3 class="box-title"><strong>LISTAR PEDIDOS</strong></h3>
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
              <div class="box-header">
                <h3 class="box-title"><strong>Pedidos</strong></h3>
              </div>
              <div class="box-body no-padding">
                <div class="table-responsive">
                <table class="table table-responsive">
                  <thead>
                    <tr>
                    <th style="width: 10px">#</th>
                    <th>Fecha_Registro</th>
                    <th>Cliente</th>
                    <th>Vlr_Total</th>
                    <th>Fecha_Entrega</th>
                    <th>Estado</th>
                    <th style="width: 7%">Opción</th>
                  </tr>
                  </thead>
                  <tbody>
                     <script type="text/javascript">
                        function botonCancelar(){
                          confirm("¿Esta seguro que desea cancelar el pedido?");
                        }
                     </script>
                  <?php foreach ($pedidos as $pedido) { ?>
                    <tr>
                      <td><?php if (isset($pedido->codigo)) echo htmlspecialchars($pedido->codigo, ENT_QUOTES, 'UTF-8'); ?></td>
                      <td><?php if (isset($pedido->fecha_registro)) echo htmlspecialchars($pedido->fecha_registro, ENT_QUOTES, 'UTF-8'); ?></td>
                      <td><?php if (isset($pedido->cliente)) echo htmlspecialchars($pedido->cliente, ENT_QUOTES, 'UTF-8'); ?></td>
                      <td><?php if (isset($pedido->valor_total)) echo htmlspecialchars($pedido->valor_total, ENT_QUOTES, 'UTF-8'); ?></td>
                      <td><?php if (isset($pedido->fecha_entrega)) echo htmlspecialchars($pedido->fecha_entrega, ENT_QUOTES, 'UTF-8'); ?></td>
                      <td><?php if (isset($pedido->estado)) echo htmlspecialchars($pedido->estado, ENT_QUOTES, 'UTF-8'); ?></td>
                      <td>
                      <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#myModal3"><i class="fa fa-pencil-square-o"></i></button>
                      <button type="button"  onclick="botonDeshabilitar()" class="btn btn-box-tool"><i class="fa fa-minus-circle"></i></button>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>
          </div>
          <div class="box-footer">
            <div class="box-tools">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
        </form>  
      </div>



      <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="border-radius: 20px;">
       
               <div class="modal-header" style="text-align: center;">
                  <h3 class="box-title"><strong>MODIFICAR PEDIDO</strong></h3>
                </div>
   
            <div class="modal-body">
              <form class="" role="form">
                <div class="box-body">
                  <div class="form-group col-sm-2">
                    <label for="id_pedido" class="">Código</label>
                    <input type="text" class="form-control" id="id_pedido" placeholder="" value="3" disabled>
                  </div>
                  <div class="form-group col-sm-5">
                    <label class="">Fecha Registro</label>
                    <div class="">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker" value="16/05/2016" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-sm-5">
                    <label class="">Fecha Entrega</label>
                    <div class="">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker" value="18/06/2016">
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-sm-5">
                    <label for="aso_cliente" class="">Asociar Cliente</label>
                     <form action="#" method="get" class="form-horizontal">
                            <div class="input-group">
                              <input type="text" name="q" class="form-control">
                                  <span class="input-group-btn">
                                    <button type="button" id="search-btn" class="btn btn-flat"><i class="fa fa-search" data-toggle="modal" data-target="#ModelProducto"></i>
                                    </button>
                                  </span>
                            </div>
                    </form>
                  </div>
                  <div class="form-group col-sm-offset-2 col-sm-5">
                    <label for="estado" class="">Estado</label>
                    <select class="form-control">
                      <option value="opcion1" selected>Pendiente</option>
                      <option value="opcion2">En Proceso</option>
                      <option value="opcion3">Terminado</option>
                    </select>
                  </div>
                  <div class="table row">
                    <div class="col-sm-12 table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr class="info">
                            <th>Código</th>
                            <th>Referencia</th>
                            <th>Color</th>
                            <th>Talla</th>
                            <th>Cantidad</th>
                            <th>Valor</th>
                            <th>Opción</th>
                            <th><button type="button" class="btn btn-default btn-xs" type="button"><b>+</b></button></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>201</td>
                            <td>Rojo</td>
                            <td>
                              <select class="form-control ">
                                <option value="talla1">L</option>
                                <option value="talla2">M</option>
                                <option value="talla3" selected>S</option>
                              </select>
                            </td>
                            <td>60</td>
                            <td>$350000</td>
                            <td><button type="button" class="btn btn-box-tool" data-widget=""><i class="fa fa-times"></i></button></td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>202</td>
                            <td>Verde</td>
                            <td>
                              <select class="form-control">
                                <option value="talla1">L</option>
                                <option value="talla2" selected>M</option>
                                <option value="talla3">S</option>
                              </select>
                            </td>
                            <td>150</td>
                            <td>$590000</td>
                            <td><button type="button" class="btn btn-box-tool" data-widget=""><i class="fa fa-times"></i></button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="form-group col-sm-5">
                    <label for="aso_cotizacion" class="">
                    <input type="checkbox" value="">Asociar Cotización</label>
                    <form action="#" method="get" class="form-horizontal">
                            <div class="input-group">
                              <input type="text" name="q" class="form-control" disabled="true"/>
                                  <span class="input-group-btn">
                                    <button type="button" id="search-btn" class="btn btn-flat"><i class="fa fa-search" data-toggle="modal" data-target="#ModelProducto"></i>
                                    </button>
                                  </span>
                            </div>
                    </form>
                  </div>
                  <div class="form-group col-sm-offset-2 col-sm-5">
                    <label for="fecha_entrega" class="">Valor Total</label>
                    <input type="text" class="form-control" id="fecha_entrega" placeholder="" value="$1504780" disabled>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Guardar</button>
              <button type="button" class="btn btn-danger">cancelar</button>
            </div>
          </div>
        </div>
      </div>
      <p>Cantidad total de pedidos: <?php echo $cantidad_de_pedidos; ?> </p>
    </section>

