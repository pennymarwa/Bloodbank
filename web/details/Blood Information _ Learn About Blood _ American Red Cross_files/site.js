$(document).ready(function(){
    // Updated Global Search functionality

    $("#subtop ul.links li.searchbox").hide();
    $("#subtop ul.links li.search a").click(function(e){
      e.preventDefault();
      if($(this).hasClass("active")){
        $(this).removeClass("active");
        $("#subtop ul.links li.searchbox").hide();
        $("#subtop ul.links li.accessibility, #subtop ul.links li.espanol").fadeIn("slow");
      } else {
        $(this).addClass("active");
        $("#subtop ul.links li.searchbox").fadeIn("slow");
        $("#subtop ul.links li.accessibility, #subtop ul.links li.espanol").hide();
      }
      return false;
    });

    // Global Blood Drive Search 
    $('#bld-hdr-srch input[name=zipSponsor], #bld-hdr-srch2 input[name=zipSponsor]').change(function(){
      $(this).removeClass('error');
    });
    $('#bld-hdr-srch, #bld-hdr-srch2').submit(function(e){
      // Checker for placeholder text equaling value of input field
      $(this).find("input[placeholder], textarea[placeholder]").each(function() {
        if ( this.value == $(this).attr("placeholder")) {
            this.value = "";
        }
      });
      // test and retrieve value
      var zipSponsorVal = $(this).find('input[name=zipSponsor]').val();
      if(zipSponsorVal.length == 0){
        $(this).find('input[name=zipSponsor]').addClass('error');
        e.preventDefault();
        return 0;
      }
      // GA Label
      var gaLabel = "Global Drive Search";
      if($(this).is("#bld-hdr-srch2")){
        gaLabel = "Banner Drive Search";
      }
      var pageHostName = window.location.hostname;
      var pagePathName = window.location.pathname;
      if(pageHostName==="www.redcrossblood.org" && pagePathName==="/"){
        gaLabel += " Homepage";
      }
      // GA Tracking
      var postalCodeRegex = /^([0-9]{5})(?:[-\s]*([0-9]{4}))?$/;
      var gaAction = "Blood Donation - ";
      if(!postalCodeRegex.test(zipSponsorVal)){
        // Set for Sponsor
        gaAction += "Sponsor Code";
      } else {
        // Set for Zip
        gaAction += "Zip Code"
      } 
      pageTracker._trackEvent(gaLabel , gaAction, zipSponsorVal);
    });

  // Javascript Solution for PlaceHolder
  if ( !("placeholder" in document.createElement("input")) ) {
      $("input[placeholder], textarea[placeholder]").each(function() {
        var val = $(this).attr("placeholder");
        if ( this.value == "" ) {
          this.value = val;
        }
        $(this).focus(function() {
          if ( this.value == val ) {
            this.value = "";
          }
        }).blur(function() {
          if ( $.trim(this.value) == "" ) {
            this.value = val;
          }
        })
      });
    }

});