{include file="header.tpl" active="alumnos"}

	<div class="container">


	<h1>Lista de Alumnos</h1>


	{if isset($alumnos)}
		<ul>
			{foreach from=$alumnos item=alumno}
				<li>{$alumno["Nombre"]}
					<ul>
					{foreach from=$alumno["Materias"] item=materia }
					  <li>{$materia["Nombre"]}</li>
					{/foreach}
				</ul></li>
			{/foreach}
		</ul>
	{/if}
	</div>



{include file="footer.tpl"}
