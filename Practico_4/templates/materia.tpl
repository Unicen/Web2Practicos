{include file="header.tpl" active="materias"}

	<div class="container">


	<h1>{$materia["Nombre"]} <small>Cuatrimestre {$materia["Cuatrimestre"]}</small></h1>


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
