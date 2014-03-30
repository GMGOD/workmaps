<? 
include('../conexion.php');
$ingresado  = strtolower($_GET["q"]);

if (!$ingresado) return;
if(strlen($ingresado) > 0) 
{	
	$query = "SELECT id, razon_social FROM utl_cliente WHERE eliminado = 0"; 
	#echo $sql;
	$rs = mysql_query($query);
	if (mysql_num_rows($rs) > 0){
		while ($data = @mysql_fetch_array($rs)) 
		{		
			$id_cliente[]=$data['id'];
			$nombre[]=$data['razon_social'];
		}				
	}
	$c=0;
	foreach($id_cliente as $value)
	{
		$busqueda =$nombre[$c];
		if (strpos(strtolower($busqueda), $ingresado) !== false) 
		{
			$busqueda =$nombre[$c];
			echo "$busqueda|$id_cliente[$c]\n";
		}
		$c++;
	}
}
?>