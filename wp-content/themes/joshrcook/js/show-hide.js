jQuery(document).ready(function($) {
    // set the max window width before everything gets hidden
    $maxWindowWidth = 767;
    
    // this function hides everything
    function hideAll() {
       $("[class^='show-hide-']").not("[class^='show-hide-controller']").hide();
    }
   
    // if the correct controller is clicked, show the div's that have the child class
    // ex. if .show-hide-controller-1 is clicked, everything with .show-hide-1 is either shown or hidden,
    // depending on what it's current state is
    $("[class^='show-hide-controller-']").click(function() {
        var clickNumber = $(this).attr('class').split('controller-')[1];
        $('.show-hide-' + clickNumber).slideToggle('slow');
        console.log('clicked');
    }); 
   
    // function to hide everything at a certain width
    $(window).resize(function() {
        if ($(this).width() > $maxWindowWidth) {
            hideAll();
        }
    });
    
    // hide everything at the very beginning
    hideAll();
});