<!doctype html>
<html lang="fr">
<?php
	/* on inclut le fichier de connexion à la base de données */
	include_once('BDD/connectBdd.php'); 

	/* on inclut le routeur */
	include('routes.php'); 
?>

	<head>
		<!-- Balises meta -->
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<meta name="author" content="Retro-Gaming" />
			<meta name="language" content="fr">
			<meta name="revisit-after" content="7 days">
			<meta name="robots" content="index,follow,all" />
			<meta name="keywords" content="<?php echo $keywords; ?>" />
			<meta name="description" content="<?php echo $description; ?>" />
		<!-- fin balises meta -->

		<!-- Balise title -->
			<title><?php echo $title; ?></title>
		<!-- fin balise title -->

		<!-- Déclaration des favicons -->
			<link rel="shortcut icon" href="template-css/favicon.svg" />
		<!-- fin déclaration des favicons -->

		<!-- feuilles de style, favicon et scripts js -->
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

			<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
			<!-- documentation de materiel icons : https://developers.google.com/fonts/docs/material_symbols?hl=fr -->

			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@700&display=swap" rel="stylesheet"> 
			
			<link rel="stylesheet" href="template-css/style.css" media="screen" />
		<!-- fin feuilles de style, favicon et scripts js -->

	</head>

	<body>

		<!-- Bandeau en haut -->
		<header class="bg-dark text-dark p-4 bandeau-container sticky-top">
			<div class="banner">
				<?php include('bandeau.php'); ?>
			</div>
			<nav class="navbar navbar-expand-lg">
				<div class="container-fluid">
					<?php include('menu.php'); ?>
				</div>
			</nav>
		</header>
		<!-- fin bandeau en haut -->


		<div class="container">
			<!-- Contenu principal -->
			<section>
				<?php include($affiche); ?>
			</section>	
			<!-- fin contenu principal -->
		</div>
	
		<!-- Pied de page -->
		<footer class="bg-dark text-light p-2 fixed-bottom" style="opacity: 0.8;">
			<div class="d-flex flex-column flex-sm-row justify-content-between  border-top">
				<?php include('pied_page.php'); ?>
			</div>
		</footer>
		
		<!-- fin pied de page -->
	</body>
</html>