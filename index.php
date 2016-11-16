<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta name="google-site-verification" content="PSArb1eh4DaffmlmFp0MQppVixQwIa-qWsGgx-2J5q0" />
<meta name="description" content="Dreamstar Productions LLC. A  Family Oriented Dance Competition Company" />
<meta name="keywords" content="Dance Competition, Family Oriented, Dancing Competitions,Dreamstar Dance Competition, Dance Dreamstar" />
<head>

<title>Home | Dreamstar Productions LLC.</title>
<?php

error_reporting(0);
ini_set('display_errors', '0');

# Connect to Database
require_once("connect.php");

# Query for Home Page Content.
#$HomePage = @mysql_query("SELECT content FROM content Where Date_Entered = (SELECT MAX(Date_Entered) From content) AND Page = 'index.php' Limit 0,1");


# Pulls Homepage Content
#if($HomePage){ $HomePageOut=@mysql_result($HomePage,0,'content');}
#else {$HomePageOut="<p>Dreamstar Productions is sorry but there seems to have been a database error. </br> </br>Please feel free to still navigate through our other pages and we will resolve this issue as soon a possible.</p>";}

# Load Layout
require_once("V2/_CSS_Files/head.php");
$Title = "Welcome to Dreamstar Productions";

?>

<div class="containter">
<div class="header"><?php require_once("V2/_CSS_Files/menu.php"); ?></div><!-- End header -->
<div class="content"><p class="PageTitle"><?php echo $Title; ?></p> 
<?php #echo $HomePageOut; ?>
<p><img src="_JPG_Files/DES14-Dancer.jpg" style="width: 20%; float: left; border-radius: 10px; margin-right: 10px;" />Dreamstar Productions LLC, doing  business as Dreamstar Dance, is a dance competition that was created to  provide the highest quality experience to each and every studio, teacher,  performer, and family.</p> 
<p>At Dreamstar, we strive to bring  America's dance talent together with experienced judges from all over the  country in order for young dancers to receive the feedback they need to take  their skills to the next level. Dreamstar offers the dance student the opportunity  to perform for qualified judges in a constructive and friendly environment. We provide opportunities  for talented dancers to attend master classes.  </p> 
<p>We are an organization dedicated  to helping young people improve self esteem, poise, and confidence through the  art of dance.  Our friendly, helpful  staff will make this a rewarding experience for everyone attending.</p> 
<p>Our competition tour will be  featured in 4 cities throughout the Midwestern United states and will foster  dedication, discipline, and appreciation of teamwork through the dance. </p> 
<p>We look forward to seeing you this season! Dreamstar will help fulfill the dream of the  dancer to shine on stage!</p>  <p><b>Signup Online</b> - <a href="http://dreamstarnow.dancecompgenie.com/" class="dreamstar-links">Register Online Now!</a> </br> </p> 
<p>&nbsp;</p> 
<h2>Rebates</h2> 
<p><b><span style="color: rgb(192, 0, 0); ">Dreamstar Dance, a dance competition company, focused on celebrating excellence in dance, wants your studio to try our competition.</span></b> With this goal in mind, we are offering an introductory <b>10% REBATE</b>, when we receive your entry paperwork and payment 6 weeks prior to the competition.</p> 
<h2>Master Classes</h2> 
<p>We are also offering Master Classes during our competition weekend. Students signing up for Master Classes will receive a $10 discount if they are competing in the competition. <a href="masterclass.php" class="dreamstar-links">More Info</a></p> 
<h3><a href="dancechallenge.php" class="dreamstar-links">Challenge of the Dance Stars</a></h3> 


</div><!-- End content  -->
<div class="tourdates"><?php require_once("V2/_CSS_Files/dates.php");?> </div> <!-- End tourdates -->
<div class="twitter"><?php require_once("V2/_CSS_Files/twitter.php");?> </div> <!-- End tourdates -->
<div class="footer"><?php require_once("V2/_CSS_Files/footer.php");?> </div> <!-- End footer -->
</div> <!-- Containter End -->
</body>
</html>

