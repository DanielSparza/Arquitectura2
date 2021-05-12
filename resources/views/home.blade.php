@extends('app')

@section('content')

    <!-- Main -->

    <main id="main">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/carrusel1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/carrusel2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/carrusel3.jpg" class="d-block w-100" alt="...">
              </div>

              <div class="overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="d-none d-md-block col-md-6 offset-md-6 text-justify">
                            <p class="d-none d-md-block lead">La arquitectura es el arte y la técnica de concebir, diseñar 
                                y construir edificaciones que funcionen como hábitat para el ser humano, ya sean viviendas,
                                lugares de trabajo, de recreación o memoriales. El término proviene del griego antiguo,
                                formado por los vocablos arch– (“jefe, autoridad”) y techné (“creación, construcción”),
                                de donde se desprende que es el arte de la construcción.
                            </p>
                        </div>
                    </div>
                </div>
              </div>

            </div>
          </div>
    </main>

<!-- END Main -->

<!-- CLASE TIPOS -->

  <section class="pb-2 pt-5" id="tipos">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-lg-12">
           <h3 class="text-center">Tipos de arquitectura</h3>
        </div>
      </div>
    </div>
  </section>

    <section class="pb-5 pt-4">
        <div class="container-fluid" id="gotica">
            <div class="row">
                <div class="col-lg-6 col-12 pl-0 pr-0">
                    <img src="images/arquitecturagotica.jpg">
                </div>
                <div class="col-lg-6 col-12 pt-4 pb-4 text-justify">
                    <h2>Gótica</h2>
                    <p class="">Este estilo se distingue por la característica de sus proporciones alargadas 
                      y espaciosas, que se extienden mucho sobre el local, donde una persona sentiría
                      una creación muy pequeña. Como contrapeso a la inutilidad de la carne, los colores
                      brillantes florecían en los delgados edificios góticos de encaje de piedra, 
                      fue una época de renacimiento de coloridos vitrales en forma de ventanas con lancetas.
                      Este sistema constructivo permitió alcanzar grandes alturas de arcos, con la ayuda de
                      grandes ventanales, una iluminación de alta calidad. 
                    </p>
                </div>
            </div>
        </div> <br><br>

        <div class="container-fluid" id="islamica">
          <div class="row">
              <div class="col-lg-6 col-12 pt-4 pb-4 text-justify">
                  <h2>Islámica</h2>
                  <p class="">A partir de la arquitectura del Medio Oriente, en el siglo VII, el tipo de 
                    arquitectura con influencia islámica marco la pauta haciendo de esta muy variable
                     dependiendo de la región, como Persia, el norte de África y España. Una mezquita es 
                     el mejor ejemplo de los estilos islámicos, incluyendo los arcos apuntados, las cúpulas 
                     y los patios. La decoración de superficies planas tiene prioridad, ya que el Corán prohíbe
                      las representaciones tridimensionales. 
                  </p>
              </div>
              <div class="col-lg-6 col-12 pl-0 pr-0">
                <img src="images/arquitecturaislamica.jpg">
            </div>
          </div>
      </div> <br><br>

      <div class="container-fluid" id="moderna">
        <div class="row">
            <div class="col-lg-6 col-12 pl-0 pr-0">
                <img src="images/arquitecturamoderna.jpg">
            </div>
            <div class="col-lg-6 col-12 pt-4 pb-4 text-justify">
                <h2>Moderna</h2>
                <p class="">El modernismo es un término general que se le da a un movimiento a principios
                   del siglo XX y que puede incluir estilos como el futurismo, la posmodernidad y la Nueva Clásica.
                    Los formularios estaban pensados para estar libres de detalles innecesarios centrados en la 
                    simplicidad, y se respetan los materiales utilizados en lugar de ocultarlos. 

                </p>
            </div>
        </div>
    </div>
    </section>

<!-- END TIPOS -->

<!-- ARQUITECTURA SOSTENIBLE -->

<section class="pb-2 pt-2" id="sostenible">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-lg-12">
         <h3 class="text-center">La arquitectura sostenible</h3>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container align-items-center">
    <div class="row">
      <div class="col-12 col-lg-12 col-md-12">
          <p class="lead text-justify">
            La arquitectura sustentable, también conocida como arquitectura verde y
             ecoarquitectura, es una manera de concebir proyecto arquitectónico de forma
             sostenible, buscando optimizar recursos naturales y sistemas de edificación que,
              de tal manera, minimicen el impacto ambiental de los edificios sobre el medio
               ambiente y sus habitantes.
          </p>
      </div>
    </div>
    <div class="row pt-2 pb-4">
         <div class="col-12 col-lg-12 col-md-12 align-items-center">
           <img class="img-fluid rounded mx-auto d-block" src="images/sostenible1.png">
         </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-12 col-md-12">
          <p class="lead text-justify">
            Los principios de la arquitectura sostenible incluyen el examen de las condiciones 
            climáticas, la hidrografía y los ecosistemas del entorno en el que los edificios son 
            construidos para el máximo rendimiento con el menor impacto. La eficiencia y la moderación
             en el uso de materiales de construcción, dando prioridad a un bajo consumo de energía en
              comparación con los de alta energía.
          </p>
      </div>
    </div>
    <div class="row pt-2 pb-4">
      <div class="col-12 col-lg-12 col-md-12 align-items-center">
        <img class="img-fluid rounded mx-auto d-block" src="images/sostenible.jpg">
      </div>
 </div>
  </div>

</section>

<!-- END ARQUITECTURA SOSTENIBLE -->

<!-- GRANDES ARQUITECTOS -->

<section class="pb-4 pt-2" id="grandes-arquitectos">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-lg-12">
         <h3 class="text-center">Grandes arquitectos</h3>
      </div>
    </div>
  </div>
</section>

  <section>
    <div class="container pb-4 container-fluid align-items-center">
      <div class="row rounded">

        <div class="col-12 col-lg-4 col-md-6 pt-2 pb-2 align-items-center">
          <div class="card" style="width: 18rem;">
            <img src="images/williammorris.PNG" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">William Morris</h5>
              <p class="card-text text-justify">Fue un arquitecto inglés muy influyente dentro del mundo artístico, 
                además de ser el fundador del movimiento Arts and Crafts que rechazaba totalmente la producción
                 industrial en las artes decorativas y la arquitectura.</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-4 col-md-6 pt-2 pb-2 align-items-center">
          <div class="card" style="width: 18rem;">
            <img src="images/antonigaudi.PNG" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Antoni Gaudí</h5>
              <p class="card-text text-justify">Fue uno de los arquitectos más famosos del siglo XX y un 
                máximo exponente del modernismo. Su uso de líneas curvas, las innovaciones tecnológicas y 
                el empleo de los motivos extraídos de la naturaleza como modelos de la forma, convierten
                 el estilo de Gaudí en algo único.</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-4 col-md-6 pt-2 pb-2 align-items-center">
          <div class="card" style="width: 18rem;">
            <img src="images/normanfoster.PNG" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Norman Foster</h5>
              <p class="card-text text-justify">Es un arquitecto británico. Estudió arquitectura en la Universidad 
                de Mánchester y obtuvo después una beca para continuar sus estudios en la universidad de Yale.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- END GRANDES ARQUITECTOS -->
    
@endsection