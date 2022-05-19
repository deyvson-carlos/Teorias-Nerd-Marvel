<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="sortcut icon" href="../imagens/pagina/eu001.png" type="image/x-icon"/>

		<script src="jogo.js"></script>
		<script type="text/javascript" src="<?php echo asset('js/gamer.js')?>"></script>

	</head>
	<body onresize="ajustaTamanhoPalcoJogo()">

		<div class="painel">
			<div class="vidas">
				<img id="v1" src="../imagens/gamer/coracao_cheio.png" />
				<img id="v2" src="../imagens/gamer/coracao_cheio.png" />
				<img id="v3" src="../imagens/gamer/coracao_cheio.png" />
				<img id="v4" src="../imagens/gamer/coracao_cheio.png" />
				<img id="v5" src="../imagens/gamer/coracao_cheio.png" />
				
			</div>

			<div class="cronometro">Tempo restante: <span id="cronometro"></span></div>
		</div>

		<script>
			document.getElementById('cronometro').innerHTML = tempo

			var criaMosca = setInterval(function() { 
				posicaoRandomica()
			}, criaMosquitoTempo);
		</script>
	</body>
</html>

<!-- css -->

<style>
	body {
	background-image: url(../imagens/gamer/New_York_\(5\).png);
	background-repeat: no-repeat;
	background-size: 100%;
}

.mosquito1 {
	width: 90px;
	height: 90px;
}

.mosquito2 {
	width: 120px;
	height: 120px;
}

.mosquito3 {
	width: 150px;
	height: 150px;
}

.ladoA {
	transform: scaleX(1);
}

.ladoB {
	transform: scaleX(-1);
}

.painel {
	position: absolute;
	width: 190px;
	padding: 10px;
	left: 0px;
	bottom: 0px;
	border-top:solid 1px #fff;
	background-color: #fff;
	opacity: 0.7
}

.vidas {
	float: left;
}

.cronometro {
	float: left;
	font-size: 20px;
	font-weight: bold;
}

body{ cursor: url("../imagens/gamer/teia.cur"),default; }
</style>