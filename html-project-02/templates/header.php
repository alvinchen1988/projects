<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home - Mr.Choi Patisserie</title>
	<link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="styles/fotorama.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,700,800,400,600' rel='stylesheet' type='text/css'>

</head>

<body>
	<header class="header">
		<div class="container clearfix">
			<div class="logo">
				<a class="logo__link" href="index.php"><img src="images/logo.png" alt="Logo of Mr.Choi. Mr.Choi pattiserie is a french owned pastry store that makes authentic french cakes"></a>
			</div>  <!-- end .logo -->
			<nav class="primary-nav">
			<ul class="primary-nav__list">
				<li class="primary-nav__item"><a class="primary-nav__link <?php echo $linkActive[0] ?>" href="cakes.php">cakes</a></li>
				<li class="primary-nav__item"><a class="primary-nav__link" href="#">enterprise</a></li>
				<li class="primary-nav__item"><a class="primary-nav__link <?php echo $linkActive[1] ?>" href="about.php">about</a></li>
				<li class="primary-nav__item"><a class="primary-nav__link" href="#">contact</a></li>
			</ul>
			</nav>  <!-- end primary-nav -->
		</div>   <!-- end container -->
	</header>  <!-- end header -->