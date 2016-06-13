<?php 
	class mdlUsuario
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

	    public function regUsuario($codigo, $documento, $nombre_usuario, $rol, $estado)
	    {
	        $sql = "INSERT INTO usarios (codigo, documento, nombre_usuario, rol, estado) VALUES (:codigo, :documento, :nombre_usuario, :rol, :estado)";
	        $query = $this->db->prepare($sql);
	        $parameters = array(':codigo' => $codigo, ':documento' => $documento, ':nombre_usuario' => $nombre_usuario, ':rol' => $rol, ':estado' => $estado);

	        $query->execute($parameters);
	    }

	    public function getUsuarios()
	    {
	        $sql = "SELECT codigo, documento, nombre_usuario, rol, estado FROM usuarios";
	        $query = $this->db->prepare($sql);
	        $query->execute();
	        return $query->fetchAll();
	    }
	}
?>