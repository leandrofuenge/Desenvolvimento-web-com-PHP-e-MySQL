<?php session_start(); ?>

<html>
    <head>
        <title>Gerenciador de Contatos</title>
    </head>
    <body>
        <h1>Gerenciador de Contatos</h1>

        <form>
            <fieldset>
                <legend>Novo Contato</legend>

                <label>
                    Nome:
                    <input type="text" name="nome" />
                </label>
            
                <label>
                  Celular:
                  <input type="tel" name = "celular" />
                </label>

                <label>
                 Email:
                 <input type= "email" name="email" />
                </label>


                <input type="submit" value="cadastrar" />


            </fieldset>
        </form>

<?php

if (isset($_GET['nome'])) {
    $_SESSION['lista_contatos'][] = $_GET['nome'];
}

if (isset($_GET['celular'])) {
    $_SESSION['lista_contatos'][] = $_GET['celular'];
}

if (isset($_GET['email'])) {
    $_SESSION['lista_contatos'][] = $_GET['email'];
}


$lista_contatos = array();

if (isset($_SESSION['lista_contatos'])) {
    $lista_contatos = $_SESSION['lista_contatos'];
}

?>

<table>
    <tr>
        <th>Tarefas</th>
    </tr>

    <?php foreach ($lista_contatos as $tarefa) : ?>
        <tr>
            <td><?php echo $tarefa; ?></td>
        </tr>
<?php endforeach; ?>
     </table>
   </body>
</html>