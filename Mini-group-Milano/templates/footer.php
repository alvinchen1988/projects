
	<footer class="footer">
		<div class="container clearfix">

			<nav class="footer-nav">
				<ul>
					<li class="footer-nav__item"><a href="index.php">Home</a></li>
					<li class="footer-nav__item"><a href="product.php">Collections</a></li>
					<li class="footer-nav__item"><a href="#">About</a></li>
					<li class="footer-nav__item"><a href="#">Service</a></li>
					<li class="footer-nav__item"><a href="#">Contact</a></li>
				</ul>
			</nav> <!-- end footer-nav -->

			<div class="customer-service">
				<h1>Customer Service</h1>
				<ul>
					<li><a href="#">Shopping Guide</a></li>
					<li><a href="#">Frequently Asked Questions</a></li>
					<li><a href="#">Shipping</a></li>
					<li><a href="#">Payments</a></li>
				</ul>
				<div class="subscribe">
					<form action="#">
						<label for="input_email">Enter Email to recieve information on new products</label>
 						<input id="input_email" name="input_email" type="text" placeholder="Email Address">
  					<input class="button subscribe__button" type="submit" value="Submit">
					</form>
					<p class="copyright">Copyright © Box Studio - For Educational Purposes Only - <a href="credits.php">Credits</a></p>
				</div>
			</div> <!-- end customer-service -->

			<div class="contact-us">
				<h1>Contact Us</h1>
				<p>378-2839 Marine Dr.<br>Burnaby BC, V7H 2H6<br>Canada</p>
				<p>1-800-567-2332</p>
				<p>info@milanoshoes.com</p>
				<div class="social-media">
					<img class="social-media__icon" src="img/facebook-icon.png" alt="Share on facebook">
					<img class="social-media__icon" src="img/instagram-icon.png" alt="Share on instagram">
					<img class="social-media__icon" src="img/twitter-icon.png" alt="Share on twitter">
					<img class="social-media__icon" src="img/email-icon.png" alt="Send me an E-mail">
				</div>
			</div> <!-- end contact-us -->

		</div> <!-- end container -->

	</footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<?php echo $jsInclude ?>
<script src="scripts/script.js"></script>

</body>
</html>