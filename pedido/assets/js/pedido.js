$(function () {
    /*Cancelar submit do formulario temporariamente*/
    $("#frmPedido").submit(function(){
        return false;
    });
    
    
    
    $("#produto").on("keyup", function () {

        var q = $(this).val();
        $.ajax({
            url: "http://localhost/erpj/pedido/produto/pesquisa",
            type: "POST",
            data: {q: q},
            dataType: 'json',
            success: function (data) {
                console.log(data);
                /* //só pra brincar
                 * var json = JSON.stringify(data);
                 console.log(json);
                 var obj = JSON.parse(json);
                 console.log(obj);
                 */

                /*
                 * caixa para exibir os produtos
                 */

                //cria uma div com a classe listaProdutos se essa não existir
                if ($(".listaProdutos").length == 0) {
                    $("#produto").after('<div class="listaProdutos"></div>');
                }
                //define largura e altura da caixa de acordo com o campo produto
                $(".listaProdutos").css('left', $('#produto').offset().left + 'px');
                $(".listaProdutos").css('top', $('#produto').offset().top + $("#produto").height() + 3 + 'px');
                var html = "";
                for (var i in data) {
                    html += '<div classe=""><a href="javascript:;" onclick="selecionarProduto(this)" data-id="'
                            + data[i].id_produto + '" data-preco="'
                            + data[i].preco + '" data-produto="'
                            + data[i].produto + '">'
                            + data[i].produto + ' R$ ' + data[i].preco + '</a></div>';
                }

                $(".listaProdutos").html(html);
                $(".listaProdutos").show();
            },
            error: function () {
                console.log("Erro na busca do produto");
            }

        });
    });
});



function selecionarProduto(umProduto) {
    var id = $(umProduto).attr('data-id');
    var produto = $(umProduto).attr('data-produto');
    var preco = $(umProduto).attr('data-preco');
    /*esconder a consulta de produtos*/
    $(".listaProdutos").hide();
    /*Preencher os campos do produto com os dados selecionados*/
    $("#id_produto").val(id);
    $("#produto").val(produto);
    $("#preco").val(preco);
    $("#qtde").val(1);
    /*Aplicar o foco no campo quantidade*/
    $("#qtde").focus();
    $("#qtde").select();
}



function inserirItens() {
    
    var id = $("#id_produto").val();
    var produto = $("#produto").val();
    var preco = $("#preco").val();
    var qtde = $("#qtde").val();
    var subtotal = preco * qtde;
    
    var tr = "<tr>" +
            "<td>1</td>" +
            "<td>" + id + "</td>" +
            "<td>" + produto + "</td>" +
            "<td>R$ " + preco + "</td>" +
            '<td><input type="number" name="quant[' + id + '"  class="p_quant" value="'+qtde+'" >' +
            '<td class="subtotal">R$ ' + subtotal + '</td>' +
            '<td><a href=""  class="btn">Excluir</a></td>' +
            "</tr>";
    $("#lista_itens").append(tr);
    
    limpar();
}


function limpar(){
    $("#id_produto").val("");
    $("#produto").val("");
    $("#qtde").val("");
    $("#preco").val("");
    $("#produto").focus();
}

