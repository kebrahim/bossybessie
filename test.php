<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <?
    include 'functions.php';
  
    printHeaders();
  ?>
  
  <body onload="javascript:preloadNav();">
    <div id="pageContainer">      
      <?
        printButtonHeader(3);
      ?>

      <div id="pageContent">   
        <div id="testContent">
          <span id="testList">
          
          <?
            $dbh=mysql_connect ("mysql.trainingwithbeth.com", "bessie", "twbtwb") or 
              die ('I cannot connect to the database because: ' . mysql_error());
            mysql_select_db ("trainingwithbeth");
            
            $query = "select T.testimonial_id, T.gender, T.age
                    from testimonials T order by T.testimonial_id ASC";
            $res = mysql_query($query);
            
            echo "<ul>";
            while ($row = mysql_fetch_row($res)) {
              echo "<li><a href='indtest.php?tid=$row[0]' target='main'>$row[1], Age $row[2]</a></li>";
            }
            echo "</ul>";
          ?>
          </span>
          <span id="testText">
            <iframe name="main" src="indtest.php?tid=1" frameborder=0 width=522 height=450></iframe>
          </span>
        </div>
        <!-- testContent -->
        
        <?
          printFooter();
        ?>
        
      </div>
      <!-- pageContent -->
          
    </div>
    <!-- pageContainer-->
    
  </body>
</html>