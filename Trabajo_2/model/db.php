<?php 
	//config databese
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = 'root';
	$db_db  = 'musica';
	$db_table = 'instrumentos';

	//conexion
	$conexion = mysql_connect($db_host,$db_user,$db_pass);
	echo mysql_error();

	//cargar datos
	mysql_select_db($db_db,$conexion);

	$sql = "SELECT * FROM instrumentos";
	$data= mysql_query($sql);

	$data_n = array();
	$data_u = array();

	while ($fila = mysql_fetch_array($data)) {
		$data_n[] =  $fila['nombre'];
		$data_u[] =  $fila['uso'];
	} 

/**
* db clasess con los datos
*/
class db
{
	private $db_host = 'localhost';
	private $db_user = 'root';
	private $db_pass = 'root';
	private $db_db  = '';
	private $db_table = '';
	private $data_n = array();
	private $data_u = array();

	function __construct()
	{
		
	}

	public function SetDataBase($value)
	{
		$this->$db_db=$value;
	}

	public function SetTabla($value)
	{
		$this->$db_table=$value;
	}

	public function Actualizar()
	{
		
	}
}