<!DOCTYPE html>
<html>
<head>
  <title>Master Classes | Dreamstar Productions LLC.</title>
  <meta content="Master Classes - Dreamstar Productions LLC. A Family Oriented Dance Competition Company" name="description">
  <meta content="Dance Competition, Family Oriented, Dancing Competitions,Dreamstar Dance Compeitition Master Classes, Master Classes, Dance Dreamstar" name="keywords"><?php 
          # Load Layout
          require_once("V2/_CSS_Files/head.php");

          $title = "Master Classes";
          ?>
</head>
<body>
  <div class="containter">
    <div class="header">
      <?php require_once("V2/_CSS_Files/menu.php"); ?>
    </div><!-- End header -->
    <div class="content">
      <p class="PageTitle"><?php echo $title; ?></p>
      
      <p>Dreamstar is happy to announce that we are able to offer a Jazz Master Class taught by Jacqueline Spreadbury Feb. 3rd at 7 PM at North Scott High School in Eldridge, IA. I have attached a promotional flyer that you can use to let your dancers know about this opportunity. The cost of this energetic 1 1/2 hour class is $50 for dancers registered to compete at our Dreamstar Dance Competition and $60 for those dancers that are not registered.</p>

<p>You can download application forms below and mail them with your payment to Dreamstar Productions, PO Box 101, Eldridge, IA 52748.</p>

<p>Jackie is a wonderful dance educator and your dancers will enjoy her upbeat class. Encourage your dancers to take advantage of this great opportunity!</p>

      
      <p><b>Master Classes</b> will be offered durring our competition weekend, and be 90 minutes in length.</p>
      <p><strong>Pricing:</strong> Students signing up for the $60 Master Class will pay only $50 for the class if they are competing in the competition.</p>
      <p>We ask that the students sign up on the Master Class Sign-up Sheet supplied in the Entry Form Packet. They should send their checks with the entry forms.</p>
      <p><a class="dreamstar-links" href="/_PDF_Files/Master-Class-Registration.pdf" target="_blank">Master Class Entry Form</a><br>
      <a class="dreamstar-links" href="/_PDF_Files/Master-Class-Registration-Individual.pdf" target="_blank">Individual Master Class Entry Form</a></p>
      <h3>Master Class Instructors</h3><?php 
                              include("judges.php");
                              JacquelineSpreadbury("True"); 
                              EvelynRiceWells("True");
                              ?>
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