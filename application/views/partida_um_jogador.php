<!DOCTYPE html>
<html>
<head>
  <title>Tela de Partida</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../css/partida.css'); ?>">
    <link rel="icon" type="image/png" href="<?= base_url('../img/logo.png'); ?>"/>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body class="banner">


<!-- posições do jogo -->
  <div id="myBtn">

    <span id="inicio" class="a" style="width: 380px;"><b>Inicio</b></span><span id="um" class="a"><b>1</b></span><span id="dois" class="a"><b>2</b></span><span id="tres" class="a"><b>3</b></span><span id="quatro" class="a"><b>4</b></span><span id="cinco" class="a"><b>5</b></span>

  
    <span id="seis" class="b"><strong>6</strong></span><span id="sete" class="b"><strong>7</strong></span><span id="oito" class="b"><strong>8</strong></span>

    <span id="chegada" class="c" style="width: 380px;"><b>Chegada</b></span><span id="treze" class="c"><b>13</b></span><span id="doze" class="c"><b>12</b></span><span id="onze" class="c"><b>11</b></span><span id="dez" class="c"><b>10</b></span><span id="nove" class="c"><b>9</b></span>

 
  </div>
<!-- final  posições do jogo --> 


<!-- perfil do jogador -->
    <div class="card">
      <div class="jogador">

        <h2>Jogador 1</h2>
          <img src="<?= base_url('../img/perfi.jpeg'); ?>" alt="Avatar" style="width: 35%; border-radius: 50%;">
            <h3 id="pontos"></h3>

      </div>
    </div>
<!-- final  perfil do jogador -->


<!-- dado do jogo -->
      <div class="card_1">
       <div class="containe">
         <img class="dado" id="face" src="" alt="">
         </br>

         <button onclick="sortear()"  id="proxima"  class="rodar">Sortear posição</button>

      </div>
    </div>

<!-- final dado do jogo -->

    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
       <span class="close">&times;</span>


       <h2><?= $dados['fase'] .") ".$dados['registros']->pergunta?></h2>


    <?php $ans_array = array($dados['registros']->errada1, $dados['registros']->resposta);
         shuffle($ans_array); 

          for ($i=0; $i < count($ans_array); $i++) { 
           ?>
     
                <label class="container">
                <input  class="respostasOptions" id="Resposta_<?= $i ?> "  type="radio" name="respostas" value="<?=$ans_array[$i] ?>"><?=$ans_array[$i] ?> 
            <span class="checkmark"></span>
            </label>
        <?php  } ?>
           
 </br>
    <button style="position: relative; height: 60px;" id="ModalRes" class="confirmar">Confirmar</button>

  </div>

</div>

<!-- The Modal -->
<div id="ok" class="moda">

  <!-- Modal content -->
  <div id="area" class="modal-content-area">
    <span class="fechar"></span>
    <p class="msg" id="msg"></p>
    <a id="proxim"  href=<?= base_url("/Login/getResultado/".(intval($dados['fase'])+1)); ?> ><button  class="ok">Ok</button></a>
     <a id="terminar"  href=<?= base_url("/Login/getResultado/".(intval($dados['fase'])+13)); ?> ><button  class="ok">Ok</button></a>
  </div>

</div>


<script>
// Get the modal
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];



var ok = document.getElementById("ModalRes");
var fechar = document.getElementsByClassName("fechar")[0];
var moda = document.getElementById("ok");
var msg = document.getElementById("msg");
var area = document.getElementById("area");


var respostas = document.querySelectorAll('.respostasOptions');

var proxim = document.getElementById("proxim");
var terminar = document.getElementById("terminar");
terminar.style.display = "none";



var pontos = document.getElementById("pontos");

sorteio = 0;

var proxima = document.getElementById("proxima");

function sortear(sortear){
  sorteio = Math.floor(Math.random() * 3 + 1);

  switch(sorteio){
  case 1: 
     document.getElementById("face").src = "<?= base_url('../img/face1.png'); ?>";
     break;

     case 2: 
     document.getElementById("face").src = "<?= base_url('../img/face2.png'); ?>";
     break;

     case 3: 
     document.getElementById("face").src = "<?= base_url('../img/face3.png'); ?>";
     break;

     default:
     //condição de erro

     break;
}
}



var um = document.getElementById("um");
var dois = document.getElementById("dois");
var tres = document.getElementById("tres");
var quatro = document.getElementById("quatro");
var cinco = document.getElementById("cinco");
var seis = document.getElementById("seis");
var sete = document.getElementById("sete");
var oito = document.getElementById("oito");
var nove = document.getElementById("nove");
var dez = document.getElementById("dez");
var onze = document.getElementById("onze");
var doze = document.getElementById("doze");
var treze = document.getElementById("treze");
var chegada = document.getElementById("chegada");
var inicio = document.getElementById("inicio");

pontos.textContent = "Pontos: "+ localStorage.sorteio;




if ( localStorage.sorteio == 0){
  inicio.style.background = "#00ace6";
}
else if (localStorage.sorteio == 1){
  um.style.background = "#00ace6";
}
else if (localStorage.sorteio == 2){
  dois.style.background = "#00ace6";
}
else if (localStorage.sorteio == 3){
  tres.style.background = "#00ace6";
}
else if (localStorage.sorteio == 4){
  quatro.style.background = "#00ace6";
}
else if (localStorage.sorteio == 5){
  cinco.style.background = "#00ace6";
}
else if (localStorage.sorteio == 6){
  seis.style.background = "#00ace6";
}
else if (localStorage.sorteio == 7){
  sete.style.background = "#00ace6";
}
else if (localStorage.sorteio == 8){
  oito.style.background = "#00ace6";
}
else if (localStorage.sorteio == 9){
  nove.style.background = "#00ace6";
}
else if (localStorage.sorteio == 10){
  dez.style.background = "#00ace6";
}
else if (localStorage.sorteio == 11){
  onze.style.background = "#00ace6";
}
else if (localStorage.sorteio == 12){
  doze.style.background = "#00ace6";
}
else if (localStorage.sorteio == 13){
  treze.style.background = "#00ace6";
}else{
  chegada.style.background = '#00ace6';
}



    ok.addEventListener("click", function() {
        moda.style.display = "block";


        for(let i = 0; i < respostas.length; i++){
            let resp = "<?php echo $dados['registros']->resposta; ?>";

            if(respostas[i].value == resp && respostas[i].checked==true ){

                 msg.innerHTML = "Resposta correta";
                 area.style.background = '#00e64d';

                 localStorage.sorteio = parseInt(localStorage.sorteio)+sorteio;
                
  
                 var storageAcerto = parseInt(localStorage.acerto)+1;

                 localStorage.setItem('acerto', storageAcerto);

                 if (localStorage.sorteio >= 14) {

                  proxim.style.display = "none";
                  terminar.style.display = "block";

                 }
            }
            else if(respostas[i].value == resp){
              msg.innerHTML = "Resposta errada";
              area.style.background = '#ff6666';

                if (localStorage.sorteio >= 14) {

                  proxim.style.display = "none";
                  terminar.style.display = "block";

                 }
            }

        }
    });

  
// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
fechar.onclick = function() {
  moda.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(vent) {
  if (event.target == moda) {
    moda.style.display = "none";
  }
}
</script>
</body>
</html>