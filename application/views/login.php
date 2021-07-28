<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?= base_url('../css/Login.css'); ?>">
   <link rel="icon" type="image/png" href="<?= base_url('../img/logo.png'); ?>"/>

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="banner">


<section class="corpo">

	
  <div class="imgcontainer">
    <img src="<?= base_url('../img/cadeado2.png'); ?>" alt="Avatar" class="avatar">

  </div>

  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Digite seu Email" name="Email" required>

    <label for="psw"><b>Senha</b></label>
    <input type="password" placeholder="Digite sua senha" name="psw" required>

    <p>Esqueceu a senha? <a href="<?= base_url('Login/cadastro'); ?>">Criar conta!</a></p>
        
       <a href="<?= base_url('Login/conteudo'); ?>"><button type="submit">Entrar</button></a> 
    
</section>
</body>
</html>