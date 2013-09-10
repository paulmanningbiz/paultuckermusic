<?php 

	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/paultuckermusic/Includes/";
	$ART_DIR = $_SERVER["DOCUMENT_ROOT"]. "/paultuckermusic/Articles/";

?>

<?php include($INC_DIR. "Header.php"); 	?> 

<body>
   <div class="bg">
   
    <div id="container">
   
    
   <?php include($INC_DIR.'menu.php'); ?>
   
   <section id="intro">
      <hgroup>
     
      <h2>Welcome to Paul Tucker Music. Listen to my latest album, download individual tracks, get the latest news or contact me for anything else.</h2>
      </hgroup>
   </section>
   <!--end intro-->
   <!--start holder-->
   <div class="holder_content">
      <section class="group1">
         <h3>Preludes for the Piano Vol​.​1</h3>
         <p>These 10 pieces were written between '95 and '99 and are very personal to me. It wasn't until last year that I decided to share them.</p>
         <a class="photo_hover3" href="#"><img src="Img/Cover.jpg" width="240" height="214" alt="picture1"/></a>
         <a href="albums.php"><span class="button">Listen to Album</span></a>  
        
       </section>
    
      <section class="group3">
         <h3>Order</h3>
		 
		 	
		 <br>
		 <h3>Preludes For Piano Vol. 1 Digital Album  <a href="http://paultuckermusic.bandcamp.com/album/preludes-for-the-piano-vol-1">Download</a> Price £7.00 </h3>
		 
         <br>		
		<h3>Preludes For Piano Vol. 1 Compact Disc</h2>
			Price £10.00
			<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="JT2P6WTVZSP52">
			<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
			</form>

			<p>
			<br>
			<h3>Preludes For Piano Vol. 1 Book</h2>
			Price £10.00
			<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="BXQCDVNBYEAZW">
			<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
			</form>

			<p>
			<br>
			<h3>Preludes For Piano Vol. 1 Compact Disk & Book</h2>
			Price £15.00
			<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="4H9PTJTYZYXQ8">
			<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
			</form>
			


         
	</div>
	<!--end holder-->
   <!--start holder-->
   <div class="holder_content">
      <section class="group4">
                 
       </section>
   </div>
   <!--end holder-->
   </div>
   <!--end container-->
   <!--start footer-->
   <?php include($INC_DIR. "Footer.php"); 	?> 