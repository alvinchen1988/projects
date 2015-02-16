<?php
$cssInclude= '';
$jsInclude = '';
include('./templates/header.php')
?>

<main class="container container-body clearfix">

    <section class="shoe-content clearfix">

        <div class="banner shoe-single">

        </div> <!-- end banner -->

        <div class="breadcrumb">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Valentino</a></li>
                <li><a href="product.php">High Heels</a></li>
                <li><a href="#">Rockstud Ankle Strap</a></li>
            </ul>
        </div> <!-- end breadcrumb -->

        <div class="shoe-gallery">
            <div class="shoe-large">
                <img src="img/valentino-4-1.jpg" alt="Rockstud Ankle Strap">
            </div>
            <div class="shoe-gallery__item">
                <a href="img/valentino-4-1.jpg" target="_blank">
                    <img src="img/valentino-4-thumb1.jpg" alt="Rockstud Ankle Strap-rightside-angle">
                </a>
            </div>
            <div class="shoe-gallery__item">
                <a href="img/valentino-4-2.jpg" target="_blank">
                    <img src="img/valentino-4-thumb2.jpg" alt="Rockstud Ankle Strap-backside-angle">
                </a>
            </div>
            <div class="shoe-gallery__item">
                <a href="img/valentino-4-4.jpg" target="_blank">
                    <img src="img/valentino-4-thumb4.jpg" alt="Rockstud Ankle Strap-left-side-angle">
                </a>
            </div>
            <div class="shoe-gallery__item">
                <a href="img/valentino-4-3.jpg" target="_blank">
                    <img src="img/valentino-4-thumb3.jpg" alt="Rockstud Ankle Strap-front-angle">
                </a>
            </div>
        </div> <!-- end shoe-gallery -->

        <div class="shoe-info">

            <div class="tab-container">
                <div class="tab-nav">
                    <ul>
                        <li><a class="active" href="#tab-01-content">Specs</a></li>
                        <li><a href="#tab-02-content">Designer</a></li>
                        <li><a href="#tab-03-content">Size Info</a></li>
                    </ul>
                </div> <!-- end tab-nav -->
                <div class="tab-contents">
                    <div id="tab-01-content" class="tab-content tab-01-content">
                        <h2>Rockstud Ankle Strap</h2>
                        <h3>HWS00393-AVLP03 G28</h3>
                        <p>Valentino Garavani Rockstud ankle strap in multicolor soft calfskin leather. Platinum finishing studs detail. Adjustable napa leather strap. Heel 100 mm/4''.
                        Made in Italy.</p>
                    </div> <!-- end tab-01-content -->

                    <div id="tab-02-content" class="tab-content tab-02-content">
                        <p>Born and raised in Vancouver, Canada, Fluevog spent much of his youth at his father's drive-in ice cream parlour. During this time, he developed a passion for cars, which in turn has provided inspiration for many of his shoe designs. As his company's website declares, "When he's drawing a shoe, he's thinking about a car and, when he's drawing a car, he's thinking about a shoe".After spending a summer hitchhiking the west coast, Fluevog returned to Vancouver and began working for Sheppard's Shoes. In 1970, he joined forces with fellow co-worker Peter Fox to start their own shoestore in Vancouver's Gastown. The partnership, known as "Fox and Fluevog", lasted over ten years before the two split amicably in 1981. In 1985, Fluevog opened his own store in Seattle, financed in part by the sale of his car.</p>
                    </div> <!-- end tab-02-content -->

                    <div id="tab-03-content" class="tab-content tab-03-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam excepturi, id, quas consequatur quidem earum unde voluptas nesciunt vel dolore sequi quod saepe esse voluptates illum velit. Sunt odio, temporibus beatae, provident eum vel consequuntur. Placeat magnam voluptatum, eaque quos blanditiis temporibus molestias eos accusamus aliquam, repellat nesciunt nobis illo.</p>
                    </div> <!-- end tab-03-content -->

                </div> <!-- end tab-content -->
            </div> <!-- end tab-container -->

            <div class="price">
                <p><span>Price: CDN</span> $1095.00</p>
            </div>

            <div class="quantity">
                <label for="shoe-quantity">Quantity:</label>
                <input type="number" id="shoe-quantity" value="1" min="0" max="99" width="10px">
            </div>

            <div class="reviews">
                <span>★★★★★</span>
                <span>Write Your Review</span>
            </div>

            <div class="social-sharing">
                <span>Spread your love</span>
                <img src="img/facebook-icon2.jpg" alt="">
                <img src="img/twitter-icon2.jpg" alt="">
                <img src="img/instagram-icon2.jpg" alt="">
            </div>

            <div class="size">
                <span>Size:</span>
                <span>5</span>
                <span>5½</span>
                <span>6</span>
                <span>6½</span>
                <span>7</span>
                <span>7½</span>
                <span>8</span>
                <span>8½</span>
                <span>9</span>
                <span>9½</span>
                <span>10</span>
                <span>10½</span>
                <span>11</span>
            </div>

            <div class="check-out">
                <button class="button" type="button">Checkout</button>
            </div>

            <div class="add-cart">
                <button class="button" type="button">Add To Cart</button>
            </div>

        </div> <!-- end shoe-info -->

    </section>

    <section class="sidebar">
        <div class="brand-list">
            <ul>

                <li class="brand-list__item"><a href="#">New Arrivals</a>
                    <ul>
                        <li class="brand-list__item-secondary"><a href="#">Heels</a></li>
                        <li class="brand-list__item-secondary"><a href="#">Boots</a></li>
                        <li class="brand-list__item-secondary"><a href="#">Sandles</a></li>
                        <li class="brand-list__item-secondary"><a href="#">Flats</a></li>
                    </ul>
                </li>

                <li class="brand-list__item"><a href="#">Louboutin</a>
                    <ul>
                        <li class="brand-list__item-secondary"><a href="#">High Heels</a></li>
                        <li class="brand-list__item-secondary"><a href="#">Boots</a></li>
                        <li class="brand-list__item-secondary"><a href="#">Sandles</a></li>
                        <li class="brand-list__item-secondary"><a href="#">Flats</a></li>
                    </ul>
                </li>

                <li class="brand-list__item"><a href="#">Valentino</a>
                    <ul>
                        <li class="brand-list__item-secondary"><a href="product.php">High Heels</a></li>
                        <li class="brand-list__item-secondary"><a href="#">Boots</a></li>
                        <li class="brand-list__item-secondary"><a href="#">Sandles</a></li>
                        <li class="brand-list__item-secondary"><a href="#">Flats</a></li>
                    </ul>
                </li>

                <li class="brand-list__item"><a href="#">Jimmy Choo</a>
                    <ul>
                        <li class="brand-list__item-secondary"><a href="#">High Heels</a></li>
                        <li class="brand-list__item-secondary"><a href="#">Boots</a></li>
                        <li class="brand-list__item-secondary"><a href="#">Sandles</a></li>
                        <li class="brand-list__item-secondary"><a href="#">Flats</a></li>
                    </ul>
                </li>

                <li class="brand-list__item"><a href="#">Gucci</a>
                    <ul>
                        <li class="brand-list__item-secondary"><a href="#">High Heels</a></li>
                        <li class="brand-list__item-secondary"><a href="#">Boots</a></li>
                        <li class="brand-list__item-secondary"><a href="#">Sandles</a></li>
                        <li class="brand-list__item-secondary"><a href="#">Flats</a></li>
                    </ul>
                </li>
            </ul>
        </div> <!-- end brand-list -->


        <div class="filter">
            <ul>
                <li class="filter__item"><span>Size</span>
                    <ul>
                        <li>
                            <input type="radio" id="size-all" name="size-all" value="size-all">
                            <label for="size-all">All</label>
                        </li>
                        <li>
                            <input type="checkbox" id="size-5" name="size-5" value="5">
                            <label for="size-5">5</label>
                        </li>
                        <li>
                            <input type="checkbox" id="size-5.5" name="size-5.5" value="5.5">
                            <label for="size-5.5">5½</label>
                        </li>
                        <li>
                            <input type="checkbox" id="size-6" name="size-6" value="6">
                            <label for="size-6">6</label>
                        </li>
                        <li>
                            <input type="checkbox" id="size-6.5" name="size-6.5" value="6.5">
                            <label for="size-6.5">6½</label>
                        </li>
                        <li>
                            <input type="checkbox" id="size-7" name="size-7" value="7">
                            <label for="size-7">7</label>
                        </li>
                        <li>
                            <input type="checkbox" id="size-7.5" name="size-7.5" value="7.5">
                            <label for="size-7.5">7½</label>
                        </li>
                        <li>
                            <input type="checkbox" id="size-8" name="size-8" value="8">
                            <label for="size-8">8</label>
                        </li>
                        <li>
                            <input type="checkbox" id="size-8.5" name="size-8.5" value="8.5">
                            <label for="size-8.5">8½</label>
                        </li>
                        <li>
                            <input type="checkbox" id="size-9" name="size-9" value="9">
                            <label for="size-9">9</label>
                        </li>
                        <li>
                            <input type="checkbox" id="size-9.5" name="size-9.5" value="9.5">
                            <label for="size-9.5">9½</label>
                        </li>
                        <li>
                            <input type="checkbox" id="size-10" name="size-10" value="10">
                            <label for="size-9">10</label>
                        </li>
                        <li>
                            <input type="checkbox" id="size-10.5" name="size-10.5" value="10.5">
                            <label for="size-10.5">10½</label>
                        </li>
                        <li>
                            <input type="checkbox" id="size-11" name="size-11" value="11">
                            <label for="size-11">11</label>
                        </li>
                    </ul>
                </li> <!-- end size -->

                <li class="filter__item color-picker"><span>Color</span>
                    <ul>
                        <li>
                            <input type="radio" id="color-all" name="color-all" value="color-all">
                            <label for="color-all">All</label>
                        </li>
                        <li>
                            <input type="checkbox" id="color-black" name="color-black" value="black">
                            <label for="color-black">Black</label>
                        </li>
                        <li>
                            <input type="checkbox" id="color-white" name="color-white" value="white">
                            <label for="color-white">Cream</label>
                        </li>
                        <li>
                            <input type="checkbox" id="color-orange" name="color-orange" value="orange">
                            <label for="color-orange">Orange</label>
                        </li>
                        <li>
                            <input type="checkbox" id="color-red" name="color-red" value="red">
                            <label for="color-red">Red</label>
                        </li>
                        <li>
                            <input type="checkbox" id="color-blue" name="color-blue" value="blue">
                            <label for="color-blue">Blue</label>
                        </li>
                        <li>
                            <input type="checkbox" id="color-brown" name="color-brown" value="brown">
                            <label for="color-brown">Brown</label>
                        </li>
                    </ul>
                </li> <!-- end color-picker -->

                <li class="filter__item"><span>Styles</span>
                    <ul>
                        <li>
                            <input type="radio" id="style-all" name="style-all" value="all">
                            <label for="style-all">All</label>
                        </li>
                        <li>
                            <input type="checkbox" id="style-heels" name="style-heels" value="hells">
                            <label for="style-heels">Hells</label>
                        </li>
                        <li>
                            <input type="checkbox" id="style-boots" name="style-boots" value="boots">
                            <label for="style-boots">Boots</label>
                        </li>
                        <li>
                            <input type="checkbox" id="style-sandles" name="style-sandles" value="sandles">
                            <label for="style-sandles">Sandles</label>
                        </li>
                        <li>
                            <input type="checkbox" id="style-flats" name="style-flats" value="flats">
                            <label for="style-flats">Flats</label>
                        </li>
                    </ul>
                </li> <!-- end styles -->

                <li class="filter__item"><span>Price</span>
                    <ul>
                        <li>
                            <input type="radio" id="price-all" name="price-all" value="price-all">
                            <label for="price-all">All</label>
                        </li>
                        <li>
                            <input type="checkbox" id="price-500" name="price-500" value="500">
                            <label for="price-500">$500 - $999</label>
                        </li>
                        <li>
                            <input type="checkbox" id="price-1000" name="price-1000" value="1000">
                            <label for="price-1000">$1000 - $1499</label>
                        </li>
                        <li>
                            <input type="checkbox" id="price-1500" name="price-1500" value="1500">
                            <label for="price-1500">$1500 - $1999</label>
                        </li>
                        <li>
                            <input type="checkbox" id="price-2000" name="price-2000" value="2000">
                            <label for="price-2000">$2000 - $2499</label>
                        </li>
                    </ul>
                </li> <!-- end price -->

            </ul> <!-- end whole ul -->

            <button  class="button filter__button" type="button">Search</button>
        </div> <!-- end of filter -->

    </section>

</main>

<?php
include('./templates/footer.php')
?>
