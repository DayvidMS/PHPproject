<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>cadastro de tarefas</title>
</head>
<body>
  <form method="POST" >
      <fieldset>
      <legend>Crie Sua tarefa</legend>
      <p><label>tarefa</label>    : <input type="text" name="tarefa" ></p>
      <p><label>conclusão</label> : <input type="date" name="data"></p>
    </fieldset>
      <input type="submit" value="Enviar" name="res">
   
   </form>
    <?php
      include "form.php"
    ?>
</body>

</html>