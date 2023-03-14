<html>
    <head>
        <meta charset="utf-8" />
        <title>Sistema de gerenciamento de carros</title>
        <link rel="stylesheet" href="efeito.css" type="text/css" />
   </head>
   
   <body>
    <h1> Carro: <?php echo $carro['marca']; ?> </h1>

    <p><a href="registro.php">Voltar para a lista de carros</a>.</p>

    <p><strong>Marca:</strong> <?php echo ($carro['marca']); ?></p>

    <p><strong>Modelo:</strong> <?php echo ($carro['modelo']); ?></p>

    <p><strong>Ano:</strong> <?php echo ($carro['ano']); ?></p>

    <p><strong>Renavam:</strong> <?php echo ($carro['renavam']); ?></p>

    <p><strong>Placa:</strong> <?php echo ($carro['placa']); ?></p>

    <p><strong>Cor:</strong> <?php echo  ($carro['cor']); ?></p>

    <p><strong>Hora Entrada:</strong> <?php echo ($carro['horaentrada']); ?></p>

    <p><strong>Hora Saida:</strong> <?php echo ($carro['horasaida']); ?></p>

    <p><strong>Data:</strong> <?php echo ($carro['prazo']); ?></p>

    <h2>Anexos</h2>
        <!-- lista de anexos -->
        <?php if (count($anexos) > 0) : ?>
            
            <table>
                <tr>
                    <th>Arquivo</th>
                    <th>Opções</th>
                </tr>
                <?php foreach ($anexos as $anexo) : ?>
                    <tr>
                        <td><?php echo $anexo['nome']; ?></td>


                        <td>
                            <a href="anexos1/<?php echo $anexo['arquivo']; ?>">Download</a>

                            <a href="removeranexo.php?id=<?php echo $carro['id']; ?>"> Remover Anexo </a>

                        </td>

                        
                    </tr>
                <?php endforeach; ?>
            </table>

        <?php else : ?>
            <p>Não há anexos para esta tarefa.</p>
        <?php endif; ?>


        <!-- formulário para um novo anexo -->
        <form action="" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Novo anexo</legend>
                <input type="hidden" name="carro_id" value="<?php echo $carro['id']; ?>" />

                
                <label>
                    <?php if ($tem_erros && isset($erros_validacao['anexo'])) : ?>
                        <span class="erro"><?php echo $erros_validacao['anexo']; ?></span>
                    <?php endif; ?>
                    <input type="file" name="anexo" />
                </label>

<label>
                <input type="submit" value="Cadastrar" />

                    </label>
            </fieldset>
        </form>
    </body>
</html>