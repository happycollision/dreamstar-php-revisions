<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>



<meta name="description" content="Dreamstar Productions LLC. A  Family Oriented Dance Competition Company" />
<meta name="keywords" content="Competition Scores, Dance Competition, Family Oriented, Dancing Competitions,Dreamstar Dance Competition, Dance Dreamstar" />
<?php 
# Load Layout
require_once("V2/_CSS_Files/head.php");
require_once("judges.php");

#Get Location
if(isset($_GET['Comp'])){$Comp = $_GET['Comp'];}
else {$Comp = "";}#

switch($Comp){
	
	case "TWC14": $FullName = "Twin Cities, MN"; break;	
	case "DES14": $FullName = "Des Moines, IA"; break;	
	case "QCA14": $FullName = "Quad Cities, IA"; break;
	case "MAD14": $FullName = "Madison, WI"; break;
	case "QCA15": $FullName = "Quad Cities, IA"; break;
	case "MAD15": $FullName = "Madison, WI"; break;
	case "DES15": $FullName = "Des Monies, IA"; break;
	case "TWC15": $FullName = "Twin Cities, MN"; break;
	case "QCA16": $FullName = "Quad Cities, IA"; break;
	case "MAD16": $FullName = "Madison, WI"; break;
	case "DES16": $FullName = "Des Monies, IA"; break;
	case "TWC16": $FullName = "Twin Cities, MN"; break;
	
}
if ($FullName){$FullName = $FullName." | ";}else{$FullName = "";}
echo "<title>{$FullName}Competition Information & Results | Dreamstar Productions LLC.</title>";


$title = "Competition Information & Results";


?>
<!-- Light Box -->
<script type="text/javascript" src="/js/jquery.lightbox-0.5.js"></script>
<script src="js/galleria/galleria-1.2.9.min.js"></script>
<script src="js/galleria/plugins/facebook/galleria.facebook.js"></script>
<!-- End Light Box -->

<div class="containter">

<div class="header"><?php require_once("V2/_CSS_Files/menu.php"); ?></div><!-- End header -->
<div class="content"><p class="PageTitle"><?php echo $title; ?></p> 


<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->


<?php
if($Comp == "TWC16"){ ?>
<script type="text/javascript">
$(function() {Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js'); Galleria.run('#TWC16', {facebook: 'album:1150097738374434', height: 600, lightbox: true}); });
</script>

<h1>Twin Cities, MN :: April 29 - 30, 2016</h1>
<h2>Competition Schedule - <a class="dreamstar-links" href="/_PDF_Files/competition-schedules/04172016-TWC16_Schedule.pdf" onClick="_gaq.push(['_trackPageview', '/_PDF_Files/competition-schedules/04172016-TWC16_Schedule.pdf']);" target="_blank">View PDF</a><span style="font-size:12px;font-weight:100;"> - Updated 04/17/2016</span></h2>


<h2> Pictures - <a href="https://www.facebook.com/media/set/?set=a.1150097738374434.1073741845.124591620925056&type=1&l=8d4954c967" class="dreamstar-links" >View Pictures on Facebook</a></h2>
<div id="TWC16"></div>

<h2>Scores</h2>
<?php require_once("venue-results16.php");  ?>

<h2>Competition Judges</h2>
<?php 	
JacquelineSpreadbury("True");
EvelynRiceWells("False");
SamKivi();

} # END TWC16
elseif($Comp == "DES16"){ ?>
<script type="text/javascript">
$(function() {Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js'); Galleria.run('#DES16', {facebook: 'album:1131585513558990', height: 600, lightbox: true}); });
</script>

<h1>Des Moines, IA :: April 1 - 3rd, 2016</h1>
<h2>Competition Schedule - <a class="dreamstar-links" href="/_PDF_Files/competition-schedules/03172016-DES16_Schedule.pdf" onClick="_gaq.push(['_trackPageview', '/_PDF_Files/competition-schedules/03172016-DES16_Schedule.pdf']);" target="_blank">View PDF</a><span style="font-size:12px;font-weight:100;"> - Updated 03/17/2016</span></h2>

<h2> Pictures - <a href="https://www.facebook.com/media/set/?set=a.1131585513558990.1073741844.124591620925056&type=1&l=8d4954c967" class="dreamstar-links" >View Pictures on Facebook</a></h2>
<div id="DES16"></div>

<h2>Scores</h2>
<?php require_once("venue-results16.php");  ?>

<h2>Competition Judges</h2>
<?php 	
JacquelineSpreadbury("True");
MattPospeshil("False");
ColleenKosier();

} # END DES16
elseif($Comp == "MAD16"){ ?>
<script type="text/javascript">
$(function() {Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js'); Galleria.run('#MAD16', {facebook: 'album:1103862982997910', height: 600, lightbox: true}); });
</script>

<h1>Madison, WI :: Febuary 26 - 28th, 2016</h1>
<h2>Competition Schedule - <a class="dreamstar-links" href="/_PDF_Files/competition-schedules/02152016-MAD16_Schedule.pdf" onClick="_gaq.push(['_trackPageview', '/_PDF_Files/competition-schedules/02152016-MAD16_Schedule.pdf']);" target="_blank">View PDF</a><span style="font-size:12px;font-weight:100;"> - Updated 02/15/2016</span></h2>

<h2> Pictures - <a href="https://www.facebook.com/media/set/?set=a.1103862982997910.1073741843.124591620925056&type=1&l=8d4954c967" class="dreamstar-links" >View Pictures on Facebook</a></h2>
<div id="MAD16"></div>

<h2>Scores</h2>
<?php require_once("venue-results.php");  ?>

<h2>Competition Judges</h2>
<?php 	
EvelynRiceWells("True");
EricaMcCool("False");
ColleenKosier();

} # END MAD16
elseif($Comp == "QCA16"){ ?>

<script type="text/javascript">
$(function() {Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js'); Galleria.run('#QCA16', {facebook: 'album:1087922411258634', height: 600, lightbox: true}); });
</script>

<h1>Quad Cities, IA :: January 29 - 31st, 2016</h1>
<h2>Competition Schedule - <a class="dreamstar-links" href="/_PDF_Files/competition-schedules/01182016-QCA16_Schedule.pdf" onClick="_gaq.push(['_trackPageview', '/_PDF_Files/competition-schedules/01182016-QCA16_Schedule.pdf']);" target="_blank">View PDF</a><span style="font-size:12px;font-weight:100;"> - Updated 01/18/2016</span></h2>

<h2>Master Class Flyer - <a class="dreamstar-links" href="_PDF_Files/master-class/QCA16-MasterClass.pdf" onClick="_gaq.push(['_trackPageview', '/_PDF_Files/master-class/QCA16-MasterClass.pdf']);"target="_blank">View PDF</a></h2>


<h2> Pictures - <a href="https://www.facebook.com/media/set/?set=a.1087922411258634.1073741842.124591620925056&type=1&l=8d4954c967" class="dreamstar-links" >View Pictures on Facebook</a></h2>
<div id="QCA16"></div>



<h2>Scores</h2>
<?php require_once("venue-results.php");  ?>

<h2>Competition Judges</h2>
<?php 	
	JacquelineSpreadbury("True");
	EricaMcCool("False");
	ColleenKosier();
	
} # END QCA16
elseif($Comp == "TWC15"){ ?>

<script type="text/javascript">
$(function() {Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js'); Galleria.run('#TWC15', {facebook: 'album:946622818721928', height: 600, lightbox: true}); });
</script>

<h1>Twin Cities, MN :: May 1-3rd, 2015</h1>
<h2>Competition Schedule - <a class="dreamstar-links" href="/_PDF_Files/competition-schedules/04222015-TWC15_Schedule.pdf" onClick="_gaq.push(['_trackPageview', '/_PDF_Files/competition-schedules/04222015-TWC15_Schedule.pdf']);" target="_blank">View PDF</a><span style="font-size:12px;font-weight:100;"> - Updated 04/22/2015</span></h2>

<h2>Master Class Flyer - <a class="dreamstar-links" href="_PDF_Files/master-class/TWC15-MasterClass.pdf" onClick="_gaq.push(['_trackPageview', '/_PDF_Files/master-class/TWC15-MasterClass.pdf']);"target="_blank">View PDF</a></h2>


<h2> Pictures - <a href="https://www.facebook.com/media/set/?set=a.946622818721928.1073741840.124591620925056&type=1&l=8d4954c967" class="dreamstar-links" >View Pictures on Facebook</a></h2>
<div id="TWC15"></div>


<h2>Scores</h2>
<?php require_once("venue-results.php");  ?>

<h2>Competition Judges</h2>
<?php 	
	KimMunn("True");
	SamKivi();
	ColleenKosier();
	
} # END TWC15
elseif($Comp == "DES15"){ ?>

<script type="text/javascript">
$(function() {Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js'); Galleria.run('#DES15', {facebook: 'album:926569564060587', height: 600, lightbox: true}); });
</script>

<h1>Des Moines, IA :: March 27 - 29th, 2015</h1>
<h2>Competition Schedule - <a class="dreamstar-links" href="/_PDF_Files/competition-schedules/03122015-DES15_Schedule.pdf" onClick="_gaq.push(['_trackPageview', '/_PDF_Files/competition-schedules/03122015-DES15_Schedule.pdf']);" target="_blank">View PDF</a><span style="font-size:12px;font-weight:100;"> - Updated 03/12/2015</span></h2>
<?php /*
<h2>Master Class Flyer - <a class="dreamstar-links" href="_PDF_Files/master-class/MAD15 Master Class.pdf" onClick="_gaq.push(['_trackPageview', '/_PDF_Files/master-class/MAD15 Master Class.pdf']);"target="_blank">View PDF</a></h2>
*/?>

<h2> Pictures - <a href="https://www.facebook.com/media/set/?set=a.926569564060587.1073741836.124591620925056&type=1&l=8d4954c967" class="dreamstar-links" >View Pictures on Facebook</a></h2>
<div id="DES15"></div>


<h2>Scores</h2>
<?php require_once("venue-results.php");  ?>

<h2>Competition Judges</h2>
<?php 	
	EvelynRiceWells("True");
	JenniferGonzalez("False");
	ColleenKosier();
	
} # END DES15
elseif($Comp == "MAD15"){ ?>

<script type="text/javascript">
$(function() {Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js'); Galleria.run('#MAD15', {facebook: 'album:906165736100970', height: 600, lightbox: true}); });
</script>

<h1>Madison, WI :: Febuary 20-22th, 2015</h1>
<h2>Competition Schedule - <a class="dreamstar-links" href="/_PDF_Files/competition-schedules/02142015-MAD15_Schedule.pdf" onClick="_gaq.push(['_trackPageview', '/_PDF_Files/competition-schedules/02142015-MAD15_Schedule.pdf']);" target="_blank">View PDF</a><span style="font-size:12px;font-weight:100;"> - Updated 02/14/2015</span></h2>
<h2>Master Class Flyer - <a class="dreamstar-links" href="_PDF_Files/master-class/MAD15 Master Class.pdf" onClick="_gaq.push(['_trackPageview', '/_PDF_Files/master-class/MAD15 Master Class.pdf']);"target="_blank">View PDF</a></h2>


<h2> Pictures - <a href="https://www.facebook.com/media/set/?set=a.906165736100970.1073741835.124591620925056&type=1&l=8d4954c967" class="dreamstar-links" >View Pictures on Facebook</a></h2>
<div id="MAD15"></div>


<h2>Scores</h2>
<?php require_once("venue-results.php"); ?>

<h2>Competition Judges</h2>
<?php 	
	SaraBartlett("True");
	EvelynRiceWells("False");
	SamKivi();
	
} # END MAD15
elseif($Comp == "QCA15"){ ?>

<script type="text/javascript">
//$(function() {Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js'); Galleria.run('#TWC14', {facebook: 'album:733899513327594', height: 600, lightbox: true}); });
</script>

<h1>Quad Cities, IA :: January 30th, 2015</h1>
<h2>Competition Schedule - <a class="dreamstar-links" href="/_PDF_Files/competition-schedules/01252015-QCA15_Schedule.pdf" onClick="_gaq.push(['_trackPageview', '/_PDF_Files/competition-schedules/01252015-QCA15_Schedule.pdf']);" target="_blank">View PDF</a><span style="font-size:12px;font-weight:100;"> - Updated 01/25/2015</span></h2>
<h2>Master Class Flyer - <a class="dreamstar-links" href="/MasterClassQC2015.php" >View </a></h2>

<?php /*
<h2> Pictures - <a href="https://www.facebook.com/media/set/?set=a.733899513327594.1073741833.124591620925056&type=1&l=8d4954c967" class="dreamstar-links" >View Pictures on Facebook</a></h2>
<div id="TWC14"></div>
*/?>

<h2>Scores</h2>
<?php require_once("venue-results.php");?>

<h2>Competition Judges</h2>
<?php 	
	JenniferGonzalez("True");
	SamKivi();
	ColleenKosier();

} # END QCA15
elseif($Comp == "TWC14"){ ?>

<script type="text/javascript">
$(function() {Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js'); Galleria.run('#TWC14', {facebook: 'album:733899513327594', height: 600, lightbox: true}); });
</script>

<h1>Twin Cities, MN :: April 26-27th, 2014</h1>
<h2>Competition Schedule - <a class="dreamstar-links" href="/_PDF_Files/competition-schedules/04172014-TWC14_Schedule.pdf" onClick="_gaq.push(['_trackPageview', '/_PDF_Files/competition-schedules/04172014-TWC14_Schedule.pdf']);" target="_blank">View PDF</a><span style="font-size:12px;font-weight:100;"> - Updated 04/17/2014</span></h2>
<h2>Master Class Flyer - <a class="dreamstar-links" href="_PDF_Files/master-class/TWC14-Evelyn_Rice_Master_Class_Flyer.pdf" onClick="_gaq.push(['_trackPageview', '/_PDF_Files/master-class/TWC14-Evelyn_Rice_Master_Class_Flyer.pdf']);"target="_blank">View PDF</a></h2>


<h2> Pictures - <a href="https://www.facebook.com/media/set/?set=a.733899513327594.1073741833.124591620925056&type=1&l=8d4954c967" class="dreamstar-links" >View Pictures on Facebook</a></h2>
<div id="TWC14"></div>


<h2>Scores</h2>
<?php require_once("venue-results.php");?>

<h2>Competition Judges</h2>
<?php 	
	EvelynRiceWells("True");
	SamKivi();
	ColleenKosier();

} # END TWC14
elseif($Comp == "DES14"){ ?>

<script type="text/javascript">
$(function() {Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js'); Galleria.run('#DES14', {facebook: 'album:719638761420336', height: 600, lightbox: true}); });
</script>

<h1>Des Moines, IA :: March 29th, 2014</h1>
<h2>Competition Schedule - <a class="dreamstar-links" href="/_PDF_Files/competition-schedules/03202014-DES14_Schedule.pdf" onClick="_gaq.push(['_trackPageview', '/_PDF_Files/competition-schedules/03202014-DES14_Schedule.pdf']);" target="_blank">View PDF</a><span style="font-size:12px;font-weight:100;"> - Updated 03/20/2014</span></h2>


<h2> Pictures - <a href="https://www.facebook.com/media/set/?set=a.719638761420336.1073741832.124591620925056&type=1&l=8d4954c967" class="dreamstar-links" >View Pictures on Facebook</a></h2>
<div id="DES14"></div>

<h2>Scores</h2>
<?php require_once("venue-results.php"); ?>

<h2>Competition Judges</h2>
<?php 
	JenniferGonzalez("True");	
	EvelynRiceWells("False");
	ColleenKosier();

} # END DES14
elseif($Comp == "QCA14"){ ?>

<script type="text/javascript">
$(function() {Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js'); Galleria.run('#QCA14', {facebook: 'album:704733186244227', height: 600, lightbox: true}); });
</script>

<h1>Quad Cities, IA :: March 1st, 2014</h1>
<h3>Competition Schedule - <a class="dreamstar-links" href="/_PDF_Files/competition-schedules/02262014-QCA14_Schedule.pdf" onClick="_gaq.push(['_trackPageview', '/_PDF_Files/competition-schedules/02262014-QCA14_Schedule.pdf']);" target="_blank">View PDF</a><span style="font-size:12px;font-weight:100;"> - Updated 02/26/2014</span></h3>


<h3> Pictures - <a href="https://www.facebook.com/media/set/?set=a.704733186244227.1073741831.124591620925056&type=1&l=8d4954c967" class="dreamstar-links" >View Pictures on Facebook</a></h3>
<div id="QCA14"></div>

<h2>Scores</h2>
<?php require_once("venue-results.php"); ?>


<h2>Competition Judges</h2>
<?php 
	JenniferGonzalez("True");	
	SaraBartlett("False");
	SamKivi();

} # END QCA14
elseif($Comp == "MAD14"){ ?>

<script type="text/javascript">
$(function() {Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js'); Galleria.run('#MAD14', {facebook: 'album:686563244727888', height: 600, lightbox: true}); });
</script>

<h2>Madison, WI :: January 26, 2014</h2>
<h3>Competition Schedule - <a class="dreamstar-links" href="/_PDF_Files/competition-schedules/01072014-MAD14_Schedule.pdf" onClick=”_gaq.push(['_trackPageview', '/_PDF_Files/competition-schedules/01072014-MAD14_Schedule.pdf']);” target="_blank">View PDF</a><span style="font-size:12px;font-weight:100;"> - Updated 01/07/2014</span></h3>

<h3> Pictures - <a href="https://www.facebook.com/media/set/?set=a.686563244727888.1073741829.124591620925056&type=1&l=8d4954c967" class="dreamstar-links" >View Pictures on Facebook</a></h3>
<div id="MAD14"></div>
<h3>Video</h3>
<iframe src="//www.youtube.com/embed/uNuX6VvatnE" frameborder="0" allowfullscreen style="width: inherit; height:400px;"></iframe>
<h2>Scores</h2>
<?php require_once("venue-results.php"); ?>
<h3>Competition Judges</h3>
<?php 
	KimHale("True");	
	SaraBartlett("False");
	ColleenKosier();
?>
<?php
} # END MAD14
elseif($Comp == "MIN13"){ ?>

<script type="text/javascript">
$(function() {Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js'); Galleria.run('#MIN13', {facebook: 'album:553535484697332', height: 600, lightbox: true}); });
</script>
    
<h2>Minneapolis, MN :: May 10, 2013 - May 11, 2013</h2>
<h3> Pictures - <a href="https://www.facebook.com/media/set/?set=a.553535484697332.1073741827.124591620925056&type=1&l=8d4954c967" class="dreamstar-links" target="_blank">View Pictures on Facebook</a></h3>
<div id="MIN13"></div>

<h2>Scores</h2>
<?php require_once("venue-results.php"); ?>

<?php 
} # END MIN13
elseif($Comp == "DES13"){ ?>

<script type="text/javascript">
$(function() {Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js'); Galleria.run('#DES13', {facebook: 'album:542105755840305', height: 600, lightbox: true}); });
</script>

<h2>Des Moines, IA :: April 6, 2013</h2>
<h3> Pictures - <a href="https://www.facebook.com/media/set/?set=a.542105755840305.1073741826.124591620925056&type=1&l=1b6e061ec9" class="dreamstar-links" target="_blank">View Pictures on Facebook</a></h3>
<div id="DES13"></div>
<h3>Video</h3>
<iframe src="//www.youtube.com/embed/hMsvkkZAYqo" frameborder="0" allowfullscreen style="width: inherit; height:400px;"></iframe>
<h3>Scores - <a href="_PDF_Files/competition-results/DES13-Results.pdf" class="dreamstar-links" target="_blank">View PDF</a></h3>
<?php require_once("venue-results.php"); ?>

<?php 
} # END DES13
elseif($Comp == "DAV13"){ ?>

<script type="text/javascript">
$(function() {Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js'); Galleria.run('#DAV13', {facebook: 'album:523441851040029', height: 600, lightbox: true}); });
</script>
       
<h2>Davenport, IA :: Feb 22, 2013 - Feb 24, 2013</h2>
<h3> Pictures - View Pictures on Facebook (<a href="https://www.facebook.com/media/set/?set=a.523441851040029.129031.124591620925056&type=1&l=32374ae950" class="dreamstar-links" >Day 1</a>/<a href="https://www.facebook.com/media/set/?set=a.523930857657795.129127.124591620925056&type=1&l=2873b50bc5" class="dreamstar-links" target="_blank">Day 2</a>)</h3>
<div id="DAV13"></div>
<h3>Video's</h3>
<a href="http://youtu.be/d7G3Sasveog" class="dreamstar-links" target="_blank">Teen/Senior Dance Challenge</a>
<iframe src="//www.youtube.com/embed/d7G3Sasveog" frameborder="0" allowfullscreen style="width: inherit; height:400px;"></iframe>
<a href="http://youtu.be/rliVgqUAWGw" class="dreamstar-links" target="_blank">Harlem Shake</a>
<iframe src="//www.youtube.com/embed/rliVgqUAWGw" frameborder="0" allowfullscreen style="width: inherit; height:400px;"></iframe>
<h3>Scores - <a href="_PDF_Files/competition-results/DAV13-Results.pdf" class="dreamstar-links" target="_blank">View PDF</a></h3>
<?php require_once("venue-results.php"); ?>


<?php 
} # END DAV13
elseif($Comp == "MAD13"){ ?>

<script type="text/javascript">
$(function() {Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js'); Galleria.run('#MAD13', {facebook: 'album:508136505903897', height: 600, lightbox: true}); });
</script>

<h2>Madison, WI :: Jan 25, 2013 - Jan 27, 2013</h2>
<h3>Pictures - <a href="https://www.facebook.com/media/set/?set=a.508136505903897.127371.124591620925056&type=1&l=5de22b6008" class="dreamstar-links" >View Pictures on Facebook</a></h3> 
<div id="MAD13"></div>
<h3>Video - <a href="http://youtu.be/8vR7SPserT8" class="dreamstar-links" >Watch on YouTube</a></h3>
<iframe src="//www.youtube.com/embed/8vR7SPserT8" frameborder="0" allowfullscreen style="width: inherit; height:400px;"></iframe>
<h3>Scores - <a href="_PDF_Files/competition-results/MAD13-Results.pdf" class="dreamstar-links">View PDF</a></h3>
<?php require_once("venue-results.php"); ?>

<?php 
} # END MAD13
elseif($Comp == "DAV11"){ ?>

<script type="text/javascript">
$(function() {Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js'); Galleria.run('#DAV11', {facebook: 'album:163433500374201', height: 600, lightbox: true}); });
</script>

<h2>Davenport, IA :: Jan 28, 2011 - Jan 30, 2011</h2>
<h3> Pictures - <a href="https://www.facebook.com/media/set/?set=a.163433500374201.47660.124591620925056&type=1&l=6f91a22c0b" class="dreamstar-links" >View Pictures on Facebook</a></h3>
<div id="DAV11"></div>
<h3>Video - <a href="http://www.youtube.com/watch?v=nwJe8PU-usg&amp;feature=g-upl" class="dreamstar-links">Watch On Youtube</a></h3>
<iframe src="//www.youtube.com/embed/nwJe8PU-usg" frameborder="0" allowfullscreen style="width: inherit; height:400px;"></iframe>
<h3>Scores - <a href="_PDF_Files/competition-results/DAV11-Results.pdf" class="dreamstar-links" >View PDF</a></h3>
<?php require_once("venue-results.php"); ?>

<?php } # End DAV11 
else { ?>

<h2> Choose a Competition to the Right -> </h2>

<?php } #End Else ?>

<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->

</div><!-- End content  -->
<div class="resultnav"><?php require_once("V2/_CSS_Files/resultnav.php"); /*?></div><!-- End resultnav -->
<div class="tourdates"><?php require_once("V2/_CSS_Files/dates.php");*/?> </div> <!-- End tourdates -->
<div class="footer"><?php require_once("V2/_CSS_Files/footer.php");?> </div> <!-- End footer -->
</div> <!-- Containter End -->
</body>
</html>



