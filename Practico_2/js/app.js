$(document).ready(function(){
  setHandlers();
});

function setHandlers(){
  $("#comment-form").submit(saveComment);
}

/* Operaciones ejercicio 3 */
function saveComment(e){
  e.preventDefault();
  $.ajax({
    url: 'comentarios.php',
    method: 'POST',
    data: $(this).serialize(),
    success: renderComment
  });
}

function renderComment(body){
  $(body).hide().prependTo("#comments").fadeIn("slow");  
}
