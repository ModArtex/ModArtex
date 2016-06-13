    <!-- Content Header (Page header) -->
    <section class="content-header">
      <br>
      <ol class="breadcrumb">
        <li><a href="<?php echo URL ?>home/index"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Ficha Técnica</a></li>
        <li class="active">Listar Fichas</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

    <!-- Inicio de listar -->
    <div class="box box-info">
      <div class="box-header with-border"  style="text-align: center;">
        <h3 class="box-title"><strong>LISTAR FICHAS TÉCNICAS</strong></h3>
      </div>
      <div id="users">
        <div class="row box-header">
          <div class="col-md-offset-8 col-md-4">
            <div class="form-group">
              <div class="box-tools pull-right">   
                <form action="#" method="get" class="form-horizontal">
                  <div class="input-group">
                    <input type="text" class="form-control search" placeholder="Buscar">
                    <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="sort btn btn-flat"><i class="fa fa-search"></i></button>
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
              <div class="table table-responsive">
                <table class="table table-hover" id="tablaFichas">
                  <thead>
                    <tr class="info">
                      <th style="width: 10px">#</th>
                      <th>Referencia</th>
                      <th>Color</th>
                      <th>Stock_Mínimo</th>
                      <th>Fecha_Registro</th>
                      <th>Vlr_Producción</th>
                      <th>Vlr_Producto</th>
                      <th>Estado</th>
                      <th style="width: 7%">Opción</th>
                    </tr>
                  </thead>
                  <tbody class="list">
                  <?php foreach ($fichas as $ficha): ?>
                    <tr>
                      <td><?= $ficha["codigo"] ?></td>
                      <td class="ref"><?= $ficha["referencia"] ?></td>
                      <td class="color"><?= $ficha["color"] ?></td>
                      <td class="stock"><?= $ficha["stock_min"] ?></td>
                      <td class="fecha_reg"><?= $ficha["fecha_reg"] ?></td>
                      <td><?= $ficha["valor_produccion"] ?></td>
                      <td><?= $ficha["valor_producto"] ?></td>
                      <td class="estado"><?= $ficha["estado"]==1?"Habilitado":"Inhabilitado" ?></td>
                      <td>
                        <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#idModal" onclick="editar('<?= $ficha["codigo"] ?>', this)"><i class="fa fa-pencil-square-o"></i></button>
                        
                        <?php if ($ficha["estado"] == 1){ ?>
                      
                      <button type="button" class="btn btn-box-tool" onclick="cambiarEstadoFicha(<?= $ficha['codigo'] ?>, 0)"><i class="fa fa-minus-circle"></i></button>
                          
                          <?php }else{ ?>
                      <button type="button" class="btn btn-box-tool" onclick="cambiarEstadoFicha(<?= $ficha['codigo'] ?>, 1)"><i class="fa fa-check"></i></button>

                          <?php } ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          </form>
        </div>
        <div class="box-footer">
          <!-- <div class="box-tools">
            <ul class="pagination pagination-sm no-margin pull-right">
              <li class="disabled"><a href="#">&laquo;</a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">»</a></li>
            </ul>
          </div> -->
        </div>
      </div>
      <!-- inicio modal modificar ficha-->
      <div class="modal fade" id="idModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Modificar Ficha Técnica</h4>
            </div>
            <div class="modal-body">
              <form role="form" id="idModal" action="<?= URL ?>ficha/edit" method="post">
                <div class="form-group col-sm-4">
                  <label for="codigo" class="">Código:</label>
                  <input class="form-control" readonly type="text" name="codigo" id="codigo" placeholder="">
                </div>
                <div class="form-group col-sm-4">
                  <label class="">Fecha Registro:</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input class="form-control" readonly type="text" name="fecha_reg" id="fecha_reg" placeholder="">
                  </div>
                </div>
                <div class="form-group col-sm-4">
                  <label for="estado" class="">*Estado:</label>
                  <input class="form-control" type="text" readonly name="estado" id="estado" placeholder="">
                </div>
                <div class="form-group col-sm-4">
                  <label for="referencia" class="">*Referencia:</label>
                  <input class="form-control" type="text" name="referencia" id="referencia" placeholder="">
                </div>
                <div class="form-group col-sm-4">
                  <label for="stock_min" class="">*Stock Mínimo:</label>
                  <input class="form-control" type="text" name="stock_min" id="stock_min" placeholder="">
                </div>
                <div class="form-group col-sm-4">
                  <label for="color" class="">*Color:</label>
                  <input class="form-control" type="text" name="color" id="color" placeholder="">
                </div>
                <div class="form-group">
                  <div>
                    <div class="table">
                      <div class="col-sm-12 table-responsive">
                        <table class="table table-hover" id="" style="margin-top: 2%;">
                          <thead>
                            <tr class="info">
                              <th>Código</th>
                              <th>Nombre</th>
                              <th>Color</th>
                              <th>Unid_Medida</th>
                              <th>Cantidad</th>
                              <th>Valor</th>
                              <th>Cant_Nec_Unidad</th>
                              <th>Vlr_Unidad_Refer</th>
                              <th>Opción</th>
                              <th><button type="button" class="btn btn-default btn-xs" type="button"><b>+</b></button></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>001</td>
                              <td>Tela</td>
                              <td>Azul</td>
                              <td>
                                <select class="form-control ">
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
                              <td><button type="button" class="btn btn-box-tool" data-widget=""><i class="fa fa-times"></i></button></td>
                            </tr>
                            <tr>
                              <td>012</td>
                              <td>Sesgo</td>
                              <td>Blanco</td>
                              <td>
                                <select class="form-control ">
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
                                <select class="form-control ">
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
                  </div>
                </div>
                <div class="form-group col-sm-4">  
                  <label for="vlr_produccion" class="">*Valor Producción:</label>
                  <input class="form-control" type="text" name="vlr_produccion" id="vlr_produccion" placeholder="">
                </div>
                <div class="form-group col-sm-offset-4 col-sm-4">  
                  <label for="vlr_producto" class="">*Valor Producto:</label>
                  <input class="form-control" type="text" name="vlr_producto" id="vlr_producto" placeholder="">
                </div>
                <!--<div class="form-group col-sm-4">
                    <label for="tallas" class="" >*Tallas:</label>
                    <select class="form-control js-example-tags" multiple="">
                      <option value="L">L</option>
                      <option value="M">M</option>
                      <option value="S">S</option>
                    </select>
                </div> -->
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" name="btnModificar">Guardar cambios</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal"">Cancelar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- fin modal modificar ficha-->
    </section>