<font size=5 color='blue'>
	Lista de Alunos do TIN1A<hr>
<font size=4 color='red'>	
<?php
	$con=mysqli_connect('localhost','root','','bdagenda');
	$sql = "select * from tbalunos";
	$resultado = mysqli_query($con,$sql);
	$total = mysqli_num_rows($resultado);
	while($reg=mysqli_fetch_array($resultado))
	{
		echo "Código: ".$reg['codigo'];
		echo "<br>Nome: ".$reg['nome'];
		echo "<br>Fone: ".$reg['fone'];
		echo "<br>Email: ".$reg['email']."<hr>";
	}
	mysqli_close($con);
	echo "Total de Alunos cadastrados: ".$total;
?>	
	