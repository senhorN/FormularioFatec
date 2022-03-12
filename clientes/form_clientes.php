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
        <form action="../clientes/grava_clientes.php" method="POST">
            <h1 align="center">cadastro de clientes</h1>

            <table bordercolor="black" bgcolor="gray" align="center" cellspacing="8" border="5">
                <td>
                    <div>
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" placeholder="digite seu nome aqui">
                    </div>
                </td>
                <tr>
                <td>
                    <div>
                        <label for="endereco">Endereço:</label>
                        <input type="text" id="endereco" name="endereco" placeholder="digite seu endereco aqui">
                    </div>
                </td>
                <tr>
                <td>
                    <div>
                        <label for="bairro">Bairro:</label>
                        <input type="text" id="bairro" name="bairro" placeholder="digite seu bairro aqui">
                    </div>
                </td>
                <tr>
                <td>
                <div>
                    <label for="cidade"> Cidade</label>
                    <select name="cidade" id="cidade">
                        <?php
                            $link = mysqli_connect("127.0.0.1", "root", "", "fatec");
                            $sql = "SELECT * from tb_cidades order by cidade";
                            $rs = mysqli_query($link, $sql);
                            while($r = mysqli_fetch_array($rs)){
                                echo '<option value="'.$r['id_cidade'].'">'.$r['cidade'].'</option>';
                            }
                            mysqli_free_result($rs);
                            mysqli_close($link);
                        ?> 
                    </select>
                </div>
                <tr> 
                <td>
                    <div>
                        <label for="telefone">telefone:</label>
                        <input type="number" id="telefone" name="telefone" placeholder="(xx)xxxx-xxxx">
                    </div>
                </td>
                <tr>
                <td>
                    <div>
                        <label for="cpf">cpf:</label>
                        <input type="number" id="cpf" name="cpf" placeholder="xxx.xxx.xxx-xx">
                    </div>
                </td>
                <tr>
                <td>
                    <div>
                        <label for="rg">Rg:</label>
                        <input type="number" id="rg" name="rg" placeholder="xx.xxxx.xx-x">
                    </div>
                </td>
                <tr>
                <td>
                    <div>
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" placeholder="example@youremail.com">
                    </div>
                </td>
                <tr>
                <td>
                
                    <div>
                        <label for="nascimento">Nascimento:</label>
                        <input type="date" id="nascimento" name="nascimento">
                    </div>
                       
                </td>
            </table>
                    <div class="button" align="center">
                        <button type="submit">Salvar</button>
                    </div>
        </form>  
    </body>
</html>