
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title> mjailton loja virtual</title>
  	
  	<link  rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style.css">
        <link  rel="stylesheet" href="css/grade.css">		
        
        <script type="text/javascript" src="<?php echo URL_BASE ?>assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo URL_BASE ?>assets/js/js.js"></script>
		
			
       
</head>
<body class="base-login">
		<div class="caixa-login">
			<h1>Logar</h1>
                        <form method="POST" action="<?php echo URL_BASE . "login" ?>">
                            <label><span>Email</span><input type="text" name="txt_email" placeholder="insira seu email"></label>
                            <label><span>Senha</span><input type="password" name="txt_senha" placeholder="insira sua senha"></label>
				<input type="submit" value="entrar" class="btn"> 
                                <p><?php echo $erro ?></p>
			</form>
		</div>
</body>
</html>