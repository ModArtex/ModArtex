<?php  

	class Pedido extends Controller
	{
		private $mdlModel = null;

		function __construct()
		{
	        $this->mdlModel = $this->loadModel("mdlPedido");
		}

		public function consPedido()
		{
			$pedidos = $this->mdlModel->getPedidos();
			$cantidad_de_pedidos = $this->mdlModel->getCantidadPedidos();

	        require APP . 'view/_templates/header.php';
	        require APP . 'view/pedido/consPedido.php';
	        require APP . 'view/_templates/footer.php';
		}

		public function regPedido()
	    {
	    	require APP . 'view/_templates/header.php';
        	require APP . 'view/pedido/regPedido.php';
        	require APP . 'view/_templates/footer.php';

	        if (isset($_POST["btnRegPedido"])) {
	            $this->mdlModel->regPedido($_POST["fecha_registro"], $_POST["fecha_entrega"],  $_POST["cliente"],  $_POST["estado"],  $_POST["valor_total"]);
	            echo '<script>swal("Pedido registrado exitosamente!", "", "success")</script>';
	        }

	        // va direccionar acá despues de realizar el registro.
	        //header('location: ' . URL . 'pedido/regPedido');
	    }

	    public function ajaxGetStats()
	    {
	        $cantidad_de_pedidos = $this->mdlModel->getCantidadPedidos();

	        require APP . 'view/_templates/header.php';
	        require APP . 'view/pedido/consPedido.php';
	        require APP . 'view/_templates/footer.php';

	        // simply echo out something. A supersimple API would be possible by echoing JSON here
	        // echo $cantidad_de_pedidos;
	    }
	}
?>