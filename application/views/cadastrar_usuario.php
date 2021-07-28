<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar conta</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?= base_url('../css/cadastrarUsuario.css'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" type="image/png" href="<?= base_url('../img/logo.png'); ?>"/>

</head>
<body class="banner">


<section class="corpo">
  <div class="imgcontainer">
    <img src="<?= base_url('../img/cadeado.png'); ?>" alt="Avatar" class="avatar">

  </div>

  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Digite seu Email" name="Email" required>

    <label for="psw"><b>Senha</b></label>
    <input type="password" placeholder="Digite sua senha" name="psw" required>

    <label for="psw"><b>Confirmar Senha</b></label>
    <input type="password" placeholder="Digite a senha novamente" name="psw" required>
  
   <a href="<?= base_url('Login/index'); ?>"> <button style=" background:#990000; position: relative; left: 30px;" class="button"  type="submit">Voltar</button></a><a href="<?= base_url('Login/conteudo'); ?>"><button class="button" type="submit">Confirmar</button></a>
</section>
</body>
</html>