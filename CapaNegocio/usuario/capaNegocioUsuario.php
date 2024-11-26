<?php
include_once(".././CapaDato/capaDatoUsuario.php");
class capaNegocioUsuario{
	public $objectoCapaDato;
	public function __construct(){
		$this->objectoCapaDato=new capaDatoUsuario();
	}

	public function insertar($nombre, $apellido,$cedula,$correo,$nit,$sexo,$telefono,$fotoBase64){
		$this->objectoCapaDato->insertar($nombre, $apellido,$cedula,$correo,$nit,$sexo,$telefono,$fotoBase64);
	}

	public function eliminar($id){
		$this->objectoCapaDato->eliminar($id);
	}

	public function actualizar($id,$nombre, $apellido,$cedula,$correo,$nit,$sexo,$telefono){
		$this->objectoCapaDato->actualizar($id,$nombre, $apellido,$cedula,$correo,$nit,$sexo,$telefono);
	}

	public function mostrar(){
		return $this->objectoCapaDato->mostrar();
	}
	
	public function verificarPlan($id){
		$resultado=$this->objectoCapaDato->verificarPlan($id);
		if(count($resultado) > 0){
			return 1;
		}
		return 0;
	}
	public function identificarPlan($id){
		$resultado=$this->objectoCapaDato->verificarPlan($id);
		if(count($resultado) > 0){
			return $resultado->tipop;
		}
		return 0;
	}
	public function getUsuario(){
		return $this->objectoCapaDato->getUsuario();
	}

}

?>