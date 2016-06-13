    </div>
    <script>
        var uri = "<?php echo URL; ?>";
    </script>

    <!-- jQuery, loaded in the recommended protocol-less way -->
    <!-- more http://www.paulirish.com/2010/the-protocol-relative-url/ -->
    <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

    <!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
    <script src="<?php echo URL; ?>plugins/jQuery/jQuery-2.2.0.min.js"></script>
	 <!-- Bootstrap 3.3.6 -->
	 <script src="<?php echo URL; ?>dist/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo URL; ?>plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="<?php echo URL; ?>plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?php echo URL; ?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="<?php echo URL; ?>plugins/input-mask/jquery.inputmask.extensions.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo URL; ?>js/app.min.js"></script>
    <!-- our JavaScript -->
    
    <!-- SlimScroll -->
    <script src="<?php echo URL; ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo URL; ?>plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo URL; ?>dist/js/demo.js"></script>
    <!-- bootstrap color picker -->
    <script src="<?php echo URL; ?>plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <script src="<?php echo URL; ?>js/sweetalert.min.js"></script>
    <!-- bootstrap datepicker -->
    <script src="<?php echo URL; ?>plugins/datepicker/bootstrap-datepicker.js"></script>

    <script src="<?php echo URL; ?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="<?php echo URL; ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="<?php echo URL; ?>plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo URL; ?>plugins/fastclick/fastclick.js"></script>

    <script src="<?php echo URL; ?>dist/js/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    
<script type="text/javascript" src="https://cdn.datatables.net/u/dt/dt-1.10.12,b-1.2.1/datatables.min.js"></script>

    
    <script src="<?php echo URL; ?>dist/js/list.min.js"></script>
    
    <script>
        $(function () {
        //Date picker
        $('#datepicker').datepicker({


            
          autoclose: true
        });

        $('#datepicker2').datepicker({
          autoclose: true
        });

        $(".js-example-tags").select2({
          tags: true
        });

        //Posible solución al formato
        // $("#datepicker").datepicker({
        //   dateFormat: "yy-mm-dd"
        // });
        // // Getter
        // var dateFormat = $("#datepicker").datepicker("option", "dateFormat");
        // // Setter
        // $("#datepicker").datepicker("option", "dateFormat", "yy-mm-dd");
      });
    </script>

    <script>
        var options = {
        valueNames: ['ref', 'color', 'stock', 'fecha_reg', 'estado']
      };

      var userList = new List('users', options);
    </script>


    <script type="text/javascript">
      <?= $mensaje ?>
    </script>

      <script type="text/javascript">
           <?= $mensaje2 ?>

          function editar(codigo, fichas){
              var campos = $(fichas).parent().parent();
              $("#codigo").val(campos.find("td").eq(0).text());
              $("#referencia").val(campos.find("td").eq(1).text());
              $("#color").val(campos.find("td").eq(2).text());
              $("#stock_min").val(campos.find("td").eq(3).text());
              $("#fecha_reg").val(campos.find("td").eq(4).text());
              $("#vlr_produccion").val(campos.find("td").eq(5).text());
              $("#vlr_producto").val(campos.find("td").eq(6).text());
              $("#estado").val(campos.find("td").eq(7).text());
              $("#idModal").show();
          }
      </script>

      <script>
        $(document).ready(function(){
            $('#tablaFichas').DataTable( {
              "lengthChange": false,
              "searching": false,
              "info": false,
              "ordering": false
            });
        });
      </script>

      <script src="<?php echo URL; ?>js/application.js"></script>
</body>
</html>
