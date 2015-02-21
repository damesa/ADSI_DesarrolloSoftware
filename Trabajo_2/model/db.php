<?php 
/**
* db clasess con los datos
*/
class db
{

	private $db_db  = '';
	private $db_tabla = '';

	private $data= array();
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
		$this->$db_db=$dataBase;
	}

	public function SetTabla($tabla)
	{
		$this->$db_tabla=$tabla;
	}

	private function LoadTable()
	{
		# code...
	}

	public function Actualizar($conexion,$db_db,$db_tabla)
	{
		//cargar datos
		mysql_select_db($db_db,$conexion);

		$sql = "SELECT * FROM $db_tabla";
		$result= mysql_query($sql);

		while ($fila = mysql_fetch_array($result)) {
		$this->data['labels'][] =  $fila['nombre'];
		$this->data['values'][] =  $fila['respuesta'];
		} 
	}


}