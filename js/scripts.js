$(document).ready(function(){
	


	//Fade out other elements when one is hovered 
	$("a.fadehover").hover(
		function() {
			$(this).siblings().not("div.projectDetailsContainer").css({"opacity": ".3"}, "slow").addClass('smooth');
			},
		function() {
			$(this).siblings().not("div.projectDetailsContainer").css({"opacity": "1"}, "slow");
			}
	);


	//Toggle project details div when icon is clicked 
	$("a.fadehover").click(
		function() {
			//Sets a variable based on the icon clicked
			var currentProjectName = $(this).children().attr("alt");

			if (currentProjectName === currentProjectName) {

				//Slide all other projectDetails divs up out of sight
				$("div.projectDetailsContainer").children().not(currentProjectName).stop().slideUp(900, 'swing', function(){
					$("div.projectDetailsContainer").children().css("height", "auto");

					//Hide projectDetails descriptions
					$("div.projectDetails p").animate({"opacity": "0"}, 0);
				});

				//Slide the corresponding clicked project div down into sight
				$("#" + currentProjectName).stop().slideToggle(900, 'swing', function(){
				
					//Show projectDetails description
					$("#" + currentProjectName + " p").animate({"opacity": "1"}, 900);
					
				});
				
				//Scroll to project top
				$("html, body").animate({scrollTop: $(this).offset().top}, 1000);
			}
		}
	);

	
});