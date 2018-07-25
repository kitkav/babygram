$(document).ready(function() {

  $('#btn').click(function(e) {
    var dir = "stylesheet/";
    var i = 0;
    e.preventDefault();
    while (i < 5) {
      $("#images").append('<img src="' + dir + i + ".png" + '" />');
      i++;
    }
  });
});
