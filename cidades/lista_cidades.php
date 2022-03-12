<html>
	<?php
			
		// Cria uma conexão
		$con = mysqli_connect("localhost", "root", "", "fatec");

		// verifica a conexão
		if (!$con) {
			die("Conexão com falha: " . mysqli_connect_error());
		}
		echo "Conectado com sucesso";

		$query = "SELECT * FROM tb_cidades";
		
		$result = mysqli_query($con, $query);
		
		echo'<br>';
				
		while($row = mysqli_fetch_array($result)){  
            echo   '<tr>                                     
						<td>'.$row["cidade"].'</td>                                     
                    </tr>';
		}
		
		mysqli_close($con);

	?>
	<br>
	<button onclick="history.go(-1);">Voltar 1</button>
	
</html>
