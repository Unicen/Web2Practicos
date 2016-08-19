{include file="header.tpl" }

	<div class="container">


	<h1>Lista de Figuras</h1>


	{if isset($figuras)}
		<ul>
			{foreach from=$figuras item=figura}
				<li>Circulo, 50</li>
			{/foreach}
		</ul>
	{/if}
	</div>



{include file="footer.tpl"}
