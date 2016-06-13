  <section class="content-header">
      <br>
      <ol class="breadcrumb">
        <li><a href="<?php echo URL; ?>home/index"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Pedido</a></li>
        <li class="active">Registrar Pedido</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="box box-primary" style="padding-right: 15px;">
          <div class="box-header with-border">
          <div class="box-header with-border" style="text-align: center;">
              <h3 class="box-title"><strong>REGISTRAR PEDIDO</strong></h3>
          </div>
            <br>
            <form action="<?php echo URL; ?>pedido/regPedido" method="POST">
              <br>
              <div class="row col-lg-12">
                <div class="form-group col-lg-1">
                  <label for="id_pedido" class="">Código:</label>
                  <input type="text" class="form-control" id="id_pedido" placeholder="" value="" disabled="disabled">
                </div>
                <div class="form-group col-lg-offset-2 col-lg-4">
                  <label class="">Fecha Registro: </label>
                  <div class="">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" name="fecha_registro" id="datepicker" placeholder="2016/06/06" required="">
                    </div>
                  </div>
                </div>
                <div class="form-group col-lg-offset-1 col-lg-4">
                  <label class="">*Fecha Entrega:</label>
                  <div class="">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" name="fecha_entrega" id="datepicker2" placeholder="2016/06/06" required="">
                    </div>
                  </div>
                </div>

              </div>
              <div class="row col-lg-12">

                <div class="form-group col-lg-2">
                  <label for="aso_cotizacion" class="">
                    <input type="checkbox" value="">Asociar Cotización:</label>
                      <!-- <form action="#" method="get" class="form-horizontal"> -->
                            <div class="input-group">
                              <input type="text" name="q" class="form-control" disabled="true"/>
                                  <span class="input-group-btn">
                                    <button type="button" id="search-btn" class="btn btn-flat"><i class="fa fa-search" data-toggle="modal" data-target="#ModelProducto"></i>
                                    </button>
                                  </span>
                            </div>
                    <!-- </form> -->
                  </div>
                <div class="form-group col-lg-offset-1 col-lg-4">
                  <label for="aso_cliente" class="">Asociar Cliente:</label>
                  <form action="#" method="post" class="form-horizontal">
                    <div class="input-group">
                      <input type="text" class="form-control" name="cliente" id="cliente" placeholder="" required="" value="Juan">
                      <span class="input-group-btn">
                        <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search" data-toggle="modal" data-target="#"></i>
                        </button>
                      </span>
                    </div>
                  </form>
                </div>

                 <!-- <div class="form-group col-lg-offset-1 col-lg-4">
                  <label for="aso_cliente" class="">*Asociar Cliente:</label>
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


            <div class="modal fade" id="ModelProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Mensaje</h4>
                  </div>
                  <div class="modal-body">
                  <table>
                    
                  </table>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                  </div>
                </div>
              </div>
            </div> -->
               <div class="form-group col-lg-offset-1 col-lg-4">
                  <label for="estado" class="">Estado:</label>
                  <select class="form-control" name="estado" required="">
                    <option value="Pendiente" selected>Pendiente</option>
                    <option value="En Proceso">En Proceso</option>
                    <option value="Terminado">Terminado</option>
                  </select>
                </div> 
              </div>
                <div class="form-group">
                  <br>
                  <br>
                  <div class="table row">
                      <div class="col-lg-12 table-responsive">
                        <table class="table table-hover" style="margin-top: 2%;">
                          <thead>
                            <tr class="info">
                              <th>Código</th>
                              <th>Referencia</th>
                              <th>Color</th>
                              <th>Talla</th>
                              <th>Cantidad</th>
                              <th>Valor</th>
                              <th>Opción</th>
                              <th><button type="submit" class="btn btn-primary btn-xs" name="btnAsoFichas">Añadir</button></th>
                              <!-- <th><button type="button" class="btn btn-default btn-xs" type="button"><b>+</b></button></th> -->
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
                </div>
              <div class="row col-lg-12">
                <div class="form-group col-lg-offset-8 col-lg-4">
                  <label for="vlr_total" class="">Valor Total:</label>
                  <input type="text" class="form-control" name="valor_total" id="vlr_total" required="">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <div class="form-group col-lg-12">
                  <button type="submit" class="btn btn-primary  col-lg-offset-9" style="margin-top: 15px;" name="btnRegPedido">Registrar</button>
                  <button type="reset" class="btn btn-danger" style="margin-left: 15px; margin-top: 15px;">Cancelar</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
      </div>
    </section>