<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <?
    include 'functions.php';
  
    printHeaders();
  ?>
  
  <body onload="javascript:preloadNav();">
    <div id="pageContainer">      
      <?
        printButtonHeader(0);
      ?>

      <div id="pageContent">   
        <div id="homeContent">
          <span id="logo"><img src="images/businesscard_logo.png" width="250" height="99" alt="Training with Beth" /></span>
          <span id="homeText">
            Welcome to the website of Beth Haney, Personal Trainer.<br><br>
            <span id="smallText">Please use the above links to navigate the site.</span>
          </span>
        </div>
        <!-- homeContent -->
        
        <?
          printFooter();
        ?>
        
      </div>
      <!-- pageContent -->
          
    </div>
    <!-- pageContainer-->
    
  </body>
</html>