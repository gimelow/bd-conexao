<form name ="cadastro" method="post" action="">
	ID<input type="text" name="txtid" size="5" maxlength="5" required><br>
	nome<input type="text" name="txtnome" size="30" maxlenght="30"><br>
	endereço<input type="text"name="txtendereco" size="30" maxlength="30"><br>
	telefone<input type="text"name="txttelefone" size="12" maxlength="12"><br>
	cidade<input type="text"name="txtcidade" size="20" maxlength="20"><br>
	sexo<input type="text"name="txtsexo" size="1" maxlength="1"><br><br>
	<input type="submit"name="btngravar" value="gravar">
	<input type="submit" name="btnlimpar" value="limpar">
	<input type="submit" name="btnlistar" value="listar">
	<?php
	include("conectar.php");
	if(!empty($_REQUEST['txtid'])){
		$id=$_REQUEST['txtid'];
		$nome=$_REQUEST['txtnome'];
		$endereco=$_REQUEST['txtendereco'];
		$telefone=$_REQUEST['txttelefone'];
		$cidade=$_REQUEST['txtcidade'];
		$sexo=$_REQUEST['txtsexo'];
		$sql="insert into clientes values ('$id','$nome,'$endereco','$telefone','$cidade','$sexo')";
		$result = mysqli_query($con,$sql);
		echo "<br>dados gravados com sucesso";
		mysqli_close($con);
	}
	if(isset($POST['btnlistar'])){
		header('location: listar1.php');
	}
	?>
</form>