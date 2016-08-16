{include file="header.tpl" }

	<div class="container">

		<h1>Datos personales</h1>
		<br/>

		<form>
			<div class="form-group">
			<label for="Nombre">Nombre</label>
			<input type="text" class="form-control" id="Nombre" aria-describedby="NombreHelp" placeholder="José">
			</div>

			<div class="form-group">
			<label for="Apellido">Apellido</label>
			<input type="text" class="form-control" id="Apellido" aria-describedby="ApellidoHelp" placeholder="Gonzalez">
			</div>


			<div class="form-group">
				<label for="example-date-input" class="col-xs-2 col-form-label">Fecha de nacimiento</label>
				<div class="col-xs-10">
					<input class="form-control" type="date" value="1998-08-19" id="example-date-input">
				</div>
			</div>

		<button type="submit" class="btn btn-primary">Enviar</button>
		</form>

		<div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>José Gonzalez</h3>
						<p>Fecha de nacimiento: 1998-08-19</p>
						<p>Nació un miecoles</p>
						<p>Tiene días 6.572 Días</p>
						<p>938,86 Semanas</p>
						<p>215,92 Meses</p>
						<p>18 Años</p>
					</div>
				</div>
			</div>
		</div>

	</div>



{include file="footer.tpl"}
