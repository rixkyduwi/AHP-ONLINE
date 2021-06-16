<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SPK metode AHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">

</head>

<body>
<header style="background-color: green" >
	<h1 style="justify-content: center; color: white">SPK dengan metode AHP</h1>
            <ul style="color: black;"  class="navlist nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a  style="color: black;" href="index.php" class="nav-link px-3">Home</a></li>
                <li><a   style="color: black;" href="kriteria.php" class="nav-link px-3">Kriteria<br>
				<div class="ui blue tiny label" style="float: center;"><?php echo getJumlahKriteria(); ?></div>
				</a></li>
                <li><a  style="color: black;"  href="alternatif.php" class="nav-link px-3">Alternatif<br>
				<div class="ui blue tiny label" style="float: center;"><?php echo getJumlahAlternatif(); ?></div>
				</a></li>
                <li><a  style="color: black;"   href="bobot_kriteria.php" class="nav-link px-3">Perbandingan Kriteria</a></li>
                <li><a  style="color: black;"   href="bobot.php?c=1" class="nav-link px-3">Perbandingan Alternatif</a></li>
				
					<?php

						if (getJumlahKriteria() > 0) {
							for ($i=0; $i <= (getJumlahKriteria()-1); $i++) { 
								echo "<li><a style='color: black;' class='nav-link px-3' href='bobot.php?c=".($i+1)."'>".getKriteriaNama($i)."</a></li>";
							}
						}

					?>
			
                <li><a  style="color: black;"   href="hasil.php" class="nav-link px-3">Hasil</a></li>
            </ul>
</header>
