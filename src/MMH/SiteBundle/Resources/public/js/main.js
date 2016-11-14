
// Set the width of the progress bar
$(document).ready(function() {  
  $('.progression').each(function(){
    var width = $(this).children().text();
    width >= 100 ? width = 100 : width = width;
    $(this).css('width', width);
  });
});
