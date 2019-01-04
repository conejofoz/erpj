<div class="base-home">			
    <div class="caixa">		
                        <form action="<?php echo URL_BASE . "produto/salvar" ?>" method="Post" enctype="multipart/form-data" >
        <h1 class="titulo"><strong>Cadastro</strong> <span>Cadastrar produto</span></h1>
    </div>

    <div class="container">
        <div class="base-formulario">
            <div class="caixa-inputs caixa-border">
                <div class="caixa">	
                    <div class="rows">
                        <div class="cel6 thumb-produto">
                            <div class="thumb">
                                <img src="https://mjailton.com.br/testes/erp_oficial/versao02/upload/CUSCUZEIRA_LARANJA.jpg" name="imagem" id="imagem">
                            </div>
                        </div>
                        <div class="cel6">
                            <div class="rows">
                                <span>Titulo do produto</span>
                                <input type="text" name="txt_produto"  placeholder="Digite um título do produto">										
                            </div>
                            <div class="rows">
                                <div class="cel6">
                                    <span>Nome do arquivo</span>
                                    <input type="text" name="txt_nome_do_arquivo"  placeholder="Digite o nome do imagem">
                                </div>
                                <div class="cel6">
                                    <span>Embed do produto</span>
                                    <input type="text" name="txt_embed_produto"  placeholder="Digite Embed do produto">										
                                </div>
                            </div>
                            <div class="rows">
                                <div class="cel8">
                                    <span>Upload imagem produto</span>
                                    <input type="file" name="arquivo">
                                </div>
                                <div class="cel4">
                                    <span>Código de Barras </span>
                                    <select name="txt_id_genero">
                                        <option>Code25</option>                                                       
                                        <option>Code39</option>                                                       
                                        <option>Code128</option>                                                       
                                        <option>EAN8</option>                                                       
                                        <option>EAN128</option>                                                       
                                        <option>EAN13</option>                                                       
                                        <option>UPC-A</option>                                                       
                                        <option>UPC-E</option>                                                       
                                    </select>
                                </div>
                            </div>

                            <div class="rows">
                                <div class="cel6">
                                    <span>Preço atual</span>
                                    <input type="text" name="txt_preco_alto"  placeholder="Inseriri preço atual">
                                </div>
                                <div class="cel6">
                                    <span>Preço de desconto</span>
                                    <input type="text" name="txt_preco"  placeholder="Inseriri preço desconto">
                                </div>
                            </div>
                            <div class="rows">               	
                                <div class="cel6">
                                    <span>Ativo</span>
                                    <select name="txt_ativo">
                                        <option value="S" >Sim</option>                                                 
                                        <option value="N" >Não</option> 
                                    </select>
                                </div>				
                                <div class="cel6">
                                    <span>Unidade</span>
                                    <select name="txt_unidade">
                                        <option value="S" >Unidade</option>                                                 
                                        <option value="N" >Kilo</option> 
                                        <option value="N" >Duzia</option> 
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="base-formulario caixa-border">
                <div class="caixa">

                    <ul class="tabs light">
                        <li class="current" data-tab="tab-1">Loja Virtual</li>
                        <li data-tab="tab-2">Estoque</li>
                        <li data-tab="tab-3">Descrição do produto</li>
                        <li data-tab="tab-4">Medidas</li>
                        <li data-tab="tab-5">Classificação</li>
                    </ul>	
                </div>	

                <!--primeira aba -->

                    <div id="tab-1" class="tab-content current">
                        <div class="caixa-inputs">
                            <div class="caixa">
                                <div class="rows">       	
                                    <label class="cel2">
                                        <span>Lançamento</span>
                                        <select name="txt_lancamento">
                                            <option value="S">Sim</option>                                                 
                                            <option value="N">Não</option> 
                                        </select>
                                    </label>

                                    <label class="cel2">
                                        <span>Promoção</span>
                                        <select name="txt_promocao">
                                            <option value="S">Sim</option>                                                 
                                            <option value="N">Não</option> 
                                        </select>
                                    </label>

                                    <label class="cel2">
                                        <span>Mais Vendido</span>
                                        <select name="txt_maisvendido">
                                            <option value="S">Sim</option>                                                 
                                            <option value="N">Não</option> 
                                        </select>
                                    </label>

                                    <label class="cel2">
                                        <span>Ativo</span>
                                        <select name="txt_ativo">
                                            <option value="S" >Sim</option>                                                 
                                            <option value="N" >Não</option> 
                                        </select>
                                    </label>
                                </div>			

                                <div class="rows">								
                                    <h3 class="titulo2"> Imagens do produto</h3>
                                    <div class="base-lista lista-img">
                                        <a href="#janela" rel="modal" class="btn add">Adicionar imagens</a>
                                        <div class="rows" id="listaImagensParaInserir">
                                            <div class="caixa-img" id="1"><div class="thumb"><img src="https://mjailton.com.br/testes/erp_oficial/versao02/upload/CUSCUZEIRA_LARANJA.jpg"></div><a href="javascript:;" onclick="excluirImagemDoProduto(1)" class="delete"></a></div>
                                            <div class="caixa-img" id="2"><div class="thumb"><img src="https://mjailton.com.br/testes/erp_oficial/versao02/upload/CUSCUZEIRA_LARANJA.jpg"></div><a href="javascript:;" onclick="excluirImagemDoProduto(2)" class="delete"></a></div>
                                            <div class="caixa-img" id="3"><div class="thumb"><img src="https://mjailton.com.br/testes/erp_oficial/versao02/upload/CUSCUZEIRA_LARANJA.jpg"></div><a href="javascript:;" onclick="excluirImagemDoProduto(3)" class="delete"></a></div>
                                        </div>							

                                    </div>
                                    <div class="base-lista lista-img">
                                        <table cellspacing="0" cellpadding="0" border="0">
                                            <thead>
                                                <tr>
                                                    <th align="center">ID</th>
                                                    <th width="10%" align="left">imagem</th>
                                                    <th align="left">titulo</th>
                                                    <th width="18%">acão</th>    
                                                </tr>
                                            </thead>                            

                                            <tbody id="listaImagensProduto">    

                                                <tr>
                                                    <td align="center">1</td>
                                                    <td align="center"><div class="thumb"><img src="https://mjailton.com.br/testes/erp_oficial/versao02/upload/CUSCUZEIRA_LARANJA.jpg"></div></td>
                                                    <td align="left">jardim colorido almofada</td>
                                                    <td align="right"><a href="" class="btn editar">Editar</a></td>
                                                </tr>
                                                <tr>
                                                    <td align="center">1</td>
                                                    <td align="left"><div class="thumb"><img src="https://mjailton.com.br/testes/erp_oficial/versao02/upload/CUSCUZEIRA_LARANJA.jpg"></div></td>
                                                    <td align="left">jardim colorido almofada</td>
                                                    <td align="right"><a href="" class="btn editar">Editar</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>				
                        </div>				
                    </div>				
            </div>				
        </div>				


        <!--segunda aba -->

        <div id="tab-2" class="tab-content">	
            <div class="base-formulario caixa-border">
                <div class="caixa">	
                    <h3 class="titulo2">Estoque </h3>					
                    <div class="caixa-inputs"> 
                        <div>                
                            <label class="cel3">
                                <span>Estoque atual</span>
                                <input type="text" name="txt_estoque_atual"  placeholder="Digite um título do produto">										
                            </label>
                            <label class="cel3">
                                <span>Estoque Inicial</span>
                                <input type="text" name="txt_estoque_inicial"  placeholder="Digite Embed do produto">										
                            </label> 
                            <label class="cel3">
                                <span>Estoque Mínimo</span>
                                <input type="text" name="txt_estoque_minimo"  placeholder="Digite um título do produto">										
                            </label>
                            <label class="cel3">
                                <span>Estoque Máximo</span>
                                <input type="text" name="txt_estoque_maximo"  placeholder="Digite Embed do produto">										
                            </label>						
                        </div>			   
                    </div>		
                </div>			
            </div>			
        </div>			


        <!--terceira aba-->						
        <div id="tab-3" class="tab-content">										
            <div class="rows" style="border-top: solid 6px #8E44AD;">
                <div class="caixa">
                    <h3 class="titulo2">Descrição do produto </h3>
                    <textarea rows="5" id="ckeditor" class="ckeditor" name="txt_descricao"></textarea>
                </div>
            </div>
        </div>

        <!--quarta aba-->						
        <div id="tab-4" class="tab-content">				
            <div class="base-formulario caixa-border">
                <div class="rows">
                    <div class="caixa">
                        <h3 class="titulo2">Medidas </h3>
                        <div class="caixa-inputs">
                            <div class="rows">
                                <label class="cel2">
                                    <span>Comprimento</span>
                                    <input type="text" name="txt_comprimento_correio" placeholder="Inseriri comprimento">
                                </label>

                                <label class="cel2">
                                    <span>Altura</span>
                                    <input type="text" name="txt_altura_correio"  placeholder="Inseriri altura">
                                </label>
                                <label class="cel2">
                                    <span>Largura</span>
                                    <input type="text" name="txt_largura_correio"  placeholder="Inseriri largura">
                                </label>
                                <label class="cel2">
                                    <span>Peso</span>
                                    <input type="text" name="txt_peso_correio"  placeholder="Inseriri peso">
                                </label>
                                <label class="cel2">
                                    <span>Diàmetro</span>
                                    <input type="text" name="txt_diametro_correio"  placeholder="Inseriri Diâmentro">
                                </label>
                            </div>
                        </div>
                        <div class="rows">
                            <h3 class="titulo2">Medidas do Produto </h3> 
                            <div class="caixa-inputs">

                                <label class="cel2">
                                    <span>Comprimento</span>
                                    <input type="text" name="txt_comprimento"  placeholder="Inseriri Comprimento">
                                </label>

                                <label class="cel2">
                                    <span>Largura</span>
                                    <input type="text" name="txt_altura"  placeholder="Inseriri Largura">
                                </label>
                                <label class="cel2">
                                    <span>Altura</span>
                                    <input type="text" name="txt_largura"  placeholder="Inseriri Altura">
                                </label>
                                <label class="cel2">
                                    <span>Qtde</span>
                                    <input type="text" name="txt_qtde"  placeholder="Inseriri Qtde">
                                </label>
                            </div>
                        </div>	

                    </div>
                </div>
            </div>
        </div>	

        <!--quinta aba-->	
        <div class="base-formulario caixa-border">
            <div id="tab-5" class="tab-content">
                <div class="rows">
                    <div class="caixa"
                         <h3 class="titulo2">Classificação </h3>
                        <div class="caixa-inputs">

                            <div class="rows">							
                                <div class="cel6">
                                    <div class="cel9">
                                        <span>Categoria</span>
                                        <select name="txt_id_categoria">
                                            <?php
                                            foreach ($categorias as $categoria) {
                                                echo "<option value='$categoria->id_categoria'>$categoria->categoria</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="cel3"><a href="#janela2" rel="modal" class="ico-up"></a></div>
                                </div>
                                <div class="cel6">
                                    <div class="cel9">
                                        <span>Subcategoria</span>
                                        <select name="txt_id_subcategoria">
                                            <?php
                                            foreach ($subcategorias as $subcategoria) {
                                                echo "<option value='$subcategoria->id_subcategoria'>$subcategoria->subcategoria</option>";
                                            }
                                            ?>

                                        </select>
                                    </div>								
                                    <div class="cel3"><a href="#janela3" rel="modal" class="ico-up"></a></div>
                                </div>
                            </div>


                            <div class="rows">
                                <div class="cel6">
                                    <div class="cel9">
                                        <span>Grupo</span>
                                        <select name="txt_id_grupo">
                                            <option value='1'>Discos</option><option value='2'>Panelas</option><option value='3'>Baquelites</option>										</select>
                                    </div>
                                    <div class="cel3"><a href="#janela2" rel="modal" class="ico-up"></a></div>
                                </div>


                                <div class="cel6">
                                    <div class="cel9">
                                        <span>Linha de Produção</span>
                                        <select name="txt_id_linha">
                                            <option value='1'>Linha Hotel</option><option value='2'>Linha Reforçada</option><option value='3'>Linha de Luxo</option>										</select>
                                    </div>
                                    <div class="cel3"><a href="#janela2" rel="modal" class="ico-up"></a></div>
                                </div>
                            </div>


                            <div class="rows">
                                <div class="cel6">
                                    <div class="cel9">
                                        <span>Marca</span>
                                        <select name="txt_id_tipo_festa">


                                        </select>
                                    </div>
                                    <div class="cel3"><a href="#janela6" rel="modal" class="ico-up"></a></div>
                                </div>

                                <div class="cel6">
                                    <div class="cel9">
                                        <span>Modelo</span>
                                        <select name="txt_id_tipo_festa">


                                        </select>
                                    </div>
                                    <div class="cel3"><a href="#janela7" rel="modal" class="ico-up"></a></div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>		
        </div>
        <div class="base-botoes">
            <input type="submit" value="salvar alteração" class="btn btn_salvar">
        </div>
        </form>	
    </div>



</div>
</div>



<!--modal adicionar imagens-->
<div id="janela" class="window imagens" style="display:none">
    <a href="" class="fechar">X</a>

    <div class="mod-campos">
        <form>
            <div class="rows">
                <div class="cel3">
                    <span>Selecione o tema</span>
                    <select name="_txt_id_tema" id ="_txt_id_tema">


                    </select>
                </div>
                <div class="cel6">
                    <span>Digite um nome</span>
                    <input type="text" name="txt_titulo" id="_txt_titulo">
                </div>
                <div class="cel3"><input type="button" name="" value="Pesquisar" onclick="buscarImagem()"class="btn" ></div>

            </div>
        </form>	
        <div class="rows selecionar">					
            <span>Sua lista resultou:</span>

            <div class="cel3"><input type="button" name="" value="Salvar Selecionados aqui" class="btn salvar" onclick="selectionarImagens()"></div>

            <div class="base-lista">
                <table cellspacing="0" cellpadding="0" border="0">
                    <thead>
                        <tr>
                            <th width="15%">selcionar</th>
                            <th width="14%" align="left">imagem</th>
                            <th align="left">ID</th>
                            <th align="left">titulo</th>
                            <th>acão</th>    
                        </tr>
                    </thead>


                    <tbody id="listaImagensProduto">    

                        <tr>
                            <td align="left"><input type="checkbox" name="checks[]" value="1#jardim-colorido-almofada.png"><label></label></td>
                            <td align="left"><div class="thumb"><img src="http://mjailton.com.br/projetos2018/programado/lojavirtual/upload/jardim-colorido-almofada.png"></div></td>
                            <td align="left">1</td><td align="left">jardim colorido almofada</td><td align="right"><span class="inserido"></span></td>
                        </tr>
                        <tr>
                            <td align="left"><input type="checkbox" name="checks[]" value="1#jardim-colorido-almofada.png"><label></label></td>
                            <td align="left"><div class="thumb"><img src="http://mjailton.com.br/projetos2018/programado/lojavirtual/upload/jardim-colorido-almofada.png"></div></td>
                            <td align="left">1</td><td align="left">jardim colorido almofada</td><td align="right"><a href="javascript:;" onclick="inserirUmaImagem( & quot; 1#jardim - colorido - almofada.png & quot; )" class="btn editar">Inserir</a></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>
<div id="mascara"></div>

<!-- caixa modal categoria -->
<div class="window  caixa-border" id="janela2">
    <div class="dados-pedido">
        <span class="fechar">X</span>
        <div class="caixa">
            <h2 class="titulo"><strong>Inserir Novo</strong> </h2>
            <form action="" method="">
                <div class="caixa-inputs">						
                    <label class="rows">
                        <small>Categoria</small>
                        <input type="text" name="txt_categoria" placeholder="Digite o nome da categoria">
                    </label>
                    <div class="rows">
                        <label class="cel2">
                            <small>Ativo</small>
                            <select name="txt_ativo">
                                <option value="S">Sim</option>                                                 
                                <option value="N">Não</option>                                                 
                            </select>
                        </label>
                        <label class="cel2">
                            <small>Mostrar no Menu</small>
                            <select name="txt_menu">
                                <option value="S">Sim</option>                                                 
                                <option value="N">Não</option>                                                 
                            </select>
                        </label>
                    </div>							
                    <input type="submit" value="cadastrar " class="btn btn_inserir">						

                </div>
            </form>
        </div>
    </div>
</div>



<!-- caixa modal subcategoria -->
<div class="window  caixa-border" id="janela3">
    <div class="dados-pedido">
        <span class="fechar">X</span>
        <div class="caixa">
            <h2 class="titulo"><strong>Inserir Novo</strong> </h2>
            <form action="" method="">
                <div class="caixa-inputs">						
                    <div class="rows">
                        <label class="cel6">
                            <small>Categoria</small>
                            <select>
                                <option>opção1</option>
                                <option>opção1</option>
                            </select>
                        </label>						
                        <label class="cel6">
                            <small>Subcategoria</small>
                            <input type="text" name="txt_categoria" placeholder="Digite o nome da scategoria">
                        </label>
                    </div>
                    <div class="rows">
                        <label class="cel2">
                            <small>Ativo</small>
                            <select name="txt_ativo">
                                <option value="S">Sim</option>                                                 
                                <option value="N">Não</option>                                                 
                            </select>
                        </label>
                        <label class="cel2">
                            <small>Mostrar no Menu</small>
                            <select name="txt_menu">
                                <option value="S">Sim</option>                                                 
                                <option value="N">Não</option>                                                 
                            </select>
                        </label>
                    </div>							
                    <input type="submit" value="cadastrar" class="btn btn_inserir">						

                </div>
            </form>
        </div>
    </div>
</div>


<!-- caixa modal grupo -->
<div class="window  caixa-border" id="janela4">
    <div class="dados-pedido">
        <span class="fechar">X</span>
        <div class="caixa">
            <h2 class="titulo"><strong>Inserir Novo</strong> </h2>
            <form action="" method="">
                <div class="rows">						
                    <div class="caixa-inputs">						
                        <div class="cel8">
                            <small>Grupo</small>
                            <select>
                                <option>opção1</option>
                                <option>opção1</option>
                            </select>	
                        </div>
                        <div class="cel4">
                            <small>Ativo</small>
                            <select name="txt_ativo">
                                <option value="S">Sim</option>                                                 
                                <option value="N">Não</option>                                                 
                            </select>
                        </div>									
                    </div>					
                </div>

                <input type="submit" value="cadastrar" class="btn btn_inserir">					

            </form>
        </div>
    </div>
</div>



<!-- caixa modal subgrupo -->
<div class="window  caixa-border" id="janela5">
    <div class="dados-pedido">
        <span class="fechar">X</span>
        <div class="caixa">
            <h2 class="titulo"><strong>Inserir Novo</strong> </h2>
            <form action="" method="">
                <div class="caixa-inputs">						
                    <div class="rows">
                        <label class="cel6">
                            <small>Grupo</small>
                            <select>
                                <option>opção1</option>
                                <option>opção1</option>
                            </select>
                        </label>						
                        <label class="cel6">
                            <small>Subgrupo</small>
                            <input type="text" name="txt_categoria" placeholder="Digite o nome da categoria">
                        </label>
                    </div>
                    <div class="rows">
                        <label class="cel2">
                            <small>Ativo</small>
                            <select name="txt_ativo">
                                <option value="S">Sim</option>                                                 
                                <option value="N">Não</option>                                                 
                            </select>
                        </label>
                        <label class="cel2">
                            <small>Mostrar no Menu</small>
                            <select name="txt_menu">
                                <option value="S">Sim</option>                                                 
                                <option value="N">Não</option>                                                 
                            </select>
                        </label>
                    </div>							
                    <input type="submit" value="cadastrar" class="btn btn_inserir">						

                </div>
            </form>
        </div>
    </div>
</div>




<!-- caixa modal marca -->
<div class="window  caixa-border" id="janela6">
    <div class="dados-pedido">
        <span class="fechar">X</span>
        <div class="caixa">
            <h2 class="titulo"><strong>Inserir Novo</strong> </h2>
            <form action="" method="">
                <div class="rows">						
                    <div class="caixa-inputs">						
                        <div class="cel8">
                            <small>Marca</small>						
                            <input type="text" name="txt_categoria" placeholder="Digite o nome da marca">	
                        </div>
                        <div class="cel4">
                            <small>Ativo</small>
                            <select name="txt_ativo">
                                <option value="S">Sim</option>                                                 
                                <option value="N">Não</option>                                                 
                            </select>
                        </div>									
                    </div>					
                </div>

                <input type="submit" value="cadastrar" class="btn btn_inserir">					

            </form>
        </div>
    </div>
</div>


<!-- caixa modal modelo -->
<div class="window  caixa-border" id="janela7">
    <div class="dados-pedido">
        <span class="fechar">X</span>
        <div class="caixa">
            <h2 class="titulo"><strong>Inserir Novo</strong> </h2>
            <form action="" method="">
                <div class="rows">						
                    <div class="caixa-inputs">
                        <div class="rows">
                            <div class="cel6">
                                <small>Marca</small>	
                                <select name="txt_ativo">
                                    <option>marca</option>                                                 
                                    <option>marca</option>                                                 
                                </select>	
                            </div>						
                            <div class="cel6">
                                <small>Modelo</small>						
                                <input type="text" name="txt_categoria" placeholder="Digite o nome da marca">	
                            </div>
                        </div>
                        <div class="rows">
                            <div class="cel4">
                                <small>Ativo</small>
                                <select name="txt_ativo">
                                    <option value="S">Sim</option>                                                 
                                    <option value="N">Não</option>                                                 
                                </select>
                            </div>									
                        </div>					
                    </div>

                    <input type="submit" value="cadastrar" class="btn btn_inserir">					

                    </form>
                </div>
        </div>
    </div>
    
    <script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
