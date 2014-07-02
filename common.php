<?php

function Head($feed, $path)
{
  echo"<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
  <head>
    <title>Kevin N. Coleman</title>

    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width\" />
    <meta name=\"keywords\" content=\"kevin coleman, kevin n. coleman, portfolio, graphic, design, art, web, walla walla, photography, print\" />
    <meta name=\"google-site-verification\" content=\"o44f3AcKhRh3nujf3xCibW0NBlYaNrXCLpT0-NcgwJY\" />
    
    <link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" />

    <script type=\"text/javascript\" src=\"//use.typekit.net/ntp1hxp.js\"></script>
    <script type=\"text/javascript\">try{Typekit.load();}catch(e){}</script>
    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js\"></script>
    <script type=\"text/javascript\" src=\"js/scripts.js\"></script>
  </head>
  ";
return;
}


function OpenBody($path)
{
  echo "<body>
    <div id=\"menu\"> 
      <div class=\"menutile\"><a href=\"".$path."design.php\"><img src=\"".$path."img/menu-home.png\" alt=\"Home\" /></a></div>
      <div class=\"menutile\"><a href=\"".$path."contact.php\"><img src=\"".$path."img/menu-bio.png\" alt=\"Bio\" /></a></div>
    </div> <!--menu-->";
return;
}
  
  //content here
  
function CloseBody()
{
  echo "    <div class=\"clear\"> </div><!--clear-->
  <!-- Google Analytics Code -->
    <script type=\"text/javascript\">
    var gaJsHost = ((\"https:\" == document.location.protocol) ? \"https://ssl.\" : \"http://www.\");
    document.write(unescape(\"%3Cscript src=\'\" + gaJsHost + \"google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E\"));
    </script>
    <script type=\"text/javascript\">
    try {
    var pageTracker = _gat._getTracker(\"UA-8459146-1\");
    pageTracker._trackPageview();
    } catch(err) {}</script>
  <!-- End of Google Analytics Code -->
  </body>
  </html>";
return;
}

?>