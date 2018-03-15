$(document).ready(function(){
  $('.header').load("header.html", function() {
    $(".header nav").delay(900).animate({"opacity": "1"}, 700);
    $("footer").delay(900).animate({"opacity": "1"}, 700);
  });
  $("#construction").delay(300).animate({"opacity": "1"}, 700);
  $("#background").delay(200).animate({"opacity": "1"}, 700);
});
