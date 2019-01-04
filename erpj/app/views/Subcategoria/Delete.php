
<div class="base-home produtos">
    <div class="caixa">
        <h1 class="titulo">
            <strong>Excluir</strong> <span>subcategoria</span>
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
                                <th align="right" >subcategoria </th>
                                <th align="right" >categoria </th>
                                <th align="right" >Ativo</th>
                                <th align="right" >Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="left"><span><?php echo $subcategoria->id_subcategoria ?>	</span></td>
                                <td align="left"><span><?php echo $subcategoria->subcategoria ?>		</span></td>
                                <td align="left"><span><?php echo $subcategoria->categoria ?>		</span></td>
                                <td align="left"><span><?php echo $subcategoria->ativo_subcategoria ?></span></td>

                                <td align="left"><span><a href="<?php echo URL_BASE . "subcategoria/delete/" . $subcategoria->id_subcategoria ?>" class="btn">Excluir</a></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>		
    </div>
</div>