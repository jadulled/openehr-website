<?php$pageOn = basename($_SERVER['PHP_SELF']);?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><head>	<title>openEHR - Universities / Research Centres</title>	<?php include '../../panel/headpanel.php' ?></head><body><div id="MainFrame">		<div id="TopPanel">	<?php include '../../panel/toppanel.php' ?>	</div>		<div id="TopMenu" style="text-align:left">				<div class="nav">   		<?php include '../../menu/topmenu.php' ?>		</div>	</div> 	<div id="MainArea">			<div id="SideMenu">		<?php include 'menu/guide.php' ?>		</div>				<div id="TextArea">						<h1>Universities / Research</h1>			<br/>			<p>Universities and research centres have a number of basic priorities with respect to health research:</p>			<ul>				<li>being able to reuse the information in different stages of research and for different purposes</li>				<li>being able to share the information across systems</li>				<li>being able to share some of the information with other research partners</li>				<li>being able to compute with the health information they create</li>				<li>being able to integrate multiple software applications and packages without losing meaning - preferably avoiding vendor lock-in</li>			</ul>						<h2>What can openEHR do for you</h2>			<p>openEHR offers various advantages to universities and research centres. Firstly, it provides a health computing platform for creating, storing, querying and sharing clinical and demographic information. Implementations (commercial, open source) of the openEHR platform can provide a high-performance, high-volume health record for use by any number of applications. Applications interface is via the published virtual EHR (vEHR) API. Initially, within the most research will be used a number of existing systems, many of which do not communicate or for which only expensive one-off integrations are made. The openEHR platform provides a disciplined way to integrate such data, using openEHR Templates (FAQ) to model the legacy data structures, while using normal openEHR archetypes (FAQ) to define the data points. This approach means that differnet data can be brought together in a patient-centric fashion. This shared data can then be reflected back to existing systems. It can also be queried via the vEHR interface, and new applications can start to use it directly.</p>			<p>Over time, as uptake of the openEHR platform increases, the cost of managing clinical information should decrease, while its utilisation and quality increase. Procurement is likely to have more freedom to purchase applications, since any application that is compliant to openEHR, CEN EN13606, HL7 CDA rel 2, HL7v2.x can easily be integrated. Universities and centres that write their own applications will be able to use Template tools for building GUI forms, and Query building tools to build reusable queries.</p>									<h2>How you can get involved</h2>			<p>You can become openEHR Partner through the Organisational membership, or members of your team can become part of openEHR as the Individual members. Find out more about <a href="../../about/membership">membership</a>.</p>						<h2>How openEHR works for others</h2>			<p>For list of universities and centres which are working and contributing to openEHR see <a href="../../whoisusingopenehr">who is using openEHR</a></p>					</div>				</div>	<div id="BottomMenu">	<?php include '../../menu/bottommenu.php' ?>	</div>	<div id="BottomPanel">	<?php include '../../panel/bottompanel.php' ?>	</div></div>	<script type="text/javascript">var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});</script></body></html>