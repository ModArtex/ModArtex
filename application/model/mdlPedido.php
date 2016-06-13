<?php  

	class mdlPedido
	{
		private $db;

		function __construct($db)
	    {
	        try {
	            $this->db = $db;
	        } catch (PDOException $e) {
	        	exit('No se pudo establecer la conexión a la base de datos.');
	        }
	    }

	    public function getPedidos()
	    {
	        $sql = "SELECT codigo, fecha_registro, cliente, valor_total, fecha_entrega, estado FROM pedidos";
	        $query = $this->db->prepare($sql);
	        $query->execute();
	        return $query->fetchAll();
	    }

	    public function regPedido($fecha_registro, $fecha_entrega, $cliente, $estado, $valor_total)
	    {
	        $sql = "INSERT INTO pedidos (fecha_registro, fecha_entrega, cliente, estado, valor_total) VALUES (:fecha_registro, :fecha_entrega, :cliente, :estado, :valor_total)";
	        $query = $this->db->prepare($sql);
	        $parameters = array(':fecha_registro' => $fecha_registro, ':fecha_entrega' => $fecha_entrega, ':cliente' => $cliente, ':estado' => $estado, ':valor_total' => $valor_total);

	        $query->execute($parameters);
	    }

	    public function getCantidadPedidos()
	    {
	        $sql = "SELECT COUNT(codigo) AS cantidad_de_pedidos FROM pedidos";
	        $query = $this->db->prepare($sql);
	        $query->execute();

	        // fetch() is the PDO method that get exactly one result
	        return $query->fetch()->cantidad_de_pedidos;
	    }	    
	}

?>