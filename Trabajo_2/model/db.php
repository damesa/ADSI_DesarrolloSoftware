<?php 
/**
* db clasess con los datos
*/
class db
{

	public $db_db  = '';
	public $db_tabla = '';

	public $data= array();
	public	$host = 'localhost';
	public	$user = 'root';
	public	$pass = 'root';

	function __construct($db,$tabla)
	{
		$this->db_db = $db;
		$this->db_tabla = $tabla;
	}

	public function SetDataBase($dataBase)
	{
		$this->db_db=$dataBase;
	}

	public function SetTabla($tabla)
	{
		$this->db_tabla=$tabla;
	}

	private function LoadTable()
	{
		# code...
	}

	public function Actualizar($conexion)
	{
		//cargar datos
		print $this->db_db;
		mysqli_select_db($this->db_db,$conexion);

		$sql = "SELECT * FROM $this->db_tabla";
		$result= mysqli_query($sql);

		while ($fila = mysql_fetch_array($result)) {
		$this->data['labels'][] =  $fila['nombre'];
		$this->data['values'][] =  $fila['respuesta'];
		} 
	}


}