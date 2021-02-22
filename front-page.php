<?php get_header(); ?>


<section class="spacing full" style="background-image:url(<?= THEMEROOT ?>/assets/img/wp-starter-theme.jpg);background-size:cover;">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center pb-4" style="border-bottom: 1px solid #dedede52">
        <h1 class="headline-lg">Bem-vindo ao <br>WP Starter Theme!</h1>
        <p class="text-white" style="text-shadow: 2px 1px 4px #4040406b;">Desenvolvido por Menin</p>
        <p style="color:#a5a5a5;">Versão 3.2.0</p>
      </div>
      <div class="col-12 text-center mt-4">
        <a href="#features" style="color:#000 !important">Saiba mais</a>
      </div>

     </div>
  </div>
</section>


<section class="spacing mt-0" id="features">
  <div class="container">
    <div class="row">
      
      <div class="col-12 mt-4">
        <h2>Classes CSS</h2>
        <p>Encontre várias classes prontas para utilizar no seu layout em <b>/assets/css/sass</b></p>
        <p style="color:#888"><b>Novas classes v3.0.1:</b></p>

        <ul>
          <li>Inputs
            <ul>
              <li>.material-form <i>(parent)</i></li>
              <li>.standard-basic</li>
              <li>.outlined-basic</li>
              <li>.translucent-form</li>
            </ul>
          </li>
          <li>
            Espaçamento de sessão
            <ul>
              <li>.spacing</li>
              <li>.full</li>
            </ul>
          </li>
          <li>Botões 
            <ul>
              <li>.btn</li>
            </ul>
          </li>
          <li>Títulos
            <ul>
              <li>.headline-sm</li>
              <li>.headline-md</li>
              <li>.headline-lg</li>
            </ul>
          </li>
        </ul>
      </div>

      <div class="col-12 mt-4">
        <h2>Plugins</h2>
        <p>Diversos plugins para seu site em <b>assets/plugins</b></p>
        <p style="color:#888"><b>Novo plugin v3.0.0:</b></p>
        <ul>
          <li>Smooth Scroll</li>
        </ul>
      </div>

      <div class="col-12 mt-4">
        <h2>Imagens</h2>
        <p>Tenha em mãos alguns icones e imagens já baixados em <b>assets/img</b></p>
        <p style="color:#888"><b>Novos icones adicionados v3.0.0</b></p>
      </div>

      <div class="col-12 mt-4">
        <h2>Funções PHP</h2>
        <p>Utilize funções integradas ao Wordpress em <b>inc/general.php</b></p>
      </div>

      <div class="col-12 mt-4">
        <h2>Template Parts</h2>
        <p>Utilize a pasta para manter organizada suas páginas, separando as sessões em <b>template-parts</b></p>
      </div>

      <div class="col-12 mt-4">
        <h2>WordPress</h2>
        <p>Páginas totalmente integradas com o WordPress na raiz do projeto.</p>
      </div>

      <div class="col-12 mt-4">
        <h2>Páginas Customizadas</h2>
        <p>Utiliza o arquivo <b>template-default.php</b>, como base para criar outras páginas para seu projeto.</p>
        <p>v3.1.0 Agora você pode iniciar uma nova sessão com o comando inserido nela, verifique no arquivo.</p>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
