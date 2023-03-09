<?php

session_start();

include "conn.php";
include "ajudantes.php";

$exibir_tabela = true;

if(isset($_POST['marca']) && $_POST['marca'] != '') {

    $carro = array();

    $carro['id'] = $_POST['id'];

    $carro['marca'] = $_POST['marca'];

    if (isset($_POST['modelo'])) {
        $carro['modelo'] = $_POST['modelo'];
    } else {
        $carro['modelo'] = '';
    }

    
    if (isset($_POST['ano'])) {
        $carro['ano'] = $_POST['ano'];
    } else {
        $carro['ano'] = '';
    }


    if (isset($_POST['renavam'])) {
        $carro['renavam'] = $_POST['renavam'];
    } else {
        $carro['renavam'] = '';
    }


    if (isset($_POST['placa'])) {
        $carro['placa'] = $_POST['placa'];
    } else {
        $carro['placa'] = '';
    }

    
    if (isset($_POST['cor'])) {
        $carro['cor'] = $_POST['cor'];
    } else {
        $carro['cor'] = '';
    }

    if (isset($_POST['horaentrada'])) {
        $carro['horaentrada'] = $_POST['horaentrada'];
    } else {
        $carro['horaentrada'] = '';
    }

    if (isset($_POST['horasaida'])) {
        $carro['horasaida'] = $_POST['horasaida'];
    } else {
        $carro['horasaida'] = '';
    }


    if (isset($_POST['prazo'])) {
        $carro['prazo'] = traduz_data_para_banco($_POST['prazo']);
    } else {
        $carro['prazo'] = '';
    }


    editar_veiculo($conexao, $carro);
    header('Location: registro.php');
    die();

}

$carro = buscar_veiculo($conexao, $_GET['id']);


include "template.php";

?>