<?php 
/**
* 
*/
class Conexion 
{
//Atributos
private $conec;
//Metodos
public static function conectar()
	{
		$conec=new mysqli("localhost","root","","klimatizar");
		if($conec->connect_error)
		die('Problemas con la conexion a la base de datos');
		return $conec;
	}
	public static function desconectar(){
		$conec->close();
	}
}
?>