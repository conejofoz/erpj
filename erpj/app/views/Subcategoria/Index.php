
<div class="base-home produtos">
    <div class="caixa">
        <h1 class="titulo">
            <strong>Lista de subcategorias</strong>
        </h1>
        <a href="<?php echo URL_BASE . "subcategoria/create" ?>" class="btn add">Adicionar subcategoria</a>
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
                            <th align="left" width="50%">Nome subcategoria</th>
                            <th align="center" >Categoria</th>
                            <th align="center" >Ativo</th>
                            <th colspan="3">acão</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php foreach ($subcategorias as $subcategoria) { ?>
                            <tr>
                                <td><?php echo $subcategoria->id_subcategoria ?></td>
                                <td><?php echo $subcategoria->subcategoria ?></td>
                                <td><?php echo $subcategoria->categoria ?></td>
                                <td align="center"><?php echo $subcategoria->ativo_subcategoria ?></td>
                                <td align="center">
                                    <a href="<?php echo URL_BASE . "subcategoria/edit/" . $subcategoria->id_subcategoria ?>" class="btn editar">Editar</a>
                                    <a href="detalhe_subcategoria.html" class="btn detalhe">Detalhes</a>
                                    <a href="<?php echo URL_BASE . "subcategoria/excluir/" . $subcategoria->id_subcategoria ?>" class="btn excluir">Excluir</a>
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


<?php
    if(isset($_GET["mensagem"])){
        //echo "Mensagem: " . $_GET["mensagem"];
        //echo '<script>alert("'.$_GET["mensagem"].'")</script>';
        
        if($_GET["mensagem"] == "inserido"){
            //echo "<script>Swal('Bom Trabalho!','Registro Inserido com sucesso!','success')</script>";
            echo "<script>Swal('Bom Trabalho!','Registro inserido com sucesso!','success')</script>";
        } else if($_GET["mensagem"] == "nao_inserido") {
            echo "<script>Swal('Houve um problema!','Registro não inserido!','error')</script>";
        } else if($_GET["mensagem"] == "alterado"){
            echo "<script>Swal('Bom Trabalho!','Registro Atualizado com sucesso!','success')</script>";
        } else if($_GET["mensagem"] == "nao_alterado") {
            echo "<script>Swal('Houve um problema!','Registro não atualizado!','error')</script>";
        }
        
    }
?>

