<div class="base-centro">	
    <div class="base-home base-pedido">
        <div class="caixa">
            <h1 class="titulo"><strong>Pedido</strong> <span>Veja seus pedidos abaixo</span></h1>

            <a href="<?php echo URL_BASE . "pedido" ?>" class="btn add">+ Adicionar Pedido</a>	
        </div>
        <div class="caixa-border">
            <div  class="caixa alt">
                <form action="index.php">
                    <div>
                        <div class="cel4">
                            <label class="cel6"><small><i class="icodate"></i>por data 1:</small><input type="date" name="data1" value = "" ></label>
                            <label class="cel6"><small><i class="icodate"></i>por data 2:</small><input type="date" name="data2" value = ""></label>
                        </div>
                    </div>
                    <label class="cel3">
                        <small>por nome:</small>
                        <select>
                            <option>testes</option>
                            <option>testes</option>
                        </select>
                    </label>
                    <div class="cel2">					
                        <input type="hidden" name="link" value="7" >
                        <input type="submit" value="pesquisar" class="btn busca">
                    </div>
                </form>
            </div>	


            <div class="base-lista">
                <div class="caixa alt">
                    <div class="titulo_p"><strong></strong><p><i class="icone-p"></i><b>LISTA DE PEDIDOS</b></p></div>
                    <?php if($pedidos){ ?>

                    <div class="limpar">&nbsp;</div>
                    <table width="100%" cellpadding="0" cellspacing="0" class="tabela">			

                        <thead>
                            <tr>
                                <th width="3%" align="center">ID:</th>
                                <th width="30%" align="left">Cliente:</th>
                                <th width="10%">Data:</th>
                                <th width="10%">Total(R$):</th>
                                <th width="2%" >baixado:</th>
                                <th colspan="2" width="10%">Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pedidos as $pedido){?>

                            <tr class="ativo">
                                <td align="center"><?php echo $pedido->id_pedido ?></td>
                                <td><?php echo $pedido->cliente ?></td>
                                <td align="center"><?php echo $pedido->data_pedido ?></td>
                                <td align="center"><?php echo $pedido->total ?></td>

                                <td align="center"><?php echo $pedido->baixado ?></td>
                                <td align="center"><a href="#" class="btn detalhe">Detalhes</a></td>
                            </tr>
                           <?php }?>






                        </tbody>

                    </table>

                    <ul class="paginacao">
                        <li><a href="">Anterior</a></li>
                        <li class="ativo">1</li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                        <li><a href="">Próximo</a></li>
                    </ul>
                    <?php } else {
                        echo "Nenhum pedido encontrado!";
                    } ?>
                    
                </div>
            </div>
        </div>
    </div>

</div>
