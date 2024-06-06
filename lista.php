<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>

    <?php 

        session_start();
        echo print_r($_SESSION);

        require_once "banco-antigo.php";
        
        $novaTarefa = $_POST["tarefa"] ?? null;
        $codUsuario = $_SESSION["cod_usuario"] ?? null;

        if(!is_null($novaTarefa)){
            $banco->query("INSERT INTO tarefas(cod, tarefa, cod_usuario)
             VALUES (NULL, '$novaTarefa', '$codUsuario')");
        }

        $busca = $banco->query("SELECT * FROM tarefas");
        echo "<ul>";
        while($objTarefa = $busca->fetch_object()){
            echo "<li> $objTarefa->tarefa - [Usuario: $objTarefa->cod_usuario] </li>";
            }
        echo "</ul>";


        

    ?>

    <h1>Adicionar Tarefa</h1>
    <form action="" method="post">
        <input type="text" name="tarefa">
        <input type="submit" value="Adicionar">
    </form>
    
</body>
</html>