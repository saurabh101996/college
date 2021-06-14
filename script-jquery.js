/*resposive menu Bar*/
	$(document).ready(function(){
  	$("#bar").on("click", function(){
    $("#nav-links").css("right","0px");
    $("#close").on("click",function(){
    $("#nav-links").css("right","-200px");
    })
  });
});





/*login overlay Script*/ 

$(document).ready(function(){
  	$(".fa-sign-in-alt").on("click", function(){
    $("#overlay").css("display","block");
    $(".fa-times-circle").on("click",function(){
    $("#overlay").css("display","none");
    })
  });
});


/*login form script*/

$(document).ready(function(){
		$("#register-btn").on("click",function(){
			$("#register").css("left","50px");
			$("#login").css("left","-250px");	
			$("#underline").css("transform", "translateX(100%)");
		});
	});

	$(document).ready(function(){
		$("#login-btn").on("click",function(){
			$("#login").css("left","50px");	
			$("#register").css("left","450px");	
			$("#underline").css("transform", "translateX(-0%)");
		});
	});





	/*course script */

var sub1 = $("#course-details1");
var sub2 = $("#course-details2");
var sub3 = $("#course-details3");
var sub4 = $("#course-details4");
var sub5 = $("#course-details5");

var btn1 = $("#btn1");
var btn2 = $("#btn2");
var btn3 = $("#btn3");
var btn4 = $("#btn4");
var btn5 = $("#btn5");



$(document).ready(function(){
	$(btn1).on("click",function(){
		$(sub1).css("transform","translateX(0)");
		$(sub2).css("transform","translateX(100%)");
		$(sub3).css("transform","translateX(100%)");
	});	
});

$(document).ready(function(){
	$(btn2).on("click",function(){
		$(sub1).css("transform","translateX(100%)");
		$(sub2).css("transform","translateX(0)");
		$(sub3).css("transform","translateX(100%)");
	});	
});$(document).ready(function(){
	$(btn3).on("click",function(){
		$(sub1).css("transform","translateX(100%)");
		$(sub2).css("transform","translateX(100%)");
		$(sub3).css("transform","translateX(0)");

	});	
});

$(document).ready(function(){
	$(btn4).on("click",function(){
		
		$(sub4).css("transform","translateX(0)");
		$(sub5).css("transform","translateX(100%)");

	});	
});$(document).ready(function(){
	$(btn5).on("click",function(){

		$(sub4).css("transform","translateX(100%)");
		$(sub5).css("transform","translateX(0)");

	});	
});
