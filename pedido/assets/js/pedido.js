$(function () {

    $("#btnInserir").on("click", function () {
        var id_pedido = $("#id_pedido").html();
        var id_produto = $("#id_produto").val();
        var produto = $("#produto").val();
        var preco = $("#preco").val();
        var qtde = $("#qtde").val();
        var subtotal = preco * qtde;
        $.ajax({
            url: base_url + "item/inserir",
            type: "POST",
            data: {id_pedido: id_pedido, id_produto: id_produto, qtde: qtde, preco: preco},
            dataType: 'json',
            success: function (data) {

                console.log(data);

                if (data.resultado == 0) {
                    Swal('Atenção!', data.mensagem, 'error');
                    return false;
                }
                if (data.resultado > 0) {
                    inserirItens();
                    atualizaTotal();
                    console.log(data.mensagem);
                }


            },
            error: function () {

            }
        });
    });



    /*Cancelar submit do formulario temporariamente*/
    $("#frmPedido").submit(function () {
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


    $("#btn_finalizar").on("click", function () {
        var idPedido = $("#id_pedido").html();
        var itemProduto = {};
        var listaItens = [];
        for (var i = 0; i < $(".p_quant").length; i++) {
            var linha = $(".p_quant").eq(i);
            var idProduto = linha.attr('data-id-produto');
            var qtde = linha.val();
            var preco = linha.attr('data-preco');
            //console.log("CODIGO: " + idProduto + " QUANTIDADE: " + qtde);
            itemProduto = {idPedido:idPedido, idProduto: idProduto, qtde: qtde, preco: preco};
            listaItens.push(itemProduto);
        }

        $.ajax({
            url: base_url + "pedido/finalizarPedido",
            type: "POST",
            data: { listaItens },
            dataType: "json",
            success: function (data) {
                if (data.resultado == 0) {
                    Swal('Atenção!', data.mensagem, 'error');
                    return false;
                }
                //console.log(data.mensagem);
                console.log(data);
            },
            error: function () {
            }
        });

    })


});//final jquery



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
    var id_pedido = $("#id_pedido").html();
    var id = $("#id_produto").val();
    var produto = $("#produto").val();
    var preco = $("#preco").val();
    var qtde = $("#qtde").val();
    var subtotal = preco * qtde;

    //verificar se o item já está no pedido antes de inserir
    if ($('input[name="quant[' + id + ']"]').length == 0) {

        console.log("Nome do campo" + $('input[name="quant[' + id + ']"'));

        var tr = "<tr>" +
                "<td>1</td>" +
                "<td>" + id + "</td>" +
                "<td>" + produto + "</td>" +
                "<td>R$ " + preco + "</td>" +
                '<td><input type="number" name="quant[' + id + ']"  class="p_quant" value="' + qtde + '" data-preco="' + preco + '" data-id-produto="' + id + '" onchange="atualizaQtdeBanco(this)" ></td>' +
                '<td class="subtotal">R$ ' + subtotal + '</td>' +
                '<td><a href="javascript:;" data-idProduto="' + id + '" data-idPedido="' + id_pedido + '" onclick="removeLinha(this)"  class="btn">Excluir</a></td>' +
                "</tr>";
        $("#lista_itens").append(tr);

        limpar();
        atualizaTotal();

    } else {
        Swal('Atenção!', 'Este ítem já está no pedido! por favor altere a quantidade', 'error');
        //alert('Este ítem já está no pedido! por favor altere a quantidade');
        $('input[name="quant[' + id + ']"]').focus();

    }
}


function limpar() {
    $("#id_produto").val("");
    $("#produto").val("");
    $("#qtde").val("");
    $("#preco").val("");
    $("#produto").focus();
}






function removeLinha(umaLinha) {
    var idpedido = $(umaLinha).attr("data-idPedido");
    var idproduto = $(umaLinha).attr("data-idProduto");
    $.ajax({
        url: base_url + "item/excluir/" + idpedido + "/" + idproduto,
        type: "GET",
        data: {},
        dataType: "json",
        success: function (data) {
            console.log(data);
            $(umaLinha).closest('tr').remove();
            atualizaTotal();
            Swal('Atenção!', 'Item removido do pedido', 'success');
        },
        error: function () {
            console.log("Erro ao excluir o item:");
        }
    });


}



function atualizaSubtotal(obj) {
    var qtde = $(obj).val();
    var preco = $(obj).attr("data-preco");
    var subtotal = parseInt(qtde) * preco;
    $(obj).closest('tr').find(".subtotal").html(subtotal);
    atualizaTotal();
}



function atualizaTotal() {
    var total = 0;
    var totalItens = $(".p_quant").length;

    for (var i = 0; i < totalItens; i++) {
        //pegar o elemento da linha 
        var linha = $(".p_quant").eq(i);
        var preco = linha.attr("data-preco");
        var qtde = linha.val();
        var subtotal = parseInt(qtde) * preco;
        total += subtotal;

    }
    console.log("total: " + total);
    $("#total").html(total.toFixed(2).replace(".", ","));
    //$("#total").html(total.toFixed(2));

    var idPedido = $("#id_pedido").html();
    atualizaTotalBanco(total, idPedido);

}



function atualizaTotalBanco(totalPedido, idPedido) {
    $.ajax({
        url: base_url + "pedido/atualizaTotalBanco",
        type: "POST",
        data: {
            idPedido: idPedido,
            totalPedido: totalPedido
        },
        dataType: "json",
        success: function (data) {
            if (data.resultado == 0) {
                Swal('Atenção!', data.mensagem, 'error');
                return false;
            }

            console.log(data.mensagem);

        },
        error: function () {

        }
    });



}



function atualizaQtdeBanco(obj) {
    var idPedido = $("#id_pedido").html();
    var idProduto = $(obj).attr("data-id-produto");
    var qtde = $(obj).val();
    var preco = $(obj).attr("data-preco");

    if (qtde <= 0) {
        $(obj).val('1');
        qtde = 1;
    }

    console.log(idPedido, idProduto, qtde, preco);

    $.ajax({
        url: base_url + "item/atualizaQtdeBanco",
        type: "POST",
        data: {
            idPedido: idPedido,
            idProduto: idProduto,
            qtde: qtde
        },
        dataType: "json",
        success: function (data) {
            if (data.resultado == 0) {
                Swal('Atenção!', data.mensagem, 'error');
                return false;
            }

            atualizaSubtotal($(obj));
            //atualizaTotal();

        },
        error: function () {

        }
    });
}

