<?php

include "conn.php";

remover_carro($conexao, $_GET['id']);

header('Location: registro.php');


?>