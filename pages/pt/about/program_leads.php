<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Líderes do Programa';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Specifications Program</h2>
            <ul>
                <li><a href="#thomas_beale">Thomas Beale</a></li>
                <li><a href="#rong_chen">Rong Chen</a></li>
            </ul>

			<h2>Clinical Program</h2>
            <ul>
                <li><a href="#heather_leslie">Heather Leslie</a></li>
                <li><a href="#silje_ljosland_bakke">Silje Ljosland Bakke</a></li>
            </ul>

			<h2>Software Program</h2>
            <ul>
                <li><a href="#iago_corbal">Iago Corbal</a></li>
                <li><a href="#sebastian_garde">Sebastian Garde</a></li>
                <li><a href="#bostjan_lah">Bostjan Lah</a></li>
                <li><a href="#erik_sundvall">Erik Sundvall</a></li>
            </ul>

			<h2>Localisation Program</h2>
            <ul>
                <li><a href="#gustavo_bacelar">Gustavo Bacelar</a></li>
                <li><a href="#shinji_kobayashi">Shinji Kobayashi</a></li>
            </ul>
            
			<h2>Program Lead Bios</h2>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/gustavo_bacelar.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/silje_ljosland_bakke.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/thomas_beale.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/rong_chen.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/iago_corbal.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/sebastian_garde.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/shinji_kobayashi.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/bostjan_lah.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/heather_leslie.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/erik_sundvall.php');?>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
