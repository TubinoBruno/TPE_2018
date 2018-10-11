{include file="header.tpl" }

	<div class="container">

		<form id="formulario">
		  <div class="form-group">
		    <label for="name">Nombre</label>
		    <input type="text" class="form-control" name="datos_personales "id="name" placeholder="Nombre">
		  </div>
		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" name="mail"id="email" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="comment">Comentario</label>
		    <textarea class="form-control" id="comment" name="coment"rows="3" placeholder="Comentario..."></textarea>
		  </div>
		  <input type="button" id="boton" class="btn btn-default" value="enviar"/>
		</form>
		<h1>Comentarios</h1>
		{if (isset($datos_personales))}
		<div id="comments">
			{include file="comentario_simple.tpl"}
		</div>
		{/if}
	</div>



{include file="footer.tpl"}
