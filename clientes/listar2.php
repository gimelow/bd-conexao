<!DOCTYPE html>
<html>
<head>
	<title>listar 2</title>
	<style type="text/css">
	table{
		font size:5;
		color:white;
		border:"5";
		cellspacing: 5px;
		border-radius: 10px;
		background-color: #1C1C1C	;
		box-shadow: 5px 5px 3px #000000;
		margin: auto;
	}

</style>
</head>
<body>
<center>
listagem do cadastro de clientes<hr>
<font size=9 color='black'>
	lista de clientes<hr>
<font size=5 color='blue'>
<?php
	include('conectar.php');
	$sql = 'select * from clientes';
	$result = mysqli_query($con,$sql);
	$all = mysqli_num_rows($result);
    echo "<table border='3' bgcolor='black'>
    <tr>
    <th colspan='2'>ID</th>
    <th colspan='4'>nome</th>
    <th colspan='10'>endereço</th>
    <th colspan='7'>telefone</th>
    <th colspan='3'>cidade</th>
    <th colspan='2'>sexo</th>
    </tr>";
	while($reg=mysqli_fetch_array($result))
	{
		echo "<tr><td colspan='2'>".$reg['ID']."</td>";
		echo "<td colspan='4'>".$reg['nome']."</td>";
		echo "<td colspan='10'>".$reg['endereco']."</td>";
		echo "<td colspan='7'>".$reg['telefone']."</td>";
		echo "<td colspan='3'>".$reg['cidade']."</td>";
		echo "<td colspan='2'>".$reg['sexo']."</td>";
	}
	mysqli_close($con);
    echo "</table>";
	echo "<total de alunos cadastrados: ".$all;
?>
</center>
</body>
</html>



	