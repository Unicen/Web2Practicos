<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AirUnicen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
	<div class="container">
		</div>
			<div id="vuelosDiv" >
				<table class="table">
					<tr>
						<th>Origen</th>
						<th>Destino</th>
						<th>Estado</th>
					</tr>
				  {foreach from=$vuelos item=vuelo}
					<tr>
						<td>{$vuelo['origen']}</td>
						<td>{$vuelo['destino']}</td>
						<td><div class="estado" id_vuelo="{$vuelo['id_vuelo']}"></div></td>
					  </td>
					</tr>
				  {/foreach}
				</ul>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/vuelo.js"></script>
  </body>
</html>
