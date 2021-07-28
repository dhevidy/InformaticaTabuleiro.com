<!DOCTYPE html>
<html>
<head>
	<title>Qts - jogadores</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?= base_url('../css/jogadores.css'); ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="icon" type="image/png" href="<?= base_url('../img/logo.png'); ?>"/>

</head>
<body class="banner">

<section style="padding: 60px 0px; margin-bottom: 60px; height: 550px; " class="corpo">

	<h2>Escolha o número de jogadores</h2>

<div class="container">
  <div class="row">
    <div class="col">
      <img src="<?= base_url('../img/jogador.jpg'); ?>" width="25%">
      
      <p><button type="button" class="btn btn-success">Um jogador</button></p>
    </div>
    <div class="col">
      <img src="<?= base_url('../img/jogador.jpg'); ?>" width="25%">
      <img src="<?= base_url('../img/avatar.jpg'); ?>" width="25%">
      <p><button type="button" class="btn btn-success" disabled>Dois jogadores</button></p>
    </div>
  </div>
</div>

<a href="<?= base_url('Login/atividade'); ?>"><button style=" background: #004d99; position: relative;  left: 28rem; height: 50px; width: 200px; top: 5rem;" type="button" class="btn btn-primary"><strong>Confirmar</strong></button></a>
	

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>