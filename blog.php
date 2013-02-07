<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <?
    include 'functions.php';
  
    printHeaders();
  ?>
  
  <body onload="javascript:preloadNav();">
    <div id="pageContainer">      
      <?
        printButtonHeader(4);
      ?>

      <div id="pageContent">   
        <div id="blogContent">
          <iframe frameborder=0 src="http://trainingwithbeth.blogspot.com" height="500" width="700">
          <!-- iframe frameborder=0 src="http://blog.trainingwithbeth.com" height="500" width="700" -->
          </iframe>
        </div>
        
        <?
          printFooter();
        ?>
        
      </div>
      <!-- pageContent -->
          
    </div>
    <!-- pageContainer-->
    
  </body>
</html>