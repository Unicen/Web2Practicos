{include file="header.tpl" active="materias"}

	<div class="container">


	<h1>Asistencias <small>{$materia["Nombre"]}</small></h1>
	<hr>
	<form class="form-horizontal">
		<div class="form-group">
	    <label for="inputDate" class="col-sm-2 control-label">Fecha</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="inputDate" placeholder="dd/mm/aaaa">
	    </div>
	  </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Asistencias</label>
			{foreach from=$alumnos item=alumno}
				<div class="col-sm-offset-2 col-sm-12 checkbox">
				  <label>
				    <input name="alumno{$alumno["id"]}" type="checkbox" value="">
				    {$alumno["Nombre"]}
				  </label>
				</div>
			{/foreach}
		</div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Enviar</button>
	    </div>
	  </div>
	</form>

{include file="footer.tpl"}
