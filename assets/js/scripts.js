$(document).ready(function(){
  $('.core').load("core.html", function() {
    $(".core #fadein").delay(900).animate({"opacity": "1"}, 700);
    $("footer").delay(900).animate({"opacity": "1"}, 700);
  });
  $('.core-static').load("core-static.html");
  $("#construction").delay(300).animate({"opacity": "1"}, 700);
  $("#brian").delay(200).animate({"opacity": "1"}, 700);
  $("p").delay(200).animate({"opacity": "1"}, 700);
  $("#background").delay(200).animate({"opacity": "1"}, 700);
});
