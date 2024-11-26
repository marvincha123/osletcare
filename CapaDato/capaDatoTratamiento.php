<?php
include_once("conexion.php");
	class capaDatoTratamiento{
		private $objetoConexion;


		public function __construct(){
			$this->objetoConexion=new conexion();
		}

		public function insertar($fecha,$descripcion,$estado,$idusuario,$montototal){
			
			$this->objetoConexion->conectar();
			$this->objetoConexion->ejecutar(
				"insert into tratamiento (fecha, montototal,descripcion,estado,idusuario) values ('$fecha', '$montototal','$descripcion', '$estado', '$idusuario')");
			$this->objetoConexion->desconectar();	
		}
		public function actualizarPago($pagoadelanto,$idtratamiento){
			$this->objetoConexion->conectar();
			$sql = $this->objetoConexion->ejecutar(
				"select tratamiento.id,tratamiento.fecha,tratamiento.montototal,tratamiento.montopagado  from tratamiento where tratamiento.id='$idtratamiento'");
			$monto = $sql[0]['montototal'];
			$pagado = $sql[0]['montopagado'];
			$pagado = $pagado+$pagoadelanto;
			$sobrante = $monto - $pagado;
			$this->objetoConexion->ejecutar("update tratamiento set montopagado='$pagado' , montoacobrar='$sobrante' where id='$idtratamiento'");
			$this->objetoConexion->desconectar();			
		}
		public function actualizarPagoVisita($pagoadelanto,$idtratamiento,$id){
			$this->objetoConexion->conectar();
			$sql = $this->objetoConexion->ejecutar(
				"select visita.id,visita.pagoadelanto from visita where visita.id='$id'");
			$montoactual = $sql[0]['pagoadelanto'];
			if ($montoactual>$pagoadelanto){
				$montoactual = $montoactual-$pagoadelanto;
				$sql = $this->objetoConexion->ejecutar(
				"select tratamiento.id,tratamiento.fecha,tratamiento.montototal from tratamiento where tratamiento.id='$idtratamiento'");
			$monto = $sql[0]['montototal'];
			$pagado = $sql[0]['montopagado'];
			$sobrante = $monto + $montoactual;
			$pagado = $pagado - $montoactual;
			$this->objetoConexion->ejecutar("update tratamiento set montopagado='$pagado' , montoacobrar='$sobrante' where id='$idtratamiento'");
			}else{
				$montoactual = $montoactual + ($montoactual-$pagoadelanto);
				$sql = $this->objetoConexion->ejecutar(
				"select tratamiento.id,tratamiento.fecha,tratamiento.montototal,tratamiento.montopagado  from tratamiento where tratamiento.id='$idtratamiento'");
			$monto = $sql[0]['montototal'];
			$pagado = $sql[0]['montopagado'];
			$sobrante = $monto - $montoactual;
			$pagado = $pagado + $montoactual;
			$this->objetoConexion->ejecutar("update tratamiento set montopagado='$pagado' , montoacobrar='$sobrante' where id='$idtratamiento'");
			}
			
			$this->objetoConexion->desconectar();
		}


		public function eliminar($id){
			$this->objetoConexion->conectar();
			$this->objetoConexion->ejecutar(
				"delete from tratamiento where id='$id'");
			$this->objetoConexion->desconectar();
		}


		public function mostrar(){
			$this->objetoConexion->conectar();
			$resultado=$this->objetoConexion->ejecutar(
				"select tratamiento.id,tratamiento.fecha,tratamiento.montototal,tratamiento.descripcion,tratamiento.estado,usuario.nombre, usuario.apellido, tratamiento.montopagado,tratamiento.montoacobrar from tratamiento,usuario where tratamiento.idusuario=usuario.id and tratamiento.montoacobrar=0");

			$this->objetoConexion->desconectar();
			return $resultado;
		}

		public function buscar($b){
			$this->objetoConexion->conectar();
			$resultado=$this->objetoConexion->ejecutar("select tratamiento.id,tratamiento.fecha,tratamiento.montototal,tratamiento.descripcion,tratamiento.estado,usuario.nombre, usuario.apellido, tratamiento.montopagado,tratamiento.montoacobrar from tratamiento,usuario where usuario.apellido LIKE '%".$b."%' and tratamiento.idusuario=usuario.id");
			$this->objetoConexion->desconectar();
			return $resultado;
		}



		public function getIdUltimoTratamiento(){
			$this->objetoConexion->conectar();
			$resultado=$this->objetoConexion->ejecutar(
			"select id from tratamiento order by id desc limit 1");

			$this->objetoConexion->desconectar();
			return $resultado;			
		}

		public function getIdTratamiento(){
			$this->objetoConexion->conectar();
			$resultado=$this->objetoConexion->ejecutar(
			"select id from tratamiento");

			$this->objetoConexion->desconectar();
			return $resultado;	
		}

		public function getTratamientoById($id){
			$this->objetoConexion->conectar();
			$resultado=$this->objetoConexion->ejecutar(
			"select tratamiento.montototal,tratamiento.descripcion,usuario.nombre,usuario.nit,usuario.apellido from tratamiento,usuario where tratamiento.idusuario=usuario.id and tratamiento.id='$id'");

			$this->objetoConexion->desconectar();
			return $resultado;	
		}
		public function getTratamiento(){
			$this->objetoConexion->conectar();
			$resultado=$this->objetoConexion->ejecutar(
			"select tratamiento.id,tratamiento.descripcion,usuario.nombre as nombre,usuario.apellido as apellido from tratamiento,usuario where tratamiento.idusuario=usuario.id and tratamiento.estado='En proceso'");
			$this->objetoConexion->desconectar();
			return $resultado;				
		}
		public function insertarClienteTratamiento($fecha,$descripcion,$estado,$idusuario,$idtrabajo,$precio){
			$this->objetoConexion->conectar();
			$this->objetoConexion->ejecutar(
				"insert into tratamiento (fecha, montototal,descripcion,estado,idusuario) values ('$fecha', '$precio','$descripcion', '$estado', '$idusuario')");

			$resultado = $this->objetoConexion->ejecutar("Select * from tratamiento order by id desc limit 1");
			$idtratamiento = $resultado[0]["id"];
			$this->objetoConexion->ejecutar(
				"insert into trabajotratamiento (idtrabajo, idtratamiento, precio,cantidad) values ('$idtrabajo','$idtratamiento', '$precio','1')");			
			$this->objetoConexion->desconectar();


		}



		
	}


?>