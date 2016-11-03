<?php

require_once("connect.php");

$query="SELECT Venue_ID, Concat(DATE_FORMAT(Venue_StartDate,'%M %e'),' - ',DATE_FORMAT(Venue_EndDate,'%e, %Y')) AS 'Date Range', DATE_FORMAT(Venue_EndDate,'%Y') AS Year, Venue_Title FROM venues WHERE Venue_EndDate >= CURDATE() AND Venue_Shown = True ORDER BY Venue_StartDate ASC";

$result=mysql_query($query);

if ($result){$num=mysql_numrows($result);}
else {$num = 0;} ?>

<h1 class="name" align="center">Competition Dates</h1>

<?php
# Display Upcoming Events!

# Define Constants
$i=0;
$PreviousYear = 2000;

# Run Loop to Add each competition
while ($results = mysql_fetch_assoc($result)) {

  # Get Data from Query
  $Dates=$results['Date Range'];
  $Location=$results['Venue_Title'];
  $id = $results['Venue_ID'];
  $Year = $results['Year'];
  
  # Add's Season Header
  if($Year != $PreviousYear){
    
    if($PreviousYear != 2000){echo '</ul>';}
    echo "<h4 class='SeasonName'>Season: $Year</h4>";
    echo '<ul class="tour-dates">';
    $PreviousYear = $Year;
  }
  
  echo '<li class="tour-dates"><a href="venue_details.php?id='.$id.'">'.$Location."</a><br />$Dates</li>";
  $i++; 
} 

if ($num == 0){?><ul class="tour-dates"><li class="tour-dates">Tour Dates Coming Soon</li><?php }?>
</ul>

<a class="tour-dates" href="http://dreamstarnow.dancecompgenie.com/">Register Online Now!</a>





