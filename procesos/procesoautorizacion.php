<?PHP
if (isset($_POST['local'])) {
	$cadena=shell_exec('ipconfig/all');
	$cadena=split(':',$cadena);
	$mac=split(' ', $cadena[9]);
	print_r($mac[1]);
}
if (isset($_POST['accesos'])) {
	
}
?>