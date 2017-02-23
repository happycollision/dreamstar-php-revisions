<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php

require_once("connect.php");

# Site Header

$Title = "Competition Dates";



if(isset($_GET['id']) && $_GET['id'] > 0){

	$id = $_GET['id'];
	$result = mysql_query("SELECT *, concat(DATE_FORMAT(Venue_StartDate,'%M %e - '), DATE_FORMAT(Venue_EndDate,'%e, %Y')) as Date_Range From venues WHERE Venue_ID = $id");
	if($result){
		$i = 0;
		$titlecity = mysql_result($result, $i, "Venue_Title");
		$CityDates = mysql_result($result,$i,'Date_Range');
		$Title = "Competition: $titlecity";
		$PageTitle = "$titlecity - $CityDates | Dance Competition | Dreamstar Productions LLC.";	
}}
else{$i = 1;}



$tab = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";



if (isset($PageTitle))
	echo "<title>$PageTitle</title>";	
else
	echo "<title>Competition | Dreamstar Productions LLC.</title>";
?>
<meta name="description" content="Tour Dates - Dreamstar Productions LLC. A  Family Oriented Dance Competition Company" />
<meta name="keywords" content="Dance Competition, Family Oriented, Dancing Competitions,Dreamstar Dance Competition, Dance Competition Tour, Dance Dreamstar" />
<?php 
# Load Layout
require_once("V2/_CSS_Files/head.php");

?>
<div class="containter">

<div class="header"><?php require_once("V2/_CSS_Files/menu.php"); ?></div><!-- End header -->
<div class="content"><p class="PageTitle"><?php echo $Title; ?></p>

<?php  

if ($i == 0){

$Dates= $CityDates;

$SDate=date("M j, Y",strtotime(mysql_result($result,$i,'Venue_StartDate')));
$EDate=date("M j, Y",strtotime(mysql_result($result,$i,'Venue_EndDate')));
$Location=mysql_result($result,$i,"Venue_Title");
$Venue=mysql_result($result,$i,"Venue_Name");
$Address=mysql_result($result,$i,"Venue_Address");
$City=mysql_result($result,$i,"Venue_City").", ".mysql_result($result,$i,"Venue_State");
$Zip=mysql_result($result,$i,"Venue_Zip");
$info= "";




/*
	$HotelName=mysql_result($result,$i,'Hotel_Name');
	$HAddress=mysql_result($result,$i,"Hotel_Address");
	$HCitySt=mysql_result($result,$i,"Hotel_CitySt");
	$HZip=mysql_result($result,$i,"Hotel_Zip");
	$HPhone=mysql_result($result,$i,'Hotel_Phone');
	$HEmail=mysql_result($result,$i,'Hotel_Email');
	$HWebsite=mysql_result($result,$i,'Hotel_Website');
	$HNotes=mysql_result($result,$i,'Hotel_Notes');
	$HShow=mysql_result($result,$i,'Show_Hotel');	

*/	

	

// Figures Required Dates

	// Get Vars

	$RawTime = strtotime(mysql_result($result,$i,'Venue_StartDate'));
	$RegisterRaw = strtotime("-30 days" ,$RawTime);
	if($id == 14){$RebateRaw = strtotime("-41 days" ,$RawTime);}
	else {$RebateRaw = strtotime("-45 days" ,$RawTime);}

	// Rebates need to be postmarked 45 Days Before Published Start
	$Rebate_Date = date("M j, Y",$RebateRaw);

	// All must be Registered 30 Days Before Published Start Date
	$Register_Date = date("M j, Y",$RegisterRaw);	

	// Get today information!
	date_default_timezone_set('UTC');
	$CurrentDate = strtotime(date('c'));
}?>


    <?php  if ($i == 0) {?>

    <div>
        <font size="+2">
        <?php echo $SDate." thru ".$EDate; ?>
      	</font>
    </div>
    
    <?php if ($id == 24) { ?>
      <a style="color:#009; font-size: 1.5em" href="/GeneralScheduleOutline.pdf">General Schedule</a><br/>
      <a style="color:#009; font-size: 1.5em" href="/ProgramScheduleQC2017.pdf">Program Schedule</a>
    
    <?php } else if ($id == 27) {?>
      <a style="color:#009; font-size: 1.5em" href="/DreamstarScheduleMadison2017.pdf">Program Schedule</a>
    <? }?>

    <div id='Venue_Location' class="Venue_Location">
    	Event Location </br>
        <font size="+1">
		<?php  
		if (strlen($Venue) >1){
			echo "$tab$Venue<br />$tab$Address</br>$tab$City $Zip</br>"; 
			echo $tab; ?><a style="color:#009" href="#" onclick='window.open("http://maps.google.com/maps?geocode=&q=<?php  echo "$Address $Zip ($Venue)"; ?>")'>View Map</a>
        <?php 
		} 
		
		# If no events. 
		else{echo $tab."Venue Coming Soon!";}?>
		</font>
    </div>

	<?php if(in_array($id, array(11, 12, 14, 15, 16, 17, 18, 19, 20, 21,22,23))){		
		switch ($id) {
			case 11: $CompName = "MAD14"; break;
			case 12: $CompName = "QCA14"; break;
			case 14: $CompName = "DES14"; break;
			case 15: $CompName = "TWC14"; break;
			case 16: $CompName = "QCA15"; break;
			case 17: $CompName = "MAD15"; break;
			case 18: $CompName = "DES15"; break;
			case 19: $CompName = "TWC15"; break;
			case 20: $CompName = "QCA16"; break;
			case 21: $CompName = "MAD16"; break;
			case 22: $CompName = "DES16"; break;
			case 23: $CompName = "TWC16"; break;
					
		}
	?>
        
	<div id='Venue_Results' class="Venue_Location">
    	Competition Schedule/Results<br />
        <span style="padding-left:25px;font-size:18px;">
        <a href="/results.php?Comp=<?php echo $CompName; ?>" style="color:#009">Click here</a></span>
    </div>
    <?php } ?>

    <div id='Venue_Dates' class='Venue_Dates'>
<?php if ($CurrentDate <= $RebateRaw) {?>
        Rebate Deadline</br>
    	<font size="+1">
		<?php 
		if ($CurrentDate <= $RebateRaw){
			echo $tab."Must be Postmarked by: ".$Rebate_Date;?><br/>
    	    <?php echo $tab; ?><a href="/rebates.php" style="color:#009">View Rebates</a>
    	</font><?php } 

		else {echo $tab."Sorry the Rebate Deadline has past.";}

		?><br/><br/>
		<span class="Venue_Dates"><?php }# End Rebate Deadline?>
		Registration Deadline</span></br>

        <font size="+1">

		<?php 

		// Logic to Hide this Change this line!

		// Last Day to Register was

		if ($CurrentDate <= $RegisterRaw){

		echo $tab."Last Day to Register: ".$Register_Date; ?><br />

        <?php echo $tab; ?><a href="/forms.php" style="color:#009">Registration Forms</a>
        <?php echo "</br>$tab"; ?><a href="http://dreamstarnow.dancecompgenie.com/" style="color:#009">Register Online</a>

        </font><?php }

		else {echo "</font><span style='font-size:14pt;'>{$tab}Sorry the Registration Deadline has past. <br />{$tab}Please <a href='/contactus.php' style='color:#009' >Contact Us</a> to see if openings are still available</span>";}

		?>

    </div>

	<div id='Venue_Hotel' class='Venue_Hotel' <?php if(!in_array($id, array(11, 12, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 27, 28))){echo 'style="display:none"'; }?>>

    Hotel Information

    <br />

    <font size="+1">

    <?php
	if($id == 11){
		echo $tab."Marriott Madison West / Middleton<br>$tab 2266 Deming Way<br>$tab Middleton, WI 53562<br>$tab Phone: (608) 208-0100<br/>$tab Fax: (608) 203-0101<br/>
		$tab <a style='color:#009' href='http://www.courtyardmadisonwest.com'  target='_blank'>http://www.courtyardmadisonwest.com</a></br>$tab Mention Dreamstar to get a discounted rate";}
	elseif(in_array($id, array(12, 16))){
		echo $tab."Quality Inn<br>$tab 1000 E. Iowa St.<br>$tab Eldridge, IA 52748<br>$tab (563) 285-4600</br>$tab Mention Dreamstar to get a discounted rate";}
	elseif($id == 14){
		echo $tab."Super 8 Indianola Des Moines<br>$tab 1701 N Jefferson Way<br>$tab Indianola, IA 50125<br>$tab (515) 961-0058</br>$tab Mention Dreamstar to get a discounted rate $73.47/night";}
	elseif(in_array($id, array(15, 23))){
		echo $tab."Staybridge Suites<br>$tab 7821 Elm Creek Blvd.<br>$tab Maple Grove, MN 55369<br>$tab (763) 494-8856</br>$tab Mention Dreamstar to get a discounted rate";}
	# DeForest Comfort Inn
	elseif(in_array($id, array(17, 21))){
		echo $tab."Comfort Inn & Suites<br>$tab 5025 County Highway V<br>$tab DeForest, WI 53532<br>$tab (608) 846-9100</br>$tab Mention Dreamstar to get a discounted rate";}
	# Des Moines Hampton Inn
	elseif(in_array($id, array(18, 22))){
		echo $tab."Hampton Inn Airport<br>$tab 5001 Fleur Drive<br>$tab Des Moines, IA 50321<br>$tab (515) 287-7300</br>$tab Mention Dreamstar to get a discounted rate";}
	elseif($id == 19){
		echo $tab."Boarders Inn & Suites<br>$tab 1801 Lavender Dr<br>$tab Faribault, MN 55021<br>$tab (507) 334-9464</br>$tab Mention Dreamstar to get a discounted rate";}
	elseif(in_array($id, [20, 24])){
		echo $tab."Country Inn & Suites<br>$tab 140 East 55th Street<br>$tab Davenport,  IA 52806<br>$tab (563) 388-6444";//</br>$tab Mention Dreamstar to get a discounted rate";}
		}
	elseif($id == 27){
		echo "Holiday Inn Express of DeForest<br> 7184 Morrisonville Rd.<br> Deforest, WI 53532<br>608-846-8686";}
	elseif($id == 25){
		echo "Hampton Inn Des Moines Airport<br> 5001 Fleur Dr.<br> Des Moines, IA 50321<br> 515-287-7300";}
	elseif($id == 28){
		echo "Hilton Garden Inn Bloomington<br> 5140 American Blvd. W.<br> Bloomington, MN 55437<br> 952-831-1012";}

	echo "<br>(Mention Dreamstar to get a discounted rate)";
/*
	if (false){
		echo "<b>".$tab.$HotelName."</b><br/>".$tab.$HAddress."<br/>".$tab.$HCitySt." ".$HZip."<br/>";
		if (strlen($HPhone)>1)
			echo $tab.$HPhone."<br/>";
		if (strlen($HWebsite)>1)
			echo $tab.$HWebsite."<br/>";	
		if (strlen($HNotes)>1)
			echo $tab.$HNotes."<br/>";
		echo $tab.'<a style="color:#009" href="http://maps.google.com/maps?geocode=&q=('.$HotelName.") ".$HAddress." ".$HZip.'">View Map</a>';			
	}
*/
// 	else{ echo $tab."Hotel Coming Soon!";}
?>

    </font>

    </div>
<?php 
// Ends N/A Hide all errors exception! 
} 

# If No Venue is Selected
else {echo "<h2> Select a Tour Location from the menu to the right.</h2>";} 

?>
  
</div><!-- End content  -->
<div class="tourdates"><?php require_once("V2/_CSS_Files/dates.php");?> </div> <!-- End tourdates -->
<div class="footer"><?php require_once("V2/_CSS_Files/footer.php");?> </div> <!-- End footer -->
</div> <!-- Containter End -->
</body>
</html>

