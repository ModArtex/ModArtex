<?php 
	class mdlFicha
	{
		private $codigo;
		private $referencia;
		private $color;
		private $stock_min;
		private $fecha_reg;
		private $valor_produccion;
		private $valor_producto;
		private $estado;
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

	    public function regFicha()
	    {
	        $sql = "INSERT INTO fichas VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

	        try {
	        	$query = $this->db->prepare($sql);
	        	$query->bindParam(1, $this->codigo);
	        	$query->bindParam(2, $this->referencia);
	        	$query->bindParam(3, $this->color);
	        	$query->bindParam(4, $this->stock_min);
	        	$query->bindParam(5, $this->fecha_reg);
	        	$query->bindParam(6, $this->valor_produccion);
	        	$query->bindParam(7, $this->valor_producto);
	        	$query->bindParam(8, $this->estado);

	        	return $query->execute();

	        } catch (PDOException $e) {
	        	
	        }
	    }
	        
	    public function getFichas()
	    {
	        $sql = "SELECT codigo, referencia, color, stock_min, fecha_reg, valor_produccion, valor_producto, estado FROM fichas ORDER BY codigo DESC";

	        try {
	        	$query = $this->db->prepare($sql);
	        	$query->execute();
	        	return $query->fetchAll();
	        } catch (PDOException $e) {
	   
	        }
	    }


	    public function modificarFicha(){
	        $sql = "UPDATE fichas SET referencia = ?, color = ?, stock_min = ?, fecha_reg = ?, valor_produccion = ?, valor_producto = ?, estado = ? WHERE codigo = ?";

	        try{
	          $query = $this->db->prepare($sql);
	          $query->bindParam(1, $this->referencia);
	          $query->bindParam(2, $this->color);
	          $query->bindParam(3, $this->stock_min);
	          $query->bindParam(4, $this->fecha_reg);
	          $query->bindParam(5, $this->valor_produccion);
	          $query->bindParam(6, $this->valor_producto);
	          $query->bindParam(7, $this->estado);
	          $query->bindParam(8, $this->codigo);
	        
	          return $query->execute();

	        }catch(PDOException $e){
	        	
	        }
      	}

      	public function cambiarEstado(){
	        $sql = "CALL SP_CambiarEstadoFicha(?, ?)";

	        try{
	          $query = $this->db->prepare($sql);
	          $query->bindParam(1, $this->codigo);
	          $query->bindParam(2, $this->estado);
	        
	          return $query->execute();

	        }catch(PDOException $e){
	        	
	        }
      	}
	}
?>