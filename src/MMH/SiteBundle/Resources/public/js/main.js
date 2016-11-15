
// Set the width of the cards progress bar
$(document).ready(function() {
  // Get every dom object which class ='progression'
  $('.progression').each(function(){
    // get the width of element from it's children
    var width = $(this).children().text();
    // Make sure it's not over 100%
    width >= 100 ? width = 100 : width = width;
    // set the width of the progress bar
    $(this).css('width', width);
  });
});
