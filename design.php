<?php
include('common.php');
Head('', '');
OpenBody('');
?>

    <div id="wrap">
      <div id="projects">
<?php
$i = 0;
foreach (array_merge(glob("img/thumbs/*.jpg")) as $fileName) {
  $i++;
  $fileName = str_replace("img/thumbs/", "", $fileName);
  $projectName = str_replace(".jpg", "", $fileName);  
  
  
  // For any items up to the last four
  if ($i <= count(glob("img/thumbs/*.jpg")) - 4) {
      echo ("       <a href=\"#".$projectName."\" class=\"fadehover\"><img src=\"img/thumbs/".$fileName."\" alt=\"".$projectName."\" /></a>\n");
    $projectDetails[] = $projectName;
    
    if (count($projectDetails) % 4 == 0) {
      echo ("       <div class=\"projectDetailsContainer\">\n");
        foreach ($projectDetails as &$detailDivID) {
      echo ("         <div id=\"".$detailDivID."\" class=\"projectDetails\">\n");
      include("desc/".$detailDivID.".php");
      echo ("\n         </div>"."\n");
        }
      echo ("       </div><!--projectDetailsContainer-->\n");
        unset($projectDetails);
      }
  }
  
  
  // For the last four items
  if ($i > count(glob("img/thumbs/*.jpg")) - 4) {
    
    $projectDetails[] = $projectName;
    $projectIcon[] = $fileName;
    
    if (count($projectDetails) % 4 == 0) {
      echo ("       <div class=\"projectDetailsContainer\">\n");
        foreach ($projectDetails as &$detailDivID) {
      echo ("         <div id=\"".$detailDivID."\" class=\"projectDetails\">\n");
      include("desc/".$detailDivID.".php");
      echo ("         </div>"."\n");
        }
      echo ("       </div><!--projectDetailsContainer-->\n");
        unset($projectDetails);
      }

    if (count($projectIcon) % 4 == 0) {
        foreach ($projectIcon as &$projectIconName) {
          $projectIconAlt = str_replace(".jpg", "", $projectIconName);  
          echo ("       <a href=\"#".$projectIconAlt."\" class=\"fadehover\"><img src=\"img/thumbs/".$projectIconName."\" alt=\"".$projectIconAlt."\" /></a>\n");
        }
      
        unset($projectIcon);
      }

  }

}
?>      </div><!--projects-->
    </div> <!--wrap-->
<?php
CloseBody();
?>