<!DOCTYPE html>
<html>
<head>
  <meta content="PSArb1eh4DaffmlmFp0MQppVixQwIa-qWsGgx-2J5q0" name="google-site-verification">
  <meta content="Dreamstar Productions LLC. A Family Oriented Dance Competition Company" name="description">
  <meta content="Dance Competition, Family Oriented, Dancing Competitions,Dreamstar Dance Competition, Dance Dreamstar" name="keywords">
  <title>Rule and Regulations | Dreamstar Productions LLC.</title><?php

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
  $Title = "Dreamstar Rules and Registration";

  ?>
</head>
<body>
  <div class="containter">
    <div class="header">
      <?php require_once("V2/_CSS_Files/menu.php"); ?>
    </div><!-- End header -->
    <div class="content">
      <p class="PageTitle"><?php echo $Title; ?></p>
      <h1>Competition Acceptance</h1>
      <p><strong>Entries must be received 30 days prior to the competition date</strong>. No phone entries will be accepted. All entries will be accepted on a first come, first served basis. All entries are limited to the amount of performance time available. Registration may be completed online or forms may be printed, completed and mailed. <strong>Entries are not considered received in the office without full payment and a completed waiver and release form</strong>. Names and birth date of all contestants must appear on the official entry form or the entry cannot be accepted.</p>
      <h1><a id="AgeGroups"></a>Age Groups</h1>
      <p>Age group is determined by the performer&rsquo;s age as of January 1st of the competition year.</p>
      <ul>
        <li>Petite – Ages 8 &amp; under</li>
        <li>Junior – Ages 9 – 11</li>
        <li>Teen – Ages 12 -15</li>
        <li>Senior – Ages 16 – 19</li>
      </ul>
      <p>The average age determines the age group for Duet/Trio, Small Groups, Large Groups, and Line. Add the ages (Jan. 1st of Competition Year) of all the contestants, and then divide by the number of contestants. If an average age ends in 0.5 or above, round down.</p>
      <p>Duet/Trios, Groups, and Lines that include dancers of different age division will compete no more than one age division younger than the oldest dancer, regardless of average age. (Example: If a group includes a dancer Age 16 (Senior) and the average age is 11 (Junior), the group will compete one level above Junior (Teen).)</p>
      <h1><a id="CompetitionLevels"></a>Competition Levels</h1>
      <ul>
        <li><strong>Twinkling Stars</strong> – Must receive 2 hrs. or less of dance instruction per week and have 2 years or less dance experience.</li>
        <li><strong>Shimmering Stars</strong> – Must receive 3 – 6 hrs. of dance instruction per week.</li>
        <li><strong>Dazzling Stars</strong> – Must receive over 6 hrs. of dance instruction per week.</li>
      </ul>
      <p>Competition Levels are based on total class time. If you have mixed level dancers in a routine and 50% of them are higher level dancers, the routine should be entered at the higher level. Levels may not be changed after the registration deadline (30 days prior to the competition). If a routine is registered incorrectly, it can be adjudicated but will not be allowed to compete for awards. If a level is increased for one student, all their routines must be checked for accuracy.</p>
      <h1><a id="EntryDivisions"></a>Entry Divisions</h1>
      <ul>
        <li>Solo (1 performer)</li>
        <li>Duet/Trio (2 – 3 performers)</li>
        <li>Small Group (4-9 performers)</li>
        <li>Large Group (10 – 19 performers)</li>
        <li>Line (20 or more performers)</li>
      </ul>
      <p><strong>Notes -</strong> An entry that changes division during the competition may be &ldquo;adjudicated only&rdquo;. There will be no line category for Twinkling Stars.</p>
      <h1><a id="PerformanceCategories"></a>Performance Categories</h1>
      <ul>
        <li><strong>Acrobatic / Gymnastic Dance</strong> – A routine demonstrating controlled moves incorporated with music. The majority of the routine must consist of acrobatic moves.</li>
        <li><strong>Ballet</strong> – Routine must consist of ballet technique movements and classical steps.</li>
        <li><strong>Character</strong> – Any form of dance portraying a recognizable character.</li>
        <li>C<strong>logging</strong> – A routine must contain clogging style and technique.</li>
        <li><strong>Folkloric</strong> – Routine using ethnic styles of dance such as polkas, Hawaiian, Spanish, Celtic, etc.</li>
        <li><strong>Hip-Hop</strong> – Routine must consist primarily of hip-hop technique.</li>
        <li><strong>Jazz</strong> – Routine consist primarily of jazz technique.</li>
        <li><strong>Lyrical / Modern</strong> – Routine should demonstrate balance, extension, isolations and control using contemporary lyrical and modern styles.</li>
        <li><strong>Musical Theatre</strong> – Must incorporate some form of dance and either singing, acting, or portraying a character.</li>
        <li><strong>Open</strong> – Any routine that contains multiple styles and categories.</li>
        <li><strong>Pointe</strong> – Dance consisting of ballet technique and classical movement combined with the use of Pointe technique.</li>
        <li><strong>Pom-Pon</strong> – A routine incorporating the use of Pom-Pons.</li>
        <li><strong>Production (Line only)</strong> – Routine using a minimum of 20 dancers which utilizes scenic pieces and conveys a recurring theme through music or story.</li>
        <li><strong>Tap</strong> – Routine must consist primarily of tap technique. No tap sounds are permitted on the music</li>
      </ul>
      <p><strong>Props –</strong> A prop includes anything not worn on the body as part of the costume, such as a hand-held hat, a cane, or any piece of costume that is removed during the routine. Props must come on with the performance, and not require extensive setup. Only those props that can be carried on by the performer or performer&rsquo;s assistant, and are vital to the act are allowed. No equipment or props that require electricity or that are considered hazardous (liquids, fire, smoke, fog devices, knives, throwing of confetti or glitter, etc.) nor live props of any kind are allowed. Production props must be in place within <u>2 minutes</u> of the time the prior act has cleared the stage. Props for all other solo, duet/trio or group acts must be in place within <u>1 minute</u>. The dance floor area must be in the same condition after your performance as before. Failure to comply with these rules could result in loss of points or disqualification.</p>
      
      <h1><a id="NonPerformanceCategories"></a>Non-Performance Categories</h1>
      <p><strong>Outstanding Costume</strong>: Outstanding solo costume, duet / trio  costume, and group costume in both the 11 and under age classification and the  12 and over age classification.  All  Dreamstar entries are automatically eligible for Outstanding Costume Awards at  no additional cost.</p>
<p><strong>Outstanding Choreography</strong>: Outstanding  choreography awards will be presented for each entry division (solo, duet/trio,  sm. group, lg. group, and line) in both the 11 and under and the 12 and over  age classifications.  All Dreamstar  entries are automatically eligible for Outstanding Choreography awards.</p>

      <h1><a id="TimeLimits"></a>Time Limits</h1>
      <ul>
        <li><strong>Solo, Duet/Trio</strong> – 2:45 minutes</li>
        <li style="list-style: none; display: inline">
          <ul>
            <li>Extended Time – 4:30 minutes</li>
          </ul>
        </li>
        <li><strong>Small Group</strong> – 3:00 minutes</li>
        <li style="list-style: none; display: inline">
          <ul>
            <li>Extended Time – 6:00 minutes</li>
            <li>Expanded Time – 10:00 minutes</li>
          </ul>
        </li>
        <li><strong>Large Group, Line</strong> – 4:00 minutes</li>
        <li style="list-style: none; display: inline">
          <ul>
            <li>Extended Time – 7:00 minutes</li>
            <li>Expanded Time – 10:00 minutes</li>
          </ul>
        </li>
        <li><strong>Production</strong> – 6:00 minutes</li>
        <li style="list-style: none; display: inline">
          <ul>
            <li>Extended Time – 9:00 minutes</li>
            <li>Expanded Time – 12:00 minutes</li>
          </ul>
        </li>
      </ul>
      <p><strong>Note -</strong> 1 point will be deducted for every 30 sec. over the time limit</p>
      <h1><a id="EntryFees"></a>Entry Fees</h1>
      <p>For registration fees, please e-mail us at <a style="color: blue" href="mailto:info@dreamstarnow.com">info@dreamstarnow.com</a> or phone us at 563-484-4143.</p>
      <h1><a id="Registration"></a>Registration</h1>
      <p>Registration is <a style="color: blue" href="//register.dreamstarnow.com">available online</a> or via <a style="color: blue" href="/forms.php">paper forms</a>.<br>
      <br>
      <strong>Release forms:</strong> Each performer&rsquo;s parent or legal guardian MUST sign the official <a style="color: blue" href="/entryforms.php?Form=Waiver">Dreamstar Waiver and Release Form</a> in order for each participant to perform at Dreamstar. Teachers&rsquo; signatures are not acceptable for insurance reasons. This original signed release form must be received in the Dreamstar office with all the completed entry forms by the deadline date. One release per student is sufficient. If the studio has a release form signed by each student&rsquo;s parent/legal guardian that covers all competitions entered by the studio for release from responsibility for injuries and / or property damage, Dreamstar will accept a copy of that waiver and release. Download Release Form Here</p>
      <p><strong>Scheduling:</strong> Dreamstar reserves the right to modify a competition length or move the competition site due to unforeseen circumstances. Contestants must perform on the day and time designated. Dreamstar reserves the right to refuse entries from a studio at our discretion.</p>
      <p><strong>Music:</strong> Each studio must furnish its own music for each entry on individual CDs or MP3 format flash drive. Please let us know the format you will use when registering (see Entry Form Instructions). All music for each routine must be turned in to the Sound Engineer no later than ½ hr. before the beginning of that day&rsquo;s competition.</p>
      <ul>
        <li><strong>CD -</strong> Each individual CD must contain only one routine, be properly labeled, cued, and ready to start. Each CD must use the Dreamstar preprinted labels included with your confirmation packet clearly labeled with name of routine, entry number and name of teacher/studio.</li>
        <li><strong>MP3 –</strong> If selected during registration a Dreamstar flash drive will be included in your confirmation packet. We require that all music be in MP3 format. All music files must be named using the MP3 Filename shown below. A list with your studio&rsquo;s competition #&rsquo;s will be included with the flash drive. Be sure to have a back-up CD or digital copy available for each of your routines.</li>
        <li style="list-style: none; display: inline">
          <ul>
            <li><strong><u>MP3 Filename Guidelines:</u></strong></li>
            <li>Competition#-Song Title–Studio.mp3<br>
            Ex: 103-Dancing All Night-Dancing Studios.mp3</li>
          </ul>
        </li>
      </ul>
      <p><a id='StudioRebates'></a><strong>Studio Rebates:</strong> A rebate of 10% of the entry fee will be given to the studio only if the entry fee is $2,000 or more and is received in our office at least 45 days prior to start of the competition. A 3% surcharge will be added to all registrations paid by credit/debit card.</p>
      <p><strong>Protests:</strong> All protests must be submitted by a Teacher or Studio Owner only. The protest must be in writing, signed and received by the regional director within 30 minutes of the incident. Any routine that is protested due to an age discrepancy must provide birth certificates at the time of protest. Failure to produce age documentation could result in disqualification of routines. In order to submit a protest, you must have a routine in the age group / category which is being challenged.</p>
      <p><strong>Refunds:</strong> Absolutely no cash refunds after deadline date!</p>
      <p><strong>Late Entries:</strong> A $10 late fee per dancer will be assessed for entries and/or monies received 21 days or prior to the competition date. A $10 &ldquo;Routine Order Change&rdquo; fee per change may be assessed for changes to any entry after the schedule is created. This includes late changes requested before and during the competition.</p>
      <h1><a id="Scoring"></a>Scoring</h1>
      <h2>Judges</h2>
      <p>Dreamstar judges are a combination of championship caliber competition studio directors, teachers, affiliated with major dance studios and or currently performing dance professionals.<br>
      <br>
      First and foremost, these judges are all well trained in multiple genres of dance and are sensitive to the various skill levels represented by the dancers' differing ages. This mixture of age, breadth of dance experience and extensive background in performing arts contributes to the diverse range of feedback judges can offer all our competitors.<br>
      <br>
      Minimum judges' feedback for every entry includes comments in four main areas: Technique, Choreography, Showmanship, and Overall Impression.</p>
      <h2>Standard Scale</h2>
      <ul>
        <li><strong>Platinum</strong> 300 – 281</li>
        <li><strong>High Gold</strong> 280 – 266</li>
        <li><strong>Gold</strong> 265 – 251</li>
        <li><strong>High Silver</strong> 250 – 236</li>
        <li><strong>Silver</strong> 235 – 221</li>
        <li><strong>Bronze</strong> 220 – 200</li>
      </ul>
      <h1><a id="Awards"></a>Awards</h1>
      <h2>Competition Recognition Awards</h2>
      <ul>
        <li><strong>Trophy</strong> - Awarded for each top score performance.</li>
        <li><strong>Plaque</strong> - Awarded for 2nd and 3rd place performance in each entry division. If 10 or more routines are entered in the division, 4th and 5th place plaques will be awarded.</li>
        <li><strong>Medal</strong> – Awarded as Platinum, High Gold, Gold, High Silver, Silver, Bronze level in the following entry division divisions: Solo, Duet/Trio, Small Group, Large Group, and Line.</li>
        <li><strong>Individual Award</strong> – Each dancer will receive a recognition award for each routine.</li>
        <li><strong>Lanyard</strong> - Each dancer will receive a Lanyard and Badge for each participating student with the registration packet at the beginning of the competition.</li>
      </ul>
      <h2>Top Score Cash Awards</h2>
      <p>All are awarded to the highest scoring in each division and age group. <strong>Note –</strong> There must be 6 or more entries in each division / age group for a cash award to be presented. Independent entries will not receive cash awards.</p>
      <h3>Top Score Solo</h3>
      <ul>
        <li><strong>Dazzling Star</strong> - $50 plus a $25 Dreamstar gift certificate.</li>
        <li><strong>Shimmering Star</strong> - $35 plus a $15 Dreamstar gift certificate.</li>
        <li><strong>Twinkling Star</strong> - $25 plus a $10 Dreamstar gift certificate.</li>
      </ul>
      <h3>Top Score Duet/Trio</h3>
      <ul>
        <li><strong>Dazzling</strong> <strong>Star</strong> - $75</li>
        <li><strong>Shimmering</strong> <strong>Star</strong> - $50</li>
        <li><strong>Twinkling</strong> <strong>Star</strong> - $25</li>
      </ul>
      <h3>Top Score Small Group</h3>
      <ul>
        <li><strong>Dazzling</strong> <strong>Star</strong> - $100</li>
        <li><strong>Shimmering</strong> <strong>Star</strong> - $75</li>
        <li><strong>Twinkling</strong> <strong>Star</strong> - $50</li>
      </ul>
      <h3>Top Score Large Group</h3>
      <ul>
        <li><strong>Dazzling Star</strong> - $125</li>
        <li><strong>Shimmering</strong> <strong>Star</strong> - $100</li>
        <li><strong>Twinkling</strong> <strong>Star</strong> - $75</li>
      </ul>
      <h3>Top Score Line</h3>
      <ul>
        <li><strong>Dazzling Star</strong> - $150</li>
        <li><strong>Shimmering Star</strong> - $125</li>
      </ul>
      <h3>Petite / Junior Production Winner</h3>
      <ul>
        <li><strong>Dazzling</strong> <strong>Star</strong> - $200 and a special plaque will be awarded.</li>
        <li><strong>Shimmering</strong> <strong>Star</strong> - $150 and a special plaque will be awarded.</li>
      </ul>
      <h3>Teen / Senior Production Winner</h3>
      <ul>
        <li><strong>Dazzling</strong> <strong>Star</strong> - $200 and a special plaque will be awarded.</li>
        <li><strong>Shimmering</strong> <strong>Star</strong> - $150 and a special plaque will be awarded.</li>
      </ul>
      <h2>Overall Dreamstar Award</h2>
      <p>Winners of the Overall Dreamstar Award receive $300 and a special trophy will be awarded to the overall highest scoring regional group entry from all the Small Groups, Large Groups, and Lines.</p>
      <h2>Special Awards</h2>
      <ul>
        <li><strong>Judges Special Awards:</strong> Unique, personally hand designed ribbons from our judges acknowledging individual and group achievement presented at each competition.</li>
        <li><strong>Choreography Awards:</strong> Specially designed awards for outstanding choreography will be awarded at each regional competition.</li>
        <li><strong>Galaxy Award for Most Memorable Performance:</strong> Specially designed award for the most memorable/entertaining performances in each age group will also be awarded.</li>
      </ul>
      <p><strong>Award Notes</strong> - All cash awards will be awarded to the teacher or director. There will be no ties in the Top Score, Special &amp; Cash Awards. In the event of a tie, the score sheets will be returned to the judges, who will then break the tie.</p>
      <h1>During the Competition</h1>
      <p><strong>Check in with Stage Manager –</strong> Be sure to check in with the Dreamstar Stage Manager no less than 5 numbers ahead of your scheduled performance. Our Stage Manager ensures that all performances are ready to go on. If you do not check in, the Dreamstar Stage Manager assumes you are not there.<br>
      <br>
      <strong>Dressing areas –</strong> Dreamstar assigns each studio/school with a dressing area. Please respect each other&rsquo;s belongings and space. See a Dreamstar staff member for assistance in locating your assigned area.<br>
      <br>
      <strong>Awards –</strong> All participants are welcome on stage during awards ceremonies. For groups and lines, please designate a &ldquo;captain&rdquo; to accept the award. The captain should know the entry number, name of the routine and number of performers in the group.<br>
      A minimum of 6 entries in each age group and level must be received in order for cash awards to be presented. All award money will be presented to the studio. Dreamstar gift certificates will be presented to the top score soloist.<br>
      <br>
      <strong>Video and photography –</strong> In order to maintain the integrity of choreography and the performer&rsquo;s experience, NO video recording of any sort or flash photography is permitted unless specifically authorized by Dreamstar Productions.<br>
      <br>
      <strong>Miscellaneous –</strong> Acts should be suitable for viewing by the general public. Judges may deduct points on the score sheet for any act they consider inappropriate for any reason. Coaching of performers is strictly prohibited during the performance. In the unlikely event that it is necessary for Dreamstar to cancel a competition, all entry fees will be returned.<br>
      <br>
      Your attendance and/or participation in a Dreamstar event constitutes your approval for the uncompensated use of any photo or video image taken during the event in Dreamstar literature, on the Dreamstar website, or in connection with any other Dreamstar venture. Dreamstar cannot be responsible for lost, stolen, or broken items.<br>
      <br>
      <strong>While in the audience –</strong> Please keep aisles clear at all times. Eating and drinking is allowed only in designated areas. Do not bring food into the auditorium. No smoking is allowed in the competition facility. <strong>Be sure to support all contestants with your generous applause. Good sportsmanship is essential to a good competition!</strong></p>
      <h1>Opportunities available</h1>
      <p><strong>Merchandise –</strong> Dreamstar carries the latest fashions and styles of all the best dance merchandise. Check out our display in the lobby!</p>
    </div><!-- End content  -->
    <div class="tourdates">
      <?php require_once("V2/_CSS_Files/dates.php");?>
    </div><!-- End tourdates -->
    <div class="footer">
      <?php require_once("V2/_CSS_Files/footer.php");?>
    </div><!-- End footer -->
  </div><!-- Containter End -->
</body>
</html>