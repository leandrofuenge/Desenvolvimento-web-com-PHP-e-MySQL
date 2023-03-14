<?php

include "conn.php";
include "ajudantes.php";

$tem_erros = false;
$erros_validacao = array();

if (tem_post()) {
    // upload dos anexos
    $carro_id = $_POST['carro_id'];

    if (! isset($_FILES['anexo'])) {
        $tem_erros = true;
        $erros_validacao['anexo'] = 'Você deve selecionar um arquivo para anexar';
    } else {
        if (tratar_anexo($_FILES['anexo'])) {
            $anexo = array();
            $anexo['carro_id'] = $carro_id;
            $anexo['nome'] = $_FILES['anexo']['name'];
            $anexo['arquivo'] = $_FILES['anexo']['name'];
        } else {
            $tem_erros = true;
            $erros_validacao['anexo'] = 'Envie apenas anexos nos formatos zip ou pdf';
        }
    }

    if (! $tem_erros) {
        gravar_anexo($conexao, $anexo);
    }
}

$carro = buscar_veiculo($conexao, $_GET['id']);
$anexos = buscar_anexos($conexao, $_GET['id']);

include "template_carro.php";

?>