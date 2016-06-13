<?php 
	class Usuario extends Controller
	{
		
		private $mdlModel = null;

	    function __construct(){
	        $this->mdlModel = $this->loadModel("mdlUsuario");
	    }

		public function consUsuario()
	    {
	    	$usuarios = $this->mdlModel->getUsuarios();

	        require APP . 'view/_templates/header.php';
	        require APP . 'view/usuario/consUsuario.php';
	        require APP . 'view/_templates/footer.php';
	    }

	    public function regUsuario(){

	    	require APP . 'view/_templates/header.php';
        	require APP . 'view/usuario/regUsuario.php';
        	require APP . 'view/_templates/footer.php';

	        if (isset($_POST["btnRegUsuario"])) {
	            $this->mdlModel->regUsuario($_POST["fecha_registro"], $_POST["fecha_entrega"],  $_POST["cliente"],  $_POST["estado"],  $_POST["valor_total"]);
	            echo '<script>swal("Good job!", "You clicked the button!", "success")</script>';
	        }
	    }
	}
?>