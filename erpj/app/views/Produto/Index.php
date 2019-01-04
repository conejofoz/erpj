<div class="base-home produtos">
    <div class="caixa">
        <h1 class="titulo">
            <strong>lista de produtos</strong> <span>produtos</span>
        </h1>
        <div class="base-botoes">
            <a href="<?php echo URL_BASE . 'produto/create' ?>" class="btn add">Adicionar produto</a>
        </div>
    </div>
    <div class="caixa-border">
        <div class="caixa">
            <div class="base-formulario busca">
                <h2 class="titulo">Pesquisar por:</h2>
                <div class="caixa-inputs">
                    <div class="cel6">
                        <span>Nome</span>
                        <input type="text" name="" placeholder="Nome">
                    </div>
                    <div class="cel3">
                        <span>Opção</span>
                        <select name="">
                            <option>nomes</option>
                            <option>nomes</option>
                            <option>nomes</option>
                        </select>
                    </div>
                    <div class="cel3">
                        <input type="submit" value="Pesquisar" class="btn busca">
                    </div>
                </div>
            </div>
            <div class="base-lista image">
                <table cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th align="center">ID</th>
                            <th align="center">imagem</th>
                            <th align="left"  width="50%">Produto</th>
                            <th align="center">Preço</th>
                            <th colspan="2" width="30%">acão</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($produtos as $produto) {
                            ?>
                            <tr>
                                <td align="center">$produto->id_produto</td>
                                <td align="center"><div class="thumb"><img src="<?php URL_IMAGEM . $produto->imagem ?>"></div></td>
                                <td><?php $produto->produto ?></td>
                                <td align="center"> R$ 100,00</td>
                                <td align="center">
                                    <a href="<?php echo URL_BASE ."produto/edit/". $produto->id_produto ?>" class="btn editar">Editar</a>
                                    <a href="<?php echo URL_BASE ."produto/detalhe/". $produto->id_produto ?>" class="btn detalhe">Detalhes</a>
                                    <a href="<?php echo URL_BASE ."produto/excluir/". $produto->id_produto ?>" class="btn excluir">Excluir</a>
                                </td>
                            </tr> 
                        <?php }
                        ?>

                    </tbody>
                </table>	

            </div>
        </div>
    </div>
    <ul class="paginacao">
        <li><a href="#" class="primeiro">Primeiro</a></li>

        <li><a href="http://mjailton.com.br/projetos2018/programado/lojavirtual/admin/produto/?p=1" class='ativo'>1</a></li>
        <li><a href="http://mjailton.com.br/projetos2018/programado/lojavirtual/admin/produto/?p=2" >2</a></li>
        <li><a href="http://mjailton.com.br/projetos2018/programado/lojavirtual/admin/produto/?p=3" >3</a></li>
        <li><a href="http://mjailton.com.br/projetos2018/programado/lojavirtual/admin/produto/?p=4" >4</a></li>
        <li><a href="http://mjailton.com.br/projetos2018/programado/lojavirtual/admin/produto/?p=5" >5</a></li>
        <li><a href="http://mjailton.com.br/projetos2018/programado/lojavirtual/admin/produto/?p=6" >6</a></li>
        <li><a href="#" class="ultimo">ùltimo</a></li>
    </ul>
</div>
