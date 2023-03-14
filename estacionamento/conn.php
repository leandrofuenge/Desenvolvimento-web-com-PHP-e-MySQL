<?php 
  $host = "localhost";
  $username  = "root";
  $passwd = "fngHiG63l5.98";
  $dbname = "devdb2";

//Creating a connection
$conexao = new mysqli($host, $username, $passwd, $dbname);

if($conexao->connect_errno){
    print("Connection Failed");
    
}else{
    print("Connection Established Successfully");
}



function buscar_veiculos($conexao) {
    $sqlBusca = 'SELECT * FROM veiculos';
    $resultado = mysqli_query($conexao, $sqlBusca);

    $carros = array();

    while ($carro = mysqli_fetch_assoc($resultado)) {
        $carros[] = $carro;
    }

    return $carros;
}


function buscar_veiculo($conexao, $id) {
    $sqlBusca = 'SELECT * FROM veiculos WHERE id = ' . $id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
}



function gravar_veiculos($conexao, $carro) {
    $sqlgravar = "INSERT INTO veiculos (marca, modelo, ano, renavam, placa, cor, horaentrada, horasaida, prazo) 
    VALUES (
          '{$carro['marca']}',
          '{$carro['modelo']}',
          '{$carro['ano']}',
          '{$carro['renavam']}',
          '{$carro['placa']}',
          '{$carro['cor']}',
          '{$carro['horaentrada']}',
          '{$carro['horasaida']}',
          '{$carro['prazo']}'

    ) 
  ";
  mysqli_query($conexao, $sqlgravar);
}



function editar_veiculo($conexao, $carro) {
    $sqlEditar = " UPDATE veiculos SET 
         marca = '{$carro['marca']}',
         modelo = '{$carro['modelo']}',
         ano = '{$carro['ano']}',
         renavam = '{$carro['renavam']}',
         placa = '{$carro['placa']}',
         cor = '{$carro['cor']}',
         horaentrada = '{$carro['horaentrada']}',
         horasaida = '{$carro['horasaida']}',
         prazo =  '{$carro['prazo']}'
        WHERE id = {$carro['id']}
    ";

    mysqli_query($conexao, $sqlEditar);
}


function remover_carro($conexao, $id) 
{
    $sqlRemover = "DELETE FROM veiculos WHERE id = {$id}";

    mysqli_query($conexao, $sqlRemover);
}





function remover_anexo ($conexao, $carro_id)
{
    $sqlremover_anexo = "DELETE FROM anexos  WHERE carro_id = {$carro_id}";

    mysqli_query($conexao, $sqlremover_anexo);
}




function gravar_anexo($conexao, $anexo)
{
    $sqlgravar = "INSERT INTO anexos (carro_id, nome, arquivo)
    VALUES
    (
        {$anexo['carro_id']},
        '{$anexo['nome']}',
        '{$anexo['arquivo']}'
    
    )
    ";

    mysqli_query($conexao, $sqlgravar);
}



function buscar_anexos($conexao, $carro_id)
{
    $sql = "SELECT * FROM anexos WHERE carro_id = {$carro_id}";
    $resultado = mysqli_query($conexao, $sql);

    $anexos = array();

    while ($anexo = mysqli_fetch_assoc($resultado)) {
        $anexos[] = $anexo;
    }

    return $anexos;
}



?>