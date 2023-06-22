<?php
// Aqui vou conectar ao banco de dados 

$hostname ="10.209.67.224"; 
$username ="root"; 
$password ="";
$dbname ="empregados";

$conexao = mysqli_connect($hostname, $username, $password, $dbname) or die("Não foi possível fazer a conexão ao banco de dados.");

?>
    <h1><bold>Edvaldo Aula PHP</bold></h1>
    <form method="GET">
        <label for="nome">Nome</label><br>
        <input type="text" id="nome" placeholder="Digite o nome aqui">
        <input type="submit" value = "salvar">
    </form>
<?php

//aqui vou salvar dados na minha base de dados 


/*vou fazer uma pesquisa no banco de dados
empregados e mostrar os dados*/

$sql = "SELECT nome, id FROM empregado ORDER BY id DESC LIMIT 0,6";

$resultado = mysqli_query($conexao, $sql);

if($resultado){
    while($linha = mysqli_fetch_array($resultado)){
        echo $linha["id"]." - ".$linha["nome"]."<br>";
    }
}
