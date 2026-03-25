<?php
include("conexao.php");
$sql = "SELECT * FROM produtos ORDER BY id DESC";
$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<htnl lang = "pt-br">
<header>
    <title>INGRIDISYS</title>
</header>
<body>
    <h1>Cadastro de Produtos</h1>

    <from action="salvar.php" method="post">
        <label>Nome</label>
        <input type="text" name="nome" required>
        
    </from>
</body>