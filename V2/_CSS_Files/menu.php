<body> 

<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td align="left"><img style="margin-bottom:-10px;" src="/V2/LOGOS/Official/1-color-white/Dreamstar-1c-w-large.png" width="551" height="212" /></td> 
  <td width="221" valign="bottom" style="margin-bottom:-10px;"><?php include('slideshow.php'); ?><br/></td>
</tr>

  <tr>

    <td><nav><ul>

      <li><?php
    if (isset($Title) && in_array($Title, array("Welcome to Dreamstar Productions"))) {echo '<a href="javascript:void(0)">Home</a>';}
    else {if($_SERVER["REQUEST_URI"] == "/V2/*"){echo '<a href="/V2/">Home</a>';} else {echo '<a href="/">Home</a>';}}
    
    ?><ul>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
          <li><a href="missionvision.php">Mission &amp; Vision</a></li>
          <li><a href="newsletter.php">Our Brochure</a></li>
          </ul>
        </li>

      <li><a href="results.php">Results</a></li>

        <li><a href="javascript:void(0)">Rules &amp; Pricing</a>
        <ul>
          <li><a href="RulesAndRegulations.php">Official Rules</a></li>
          <li><a href="RulesAndRegulations.php#EntryFees">Regional Entry Fee</a></li>
          <li><a href="RulesAndRegulations.php#StudioRebates">Rebates</a></li>
          <li><a href="masterclass.php">Master Classes</a></li>
          <li><a href="dancechallenge.php">Dance Challenge</a></li>
        </ul></li>

        <li><a href="RulesAndRegulations.php#Registration">Registration</a>
        <ul>
          <li><a href="RulesAndRegulations.php#EntryDivisions">Entry Division</a></li>
          <li><a href="RulesAndRegulations.php#TimeLimits">Time Limits</a></li>
          <li><a href="RulesAndRegulations.php#AgeGroups">Age Groups</a></li>
          <li><a href="RulesAndRegulations.php#CompetitionLevels">Competition Levels</a></li>
          <li><a href="RulesAndRegulations.php#PerformanceCategories">Performance Categories</a></li>
          <li><a href="non-performance-categories.php">Non-Performance Categories</a></li>
          <li><a href="forms.php">Forms</a></li>
          <!--<li><a href="https://register.dreamstarnow.com">Register Online Now!</a></li>-->
    </ul></li>

      <li><a href="RulesAndRegulations.php#Scoring">Scoring &amp; Awards</a>
      <ul>
          <li><a href="RulesAndRegulations.php#Scoring">Scoring</a></li>
          <li><a href="RulesAndRegulations.php#Awards">Awards</a></li>
      </ul></li>
      
      <!-- <li><a href="http://dreamstarnow.dancecompgenie.com/">Register Online</a></li> -->
      <li><a href="NewRegistration2017.php">Register Online</a></li>
      
    </ul>
    </nav>
    </td>
  </tr>

</table>
