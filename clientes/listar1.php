<font size=9 color='blue'>
	lista de clientes<hr>
<font size=5 color='blue'>	
<?php
	include('conectar.php');
	$sql = 'select * from clientes';
	$result = mysqli_query($con,$sql);
	$all = mysqli_num_rows($result);
	while($reg=mysqli_fetch_array($result))
	{
		echo "código: ".$reg['ID'];
		echo "<br>nome: ".$reg['nome'];
		echo "<br>endereco: ".$reg['endereco'];
		echo "<br>telefone: ".$reg['telefone'];
		echo "<br>cidade: ".$reg['cidade'];
		echo "<br>sexo: ".$reg['sexo']."<hr>";
	}
	mysqli_close($con);
	echo "total de alunos cadastrados: ".$all;
?>	
	