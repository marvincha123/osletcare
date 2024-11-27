<?php
	class conexion{
		private $cadenaConexion;
		private $user;
		private $password;
		private $objectoConexion;


		public function __construct(){
			$this->cadenaConexion='mysql:host=mysql-188005-0.cloudclusters.net;dbname=centraldent2';
			$this->user='admin';
			$this->password='cIvuKN1u';
		}

		public function conectar(){
			try{
				$this->objectoConexion=new PDO($this->cadenaConexion,$this->user,$this->password);
			}catch(PDOException $ex){
				echo "Problema al conectar con la base de datos";
			}
		}

		public function desconectar(){
			$this->objectoConexion=null;
		}

		public function ejecutar($comando){
			try{
				$ejecutar=$this->objectoConexion->prepare($comando);
				$ejecutar->execute();
				$rows=$ejecutar->fetchAll();
				return $rows;
			}catch(PDOException $ex){
				throw $ex;
			
			}
		}


		
	}


?>