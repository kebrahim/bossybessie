<?

// Prints the <head> tag for each page.
function printHeaders() {
  echo "<head>\n";
  echo "    <meta http-equiv=\"Content-Type\" content=\"txt/html; charset=ISO-8859-1\" />\n";
  echo "    <meta http-equiv=\"Content-Language\" content=\"en\" />\n";
  echo "    <title>Training with Beth!</title>\n";
  echo "    <meta http-equiv=\"Content-Script-Type\" content=\"text/javascript\" />\n";
  echo "    <link type=\"text/css\" rel=\"stylesheet\" href=\"/css/styles.css\" />\n";
  echo "    <script src=\"js/menuFunctions.js\" language=\"javascript\" type=\"text/javascript\"></script>\n";  
  echo "  </head>\n";
}

// Prints the button header for each page, including all the buttons.
function printButtonHeader($selectedButton) {
  echo "<div id='header'>\n";
  echo "        <div id='imgHeader'><img src='images/logo_final.png' width='463' height='125' alt='Training with Beth' /></div>\n";
  echo "        <div id='navOuter'>\n";
  echo "          <div id='navInner'>\n";
 
  printButton("index.php", "Home", 58, 20, ($selectedButton == 0));
  printButton("bio.php", "Bio", 85, 20, ($selectedButton == 1));
  printButton("services.php", "Services", 77, 20, ($selectedButton == 2));
  printButton("test.php", "Test", 104, 20, ($selectedButton == 3));
  //printButton("blog.php", "Blog", 42, 20, ($selectedButton == 4));
  printButton("contact.php", "Contact", 77, 20, ($selectedButton == 5));

  echo "          </div>\n";
  echo "        </div>\n";
  echo "      </div>\n";
}

// Prints the HTML for a button, selected or not.
function printButton($url, $buttonName, $buttonWidth, $buttonHeight, $isSelected) {
  $activeButtonName = "images/nav/".$buttonName."_Active.png";
  $inactiveButtonName = "images/nav/".$buttonName.".png";

  echo "            <a href=\"$url\"";
  if (!$isSelected) {
    echo " onmouseover=\"javascript:mdSwapImage('nav$buttonName','$activeButtonName');\" 
           onmouseout=\"javascript:mdSwapImage('nav$buttonName','$inactiveButtonName');\">
          <img src=\"$inactiveButtonName\" ";
  } else {
    echo "><img src=\"$activeButtonName\" ";
  }
  echo "id=\"nav$buttonName\" width=\"$buttonWidth\" height=\"$buttonHeight\" alt=\"$buttonName\" /></a>\n";
}

// Prints the footer for each page.
function printFooter() {
  echo "<div id='footer'><p>\n";
  echo "          <a href='index.php'>Home</a> | \n";
  echo "          <a href='bio.php'>Biography</a> | \n";
  echo "          <a href='services.php'>Services</a> | \n";
  echo "          <a href='test.php'>Testimonials</a> | \n";
//echo "          <a href='blog.php'>Blog</a> | \n";
  echo "          <a href='contact.php'>Contact</a></p>\n";
//echo "          <p id='copyright'>&copy;2012 Training with Beth.</p>\n";
  echo "        </div>\n";
}

?>