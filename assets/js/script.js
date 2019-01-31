
var timer;

$(document).ready(function(){
	$(".result").on("click", function(){
		
		var id = $(this).attr("data-linkId");
		var url = $(this).attr("href");
		

		if(!id){
			alert("data-linkId attribute not found");
		}
		
		increaseLinkClickCount(id, url);


		return false;

	});
	var grid = $(".imageResults");

	grid.masonry({
		itemSelector: ".gridItem",
		columnWidth: 200,
		gutter: 5,
		isInitLayout: false
	});
});

function loadImage(src, className){
	var image = $("<img>");

	image.on("load", function(){
		$("." + className + " a").append(image);

		clearTimeout(timer);
		timer = setTimeout(function(){
		$(".imageResults").masonry(), 500;
			
		})
	});

	image.on("error", function(){

	});

	image.attr("src", src);
}

function increaseLinkClickCount(linkId, url){

	$.post("ajax/LinkCount.php", {linkId: linkId})
	.done(function(result){
		if(result != ""){
			alert(result);
			return;
		}

		window.location.href = url;
	});
};