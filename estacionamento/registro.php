<?php

session_start();

include "conn.php";
include "ajudantes.php";

$exibir_tabela = true;

$tem_erros = false;
$erros_validacao = array();

if(tem_post()) {

    $carro = array();

    if (isset($_POST['marca']) && strlen($_POST['marca']) > 0) {
         $carro['marca'] = $_POST['marca'];
     } else {
         $tem_erros = true;
         $erros_validacao['marca'] = 'O nome da marca é obrigatório';
     }
    

    if (isset($_POST['modelo']) && strlen($_POST['modelo']) > 0) {
        $carro['modelo'] = $_POST['modelo'];
    } else {
        $tem_erros = true;
        $erros_validacao['modelo'] = 'O nome do modelo é obrigatorio';
    }

        if (isset($_POST['ano']) && strlen($_POST['ano']) > 0){
        $carro['ano'] = $_POST['ano'];
    } else {
        $tem_erros = true;
        $erros_validacao['ano'] = 'O ano do carro é obrigatorio';
    }


    if (isset($_POST['renavam']) && strlen($_POST['renavam']) > 0) {
        $carro['renavam'] = $_POST['renavam'];
    } else {
        $tem_erros = true;
        $erros_validacao['renavam'] = 'O renavam do carro é obrigatorio';
    }


    if (isset($_POST['placa']) && strlen($_POST['placa']) > 0) {
        $carro['placa'] = $_POST['placa'];
    } else {
        $tem_erros = true;
        $erros_validacao['placa'] = 'A placa do carro é obrigatorio';
    }

    
    if (isset($_POST['cor']) && strlen($_POST['cor']) > 0) {
        $carro['cor'] = $_POST['cor'];
    } else {
        $tem_erros = true;
        $erros_validacao['cor'] = 'A cor do carro é obrigatorio';
    }



    if (isset($_POST['horaentrada']) && strlen($_POST['horaentrada']) > 0) {
        $carro['horaentrada'] = $_POST['horaentrada'];
    } else {
        $tem_erros = true;
        $erros_validacao['horaentrada'] = 'A hora de entrada do carro é obrigatorio';
    }

    if (isset($_POST['horasaida']) && strlen($_POST['horasaida']) > 0) {
        $carro['horasaida'] = $_POST['horasaida'];
    } else {
        $tem_erros = true;
        $erros_validacao['horasaida'] = 'A hora de saida do carro é obrigatorio';
    }


    if (isset($_POST['prazo']) && strlen($_POST['prazo']) > 0) {
        $carro['prazo'] = traduz_data_para_banco($_POST['prazo']);
    } else {
        $tem_erros = true;
        $erros_validacao['prazo'] = 'A data de entrada de carro é obrigatorio';
    }

    $_SESSION['lista_carros'][] = $carro;

    if(! $tem_erros){
    gravar_veiculos($conexao, $carro);
    header('Location: registro.php');
    die();
    }

}

if(isset($_SESSION['lista_carros'])) {
    $lista_carros = $_SESSION['lista_carros'];
} else {
    $lista_carros = array();
}



$lista_carros = buscar_veiculos($conexao);

$carro = array(
    'id' => 0,
    'marca' => (isset($_POST['marca'])) ? $_POST['marca'] : '',

    'modelo' => (isset($_POST['modelo'])) ? $_POST['modelo'] : '',

    'ano' => (isset($_POST['ano'])) ? $_POST['ano'] : '',

    'renavam' => (isset($_POST['renavam'])) ? $_POST['renavam'] : '',

    'placa' => (isset($_POST['placa'])) ? $_POST['placa'] : '',

    'cor' => (isset($_POST['cor'])) ? $_POST['cor'] : '',

    'horaentrada' => (isset($_POST['horaentrada'])) ? $_POST['horaentrada'] : '',

    'horasaida' => (isset($_POST['horasaida'])) ? $_POST['horasaida'] : '',
    
    'prazo' => (isset($_POST['prazo'])) ? $_POST['prazo'] : ''
);

include "template.php";

?>