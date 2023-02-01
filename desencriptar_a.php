<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Deber2_Encriptar y Desencriptar</title>
	<link rel="stylesheet" href="./estilos.css">
	<link rel="shortcut icon" href="./Imagenes/candado.png">
	<script type="text/javascript" src="script.js"></script>
	<style>
		pre {
			overflow-x: auto;
			white-space: pre-wrap
		}
	</style>
</head>

<body>
	<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
		<div class="navbar-brand">
			<a class="navbar-item">
				<img alt="" 
					src="Imagenes/candado.png"
					style="max-height: 80px" />
			</a>
			<button class="navbar-burger is-warning button" aria-label="menu" aria-expanded="false"
				data-target="navbarBasicExample">
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
			</button>
		</div>
		<div class="navbar-menu">
			<div class="navbar-start">
				<a class="navbar-item" href="cadenas.html">
					Trabajar Con Cadenas
				  </a>
			
				  <a class="navbar-item" href="archivos.html">
					Trabajar Con Archivos
				  </a>
			</div>

			<div class="navbar-end">
				<a class="navbar-item">
					Deber Cifrado AES - Jean Játiva
				  </a>
			</div>
		</div>
	</nav>

    <?php
        require 'lib/aes.php';
        require 'lib/aesctr.php';

        $key = $_POST['kunci'];
        $namaFile = file_get_contents($_FILES['doc']['tmp_name']);
        $encFile = AesCtr::decrypt($namaFile,$key,128);
        $enkrip = file_put_contents("dekrip/".($_FILES['doc']['name']), $encFile);

        if ($enkrip) {
	        echo "<center>";
            echo "El Archivo Fue Desencriptado. Revise su carpeta.";
            echo "</center>";
        }
    ?>

	<img alt=""src="Imagenes/spider.jpg" />
	
</body>
</html>