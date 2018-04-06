//Function to handle all minor jquery across the site in Drupal standards

(function ($) {
  Drupal.behaviors.yourBehaviorName = {
    attach: function (context, settings) {

     // to update the url for the back button

     //get current url
     var proto = window.location.protocol
     var hostname = window.location.host
     var pathname = window.location.pathname;
     var url = window.location.href;
     var view_group_tally = "red25/view-group-tally";
     var view_group_tally_advanced = "red25/view-group-tally-advanced";
     var fin = "red25/view-group-tally";
     var red25_path = location.protocol + '//' + hostname  + '/red25';
     var red25_view_advanced = location.protocol + '//' + hostname  + '/red25/view-group-tally';
     

     //alert(addr);



     // Regexp to test if the url contains /view-group-tally and update the back button's href to red25
     if(/view-group-tally/.test(url)){
     	$("nav.standard a.left").attr('href', red25_path);
     }

     
     if (window.location.href.indexOf("?group_id") > -1) {
            $("nav.standard a.left").attr('href', red25_view_advanced);
        }


    }//End of attach function
  }; //End of Function
})(jQuery);