<?php 

	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/paultuckermusic/Includes/";
	$ART_DIR = $_SERVER["DOCUMENT_ROOT"]. "/paultuckermusic/Articles/";

?>

<?php include($INC_DIR. "Header.php"); 	?> 

<body>
   <div class="bg">
    
    <div id="container">
    
    <header><br>
     	 <?php include($INC_DIR.'menu.php'); ?>
	
<section>

<section class="group1">
	
	<h2>Preludes for the Piano Vol.1</h2>
	<h3>By Paul Tucker</h3>

	<div id="jquery_jplayer_1" class="jp-jplayer"></div>

		<div id="jp_container_1" class="jp-audio">

			<?php include('JukeBox.php'); ?>
				
			

		</div>

	</div>

	<img src="Img/Cover.jpg" alt="album" width="240" height="214"/> <br>
	<a href="http://paultuckermusic.bandcamp.com/album/preludes-for-the-piano-vol-1" target="_blank">Buy the album</a> 
	
</section>

<section class="group3">

	<h2>Artificial</h2>
	<h3>By Paul Tucker</h3>

	<div id="jquery_jplayer_2" class="jp-jplayer"></div>

		<div id="jp_container_2" class="jp-audio">

			<?php include('JukeBox.php'); ?>
		
		</div>

	</div>


	<h2>Songs</h2>
	<h3>By Paul Tucker</h3>
		
	<div id="jquery_jplayer_3" class="jp-jplayer"></div>

		<div id="jp_container_3" class="jp-audio">
			<?php include('JukeBox.php'); ?>

		</div>

	</div>

	<h2>Piano Studies Vol.1</h2>
	<h3>By Paul Tucker</h3>
		
	<div id="jquery_jplayer_4" class="jp-jplayer"></div>

		<div id="jp_container_4" class="jp-audio">
			
			<?php include('JukeBox.php'); ?>

		</div>

	</div>
</section>

<?php include($INC_DIR. "Footer.php"); 	?> 