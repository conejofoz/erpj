<script type="text/javascript" src="<?php echo URL_BASE ?>assets/js/pedido.js"></script>
<div class="base-centro">	
    <div class="base-home">
        <div class="caixa">
            <h1 class="titulo"><strong>Pedidos</strong> <span>Faça seu controle financeiro de saídas e fique sempre atento com o balanço finaneciero de sua empresa</span></h1>
        </div>

        <form id="frmPedido" action="" method="post">
            <div class="rows caixa-border">
                <div class="rows">
                    <div class="caixa">
                        <span class="titulo"><strong>Dados do Pedido Nº <span id="id_pedido"><?php echo $pedido->id_pedido ?></span></strong></span>

                        <div class="dados-pedido">									
                            <div class="rows box_op">
                                <div class="cel6">
                                    <i class="ico cliente"></i>
                                    <small><?php echo $pedido->cliente ?></small>
                                    <h3 id="cli">Selecione o cliente</h3>
                                </div>
                                <div class="cel2">
                                    <i class="ico data"></i>
                                    <small>Data</small>
                                    <h3><?php echo $pedido->data_pedido ?></h3>
                                </div>
                                <div class="cel2">
                                    <i class="ico hora"></i>
                                    <small>Hora</small>
                                    <h3><?php echo $pedido->hora_pedido ?></h3>
                                </div>
                                <div class="cel2">
                                    <i class="ico total"></i>
                                    <small>total</small>
                                    <h3 id="total">R$ <?php echo $pedido->total ?></h3>
                                </div>

                            </div>		
                        </div>
                    </div>			

                    <div class="rows">
                        <div class="dados-pedido">		
                            <div class="caixa">
                                <span class="titulo"><strong>Itens do pedido</strong> </span>
                                <div class="caixa-inputs">
                                    <div class="cel6">
                                        <small>Titulo</small>
                                        <input type="text" autocomplete="off" id="produto" data-type="localizar_produto"  />

                                    </div>								
                                    <div class="cel2">
                                        <small>Valor</small>
                                        <input type="text" value="" name="preco" id="preco" placeholder="Preço">
                                    </div>								
                                    <div class="cel2">
                                        <small>Quantidade</small>
                                        <input type="text" value="1" name="qtde" id="qtde" placeholder="Qtde">											 
                                    </div>						 
                                    <div class="cel2">
                                        <input type="hidden" id="id_produto" name="id_produto">
                                        <!--<input type="button" class="btn inserir" value="Inserir " name="" onclick="inserirItens()">-->
                                        <input type="button" class="btn inserir" value="Inserir " name="btnInserir" id="btnInserir" >
                                    </div>
                                </div>
                            </div>
                        </div>				
                    </div>				

                    <div class="base-lista">
                        <div class="caixa">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <thead>
                                    <tr>
                                        <th width="2%" align="left">Item</th>
                                        <th width="2%" align="left">Id</th>
                                        <th width="48%" align="left">Produto</th>
                                        <th width="16%" align="center">Preço</th>
                                        <th width="8%" align="center">Quantidade</th>							
                                        <th width="15%" align="center">Subtotal</th>
                                        <th width="15%" align="center">Excluir</th>
                                    </tr>
                                </thead>
                                <tbody id="lista_itens">
                                    
                                    <?php 
                                    $i = 1; 
                                    foreach ($itens as $item){ ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $item->id_produto ?></td>
                                        <td><?php echo $item->produto ?></td>
                                        <td>R$ <?php echo $item->valor ?></td>
                                        <td><input type="number" name="quant[<?php echo $item->id_produto ?>]"  class="p_quant" value="<?php echo $item->qtde ?>" data-preco="<?php echo $item->valor ?>" data-id-produto="<?php echo $item->id_produto ?>" onchange="atualizaSubtotal(this)" ></td>
                                        <td class="subtotal">R$ <?php echo $item->valor*$item->qtde ?></td>
                                        <td><a href="javascript:;" data-idProduto="<?php echo $item->id_produto ?>" data-idPedido="<?php echo $item->id_pedido ?>" onclick="removeLinha(this)"  class="btn">Excluir</a></td>
                                    </tr>
                                    <?php $i++; } ?>
                                </tbody>
                            </table>								
                            <div class="base-botoes" id="botoes" style="">
                                <button class="btn limpar" >limpar</button>
                                <button class="btn cancelar" >cancelar</button>
                                <input type="submit"  class="btn finalizar" value="Finalizar Venda" />
                                <button class="btn finalizar" id="btn_finalizar">Finalizar Venda</button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </form>


    </div>
</div>