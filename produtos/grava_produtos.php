<?php
	@$descricao= $_POST["descricao"];
	@$fabricante = $_POST["fabricante"];
	@$marca = $_POST["marca"];
	@$preco = $_POST["preco"]; 
	@$cor = $_POST["cor"];
	@$tamanho = $_POST["tamanho"];
    

	

    // Cria uma conexão
	$con = mysqli_connect("localhost", "root", "", "fatec");

	// verifica a conexão
	if (!$con) {
		die("Conexão com falha: " . mysqli_connect_error());
	}
	//insere os dados na tabela produtos
	$query = "INSERT INTO tb_produtos (descricao, fabricante, marca, preco, cor, tamanho) 
			  VALUE('$descricao', '$fabricante', '$marca', '$preco', '$cor', '$tamanho')";

	$result = mysqli_query($con, $query);
		
	//fecha a conexão com o banco de dados
	mysqli_close($con);
?>
<button onclick="history.go(-1);">Voltar</button>
<button>
	<a href="../produtos/lista_produtos.php">Listar produtos</a>
</button>