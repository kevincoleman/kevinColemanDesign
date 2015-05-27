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
      <div id=\"contactinfo\">
        <span class=\"title\">Kevin N. Coleman</span>&nbsp;&nbsp;
        <div class=\"socialico\">
        <a href=\"mailto:kevin.n.coleman@gmail.com\" class=\"smooth\" title=\"Email\">&nbsp;</a>
          <a href=\"https://twitter.com/kevinncoleman\" target=\"_blank\" class=\"smooth\" title=\"Twitter\">l</a>
          <a href=\"http://www.linkedin.com/in/kevinncoleman\" target=\"_blank\" class=\"smooth\" title=\"LinkedIn\">i</a>
          <a href=\"https://github.com/kevincoleman\" target=\"_blank\" class=\"smooth\" title=\"gitHub\">g</a>
          <a href=\"http://dribbble.com/kevincoleman\" target=\"_blank\" class=\"smooth\" title=\"Dribbble\">d</a>
        </div> <!--socialico-->
      </div> <!--contactinfo-->";
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
