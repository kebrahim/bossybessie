<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <?
    include 'functions.php';
  
    printHeaders();
  ?>

  <!-- g+ icon -->
  <script type="text/javascript">
window.___gcfg = {lang: 'en'};
(function() 
{var po = document.createElement("script");
po.type = "text/javascript"; po.async = true;po.src = "https://apis.google.com/js/plusone.js";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(po, s);
})();</script>
  
  <body onload="javascript:preloadNav();">
    <div id="pageContainer">      
      <?
        printButtonHeader(5);
      ?>

      <div id="pageContent">   
        <div id="contactContent">
          <span id="logo"><img src="images/contact.jpeg" width="198" height="216" alt="Training with Beth" /></span>
          <span id="contactText">
            <h2>Contact me</h2>
            <div id="indentText">
              <strong>Email:</strong> <a href='mailto:beth@trainingwithbeth.com'>beth@trainingwithbeth.com</a><br/><br/>
            </div>

            <h2>Follow me</h2>
            <div id="indentText">
              <strong>Facebook:</strong> <a href="http://www.facebook.com/trainingwithbeth"><img src="images/facebook.jpeg" height=36 width=100/></a><br/><br/>
              <strong>Twitter:</strong> <a href="https://twitter.com/trainwithbeth" class="twitter-follow-button" data-show-count="false">Follow @trainwithbeth</a><br/><br/>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
              <strong>Google+:</strong> <a href="https://plus.google.com/112738092693321764593?prsrc=3" rel="publisher" style="display:inline-block;text-decoration:none;color:#333;text-align:center;font:13px/18px arial,sans-serif;white-space:nowrap;"><span style="display:inline-block;font-weight:bold;vertical-align:top;margin-right:5px;margin-top:0px;">trainingwithbeth</span><span style="display:inline-block;vertical-align:top;margin-right:13px;margin-top:0px;">on</span><img src="https://ssl.gstatic.com/images/icons/gplus-16.png" alt="" style="border:0;width:18px;height:18px;"/></a>
            </div>    
          </span>
        </div>
        <!-- contactContent -->
        
        <?
          printFooter();
        ?>
        
      </div>
      <!-- pageContent -->
          
    </div>
    <!-- pageContainer-->
    
  </body>
</html>