
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title> mjailton - erp</title>
  	
  	<link  rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style.css">
        <link  rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/grade.css">		
        
        <script type="text/javascript" src="<?php echo URL_BASE ?>assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo URL_BASE ?>assets/js/js.js"></script>
				
       
</head>
<body>
	<div class="base-topo relative">
		<div class="conteudo">
			<h1 class="logo">			
				<span class="beta"></span>
				<span class="icone menucat menu-anchor">Menu</span>		
				<a href="https://mjailton.com.br/testes/erp_oficial/versao02/"> ERP mjailton</a>						
			
			 </h1>
			<ul class="menu-topo">
				<li><a href="" class="icomin"><i class="ico-msg">mensagem</i><span class="msg">3</span>	</a></li>
				<li><a href="" class="icomin"><i class="ico-aviso">aviso</i> <span class="aviso">2</span>	</a></li>
				
				<li><a href="">LOGIN</a></li>
				<li><a href="">CADASTRAR</a></li>
				
			</ul>
		</div>
		
</div>		
	<div class="menu-lateral">
<menu>	
<dl>
	<ul class="sessao base_user">
		<a href="#">
			<div class="cel3">
				<div class="thumb"><img src="<?php echo URL_BASE ?>assets/img/foto01.png"></div>
			</div>
			<div class="cel9">
				<span>Jailton Sousa nascimento</span>
				<small>Admin</small>
				<small class="online">online</small>
			</div>
		</a>
	</ul>
	<ul class="sessao">
			<li><a href="index.php?link=1"><i class="icones home"></i>  home</a></li>
		
	</ul>
	<ul class="sessao">
		<h2>Módulo 01: Cadastros</h2>
		<h3>Cadastros</h3>
		
		<li class="sub2">
			<dt><a href=""><i class="icones pedido"></i>Produto	</a></dt>
			<dd>
				<ul>
					<li><a href="lst_produto.html">Produto</a></li>
					<li><a href="lst_categoria.html">Categoria</a></li>
					<li><a href="lst_subcategoria.html">Subcategoria</a></li>
					<li><a href="lst_grupo.html">Grupo</a></li>
					<li><a href="lst_subgrupo.html">SubGrupo</a></li>
					<li><a href="lst_marca.html">Marca</a></li>
					<li><a href="lsta_modelo.html">Modelo</a></li>
				</ul>
			</dd>
		</li>			
		<li><a href="lst_cliente.html"><i class="icones pedido"></i>Cliente	</a></li>	
	</ul>
	<ul class="sessao">
		<h2>Módulo 02: Vendas</h2>
		<h3>PDV</h3>
		<li><a href="lst_pdv.html"><i class="icones saida"></i>Vendas	</a></li>		
	
		<h3>Pedidos</h3>		
		<li><a href="lst_todos_pedido.html"></i><i class="icones pedido"></i>Todos os Pedidos	</a></li>			
		<li><a href="lst_pedido_pendente.html"><i class="icones pedido"></i>Pedidos Pendentes	</a></li>			
		<li><a href="novo_pedido.html"><i class="icones pedido"></i>Novo Pedido	</a></li>	
			
	
		<h3>Loja Virtual</h3>
		<li><a href="lst_venda_loja.html"><i class="icones saida"></i>Todas as Vendas	</a></li>			
		<li><a href="lst_nao_enviadas.html"><i class="icones entrada"></i>Vendas Não Enviadas </a></li>
		<li><a href="lst_nao_pagas.html"><i class="icones entrada"></i>Vendas Não Pagas </a></li>		
		<li><a href="lst_vendas_pagas.html"><i class="icones fornecedor"></i>Vendas Pagas</a></li>
		
		<h3>Movimentações em Geral</h3>
		<li><a href="lst_movimentacao.html"><i class="icones saida"></i>Todas as Movimentações	</a></li>			
		<li><a href="lst_resulmo_vendas.html"><i class="icones entrada"></i>Resumo de Vendas </a></li>
	</ul>
	
	<ul class="sessao">
		<h2>Módulo 03: NFE</h2>
		<h3>Nota Fiscal Eletrônica </h3>
		<li><a href="lst_notas.html"><i class="icones nfe"></i>Lista de Notas</a></li>		
	</ul>
	
	<ul class="sessao">
		<h2>Módulo 04: Estoque</h2>
		<h3>Estoque</h3>
		<li><a href="lst_entrada.html"><i class="icones saida"></i>Entrada</a></li>
		<li><a href="lst_vendas.html"><i class="icones saida"></i>Vendas	</a></li>		
	</ul>
	
	<ul class="sessao">
		<h2>Módulo 05: Financeiro</h2>
		<h3>Entradas</h3>		
		<li><a href=""><i class="icones entrada"></i>entrada</a></li>
		<li><a href=""><i class="icones fornecedor"></i>fornecedor</a></li>
	</ul>
	<ul class="sessao">
		<h3>Saídas</h3>
		<li><a href=""><i class="icones saida"></i>saída	</a></li>	
		<li><a href=""><i class="icones fornecedor"></i>fornecedor</a></li>
	</ul>	
	
	<ul class="sessao">
		<h2>Módulo 06: Pessoal</h2>
		<h3>DEPARTAMENTO PESSOAL</h3>
		<li><a href=""><i class="icones demissoes"></i>DEMISSÕES	</a></li>			
		<li><a href=""><i class="icones admissoes"></i>ADMISSÕES	</a></li>			
		<li><a href=""><i class="icones f-pagamento"></i>FOLHA DE PAGAMENTO</a></li>
		<li><a href=""><i class="icones cont-ponto"></i>CONTROLE DE PONTO</a></li>
	</ul>
	
	<ul class="sessao">
		<h2>Módulo 07: Contábil/Fiscal</h2>
		<h3>FISCAL</h3>
		<li><a href=""><i class="icones entrada-saida"></i>ENTRADAS E SAÍDAS	</a></li>			
		<li><a href=""><i class="icones apuracao"></i>APURAÇÃO E TRIBUTOS	</a></li>			
		<li><a href=""><i class="icones receita"></i>RECEITAS</a></li>
		<li><a href=""><i class="icones despesas"></i>DESPESAS</a></li>
		<li><a href=""><i class="icones custos"></i>CUSTOS</a></li>
	</ul>	
		
	<ul class="sessao">
		<h3>CONTÁBIL</h3>
		<li><a href=""><i class="icones demo-contabel"></i>DEMONSTRAÇÕES CONTÁBEIS</a></li>			
		<li><a href=""><i class="icones lancamento-debito"></i>LANÇAMENTO DE CRÉDITO E DÉBITO</a></li>	
	</ul>
	<ul class="sessao">
		<h2>Módulo 08: Produção</h2>
		<h3>PRODUÇÃO</h3>
		<li><a href="#"><i class="icones materia"></i>MATÉRIA-PRIMA</a></li>
		<li><a href="#"><i class="icones produto"></i>CUSTO DE PRODUÇÃO</a></li>				
		<li><a href="#"><i class="icones estoque"></i>ESTOQUE MATÉRIA-PRIMA</a></li>		
	</ul>		
</dl>		
</menu>
</div>

	

<section>
	<div class="conteudo">
	 	<div class="base-centro">	
		<div class="caixa">	
			<h1 class="titulo">
				<strong>Home</strong> <span>seja bem vindo</span>
			</h1>
		</div>
	<div class="base-home inicial">
		<div class="rows movimentacao">
			<div class="cel3">
				<div class="caixa">
					<i class="base-ico entrada"></i>
					<div class="tts">
						<span>ENTRADA</span>
						<h3>R$ 250.000,00</h3>
					</div>
				</div>
			</div>
			<div class="cel3">
				<div class="caixa">
					<i class="base-ico saida"></i>
					<div class="tts">
						<span>saídas</span>
						<h3>R$ 250.000,00</h3>
					</div>
				</div>
			</div>
			<div class="cel3">
				<div class="caixa">
					<i class="base-ico receitas"></i>
					<div class="tts">
						<span>receitas</span>
						<h3>R$ 250.000,00</h3>
					</div>
				</div>
			</div>
			<div class="cel3">
				<div class="caixa">
					<i class="base-ico despesas"></i>
					<div class="tts">
						<span>despesas</span>
						<h3>R$ 250.000,00</h3>
					</div>
				</div>
			</div>
		</div>
		
		<div class="rows lista">
				<div class="cel6">				
					<div class="caixa">
					<h1 class="titulo">ÚLTIMAS SAÍDAS</h1>
					<div class="base-lista">
						<table cellpadding="0" cellspacing="0">
							<thead>
								<tr>
									<th align="left">Data</th>
									<th align="left">Descrição</th>
									<th align="left">Pago a</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
									<td align="left">Jairo Sousa do Nascimento</td>
								</tr>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
									<td align="left">Jairo Sousa do Nascimento</td>
								</tr>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
									<td align="left">Jairo Sousa do Nascimento</td>
								</tr>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
									<td align="left">Jairo Sousa do Nascimento</td>
								</tr>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
									<td align="left">Jairo Sousa do Nascimento</td>
								</tr>								
							</tbody>
						</table>	
					</div>
					</div>
				</div>
				
				<div class="cel6">				
					<div class="caixa">
					<h1 class="titulo">PEDIDOS PENDENTES</h1>
					<div class="base-lista">
						<table cellpadding="0" cellspacing="0">
							<thead>
								<tr>
									<th align="left">Data</th>
									<th align="left">Descrição</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
								</tr>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
								</tr>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
								</tr>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
								</tr>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
								</tr>								
							</tbody>
						</table>	
					</div>
					</div>
				</div>
		</div>
		
		<div class="rows controles">
			<div class="caixa">
				<h1 class="titulo">Controles</h1>
				<div class="lista-controle">
					<table cellpadding="0" cellspacing="0">
							<tbody>
								<tr>
									<td align="left">Pagamento do kit minnie mouse</td>
									<td align="left" width="60%"><progress value="35" max="100" class="lilas"></progress></td>
									<td align="center" width="10%"><b>35%</b></td>
								</tr>
								<tr>
									<td align="left">Pagamento do kit minnie mouse</td>
									<td align="left"><progress value="45" max="100" class="azul"></progress></td>
									<td align="center"><b>45%</b></td>
								</tr>
								<tr>
									<td align="left">Pagamento do kit minnie mouse</td>
									<td align="left"><progress value="65" max="100" class="verde"></progress></td>
									<td align="center"><b>65%</b></td>
								</tr>
								<tr>
									<td align="left">Pagamento do kit minnie mouse</td>
									<td align="left"><progress value="75" max="100" class="laranja"></progress></td>
									<td align="center"><b>75%</b></td>
								</tr>							
							</tbody>
						</table>	
				</div>
			</div>
		</div>
		
		<div class="rows lista">
			<div class="cel4">				
					<div class="caixa">
					<h1 class="titulo">PEDIDOS PENDENTES</h1>
					<div class="base-lista">
						<table cellpadding="0" cellspacing="0">
							<thead>
								<tr>
									<th align="left">Data</th>
									<th align="left">Descrição</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
								</tr>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
								</tr>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
								</tr>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
								</tr>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
								</tr>								
							</tbody>
						</table>	
					</div>
					</div>
			</div>
			<div class="cel4">				
					<div class="caixa">
					<h1 class="titulo">PEDIDOS finalizados</h1>
					<div class="base-lista">
						<table cellpadding="0" cellspacing="0">
							<thead>
								<tr>
									<th align="left">Data</th>
									<th align="left">Descrição</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
								</tr>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
								</tr>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
								</tr>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
								</tr>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
								</tr>								
							</tbody>
						</table>	
					</div>
					</div>
			</div>
			<div class="cel4">				
					<div class="caixa">
					<h1 class="titulo">PEDIDOS PENDENTES</h1>
					<div class="base-lista">
						<table cellpadding="0" cellspacing="0">
							<thead>
								<tr>
									<th align="left">Data</th>
									<th align="left">Descrição</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
								</tr>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
								</tr>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
								</tr>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
								</tr>
								<tr>
									<td align="left">19/05/17</td>
									<td align="left">Pagamento do kit minnie mouse</td>
								</tr>								
							</tbody>
						</table>	
					</div>
					</div>
			</div>
			
		</div>
		
	</div>
	
	<div class="base-rodape">
	<div class="conteudo">
			<p>Direitos reservados mjailton.com.br</p>
	</div>
	</div>	
</div> 
	</div>
</div>
</body>
</html>
