<?php 
/**
* db clasess con los datos
*/
class db
{
	private $db_host = 'localhost';
	private $db_user = 'root';
	private $db_pass = 'root';
	private $db_db  = '';
	private $db_tabla = '';
	private $data= array();

	function __construct($conexion,$db,$tabla)
	{
		$this->db_db = $db;
		$this->db_tabla = $tabla;
		$this->$conexion = mysql_connect($this->$db_host,$this->db_user,$this->db_pass);
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

	public function Actualizar()
	{
		//cargar datos
		mysql_select_db($this->$db_db,$this->$conexion);

		$sql = "SELECT * FROM $this->$db_tabla";
		$result= mysql_query($sql);

		while ($fila = mysql_fetch_array($result)) {
		$this->data['labels'][] =  $fila['nombre'];
		$this->data['values'][] =  $fila['uso'];
		} 
	}
}