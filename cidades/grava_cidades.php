<?php
	@$cidade = $_POST["cidade"];
    
    // Cria uma conecção
	$con = mysqli_connect("localhost", "root", "", "fatec");

	// verifica a conecção
	if (!$con) {
		die("Conexão com falha: " . mysqli_connect_error());
	}

	//insere os dados na tabela clientes
	$query = "INSERT INTO tb_cidades (cidade) 
			  VALUE('$cidade')";

	$result = mysqli_query($con, $query);
		
	//fecha a conexão com o banco de dados
	mysqli_close($con);
?>
<button onclick="history.go(-1);">Voltar</button>
<button>
	<a href="../cidades/lista_cidades.php">Listar cidades</a>
</button>