<?php 

	class Ficha extends Controller
	{
		
		private $mdlModel = null;

	    function __construct(){
	        $this->mdlModel = $this->loadModel("mdlFicha");
	    }


	    public function consFicha()
	    {
	    	$mensaje = "";
	    	$mensaje2 = "";

	    	
	    	$fichas = $this->mdlModel->getFichas();

	        require APP . 'view/_templates/header.php';
	        require APP . 'view/ficha/consFicha.php';
	        require APP . 'view/_templates/footer.php';
	    }

	    public function regFicha()
	    {
	    	$mensaje = "";
	        if (isset($_POST["btnRegFicha"])) {

	            $this->mdlModel->__SET("referencia", $_POST["referencia"]);
	            $this->mdlModel->__SET("color", $_POST["color"]);
	            $this->mdlModel->__SET("stock_min", $_POST["stock_min"]);
	            $this->mdlModel->__SET("fecha_reg", $_POST["fecha_reg"]);
	            $this->mdlModel->__SET("valor_produccion", $_POST["vlr_produccion"]);
	            $this->mdlModel->__SET("valor_producto", $_POST["vlr_producto"]);
	            $this->mdlModel->__SET("estado", $_POST["estado"]);

	            // echo '<script>swal("Ficha registrada exitosamente!", "", "success")</script>';

	         if($this->mdlModel->regFicha()){
			        $mensaje = "alert('Ficha registrada')";
			    }else{
			    	$mensaje = "alert('No se pudo registrar la ficha')";
			    }
	        }

	        // if (isset($_POST["btnCanFicha"])) {
	        // 	echo '<script>swal("Confirma que desea cancelar el registro?", "", "success")</script>';
	        // }

	        require APP . 'view/_templates/header.php';
        	require APP . 'view/ficha/regFicha.php';
        	require APP . 'view/_templates/footer.php';

	        // va redireccionar acá despues de realizar el registro.
	        //header('location: ' . URL . 'ficha/regFicha');
	    }

	    public function edit(){

	    	$mensaje = "";
		    $mensaje2 = "";
		    if(isset($_POST["btnModificar"])){
		      	$this->mdlModel->__SET("codigo", $_POST["codigo"]);
		      	$this->mdlModel->__SET("referencia", $_POST["referencia"]);
	            $this->mdlModel->__SET("color", $_POST["color"]);
	            $this->mdlModel->__SET("stock_min", $_POST["stock_min"]);
	            $this->mdlModel->__SET("fecha_reg", $_POST["fecha_reg"]);
	            $this->mdlModel->__SET("valor_produccion", $_POST["vlr_produccion"]);
	            $this->mdlModel->__SET("valor_producto", $_POST["vlr_producto"]);
	            $this->mdlModel->__SET("estado", $_POST["estado"]);

		      if($this->mdlModel->modificarFicha()){
		      //$mensaje2 = 'alert("Modificó"); $("#idModal").hide();';
		      	$mensaje2 = 'alert("Modificó correctamente");';


		      }else{
		      	$mensaje2 = "alert('Error al modificar')";
		      }

		      //header("location: ".URL."ficha/consFicha");
		    }

		    $fichas = $this->mdlModel->getFichas();

		    require APP . 'view/_templates/header.php';
	        require APP . 'view/ficha/consFicha.php';
	        require APP . 'view/_templates/footer.php';
		}

		public function cambiarEstado(){

	    	$mensaje = "";
		    $mensaje2 = "";
		    $this->mdlModel->__SET("codigo", $_POST["codigo"]);
	        $this->mdlModel->__SET("estado", $_POST["estado"]);

		    $fichas = $this->mdlModel->cambiarEstado();

		    if ($fichas) {
		    	echo json_encode(["v"=>1]);
		    }else{
		    	echo json_encode(["v"=>0]);
		    }
		    
	 //     require APP . 'view/_templates/header.php';
	 //    require APP . 'view/ficha/consFicha.php';
	 //    require APP . 'view/_templates/footer.php';
		}
	}
?>