<?php 

	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/paultuckermusic/Includes/";
	$ART_DIR = $_SERVER["DOCUMENT_ROOT"]. "/paultuckermusic/Articles/";

?>

<?php include($INC_DIR. "Header.php"); 	?> 

<body>
   <div class="bg">
    <!--start container-->
    <div id="container">
    <!--start header-->
    <?php include($INC_DIR.'menu.php'); ?>

</head>

<body>
<p>
<section class="group1">
<div id="contact-form">	

<form id="contact" method="post" action="process.php">
 
<fieldset>	

<label for="name">Name</label>
<input type="text" name="Name" placeholder="Full Name" title="Enter your name" class="required">

<label for="email">E-mail</label>
<input type="email" name="Email" placeholder="yourname@domain.com" title="Enter your e-mail address" class="required email">

<label for="phone">Phone</label>
<input type="tel" name="Phone" placeholder="ex. (0208) 577-1234">

<label for="message">Question/Comment</label>
<textarea name="Message"></textarea>

<input type="submit" name="submit" class="button" id="submit" value="Send Message" />

</fieldset>
</form>
</p>
</div><!-- /end #contact-form -->

<script src="js/modernizr-min.js"></script>
<script>
if (!Modernizr.input.placeholder){
      $('input[placeholder], textarea[placeholder]').placeholder();
}
</script>
</section>
 <?php include($INC_DIR. "Footer.php"); 	?> 