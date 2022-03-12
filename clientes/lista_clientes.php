<html>
	<?php
			
		// Cria uma conexão
		$con = mysqli_connect("localhost", "root", "", "fatec");

		// verifica a conecção
		if (!$con) {
			die("Conexão com falha: " . mysqli_connect_error());
		}
		echo "Conectado com sucesso";

		$query = "SELECT * FROM tb_clientes";
		
		$result = mysqli_query($con, $query);
		
		echo'<br>';
				
		while($row = mysqli_fetch_array($result)){  
            echo   '<tr> 
						<td>'.$row["nome"].'</td>                                      
						<td>'.$row["endereco"].'</td>
						<td>'.$row["bairro"].'</td><br>
						<td>'.$row["cidade"].'</td>                                      
						<td>'.$row["telefone"].'</td>
						<td>'.$row["cpf"].'</td><br>
						<td>'.$row["rg"].'</td>                                     
						<td>'.$row["email"].'</td>
						<td>'.$row["nascimento"].'</td><br>
                    </tr>';
		}
		
		mysqli_close($con);
	?>
	<br>
	<button onclick="history.go(-1);">Voltar 1</button>
	
</html>
