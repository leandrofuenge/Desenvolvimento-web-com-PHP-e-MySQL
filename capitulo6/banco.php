<?php
   $host = "";
   $username  = "";
   $passwd = "";
   $dbname = "";

   //Creating a connection
   $conexao = new mysqli($host, $username, $passwd, $dbname);

   if($conexao->connect_errno){
      print("Connection Failed ");
   }else{
      print("Connection Established Successfully");
   }




function buscar_tarefas($conexao) {
    $sqlBusca = 'SELECT * FROM tarefas';
    $resultado = mysqli_query($conexao, $sqlBusca);

    $tarefas = array();

    while ($tarefa = mysqli_fetch_assoc($resultado)) {
        $tarefas[] = $tarefa;
    }

    return $tarefas;
}


function gravar_tarefa($conexao, $tarefa) {
    $sqlGravar = "
        INSERT INTO tarefas
    (nome, descricao, prioridade, prazo, concluida)
        VALUES
        (
            '{$tarefa['nome']}',
            '{$tarefa['descricao']}',
            {$tarefa['prioridade']},
            '{$tarefa['prazo']}',
            {$tarefa['concluida']}
        )
    ";
    mysqli_query($conexao, $sqlGravar);
}

?>