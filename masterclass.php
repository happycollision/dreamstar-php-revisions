<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Master Classes | Dreamstar Productions LLC.</title>

<meta name="description" content="Master Classes - Dreamstar Productions LLC. A  Family Oriented Dance Competition Company" />
<meta name="keywords" content="Dance Competition, Family Oriented, Dancing Competitions,Dreamstar Dance Compeitition Master Classes, Master Classes, Dance Dreamstar" />

<?php 
# Load Layout
require_once("V2/_CSS_Files/head.php");

$title = "Master Classes";
?>


<div class="containter">
<div class="header"><?php require_once("V2/_CSS_Files/menu.php"); ?></div><!-- End header -->
<div class="content"><p class="PageTitle"><?php echo $title; ?></p>

<p><b>Master Classes</b> will be offered durring our competition weekend, and be 90 minutes in length.</p>
<p><strong>Pricing: </strong>Students signing up for the $60 Master Class will pay only $50 for the class if they are competing in the competition.  </p>
<p>We ask that the students sign up on the Master Class Sign-up Sheet supplied in the Entry Form Packet.  They should send their checks with the entry forms.</p>
<p>
  <a href="/_PDF_Files/Master-Class-Registration.pdf" class="dreamstar-links" target="_blank">Master Class Entry Form</a><br />
  <a href="/_PDF_Files/Master-Class-Registration-Individual.pdf" class="dreamstar-links" target="_blank">Individual Master Class Entry Form</a>
</p>

<h3>Master Class Instructors</h3>

<?php 
include("judges.php");
KimHale("True");
JenniferGonzalez("True"); 
EvelynRiceWells("True");
?>

</div><!-- End content  -->
<div class="tourdates"><?php require_once("V2/_CSS_Files/dates.php");?> </div> <!-- End tourdates -->
<div class="footer"><?php require_once("V2/_CSS_Files/footer.php");?> </div> <!-- End footer -->
</div> <!-- Containter End -->
</body>
</html>