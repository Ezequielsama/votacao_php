<?php  
function __autoload($c){
	$path = $_SERVER['DOCUMENT_ROOT'];
    $path.= "/class/$c.class.php";
	include_once $path;
}

$conn = new Conexao();
?>

<!DOCTYPE html>
<html lang="PT/BR">
    <head>
        <meta charset="utf-8">
        <title>Sistema de Votação</title>
        <meta name="description" content="Sistema de Votação com PHP">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <form>
        <!-- i -->
        </form>
        
        <?php
        $conn->consultar("SELECT * FROM candidatos");
        
        while($lista = $conn->escrever()){
            echo $lista['nome'].'<br>';
        }
        ?>
    </body>
</html>
