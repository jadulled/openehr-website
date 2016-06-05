<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Propiedad Intelectual';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Copyright</h2>
			<p>Artefacts produced by the Clinical Program are copyrighted to the openEHR Foundation. This establishes the Foundation to be the owner of the 'moral rights' to the artefacts, on behalf of all the contributors, and for the safety of the user community.</p>
			
			
			<h2>Attribution</h2>
			<p>The contributors to an artefact are recognised in a contributors section of the work.</p>
			
			
			<h2>Licensing</h2>
			<p>A standard license is attached to each artefact produced within the Clinical Program.</p>
			<p>The license assignments are as follows:</p>
			
			<table class="TableBasic">
			<tbody>
			<tr>
				<th>Artefact type</th>
				<th>License for use</th>
				<th>Comments</th>
			</tr>
			<tr>
				<td><em>Archetypes, templates</em></td>
				<td><img src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" target="_blank"/><br/>
				WORK by <a href="http://www.openEHR.org">openEHR Foundation</a> is licensed under a <a href="http://creativecommons.org/licenses/by-sa/3.0/" target="_blank">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>.</td>
				<td>The use of the CC-BY-SA license allows for public sharing, republishing and forking of the specifications. This acts as a safeguard against subversion of the openEHR Foundation preventing the community using the specifications in a fair way.</td>
			</tr>
			<tr>
				<td><em>Terminology subsets</em></td>
				<td><img src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" target="_blank"/><br/>
				WORK by <a href="http://www.openEHR.org">openEHR Foundation</a> is licensed under a <a href="http://creativecommons.org/licenses/by-sa/3.0/" target="_blank">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>.</td>
				<td>ibid</td>
			</tr>
			<tr>
				<td><em>Documentation</em> </td>
				<td><img src="http://i.creativecommons.org/l/by/3.0/88x31.png" target="_blank"/><br/>
				WORK by <a href="http://www.openEHR.org">openEHR Foundation</a> is licensed under a <a href="http://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons Attribution 3.0 Unported License</a>.</td>
				<td>Documentation is intended for wide dissemination. Improvement, translation and re-use are encouraged.</td>
			</tr>
			</tbody>
			</table>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>