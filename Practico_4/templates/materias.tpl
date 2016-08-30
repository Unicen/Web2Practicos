{include file="header.tpl" active="materias"}

	<div class="container">


	<h1>Lista de Materias</h1>


	{if isset($materias)}
		<ul>
			{foreach from=$materias item=materia}
				<li><a href="index.php?action=materia&id={$materia["id"]}">{$materia["Nombre"]}</a></li>
			{/foreach}
		</ul>
	{/if}
	</div>



{include file="footer.tpl"}
