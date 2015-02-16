<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Milano Shoe Collection | Celebrities' Favorite Shoes</title>
    <meta name="description" content="Minalo is established in 2005. Our mission is to make high-quality shoes that satisfy every girl's fashion dream. Our shoes have been seen worn by many hollywood celebrities.">
    <link href="styles/styles.css" rel="stylesheet">
    <?php echo $cssInclude ?>
    <script src="//use.typekit.net/lzv5bcb.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>

    <header class="header">

        <div class="container clearfix">

            <div class="branding">

                <div class="logo-image">
                    <a href="index.php"><img src="img/logo-image.png" alt="Minalo is the leading high-end women shoe store"></a>
                </div>

                <div class="logo-text">
                    <a href="index.php"><img src="img/logo-text.png" alt="Minalo is the leading high-end women shoe store"></a>
                </div>

            </div> <!-- end branding -->

            <nav class="primary-nav">

                <ul>
                    <li class="primary-nav__item">
                        <a class="triangle" href="product.php">Collections</a>
                        <ul class="secondary-nav">
                            <li class="secondary-nav__item"><a href="#">New Arrival</a></li>
                            <li class="secondary-nav__item"><a href="#">Louboutin</a></li>
                            <li class="secondary-nav__item"><a href="product.php">Valentino</a></li>
                            <li class="secondary-nav__item"><a href="#">jimmy choo</a></li>
                            <li class="secondary-nav__item"><a href="#">Gucci</a></li>
                        </ul>
                    </li>
                    <li class="primary-nav__item"><a href="">About</a></li>
                    <li class="primary-nav__item"><a href="">Service</a></li>
                    <li class="primary-nav__item"><a href="">Contact</a></li>
                </ul>
            </nav> <!-- end primary-nav -->

            <div class="nav-member-area clearfix">

                <div class="cart">
                    <span>Cart</span>
                </div>

                <div class="sign-in">
                    <span><a href="#">Sign In</a></span>
                    <span><a href="#">Register</a></span>
                </div>

                <div class="search">
                    <form id="search-box" method="post" action="http://www.google.com">
                        <input class="search-input" type="text" size="15" maxlength="120">
                        <input class="button search-button" type="submit" value="Search">
                    </form>
                </div>

            </div> <!-- end nav-member-area -->
        </div> <!-- end container -->

    </header>
