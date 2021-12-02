<?php 
		class conexion extends PDO
		{
			private $tipo_de_base='mysql';
			private $host='localhost';
			private $nombre_de_base='golden_wings';
			private $usuario='root';
			private $contrasena='';

			//se sobreescribe el metodo constructor de la clase PDO
			public function __construct()
			{
				try 
				{
					parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base,$this->usuario,$this->contrasena);	
				} 
				catch (PDOException $e)
				{
					echo "Ha surgido un error y no se puede conectar con la B.D. Detalle: ".$e->getMessage;
					exit;
				}
			}
		}
?>