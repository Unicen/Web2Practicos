{include file="header.tpl" active="materias"}

	<div class="container">


	<h1>{$materia["Nombre"]} <small>Cuatrimestre {$materia["Cuatrimestre"]}</small><a href="index.php?action=asistencias&materia={$materia["id"]}" class='btn btn-primary pull-right'>Cargar Asistencias</a></h1>


	{if isset($alumnos)}
	<h2>Alumnos</h2>
		<ul>
			{foreach from=$alumnos item=alumno}
				<li>{$alumno["Nombre"]}</li>
			{/foreach}
		</ul>
	{/if}
	</div>



{include file="footer.tpl"}
