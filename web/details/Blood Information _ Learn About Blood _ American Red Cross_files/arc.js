// JavaScript Document
$(document).ready(function(){
	$("#primary li.inactive").hover(
	  function () {
		$(this).addClass("hover");
	  },
	  function () {
		$(this).removeClass("hover");
	  }
	);
	
	$("body.not-front #logo-image").hover(
		function() {
			this.src = this.src.replace("_off","_on");
		},
		function() {
			this.src = this.src.replace("_on","_off");
		}
	);
	
});

function resetFilter(){ //Custom function to reset views filters,  taken from http://patrickteglia.com/blog/i-hack-hell-out-views-exposed-filters
	// Clear all of the text inputs
	$(".views-exposed-widget input.form-text").each(function(n,element) {
	  $(element).val('');
	});
	$(".white-area-notice").fadeOut(500);
	$(".view-id-my_region").fadeOut(500);
	// Submit the cleared form to reset the page to all items visible
	$("form#views-exposed-form-my-region-block-1").submit();
	
	pathArray = window.location.pathname.split( '/' );
	
	if (pathArray[1] == "students"){
	var header = "Find Local Information for Students";
	} else if (pathArray[1] == "hospitals") {
	var header = "Find Local Hospital Services Information";
	} else {
	var header = "Find Local Blood Drives and News";
	}
	
	
	$("#block-views-my_region-block_1 h2.title").text(header).removeClass("sIFR-replaced");
	sIFR.replaceElement("#block-views-my_region-block_1 h2.title", named({sFlashSrc: "/sites/arc/files/render/akzidenz%20grotesk%20roman%20bold.swf", sColor: "#FE0000", sLinkColor: "#FE0000", sBgColor: "#FFFFFF", sFlashVars: "textalign=left"}));
	
}