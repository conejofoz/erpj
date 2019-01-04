
<div class="base-home produtos">
    <div class="caixa">
        <h1 class="titulo">
            <strong>Editar</strong> <span>subcategoria</span>
        </h1>
    </div>
    <div class="base-home caixa-border">
        <div class="caixa altura">
            <div class="base-formulario">
                <div class="meio">
                    <form action="<?php echo URL_BASE . "subcategoria/salvar" ?>" method="Post">
                        <div class="caixa-inputs">
                            <div class="rows">
                                <label>
                                    <span>Subcategoria</span>
                                    <input type="text" name="txt_subcategoria" value="<?php echo $subcategoria->subcategoria ?>" placeholder="Digite o nome da subcategoria">
                                </label>
                            </div>
                            <div class="rows">
                                
                                <label class="cel6">
                                    <span>Categoria</span>
                                    <select name="txt_id_categoria">
                                        <?php
                                            foreach ($categorias as $categoria){
                                                $selecionado = ($categoria->id_categoria == $subcategoria->id_categoria) ? "selected" : "";
                                                echo "<option value='$categoria->id_categoria' $selecionado>".$categoria->categoria."</option>";
                                            }
                                            
                                            
                                        ?>
                                    </select>
                                </label>
                                
                                <label class="cel6">
                                    <span>Ativo</span>
                                    <select name="txt_ativo">
                                        <option value="S" <?php echo ($subcategoria->ativo_subcategoria == "S") ? "selected" : "" ?> >Sim</option>                                                 
                                        <option value="N" <?php echo ($subcategoria->ativo_subcategoria == "N") ? "selected" : "" ?> >Não</option>                                                 
                                    </select>
                                </label>

                                
                            </div>
                            <div class="rows">
                                <input type="hidden" name="id_subcategoria" value="<?php echo $subcategoria->id_subcategoria ?>">
                                <input type="submit" value="salvar subcategoria" class="btn">
                            </div>	

                        </div>	
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
