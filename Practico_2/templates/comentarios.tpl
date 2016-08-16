{include file="header.tpl" }

	<div class="container">

		<form>
		  <div class="form-group">
		    <label for="name">Nombre</label>
		    <input type="text" class="form-control" id="name" placeholder="Nombre">
		  </div>
		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" id="email" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="comment">Comentario</label>
		    <textarea class="form-control" id="comment" rows="3" placeholder="Comentario..."></textarea>
		  </div>
		  <button type="submit" class="btn btn-default">Enviar</button>
		</form>
		<h1>Comentarios</h1>
		<div id="comments">
			{include file="comentario_simple.tpl"}
		</div>

	</div>



{include file="footer.tpl"}
