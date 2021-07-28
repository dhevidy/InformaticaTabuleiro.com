<!DOCTYPE html>
<html>
<head>
	<title>Resultado da partida</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('../css/premio.css'); ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	 <link rel="icon" type="image/png" href="<?= base_url('../img/logo.png'); ?>"/>

</head>
<body class="banner">

<section class="corpo">

<h2>Parabéns jogador</h2>

<h4>Você acertou: <b id="acerto"></b> </h4>
<h4>Pontuação: <b id="pontos"></b> </h4>

<div class="container">
  <div class="row">
    <div class="col">
      <img src="<?= base_url('../img/jogador.jpg'); ?>" width="15%">
    </div>
  </div>
</div>

<a href="<?= base_url('Login/conteudo/'); ?>"><button style=" background: #004d99; position: relative;  left: 28.5rem; height: 50px; width: 200px; " type="button" class="btn btn-primary"><strong>Tenter novamente</strong></button></a>
	

</section>

<script>

	var calcularAcerto = document.getElementById('acerto');
	var porce = document.getElementById('porce');
	var calcularpontos = document.getElementById('pontos');

	calcularpontos.textContent = localStorage.sorteio+ ' pontos';
	calcularAcerto.textContent = localStorage.acerto + ' Questões';
	
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>