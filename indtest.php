<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <?
  echo "<head>\n";
  echo "    <meta http-equiv=\"Content-Type\" content=\"txt/html; charset=ISO-8859-1\" />\n";
  echo "    <meta http-equiv=\"Content-Language\" content=\"en\" />\n";
  echo "    <title>Training with Beth!</title>\n";
  echo "    <meta http-equiv=\"Content-Script-Type\" content=\"text/javascript\" />\n";
  echo "    <link type=\"text/css\" rel=\"stylesheet\" href=\"/css/testi.css\" />\n";
  echo "  </head>\n";
  ?>
  <body>
    <div id="indTestContent">   

    <?
      $tid = $_GET["tid"];
      
      $dbh=mysql_connect ("mysql.trainingwithbeth.com", "bessie", "twbtwb") or 
        die ('I cannot connect to the database because: ' . mysql_error());
      mysql_select_db ("trainingwithbeth");
            
      $query = "select T.gender, T.age, T.testimonial
                from testimonials T where T.testimonial_id = $tid";
      $res = mysql_query($query);
      $testimonial = mysql_fetch_row($res);
  
      echo "<center><h2>$testimonial[0], Age $testimonial[1]</h2></center>";
      echo "<p>$testimonial[2]</p>";
    ?>

      </div>
  </body>
</html>