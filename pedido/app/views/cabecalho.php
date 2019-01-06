	<div class="base-topo">
		<div class="conteudo">
			<h1 class="logo">
				<span class="icone menucat menu-anchor">Menu</span>		
				<a href="<?php echo URL_BASE . "pedido" ?>"> ERP WEB</a>						
			
			 </h1>
			<ul class="menu-topo">
				<li><a href="#"><?php echo $_SESSION["clienteLogado"]->cliente ?></a></li>
				<li><a href="<?php echo URL_BASE . "login/logoff" ?>">Sair</a></li>
			</ul>
		</div>
		
</div>	
