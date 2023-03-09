<table>
        <tr>
             <th>Marca</th>
             <th>Modelo</th>
             <th>Ano</th>
             <th>Renavam</th>
             <th>Placa</th>
             <th>Cor</th>
             <th>Hora Entrada</th>
             <th>Hora Saida</th>
             <th>Data</th>
        </tr>
            <?php foreach ($lista_carros as $carro) : ?>
                  <tr>
                     <td><?php echo $carro['marca']; ?></td>
                     <td><?php echo $carro['modelo']; ?></td>
                     <td><?php echo $carro['ano']; ?></td>  
                     <td><?php echo $carro['renavam']; ?></td>
                     <td><?php echo $carro['placa']; ?></td>
                     <td><?php echo $carro['cor']; ?></td>
                     <td><?php echo $carro['horaentrada']; ?>
                     <td><?php echo $carro['horasaida']; ?>
                     <td><?php echo traduz_data_para_exibir($carro['prazo']); ?></td>
                     <td> <a href="editar.php?id=<?php echo $carro['id']; ?>"> Editar</a>   
                     <a href="remover.php?id=<?php echo $carro['id']; ?>"> Remover </a> 
                  </tr>
      <?php endforeach; ?>
</table>            