
<div class="base-home produtos">
    <div class="caixa">
        <h1 class="titulo">
            <strong>Editar</strong> <span>categoria</span>
        </h1>
    </div>
    <div class="base-home caixa-border">
        <div class="caixa altura">
            <div class="base-formulario">
                <div class="meio">
                    <form action="<?php echo URL_BASE . "categoria/salvar" ?>" method="Post">
                        <div class="caixa-inputs">
                            <div class="rows">
                                <label>
                                    <span>Categoria</span>
                                    <input type="text" name="txt_categoria" value="<?php echo $categoria->categoria ?>" placeholder="Digite o nome da categoria">
                                </label>
                            </div>
                            <div class="rows">
                                <label class="cel6">
                                    <span>Ativo</span>
                                    <select name="txt_ativo">
                                        <option value="S" <?php echo ($categoria->ativo_categoria == "S") ? "selected" : "" ?> >Sim</option>                                                 
                                        <option value="N" <?php echo ($categoria->ativo_categoria == "N") ? "selected" : "" ?> >Não</option>                                                 
                                    </select>
                                </label>

                                <label class="cel6">
                                    <span>Mostrar no Menu</span>
                                    <select name="txt_menu">
                                        <option value="S" <?php echo ($categoria->mostrar_no_menu == "S") ? "selected" : "" ?> >Sim</option>                                                 
                                        <option value="N" <?php echo ($categoria->mostrar_no_menu == "N") ? "selected" : "" ?> >Não</option>                                                 
                                    </select>
                                </label>
                            </div>
                            <div class="rows">
                                <input type="hidden" name="id_categoria" value="<?php echo $categoria->id_categoria ?>">
                                <input type="submit" value="salvar categoria" class="btn">
                            </div>	

                        </div>	
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
