<?php 
  $host = "";
  $username  = "";
  $passwd = "";
  $dbname = "";

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


function remover_carro($conexao, $id) {
    $sqlRemover = "DELETE FROM veiculos WHERE id = {$id}";

    mysqli_query($conexao, $sqlRemover);
}



?>