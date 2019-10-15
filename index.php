<?php
  include_once 'db.php';
  $tarefas = listaTarefas();
  $retorno = '';
  switch($_POST['requisicao']) {
    case 'salvar':
      $retorno = salvarTarefas($_POST);
    default:
    $tarefas = listaTarefas();
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>cadastro de tarefas</title>
</head>
<body>
  <div style="background-color:green">
    <?= isset($retorno)?$retorno:'';?>
  </div>
  <form method="POST" action="" > 
    <input type="hidden" value="salvar" name="requisicao">
      <fieldset>
      <legend>Crie Sua tarefa</legend>
      <p><label>tarefa</label>    : <input type="text" name="descricao" ></p>
      <p><label>conclusão</label> : <input type="date" name="data"></p>
    </fieldset>
      <input type="submit" value="Enviar" name="res">
   
   </form>
    <?php
      include "form.php"
    ?>
</body>

</html>