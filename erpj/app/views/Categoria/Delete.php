
<div class="base-home produtos">
    <div class="caixa">
        <h1 class="titulo">
            <strong>Excluir</strong> <span>categoria</span>
        </h1>
    </div>
    <div class="base-home detalhes-categoria caixa-border">,
        <div class="caixa altura">
            <div class="meio">
                <div class="base-lista">
                    <table cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <th align="right">ID</th>
                                <th align="right" >categoria </th>
                                <th align="right" >Menu</th>
                                <th align="right" >Ativo</th>
                                <th align="right" >Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="left"><span><?php echo $categoria->id_categoria ?>	</span></td>
                                <td align="left"><span><?php echo $categoria->categoria ?>		</span></td>
                                <td align="left"><span><?php echo $categoria->ativo_categoria ?></span></td>
                                <td align="left"><span><?php echo $categoria->mostrar_no_menu ?></span></td>
                                <td align="left"><span><a href="<?php echo URL_BASE . "categoria/delete/" . $categoria->id_categoria  ?>" class="btn">Excluir</a></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>		
    </div>
</div>