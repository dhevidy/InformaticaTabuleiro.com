<!DOCTYPE html>
<html>
<head>
	<title>Escolha o conteudo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?= base_url('../css/conteudo.css'); ?>">
	 <link rel="icon" type="image/png" href="<?= base_url('../img/logo.png'); ?>"/>

	
</head>
<body class="banner">

<h1>Conteúdos</h1>

	<div style="position: relative; margin-left: 60px;" >
	<a href="<?= base_url('Login/atividade'); ?>"><button onmouseenter="entreNoElemento()">Evolução dos compu.</button></a>
	<a href="<?= base_url('Login/atividade'); ?>"><button onmouseenter="entreNoElemento2()">Software</button></a>
	<a href="<?= base_url('Login/atividade'); ?>"><button onmouseenter="entreNoElemento3()">Hardware</button></a>
	<a href="<?= base_url('Login/atividade'); ?>"><button onmouseenter="entreNoElemento4()">Nº Binários</button></a>
	</div>

	<div id="evolucao">
		<span class="text">Vamos aprender agora fatos históricos sobre os computadores. Abordando curiosidades interessantes sobre este conteúdo... Confio em sua capacidade para finalizar essa fase do jogo. Boa sorte querido aluno!
	</span><span class="img"><img src="<?= base_url('../img/compu.jpeg'); ?>" style="width: 130%;"></span>

	</div>

	<div id="Software">
		<span class="text">O conteudo de software é algo bem legal de aprender, você pode treinar seus conhecimento, através deste jogo do tabuleiro, fico feliz por sua vista neste assunto, Vai lá... Boa sorte!
	</span>
	<span class="img"><img src="<?= base_url('../img/soft.png'); ?>" style="width: 34%; position: relative; margin-left: 30rem; bottom: 100px; "></span>

	</div>

	<div id="hardware">
		<span class="text">Essa fase promete ser ainda mais desafiadora que a outra, vamos aprender sobre cada componente do computador e quais suas funções para o desempenho do computador. Boa sorte querido aluno!
	</span><span class="img"><img src="<?= base_url('../img/hardware.jpg'); ?>" style="width: 38%; position: relative; margin-left: 25rem; bottom: 100px;"></span>

	</div>
	<div id="binario">
		<span class="text"> Numeros binário são bem complicados, mas vamos fazer perguntas pertinetes sobre este conteudo, fico feliz em ver você treinando este assunto! Boa sorte querido aluno.
	</span>
	<span class="img"><img src="<?= base_url('../img/binario.jpg'); ?>" style="width: 20%; position: relative; left: 17rem; bottom: 90px; "></span>

	</div>
<script>

	var evolucao = document.getElementById("evolucao");
	var Software = document.getElementById("Software");
	var hardware = document.getElementById("hardware");
	var binario = document.getElementById("binario");

	
	localStorage.setItem('acerto', 0);
	localStorage.setItem('sorteio', 0);

	Software.style.display = 'none';
	hardware.style.display = 'none';
	binario.style.display = 'none'

	function entreNoElemento(){
		 evolucao.style.display = 'block';
		 Software.style.display = 'none';
		 hardware.style.display = 'none';
		 binario.style.display = 'none';
	}
	function entreNoElemento2(){
		 evolucao.style.display = 'none';
		 Software.style.display = 'block';
		 hardware.style.display = 'none';
		 binario.style.display = 'none';
	}
	function entreNoElemento3(){
		 evolucao.style.display = 'none';
		 Software.style.display = 'none';
		 hardware.style.display = 'block';
		 binario.style.display = 'none';
	}
	function entreNoElemento4(){
		 evolucao.style.display = 'none';
		 Software.style.display = 'none';
		 hardware.style.display = 'none';
		 binario.style.display = 'block';
	}

</script>
</body>
</html>