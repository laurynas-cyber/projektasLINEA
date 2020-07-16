$(document).ready(function() {
   $('#resize').click(function() {
       let img = $('#my_image').attr("src");
       let appear_image = "<div id='appear_image_div' onClick='closeImage()'> </div>";
       appear_image = appear_image.concat("<img id='appear_image' src='"+img+"' />");
       appear_image = appear_image.concat("<i id='close_image' onClick='closeImage()' class='fas fa-times'></i>");
       $('body').append(appear_image);
       let box = document.getElementById("resize");
       box.style.visibility = "hidden";
//       $('#appear_image').style.width == $('body').style.width;
   });
    
});




function closeImage () {
    let box = document.getElementById("resize");
  $('#appear_image_div').remove();
    $('#appear_image').remove();
    $('#close_image').remove();
    box.style.visibility = "visible";
};

