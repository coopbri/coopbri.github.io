$(document).ready(function(){
  $('.header').load("header.html", function() {
    $(".header #fadein").delay(900).animate({"opacity": "1"}, 700);
    $("footer").delay(900).animate({"opacity": "1"}, 700);
  });
  $('.header-static').load("header-static.html");
  $("#construction").delay(300).animate({"opacity": "1"}, 700);
  $("#background").delay(200).animate({"opacity": "1"}, 700);
});
