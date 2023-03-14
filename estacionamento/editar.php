<?php

session_start();

include "conn.php";
include "ajudantes.php";

$exibir_tabela = true;

$tem_erros = false;

$erros_validacao = array();

if(tem_post()) {

    $carro = array();

    $carro['id'] = $_POST['id'];

    if(isset($_POST['marca']) && strlen($_POST['marca']) > 0) {
        $carro['marca'] = $_POST['marca'];
    } else {
        $tem_erros= true;
        $erros_validacao['marca'] = 'O nome da marca é obrigatorio!';
    }



    if (isset($_POST['modelo']) && strlen($_POST['modelo']) > 0) {
        $carro['modelo'] = $_POST['modelo'];
    } else {
        $tem_erros = true;
        $erros_validacao['modelo'] = 'O nome do modelo da marca é obrigatorio';
    }

    
    if (isset($_POST['ano']) && strlen($_POST['ano']) > 0) {
        $carro['ano'] = $_POST['ano'];
    } else {
        $tem_erros = true;
        $erros_validacao['ano'] = 'O ano do Carro é obrigatorio!';
    }


    if (isset($_POST['renavam']) && strlen($_POST['renavam']) > 0) {
        $carro['renavam'] = $_POST['renavam'];
    } else {
        $tem_erros = true;
        $erros_validacao['renavam'] = 'O renavam do Carro é obrigatorio';
    }


    if (isset($_POST['placa']) && strlen($_POST['placa']) > 0) {
        $carro['placa'] = $_POST['placa'];
    } else {
        $tem_erros = true;
        $erros_validacao['placa'] = 'A placa do carro é obrigatorio!';
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
        $erros_validacao['horaentrada'] = 'A hora de Entrada do Carro é Obrigatorio';
    }

    if (isset($_POST['horasaida']) && strlen($_POST['horasaida']) > 0) {
        $carro['horasaida'] = $_POST['horasaida'];
    } else {
        $tem_erros = true;
        $erros_validacao['horasaida'] = 'A hora de saida do Carro é Obrigatorio';
    }


    if (isset($_POST['prazo']) && strlen($_POST['prazo']) > 0) {
        $carro['prazo'] = traduz_data_para_banco($_POST['prazo']);
    } else {
        $tem_erros = true;
        $erros_validacao['prazo'] = 'A data é obrigatorio';
    }

    if (! $tem_erros){
    editar_veiculo($conexao, $carro);
    header('Location: registro.php');
    die();
    }

}

$carro = buscar_veiculo($conexao, $_GET['id']);

$carro['marca'] = (isset($_POST['marca'])) ? $_POST['marca'] : $carro['marca'];

$carro['modelo'] = (isset($_POST['modelo'])) ? $_POST['modelo'] : $carro['modelo'];

$carro['ano'] = (isset($_POST['ano'])) ? $_POST['ano'] : $carro['ano'];

$carro['renavam'] = (isset($_POST['renavam'])) ? $_POST['renavam'] : $carro['renavam'];

$carro['placa'] = (isset($_POST['placa'])) ? $_POST['placa'] : $carro['placa'];

$carro['cor'] = (isset($_POST['cor'])) ? $_POST['cor'] : $carro['cor'];

$carro['horaentrada'] = (isset($_POST['horaentrada'])) ? $_POST['horaentrada'] : $carro['horaentrada'];

$carro['horasaida'] =(isset($_POST['horasaida'])) ? $_POST['horasaida'] : $carro['horasaida'];

$carro['prazo'] = (isset($_POST['prazo'])) ? $_POST['prazo'] : $carro['prazo'];



include "template.php";


?>