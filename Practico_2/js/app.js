function loadComments(){
  /*$.ajax({
    url: 'dibujarComentario.php',
    success: renderComments
  });*/
}

function renderComments($body){
  $("#comments").html($body);
}

$(document).ready(loadComments);
