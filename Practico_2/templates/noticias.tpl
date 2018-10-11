{include file="header.tpl" }

	<div class="container">

		<h1>Noticias</h1>
		<br/>
		{foreach from=$noticias item=noticia}

			<div class="blog-post">

				<h2> {$noticia["Titulo"]}</h2>
				<p>{$noticia["Copete"]}</p>
				<p>{$noticia["Cuerpo"]}</p>

			</div>
			{/foreach}

	</div>

{include file="footer.tpl"}
