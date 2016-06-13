<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ModArtex</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo URL ?>dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo URL ?>plugins/font-awesome-4.6.1/css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo URL ?>dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="<?php echo URL ?>/css/sweetalert.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo URL ?>plugins/select2/select2.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo URL ?>plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo URL ?>plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo URL ?>plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo URL ?>plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo URL ?>plugins/timepicker/bootstrap-timepicker.min.css">

  <link rel="stylesheet" href="<?php echo URL ?>dist/css/datatables.min.css" media="screen" title="no title">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/u/dt/dt-1.10.12,b-1.2.1/datatables.min.css"/>
 
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="<?php echo URL ?>dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo URL ?>home/index" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>A</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ModArtex</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>          

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo URL ?>dist/img/avatar5.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo URL ?>dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  Pepito Perez - Programador
                  <small>Miembro desde 1 de Enero 2015</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo URL ?>dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>PepitoP</p>
          <!-- Status -->
        </div>
      </div>

      <!-- search form (Optional) -->
      <!--<form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>-->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <!--Inicia el nuevo menú principal -->
      <ul class="sidebar-menu">
          <li class="header">MÓDULOS</li>
          <!-- Optionally, you can add icons to the links -->
          <li class="active"><a href="<?php echo URL ?>home/index"><i class="fa fa-dashboard"></i><span>Inicio</span></a></li>
     
      <!-- <li class="treeview">
            <a href="#"><i class="fa fa-user"></i> <span>Usuario</span>  <i class="fa fa-angle-left pull-right"></i>
            <ul class="treeview-menu">
              <li><a href="<?php echo URL ?>usuario/regUsuario"><i class="fa fa-circle-o"></i>Registrar Usuarios</a></li>
              <li><a href="<?php echo URL ?>usuario/consUsuario"><i class="fa fa-circle-o"></i>Listar Usuarios</a></li>
              <li><a href="<?php echo URL ?>cancion/index"><i class="fa fa-circle-o"></i>Cancion</a></li>
            </ul>
          </li>
       

      <li class="treeview">
            <a href="#"><i class="fa fa-truck"></i> <span>Bodega</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="mods/bodega/regInsumo.html"><i class="fa fa-circle-o"></i>Registrar Insumo</a></li>
              <li><a href="mods/bodega/consInsumo.html"><i class="fa fa-circle-o"></i>Listar insumos</a></li>
              <li><a href="mods/bodega/existencias.html"><i class="fa fa-circle-o"></i>Existencias Insumos</a></li>
            </ul>
          </li>  -->
          <li class="treeview">
            <a href="#"><i class="fa fa-puzzle-piece"></i> <span>Ficha Técnica</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="<?php echo URL ?>ficha/regFicha"><i class="fa fa-circle-o"></i>Registrar Ficha</a></li>
              <li><a href="<?php echo URL ?>ficha/consFicha"><i class="fa fa-circle-o"></i>Listar Fichas</a></li>
            </ul>
          </li>
     



        <!-- <li class="treeview">
            <a href="#"><i class="fa fa-users"></i> <span>Cliente</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="mods/cliente/regCliente.html"><i class="fa fa-circle-o"></i>Registrar Cliente</a></li>
              <li><a href="mods/cliente/consCliente.html"><i class="fa fa-circle-o"></i>Listar Clientes</a></li>
            </ul>
          </li>
        

        <li class="treeview">
            <a href="#"><i class="fa fa-calculator"></i> <span>Cotización</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="mods/cotizacion/regCotizacion.html"><i class="fa fa-circle-o"></i>Registrar Cotización</a></li>
              <li><a href="mods/cotizacion/consCotizacion.html"><i class="fa fa-circle-o"></i>Listar Cotización</a></li>
            </ul>
          </li> -->
        

        <li class="treeview">
            <a href="#"><i class="fa fa-calendar"></i> <span>Pedido</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="<?php echo URL; ?>pedido/regPedido"><i class="fa fa-circle-o"></i>Registrar Pedido</a></li>
              <li><a href="<?php echo URL; ?>pedido/consPedido"><i class="fa fa-circle-o"></i>Listar Pedidos</a></li>
            </ul>
          </li>
        

        <!-- <li class="treeview">
            <a href="#"><i class="fa fa-cogs"></i> <span>Producción</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="mods/produccion/regOrden.html"><i class="fa fa-circle-o"></i>Registrar Orden</a></li>
              <li><a href="mods/produccion/consOrden.html"><i class="fa fa-circle-o"></i>Listar Órdenes</a></li>
            </ul>
          </li>
      

       <li class="treeview">
            <a href="#"><i class="fa fa-dropbox"></i> <span>Producto Terminado</span><i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu menu-open" >
              <li><a href="mods/productoT/productoT.html"> <i class="fa fa-circle-o"> </i>Existencias Producto T</a></li>
              <li><a href="#"> <i class="fa fa-circle-o"> </i> <i class="fa fa-angle-left pull-right"></i> Objetivos</a>
                   <ul class="treeview-menu">
                      <li><a href="mods/productoT/regObjetivo.html"><i class="fa fa-circle-o"> </i>Registrar objetivos</a></li>
                      <li><a href="mods/productoT/consObjetivo.html"><i class="fa fa-circle-o"> </i>Listar objetivos</a></li>
                   </ul>
              </li> 
            </ul>  
       </li>

       <li class="treeview">
            <a href="#"><i class="fa fa-cogs"></i> <span>Configuración</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="mods/configuracion/medidas.html"><i class="fa fa-circle-o"></i>Medidas</a></li>
              <li><a href="mods/configuracion/colores.html"><i class="fa fa-circle-o"></i>Colores</a></li>
              <li><a href="mods/configuracion/colores.html"><i class="fa fa-circle-o"></i>Roles</a></li>
            </ul>
       </li> -->
     </ul>

      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">