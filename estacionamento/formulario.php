<form method="POST">
            <input type="hidden" name="id" value="<?php echo $carro['id']; ?>" />
            <fieldset>
            <legend>Cadastro de Carro</legend>

        <label>
            Marca:
            <?php if ($tem_erros && isset($erros_validacao['marca'])) : ?>
                <span class="erro">
                    <?php echo $erros_validacao['marca']; ?>
                </span>    
            <?php endif; ?>
            <input type="text" name="marca" value="<?php echo $carro['marca']; ?>" />
        </label>
            
            
            <label>
                 Modelo:
                 <?php if ($tem_erros && isset($erros_validacao['modelo'])) : ?>
                    <span class="erro">
                        <?php echo $erros_validacao['modelo']; ?>
                    </span> 
                    <?php endif; ?>   
                <input type="text" name="modelo" value="<?php echo $carro['modelo']; ?>" />
            </label>
            
            
            <label>
                 Ano:
                 <?php if ($tem_erros && isset($erros_validacao['ano'])) : ?>
                    <span class="erro">
                        <?php echo $erros_validacao['ano']; ?>
                    </span>
                   <?php endif; ?>     
                <input type="text" name="ano"  value="<?php echo $carro['ano']; ?>" />
            </label>
            
            
            <label>
                 Renavam:
                 <?php if ($tem_erros && isset($erros_validacao['renavam'])) : ?>
                    <span class="renavam">
                        <?php echo $erros_validacao['renavam']; ?>
                    </span>
                    <?php endif; ?>    
                <input type="text" name="renavam" value="<?php echo $carro['renavam']; ?>" />
            </label>
            


            <label>
                 Placa:
                 <?php if ($tem_erros && isset($erros_validacao['placa'])) : ?>
                    <span class="placa">
                        <?php echo $erros_validacao['placa']; ?>
                    </span> 
                    <?php endif; ?>   
                <input type="text" name="placa" value="<?php echo $carro['placa']; ?>"/>
            </label>
            
            
            <label>
                 Cor:
                 <?php if ($tem_erros && isset($erros_validacao['cor'])) : ?>
                    <span class="cor">
                        <?php echo $erros_validacao['cor']; ?>
                    </span>
                    <?php endif; ?>    
                <input type="text" name="cor" value="<?php echo $carro['cor']; ?>" />
            </label>


            <label>
                Hora Entrada:
                <?php if ($tem_erros && isset($erros_validacao['horaentrada'])) : ?>
                    <span class="cor">
                        <?php echo $erros_validacao['horaentrada']; ?>
                    </span>
                    <?php endif; ?>    
                <input type="time" name="horaentrada" value="<?php echo $carro['horaentrada']; ?>"/>
            </label> 


            <label>
                Hora Saida:
                <?php if ($tem_erros && isset($erros_validacao['horasaida'])) : ?>
                    <span class="horasaida">
                        <?php echo $erros_validacao['horasaida']; ?>
                    </span> 
                  <?php endif; ?>     
                <input type="time" name="horasaida" value="<?php echo $carro['horasaida']; ?>"/>
            </label>

            
            <label>
                    Data:
                    <?php if ($tem_erros && isset($erros_validacao['prazo'])) : ?>
                        <span class="prazo">
                            <?php echo $erros_validacao['prazo']; ?>
                        </span>
                        <?php endif; ?>    
                    <input type="date" name="prazo" value="<?php echo $carro['prazo']; ?>"/>
            </label>
            
            <fieldset>
            <label>
            <input type="submit" value="<?php echo ($carro['id'] > 0) ? 'Atualizar' : 'Cadastrar'; ?> " />
            <input type="reset" name="Cancelar" value="Cancelar" />
            </label>
            </fieldset>
                            
            
        </fieldset>
    </form>        