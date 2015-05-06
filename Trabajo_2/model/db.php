<?php 
/**
* db clasess con los datos
*/
class db
{

	public $nombre  = '';
	public $tabla = '';

	public $data= array();
	public	$host = 'localhost';
	public	$user = 'root';
	public	$pass = 'root';

	function __construct($nombreDB,$tabla)
	{
		$this->nombre = $nombreDB;
		$this->tabla = $tabla;
		$this->Actualizar();
	}

	public function SetDataBase($nombreDB)
	{
		$this->nombre=$nombreDB;
	}

	public function SetTabla($tabla)
	{
		$this->db_tabla=$tabla;
	}

	private function CargarTabla()
	{
		# code...
	}

	public function Actualizar()
	{
		$conexion = mysqli_connect($this->host,$this->user,$this->pass,$this->nombre);
		$sql = "SELECT * FROM $this->tabla";
		$result= mysqli_query($conexion,$sql);

		while ($fila = mysqli_fetch_array($result)) {
		$this->data['labels'][] =  $fila['nombre'];
		$this->data['values'][] =  $fila['respuesta'];
		} 
	}


}