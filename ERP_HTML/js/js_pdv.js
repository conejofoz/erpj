
$(function(){
	
	inicio();
	$("#codigo_produto").on("keydown",function(event){
		var q = $(this).val();
		if(event.keyCode===13){
			$.ajax({
				url:base_url+'/produto/produtoPorCodigo',
				type:'POST',
				data:{q:q},
				dataType:'json',
				success:function(json) {					
					$("#id_produto").val(json.id_produto);
					$('#imagem').attr("src", base_url_imagem + json.imagem);
					$("#qtde").val(1);
					$("#preco").val(json.preco);
					$("#total").val(json.preco);
					$("#qtde").focus();
				}
			});
		}
	});
	
	
	$("#qtde").on("keydown",function(event){
		
		var id_produto 	= $("#id_produto").val();
		//var id_pedido = $(this).val();
		var id_cliente 	= $("#id_cliente").val();
		var qtde 		= $("#qtde").val();
		var preco 		= $("#preco").val();
		
		if(event.keyCode===13){
			alert("veio");
			$.ajax({
				url:base_url+'venda/inserirItem',
				type:'POST',
				data:{ 
						id_produto:id_produto,
						id_cliente:id_cliente,
						qtde:qtde,
						preco:preco						
				},
				success: function(){           
				    listaItens(2) ;
					limpar(); 
				   
			    },
				 error: function(XMLHttpRequest,  errorThrown) { 
					 alert("Error: " + errorThrown); 
				}
			});
		}

	});	

});

function listaItens(id_venda){
   var retorno="";
   var i=1;
    $.ajax({
       url: base_url + "venda/getItensDaVenda/" + id_venda ,
       type:"post",      
       dataType: 'json',
       data:{ },
       success: function (data) {
           $.each(data, function(key){
						var total = data[key].qtde * data[key].valor;
						retorno += "<tr class='cor-tab1'>";
						retorno += "<td>"  + i++ + "</td>";
						retorno += "<td>"  + data[key].id_produto + "</td>";
						retorno += "<td>"  + data[key].produto + "</td>";
						retorno += "<td>"  + data[key].unidade + "</td>";
						retorno += "<td>"  + data[key].qtde + "</td>";
						retorno += "<td>"  + data[key].valor + "</td>";
						retorno += "<td>"  + total + "</td>";
						retorno += "<td><a href='javascript:;' onclick='excluirProd(this)' class=btn>Excluir</a></td>";
						retorno += "</tr>"; 
		});
		$("#itensDaVenda").html(retorno);
          
        }
    }); 
}


function limpar(){
	$("#codigo_produto").val("");
	$("#id_produto").val("");
	$("#qtde").val("");
	$("#preco").val("");
	$("#codigo_produto").focus();
	
}

function inicio(){
	$("#codigo_produto").val("");
	$("#id_produto").val("");
	$("#qtde").val("");
	$("#preco").val("");
	$("#total").val("");
	$("#descricao").html("");
	$('#imagem').attr("src", base_url + "assets/img/semimagem.jpg");
	$("#codigo_produto").focus();
}








