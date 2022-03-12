<html>
    <head>
        <meta charset="utf-8">
        <title>cadastro de cidades</title>
        <link rel="stylesheet" type="text/css" href="../css/formatacao.css" media="screen"/>

    </head>

    <body>
            <hr>
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
            <form action="../cidades/grava_cidades.php" method="POST">
            <h1 div="title" align="center">cadastro de cidade</h1>
            <table bordercolor="black" bgcolor="gray" align="center" cellspacing="8" border="5">    
                <td>
                    <div>
                        <label for="cidade">cidade:</label>
                        <input type="text" id="cidade" name="cidade" placeholder="nome da cidade"> 
                    </div>
                </td>
            </table>
            <div class="button" align="center">
                <button type="submit">Salvar</button>
            </div>
        </form>
    </body>
</html>