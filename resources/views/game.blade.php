<!DOCTYPE html>
<html>
	<head>
		<title></title>
    <meta charset="UTF-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="sortcut icon" href="../imagens/pagina/eu001.png" type="image/x-icon"/>

		<link rel="stylesheet" type="text/css" href="style.css" />

    <script>
      function iniciarJogo() {
        var nivel = document.getElementById('nivel').value

        if(nivel === '') {
          alert('Selecione um nível para iniciar o jogo')
          return false
        }

        window.location.href = 'game go?' + nivel

      }
    </script>
	</head>
	<body>
	
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="d-flex justify-content-center">
						<img src="../imagens/gamer/game.png" />
					</div>
				</div>
			</div>

      <div class="row">
				<div class="col">
					<div class="d-flex justify-content-center">
            <div class="mb-2">
              <select class="form-control" id="nivel">
                <option value="">-- Selecione o nível --</option>
                <option value="Fácil">Fácil</option>
                <option value="Normal">Normal</option>
                <option value="Difícil">Difícil</option>
              </select>
            </div>
          </div>
        </div>
      </div>

			<div class="row">
				<div class="col">
					<div class="d-flex justify-content-center">
						<button type="button" class="btn btn-danger btn-lg" onclick="iniciarJogo()">Iniciar Jogo</button>
					</div>
				</div>
			</div>
		</div>

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

body{ cursor: url("imagens/teia.cur"),default }
</style>