<?php
	// error_reporting(0);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <title>Rand - Random</title>
  </head>
  <body>
    <h1 class="text-center font-weight-bold text-monospace" style="background: -webkit-linear-gradient(blue, red);-webkit-background-clip: text; -webkit-text-fill-color: transparent; font-size: 30px;">Aşağıda seçilən 1-ci və 2-ci ədəd arasından sizə random olaraq 1 ədəd seçiləcək. Nəticə bu 2 ədədin fərqinin 50%-nə bərabər və ya ondan böyük olarsa, uduş qazanacaqsınız. Uğurlar!</h1><br>

    <form class="form-inline" method="get">
    	<div class="container">
    		<div class="row">

    			<div class="col">
    				<div class="form-group">
    					<label for="first"><i><b>Birinci ədəd:&nbsp;</b></i></label>
    					<input type="number" class="form-control" name="first" id="first" style="width:100%;" placeholder="">
    				</div>
    			</div>

    			<div class="col">
    				<div class="form-group">
    					<label for="second"><i><b>İkinci ədəd:&nbsp;</b></i></label>
    					<input type="number" class="form-control" name="second" id="second" style="width:100%;" placeholder="">
    				</div>
    			</div>

    		</div>
    			<button type="submit" class="btn btn-primary btn-block mt-2">Göstər</button>
    </form>


<div style="margin-top:20px; margin-bottom: 20px; font-size: 50px;">
<?php
	$rand = rand($_GET['first'],$_GET['second']);

	if ($_GET['first'] > $_GET['second']) {
		$checker = $_GET['first'] - $_GET['second'];
	} elseif ($_GET['first'] < $_GET['second']) {
		$checker = $_GET['second'] - $_GET['first'];
	}

	$result = $checker / 2;

	if ($rand>=$result) {
		echo "<p class='text-center font-weight-bold text-monospace' style='color: #28A745;'>";
		echo $rand."<br>";
		echo "Təbriklər! Uduş qazandınız!<br><i class='far fa-smile'></i>";
		echo "</p>";
	} else {
		echo "<p class='text-center font-weight-bold text-monospace' style='color: #DC3545;'>";
		echo $rand."<br>";
		echo "Uduş qazanmadınız! Bir daha cəhd edin!<br><i class='far fa-frown'></i>";
		echo "</p>";
	}
?>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>