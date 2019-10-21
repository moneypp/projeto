<?php
include("conexao.php");


	$id = $_SESSION['id'];
	function cadastraDados($id, $inicial, $divida)
	{
		include("conexao.php");

		if($inicial < 0)
		{
			return false;
		}

		if($divida < 0)
		{
			return false;
		}
		$saldo = ($inicial - $divida);
		$sql= "UPDATE usuario SET saldo = ".$saldo.", qinicial = ".$inicial.", dividas = ".$divida." WHERE usuario_id = ".$id." ";
		$res= mysqli_query($conexao,$sql);
		if($res == true)echo "eureca0";
		else echo(mysqli_error($conexao));


	}

	function gastosDiarios($id, $valor, $tipo)
	{
		include("conexao.php");

		if($valor < 0) return fslse;

		$sql = "UPDATE diarias SET usuario_id =".$id.", valor = ".$valor.", tipo = ".$tipo.", data = NOW()";
		$res= mysqli_query($conexao,$sql);
		if($res == true)echo "eureca0";
		else echo(mysqli_error($conexao));
	}

?>