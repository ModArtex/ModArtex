<?php 
	class mdlUsuario
	{
		private $tipo_Documento;
		private $documento;
		private $estado;
		private $nombre;
		private $apellido;
		private $nombre_Usuario;
		private $clave;
		private $email;
		private $rol;
		private $codigo;
		private $db;

		public function __SET($atributo, $valor){
			$this->$atributo = $valor;
		}

		public function __GET($atributo){
			return $this->atributo;
		}

		function __construct($db)
	    {
	        try {
	            $this->db = $db;
	        } catch (PDOException $e) {
	        	exit('No se pudo establecer la conexión a la base de datos.');
	        }
	    }

	    public function regUsuario()
	    {
	        $sql = "INSERT INTO usuario VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

	        try {
	        	$query = $this->db->prepare($sql);
	        	$query->bindParam(1, $this->tipo_Documento);
	        	$query->bindParam(2, $this->documento);
	        	$query->bindParam(3, $this->estado);
	        	$query->bindParam(4, $this->nombre);
	        	$query->bindParam(5, $this->apellido);
	        	$query->bindParam(6, $this->nombre_Usuario);
	        	$query->bindParam(7, $this->clave);
	        	$query->bindParam(8, $this->email);
	        	$query->bindParam(9, $this->rol);
	        	$query->bindParam(10, $this->codigo);

	        	return $query->execute();

	        } catch (PDOException $e) {
	        	
	        }
	    }
	        
	    public function getUsuario()
	    {
	        $sql = "SELECT tipo_Documento, documento, estado, nombre, apellido, nombre_Usuario, clave, email, rol, codigo FROM usuario ORDER BY codigo DESC";

	        try {
	        	$query = $this->db->prepare($sql);
	        	$query->execute();
	        	return $query->fetchAll();
	        } catch (PDOException $e) {
	   
	        }
	    }


	    // public function modificarFicha(){
	    //     $sql = "UPDATE fichas SET referencia = ?, color = ?, stock_min = ?, fecha_reg = ?, valor_produccion = ?, valor_producto = ?, estado = ? WHERE codigo = ?";

	    //     try{
	    //       $query = $this->db->prepare($sql);
	    //       $query->bindParam(1, $this->referencia);
	    //       $query->bindParam(2, $this->color);
	    //       $query->bindParam(3, $this->stock_min);
	    //       $query->bindParam(4, $this->fecha_reg);
	    //       $query->bindParam(5, $this->valor_produccion);
	    //       $query->bindParam(6, $this->valor_producto);
	    //       $query->bindParam(7, $this->estado);
	    //       $query->bindParam(8, $this->codigo);
	        
	    //       return $query->execute();

	    //     }catch(PDOException $e){
	        	
	    //     }
     //  	}

     //  	public function cambiarEstado(){
	    //     $sql = "CALL SP_CambiarEstadoFicha(?, ?)";

	    //     try{
	    //       $query = $this->db->prepare($sql);
	    //       $query->bindParam(1, $this->codigo);
	    //       $query->bindParam(2, $this->estado);
	        
	    //       return $query->execute();

	    //     }catch(PDOException $e){
	        	
	    //     }
     //  	}
	}
?>