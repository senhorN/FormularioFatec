<html>
	<?php
			
		// Cria uma conexão
		$con = mysqli_connect("localhost", "root", "", "fatec");

		// verifica a conecção
		if (!$con) {
			die("Conexão com falha: " . mysqli_connect_error());
		}
		echo "Conectado com sucesso";

		$query = "SELECT * FROM tb_produtos";
		
		$result = mysqli_query($con, $query);
		
		echo'<br>';
				
		while($row = mysqli_fetch_array($result)){  
            echo   '<tr> 
						<td>'.$row["descricao"].'</td>                                      
						<td>'.$row["fabricante"].'</td>
						<td>'.$row["marca"].'</td><br>
						<td>'.$row["preco"].'</td>                                      
						<td>'.$row["cor"].'</td>
						<td>'.$row["tamanho"].'</td><br>
                    </tr>';
		}
		
		mysqli_close($con);
	?>
	<br>
	<button onclick="history.go(-1);">Voltar 1</button>
	
</html>