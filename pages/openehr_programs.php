﻿<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'The openEHR Programs';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_top.php');
?>

	<div id="MainArea">
		
		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->

			<h1><?php echo "$PageName";?></h1>
			
			<p>The main work of the openEHR Foundation is performed by four 'programs' which respectively focus on specifications, clinical modelling, software, and localisation. The first three of these programs correspond to the primary types of output of the openEHR community. Work on all of the programs is performed by community members. A lightweight system of governance, influenced by the governance systems of Apache Foundation and the International Health Terminology Standards Development Organisation (IHTSDO), has been defined to enable defensible decision-making.</p>
			
			<a href="/programs/specification"><img src="/files/programs/SpecificationFrame.png" alt="Specification program image" class="floatLeft"/></a>
			<h2>Specification Program</h2>
			<p>The Specifications Program defines the formal models and languages defining openEHR data, openEHR content models (archetypes and templates) and openEHR services and APIs. These specifications are published and used in their own right and also underpin the Clinical Modelling Program (for which they provide the language of archetypes) and the Software Program (for which they provide schemas and interface definitions for software).</p>
			<a href="/programs/specification">Learn more</a>
			<br class="clear">
			
			<a href="/programs/clinicalmodels"><img src="/files/programs/ModelsFrame.png" alt="Clinical models program image" class="floatLeft"/></a>
			<h2>Clinical Models Program</h2>
			<p>The work of the Clinical Modelling Program is performed largely by clinical professionals and health informatics experts working on the Clinical Knowledge Manager (CKM), building archetypes which act as international standards for re-usable content. These archetypes can be used by national and local programs, and are the basis for building templates, from which software artefacts are generated by tooling.</p>
			<a href="/programs/clinicalmodels">Learn more</a>
			<br class="clear">
			
			<a href="/programs/software"><img src="/files/programs/SoftwareFrame.png" alt="Software program image" class="floatLeft"/></a>
			<h2>Software Program</h2>
			<p>The Software Program is responsible for the development of open source reference implementations of both tooling and information system components. Such components can be freely used by openEHR implementers to build their own tooling and systems, and are available under the industry-friendly Apache 2 licence. The software program performs another very important job: ensuring the implementability of all specifications.</p>
			<a href="/programs/software">Learn more</a>
			<br class="clear">
				
			<a href="/programs/localisation"><img src="/files/programs/LocalisationFrame.png" alt="Localisation program image" class="floatLeft"/></a>
			<h2>Localisation Program</h2>
			<p>Bringing the technical outputs of the other programs to the real world is the job of the Localisation Program, which works in a distributed fashion around the world, generally in collaboration with local, regional and national standards groups, as well as industry and academic groups. The Localisation Program aims to make the outputs of openEHR available and usable in local languages and within diverse healthcare cultures and funding environments.</p>
			<a href="/programs/localisation">Learn more</a>
			<br class="clear">
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>