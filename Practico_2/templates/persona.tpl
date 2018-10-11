{include file="header.tpl" }

	<div class="container">

		<h1>Datos personales</h1>
		<br/>

		<form>
			<div class="form-group">
			<label for="Nombre">Nombre</label>
			<input type="text" class="form-control" name="nombre"id="Nombre" aria-describedby="NombreHelp" placeholder="José">
			</div>

			<div class="form-group">
			<label for="Apellido">Apellido</label>
			<input type="text" class="form-control" name="apellido"id="Apellido" aria-describedby="ApellidoHelp" placeholder="Gonzalez">
			</div>


			<div class="form-group">
				<label for="example-date-input" class="col-xs-2 col-form-label">Fecha de nacimiento</label>
				<div class="col-xs-10">
					<input class="form-control" type="date" name="fecha" value="0000-00-00" id="example-date-input">
				</div>
			</div>

		<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
		{if (isset($nombre))}
		<div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>{$nombre} {$apellido}</h3>
						<p>Fecha de nacimiento: {$fecha}</p>
						<p>Nació un </p>
						<p>Tiene días  Días</p>
						<p>Semanas</p>
						<p> Meses</p>
						<p> Años</p>
					</div>
				</div>
			</div>
		</div>
		{/if}

	</div>



{include file="footer.tpl"}
