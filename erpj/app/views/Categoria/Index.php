<div class="base-home produtos">
    <div class="caixa">
        <h1 class="titulo">
            <strong>Lista de categorias</strong>
        </h1>
        <a href="<?php echo URL_BASE . "categoria/create" ?>" class="btn add">Adicionar categoria</a>
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
            <div class="base-lista">
                <table cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th align="left" width="5%">ID</th>
                            <th align="left" width="50%">Nome categoria</th>
                            <th align="center" >Menu</th>
                            <th align="center" >Ativo</th>
                            <th colspan="3">acão</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php foreach ($categorias as $categoria) { ?>
                            <tr>
                                <td><?php echo $categoria->id_categoria ?></td>
                                <td><?php echo $categoria->categoria ?></td>
                                <td align="center"><?php echo $categoria->ativo_categoria ?></td>
                                <td align="center"><?php echo $categoria->mostrar_no_menu ?></td>
                                <td align="center">
                                    <a href="<?php echo URL_BASE . "categoria/edit/" . $categoria->id_categoria ?>" class="btn editar">Editar</a>
                                    <a href="detalhe_categoria.html" class="btn detalhe">Detalhes</a>
                                    <a href="<?php echo URL_BASE . "categoria/excluir/" . $categoria->id_categoria ?>" class="btn excluir">Excluir</a>
                                </td>
                            </tr>	
                        <?php } ?>

                    </tbody>
                </table>	

            </div>
        </div>
    </div>

    <ul class="paginacao">
        <li><a href="#" class="primeiro">Primeiro</a></li>
        <li class="ativo">1</li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">...</a></li>
        <li><a href="#" class="ultimo">ùltimo</a></li>
    </ul>
</div>

