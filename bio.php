<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <?
    include 'functions.php';
  
    printHeaders();
  ?>
  
  <body onload="javascript:preloadNav();">
    <div id="pageContainer">      
      <?
        printButtonHeader(1);
      ?>

      <div id="pageContent">   
        <div id="bioContent">
          <span id="bioCertLogo"><img src="images/vitruvian2.jpg" width="175" height="175" alt="Training with Beth" /></span>
          <span id="bioCertText">
            <h3>Certification and Education</h3>
            <ul>
              <li><a href="http://www.acsm.org/">American College of Sports Medicine (ACSM)</a><ul>
                <li>Certified Personal Trainer</li></ul></li>
              <li><a href="http://www.aaptschool.com/">The Academy</a> (formerly American Academy of Personal Training)</li>
              <li>Pre and Post Natal Fitness Certification</li>
              <li>Innovative Wellness Consulting:<ul>
                <li>Aging &amp; The Brain</li>
                <li>Aging Muscle &amp; Bone</li>
                <li>Training Children</li>
                <li>Maternal Fitness</li>
                <li>HIIT and Circuit Training</li></ul></li>
              <li><a href="http://www.trxtraining.com/">TRX Suspension Training</a></li>
                <li><a href="http://www.aapte.org/">Academy of Applied Personal Training Education (AAPTE)</a>:<ul>
                <li>The Spine-Structure, Function, Dysfunction and Applied Exercise Mechanics</li>
                <li>Bands - Tubes - Balls &amp; Body Weight Exercise</li></ul></li>
            </ul>
          </span>
          
          <span id="bioEmpText">
            <h3>Employment</h3>
            <ul>
              <li><i>Sportime</i>: Quogue, NY<ul>
                <li>Personal Trainer</li>
                <li>4/11 - present</li></ul></li>
              <li><i>Equinox</i>: Woodbury, NY<ul>
                <li>Personal Trainer</li>
                <li>10/10 - 4/11</li></ul></li>
              <li><i>JP Morgan Chase &amp; Co.</i><ul>
                <li>VP, IB Human Resources</li>
                <li>2/09 - present</li></ul></li>
            </ul>
          </span>
          <span id="bioEmpLogo"><img src="images/poses.jpg" width="225" height="200" alt="Training with Beth" /></span>

          <span id="bioEdLogo"><img src="images/education.jpg" width="153" height="151" alt="Training with Beth" /></span>
          <span id="bioEdText">
            <h3>Other Education</h3>
            <ul>
              <li><i>Boston College</i>: Newton, MA<ul>
                <li>BS - Management, Human Resources Management concentration</li></ul>
              <li><i>Lorenzo de'Medici Institute</i>: Florence, Italy</il>
            </ul>
            
            <h3>Interests</h3>
            <ul>
              <li>Running, Tennis, Fishing, Skiing, Travel, Crochet</li>
            </ul>
          </span>
        </div>
        <!-- bioContent -->
        
        <?
          printFooter();
        ?>
        
      </div>
      <!-- pageContent -->
          
    </div>
    <!-- pageContainer-->
    
  </body>
</html>