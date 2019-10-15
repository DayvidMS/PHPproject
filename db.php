<?php
require_once 'dadosbanco.php';
print_r(SERVER_NAME);
function criarConexao() {
    /**
     * Arquivo de configuração do Banco de Dados
     */
    $servername = SERVER_NAME;
    $port = PORT;
    $dbname = DB_NAME;
    $username = USER_NAME;
    $password = PASSWORD;

    // Cria a conexão
    $conn = mysqli_connect($servername, $username, $password, $dbname,$port);
    // Verifica o a conexão se falhar, apresenta o motivo do erro.
    if (mysqli_connect_errno()) {
        die("Conexão falhou!: " . mysqli_connect_error());
    }
    return $conn;
}

function salvarTarefas($tarefa) {
    $descricao = $tarefa['descricao'];
    $sql = "insert into tarefas (descricao) values('{$descricao}');";
    $retorno = '';
    $conn = criarConexao();
    if (mysqli_query($conn, $sql)) {
        $retorno = "Nova tarefa inserida com sucesso!";
    } else {
        $retorno =  "Ocorreu um erro: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    return $retorno;
}

function listaTarefas()
{
    $tarefas = [];
    //SELECT no banco de dados
    $sql = "SELECT descricao FROM tarefas";
    $conn = criarConexao();
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // mostra cada registro da tabela
        while($row = mysqli_fetch_assoc($result)) {
            $tarefas[] = $row;
        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
    return $tarefas;
}
