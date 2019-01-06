<script type="text/javascript" src="<?php echo URL_BASE ?>assets/js/pedido.js"></script>
<div class="base-centro">	
    <div class="base-home">
        <div class="caixa">
            <h1 class="titulo"><strong>Pedidos</strong> <span>Faça seu controle financeiro de saídas e fique sempre atento com o balanço finaneciero de sua empresa</span></h1>
        </div>

        <form action="" method="post">
            <div class="rows caixa-border">
                <div class="rows">
                    <div class="caixa">
                        <span class="titulo"><strong>Dados do Pedido</strong></span>

                        <div class="dados-pedido">									
                            <div class="rows box_op">
                                <div class="cel6">
                                    <i class="ico cliente"></i>
                                    <small><?php echo $_SESSION["clienteLogado"]->cliente ?></small>
                                    <h3 id="cli">Selecione o cliente</h3>
                                </div>
                                <div class="cel2">
                                    <i class="ico data"></i>
                                    <small>Data</small>
                                    <h3><?php echo date("d/m/Y") ?></h3>
                                </div>
                                <div class="cel2">
                                    <i class="ico hora"></i>
                                    <small>Hora</small>
                                    <h3><?php echo date("h:m:i")?></h3>
                                </div>
                                <div class="cel2">
                                    <i class="ico total"></i>
                                    <small>total</small>
                                    <h3 id="total">R$ 0,00</h3>
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
                                        <input type="text" id="produto" data-type="localizar_produto"  />
                                        
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
                                        <input type="button" class="btn inserir" value="Inserir " name="" onclick="inserirItens()">
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
                                    
                                </tbody>
                            </table>								
                            <div class="base-botoes" id="botoes" style="">
                                <button class="btn limpar" >limpar</button>
                                <button class="btn cancelar" >cancelar</button>
                                <input type="submit"  class="btn finalizar" value="Finalizar Venda" />
                            </div>
                        </div>
                    </div>

                    </form>	
                </div>
            </div>


    </div>
</div>