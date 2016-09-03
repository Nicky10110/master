//This pulls home.php on first load of the page
$(window).on("load", function(){
	
	$("#content").load($("#home").attr("href"), completeFunction);
});

//This pulls the anchor href that was clicked and loads the appropriate page into an element with id of "content"
$(".navigate").on("click", function(event){
	event.preventDefault();
	$("#content").load($(this).attr("href"), completeFunction);
});
//This is our error checking function
function completeFunction(responseText, textStatus, request){
	if(textStatus == "error"){
		$("#content").text("An error occurred during your request: "+ request.status+" "+request.statusText);
	}
}
