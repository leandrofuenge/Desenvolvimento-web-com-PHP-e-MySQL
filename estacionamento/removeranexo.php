<?php

include "conn.php";

remover_anexo($conexao, $_GET['id']);

header('Location: registro.php')




?>