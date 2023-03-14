<?php
  $host = "localhost";
  $username  = "root";
  $passwd = "fngHiG63l5.98";
  $dbname = "devdb";

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



function buscar_tarefa($conexao, $id) {
    $sqlBusca = 'SELECT * FROM tarefas WHERE id = ' . $id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
}



function gravar_tarefa($conexao, $tarefa) {
    $sqlGravar = " INSERT INTO tarefas
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


function editar_tarefa($conexao, $tarefa) {
    $sqlEditar = " UPDATE tarefas SET
                nome = '{$tarefa['nome']}',
                descricao = '{$tarefa['descricao']}',
                prioridade = '{$tarefa['prioridade']}',
                prazo = '{$tarefa['prazo']}',
                concluida = '{$tarefa['concluida']}'
            WHERE id =  {$tarefa['id']}    
    ";

    mysqli_query($conexao, $sqlEditar);
}


function remover_tarefa($conexao, $id)
{
    $sqlRemover = "DELETE FROM tarefas WHERE id = {$id}";

    mysqli_query($conexao, $sqlRemover);
}


function gravar_anexo($conexao, $anexo)
{
    $sqlGravar = "INSERT INTO anexos (tarefa_id, nome, arquivo) 
    VALUES 
    (
        {$anexo['tarefa_id']},
        '{$anexo['nome']}',
        '{$anexo['arquivo']}'

    )

 ";

  mysqli_query($conexao, $sqlGravar);

}


function buscar_anexos($conexao, $tarefa_id)
{
    $sql = "SELECT * FROM anexos WHERE tarefa_id = {$tarefa_id}";
    $resultado = mysqli_query($conexao, $sql);

    $anexos = array();

    while ($anexo = mysqli_fetch_assoc($resultado)) {
        $anexos[] = $anexo;
    }

    return $anexos;
}


?>