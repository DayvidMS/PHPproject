<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>lista de tarefas</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form>
    <div>
       <table id="tab"> 
            <?php
                $tar=isset($_POST["tarefa"])?$_POST["tarefa"]:'não informado';
                $dat=isset($_POST["data"])?$_POST["data"]:'não informado';
                echo "<tr><td>$tar</td><td>$dat</td></tr>";
            ?>
        </table>  
    </div>
    </form>
</body>
</html>