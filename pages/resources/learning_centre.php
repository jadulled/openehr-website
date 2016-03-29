﻿<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Learning Centre';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>openEHR Presentations</h2>
			<p><a href="http://www.slideshare.net/search/slideshow?searchfrom=header&q=openehr">Slideshare</a></p>

			<h2>openEHR Primers</h2>
			<iframe width="400" height="300" src="http://www.youtube.com/embed/videoseries?list=PLhWi0RtmG26WRld2BF3BM2sdqrCBT5f3C" frameborder="0" allowfullscreen></iframe>
			<br/>
			<h2>ADL 1.5 training</h2>
			<iframe width="400" height="300" src="http://www.youtube.com/embed/videoseries?list=PLhWi0RtmG26VSw4RQb10cVaRB7Ln73wfM&amp;hl=en_US" frameborder="0" allowfullscreen></iframe>
			<br/>
			<br/>
			<h2>ADL Workbench tutorial</h2>
			<iframe width="400" height="300" src="http://www.youtube.com/embed/videoseries?list=PLhWi0RtmG26U6PGezBrDD2QPeQL8tQYTZ&amp;hl=en_US" frameborder="0" allowfullscreen></iframe>
			<br/>
			<h2>MedInfo 2007 - David Ingram</h2>
			<iframe width="400" height="300" src="//www.youtube.com/embed/Nlw1LrDmv7c?list=UU0rSnWtVmuvr4MJ4vHC_kQA" frameborder="0" allowfullscreen></iframe>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
