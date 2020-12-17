<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Proyecto</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="bg-light">
	<div class="container">
		<div class="row">
			<div class="col">
				<nav class="navbar navbar-light" style="...">
					<div class="container-fluid">
						Empresa
					</div>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col">

				<?php

					echo "<li><a href='index.php?bienvenido'>Inicio</a></li>";

					switch($_SESSION["tipo"]){
						case "profesor":
							echo "Profesor
									<li><a href='#'>Ver Cursos a Cargo</a></li>";
							break;

						case "estudiante":
							echo "Estudiante
									<li><a href='#'>Ver Notas</a></li>
									<li><a href='#'>Matricularse</a></li>";
							break;

						case "administrador":
							echo "Administrador
									<li><a href='index.php?crear-usuarios'>Crear Usuarios</a></li>
									<li><a href='index.php?crear-plan-de-estudios'>Crear plan de estudios</a></li>
									<li><a href='index.php?asignar-cursos'>Asignar cursos</a></li>";

							break;
					}

					echo "<li><a href='logout.php'>Salir</a></li>";
				?>
			</div>
			<div class="col-9">
				