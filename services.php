<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <?
    include 'functions.php';
  
    printHeaders();
  ?>
  
  <body onload="javascript:preloadNav();">
    <div id="pageContainer">      
      <?
        printButtonHeader(2);
      ?>

      <div id="pageContent">   
        <div id="servicesContent">
          <div id="servicesText">
            Improve your health and feel better about yourself! Whether you are looking to improve blood 
            pressure, decrease your risk factors for heart disease, help prevent diabetes or osteoporosis, 
            or just looking to lose weight and get your summer body, exercise will help. As an option, you
            can even do this in your own home!
          </div>
          
          <!-- personal training -->
          <span id="ptLogo">
            <img src="images/pt.jpg" width="168" height="161"/>
          </span>
          <span id="ptText">
            <h3>Personal training</h3>
            <p><strong>1 hour assessment</strong> to establish baseline fitness level, goals, and 
              history, including:
              <ul>
                <li>resting assessments<ul>
                  <li>blood pressure</li>
                  <li>resting/target heart rate(s)</li>
                  <li>body composition</li></ul></li>
                <li>movement screen</li>
                <li>cardiovascular test (Vo2)</li>
              </ul>
            </p>

            <p><strong>Individualized training program</strong> based on your goals and needs</p>
          </span>
          <br>
          
          <!-- TRX -->
          <span id="trxLogo">
            <img src="images/trx.jpg" width="266" height="200"/>
          </span>
          <span id="trxText">
            <h3>TRX</h3>
            <p><a href='http://www.trxtraining.com/'>TRX suspension based resistance training</a>, using your body weight.</p>
            <ul>
              <li>total body workout</li>
              <li>strengthen your core!</li>
            </ul>
          </span>
          <br><br>
    
          <!-- Group training -->
          <span id="groupLogo">
            <img src="images/group.jpg" width="250" height="212"/>
          </span>
          <span id="groupText">
            <h3>Group training</h3>
            <p>If you enjoy working out with a friend, try small group training at a more affordable rate.</p>
          </span>
          <br>   
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