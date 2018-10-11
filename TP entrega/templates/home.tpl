<div class="row">
  <div class="col-xs-12">
  <article>
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="images/slider1.png" alt="...">
                      </div>
                      <div class="item">
                        <img src="images/slider2.png" alt="...">
                      </div>
                      <div class="item">
                        <img src="images/slider3.png" alt="...">
                      </div>
                      <div class="item">
                        <img src="images/slider4.png" alt="...">

                      </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                  {foreach from=$seccion item=seccion}

              <section>
                    <header>
                        <h1>{$informacion["Titulo"]}</h1>
                    </header>
                    <p>
                      {$informacion["Texto"]}
                    </p>
                </section>
                {/foreach}

            </article>


  </div>
</div>
