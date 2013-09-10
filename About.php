<?php 

	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/paultuckermusic/Includes/";
	$ART_DIR = $_SERVER["DOCUMENT_ROOT"]. "/paultuckermusic/Articles/";

?>

<?php include($INC_DIR. "Header.php"); 	?> 
<body>
	<div class="bg">
    
		<div id="container">
   
			<?php include($INC_DIR.'menu.php'); 			?>
			
		
		</div>
		<header>
		<?php include($ART_DIR. "Biography.php"); 	?> 
		
	</div>
	
	 <?php include($INC_DIR. "Footer.php"); 	?> 

