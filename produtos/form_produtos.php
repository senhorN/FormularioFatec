<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/formatação.css" media="screen"/>
    </head>

    <body>
        <header>
            <nav id="menu">
            <ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="../clientes/form_clientes.php">Clientes</a></li>
					<li><a href="../produtos/form_produtos.php">Produtos</a></li>        
					<li><a href="../cidades/form_cidades.php">Cidades</a></li>
					<li><a href="../funcionarios/form_funcionarios.php">Funcionários</a></li>
			</ul>
			</nav>
        </header> 
        <form action="../produtos/grava_produtos.php" method="POST">
            <h1 align="center">cadastro de produtos</h1>

            <table bordercolor="black" bgcolor="gray" align="center" cellspacing="8" border="5">
                <td>
                    <div>
                        <label for="descricao">Descrição:</label>
                        <input type="text" id="descricao" name="descricao" placeholder="digite o nome do produto">
                    </div>
                </td>
                <tr>
                <td>
                    <div>
                        <label for="fabricante">Fabricante:</label>
                        <input type="text" id="fabricante" name="fabricante">
                    </div>
                </td>
                <tr>
                <td>
                    <div>
                        <label for="marca">Marca:</label>
                        <input type="text" id="marca" name="marca">
                    </div>
                </td>
                <tr>
                <td>
                    <div>
                        <label for="preco">Preço:</label>
                        <input type="number" id="preco" name="preco">
                    </div>
                </td>
                <tr>
                <td>
                    <div>
                        <label for="cor">cor:</label>
                        <input type="color" id="cor" name="cor">
                    </div>
                </td>
                <tr>
                <td>
                    <div>
                        <label for="tamanho">Tamanho:</label>
                        <input type="text" id="tamanho" name="tamanho">
                    </div>
                </td>

            </table>
                    <div class="button" align="center">
                        <button type="submit">Salvar</button>
                    </div>
        </form>  
    </body>
</html>