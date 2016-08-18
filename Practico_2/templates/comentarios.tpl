{include file="header.tpl" }

	<div class="container">
		<p>3. Dado un formulario para agregar comentarios, que contiene los campos Nombre, Mail y Comentario. Al presionar el botón submit (sin refrescar la página) :</p>
		<ul>
			<li>añada debajo del formulario el comentario con el Nombre de la persona capitalizado, el mail truncado en 5 caracteres. </li>
			<li>Si el mail es del dominio @gmail.com o @hotmail.com muestre el comentario con un diseño diferente. </li>
		</ul>
		<p><button id="hint-button" class="btn btn-info">HINT!</button>
		<span id="hint-message" >Se deben modificar los archivos: comentarios.php, comentarios.tpl y comentario_simple.tpl</span>
		</p>
		<hr>
		<form id="comment-form">
			<input type="text" name="ajax" value="true" hidden>
		  <div class="form-group">
		    <label for="name">Nombre</label>
		    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
		  </div>
		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="comment">Comentario</label>
		    <textarea class="form-control" name="comment" id="comment" rows="3" placeholder="Comentario..."></textarea>
		  </div>
		  <button type="submit" class="btn btn-default">Enviar</button>
		</form>
		<h1>Comentarios</h1>
		<div id="comments">
			{include file="comentario_simple.tpl"}
		</div>

	</div>



{include file="footer.tpl"}
