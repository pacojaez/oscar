// *************** Button load more fade effect *************************

$("#load").fadeToggle(false);

$('.photo-gallery').on("click", '#btn-load-more', function(){
    $("#load").fadeToggle();
    $(this).toggle();
    $(".photo-gallery").append("<button id='btn-load-less'>LOAD LESS</button>");
});

$('.photo-gallery').on("click", '#btn-load-less', function(){
    $("#load").fadeToggle();
    $(this).toggle();
    $(".photo-gallery").append("<button id='btn-load-more'>LOAD MORE</button>");
});

// ************************** Modal images ******************************
$("img").on("click", function(){
  $("#modal-image").attr('src',$(this).attr('src'));
  $(".modal-dialog p").text($(this).attr("alt"));
  $("#myModal").modal('show');
});

// ************************** Image Hover effect ************************
$(".photo-gallery").on("mouseenter", "img", function(){
  $(this).css({
    "opacity": "1",
    "cursor": "pointer"
  });
});

$(".photo-gallery").on("mouseleave", "img", function(){
  $(this).css("opacity", "1");
});

/*************************** Open Menu*******************************/
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.getElementById("open").style.display='none';
}

/**************************** Close Menu ***************************/
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("open").style.display='block';
}
