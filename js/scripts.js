$(document).ready(function(){



  //Fade out other elements when one is hovered
  $("a.fadehover").hover(
    function() {
      $(this).siblings().not("div.projectDetailsContainer").addClass('faded');
      },
    function() {
      $(this).siblings().not("div.projectDetailsContainer").removeClass('faded');
      }
  );


  //Toggle project details div when icon is clicked
  $("a.fadehover").click(
    function(event) {

      event.preventDefault();

      //Sets a variable based on the icon clicked
      var currentProjectName = $(this).children().attr("alt");

      // Roll up all projects
      $(".projectDetails").removeClass('rolledDown');

      // hide project paragraphs
      $(".projectDetails p").removeClass('show');

      // Slide down current project
      $("#" + currentProjectName).addClass('rolledDown');

      // show project paragraphs
      $("#" + currentProjectName + " p").addClass('show');

    }
  );


});
