<html>
    <head>
        <meta charset="utf-8"/>
        <title>Sistema de Estacionamento</title>
        <link rel="stylesheet" href="efeito.css" type="text/css" />
    </head>
    <body>
         <h1>Sistemas de Gerenciamento de Carros</h1> 

         <?php include('formulario.php'); ?>

         <?php if ($exibir_tabela) : ?>
             <?php include('tabela.php'); ?> 
         <?php endif; ?>
    </body>     
</html>       