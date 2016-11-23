
// Set the width of the cards progress bar
$(document).ready(function() {
  // Get every dom object which class ='progression'
  $('.progression').each(function(){
    // get the width of element from it's children
    var width = $(this).children().text();
    // adjust margin if value > 100%
    if(width.length > 3) {
      $(this).children().css('margin-left', '82px');
    }
    // Apply
    $(this).css('width', width);
  });
});

// Make the message on the contact for disapear after a time
setTimeout(function(){
  $(".flashmessage").fadeOut('slow');
}, 3000);
