<?php 

function traduz_data_para_banco($data)
{
    if ($data == "") {
        return "";
    }

    $dados = explode("-", $data);

    $data_mysql = "{$dados[0]}-{$dados[1]}-{$dados[2]}";

    return $data_mysql;
}



function traduz_data_para_exibir($data)
{
    if ($data == "" OR $data == "0000-00-00") {
        return "";
    }

    $dados = explode("-", $data);

    $data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

    return $data_exibir;
}


function tem_post() {
    if (count($_POST) > 0) {
        return true;
    }

    return false;
}
     

?>