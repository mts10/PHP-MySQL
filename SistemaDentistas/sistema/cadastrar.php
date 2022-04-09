<?php  include_once 'lock.php';
if (!isset($_POST['salvar']) || empty($_POST['name']) || empty($_POST['email']) || empty($_POST['cro']) ||  empty($_POST['cro_uf']) )
{
	header('location:index.php?msg=cadembranco');
}
else
{
	$name = $_POST['name'];
	$email  = $_POST['email'];
	$cro = $_POST['cro'];
    $cro_uf = $_POST['cro_uf'];

	include_once '../database/dentistas.dao.php';

	$result = salvar_dentista($name, $email, $cro, $cro_uf);

	if ($result)
	{
		header('location:index.php?msg=cadastrado');
	}
	else
	{
		header('location:index.php?msg=errocadastro');
	}
}

?>