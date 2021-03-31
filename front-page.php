<?php get_header(); ?>


<section class="spacing min-vh-100 d-flex align-items-center" style="background-image:url(<?= THEMEROOT ?>/assets/img/wp-starter-theme.jpg);background-size:cover;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-center pb-4" style="border-bottom: 1px solid #dedede52">
        <h1 class="headline-1">Bem-vindo ao <br>WP Starter Theme!</h1>
        <p class="text-white fs-3" style="text-shadow: 2px 1px 4px #4040406b;">Desenvolvido por Menin</p>
        <p style="color:#a5a5a5;">Versão 3.3.3</p>
      </div>

      <div class="col-12 mt-4 text-center">
        <a href="#class" class="btn-link fs-4">Conheça o tema</a>
      </div>
    </div>
  </div>
</section>


<section class="spacing" id="class">
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-md-4 col-lg-3">
        <ul class="list-inline position-sticky p-4 border-start" style="top:30px">
          <li>
            <a href="#code-1" class="text-decoration-none fw-bold">Typography</a>
            <ul class="pl-4">
              <li><a href="#code-2" class="text-decoration-none">Headings</a></li>
            </ul>
          </li>

          <li>
            <a href="#code-3" class="text-decoration-none fw-bold">Components</a>
            <ul class="pl-4">
              <li><a href="#code-4" class="text-decoration-none">Button</a></li>
              <li><a href="#code-5" class="text-decoration-none">Cards</a>
                <ul class="pl-4">
                  <li><a href="#code-5-1" class="text-decoration-none">Scale inside Card</a></li>
                  <li><a href="#code-5-2" class="text-decoration-none">Flip Card</a></li>
                </ul>
              </li>
              <li><a href="#code-6" class="text-decoration-none">Drawer menu</a></li>
              <li><a href="#code-7" class="text-decoration-none">Social links</a></li>
            </ul>
          </li>

          <li>
            <a href="#code-8" class="text-decoration-none fw-bold">Forms</a>
            <ul class="pl-4">
              <li><a href="#code-8-1" class="text-decoration-none">Input</a></li>
            </ul>
          </li>
        </ul>
      </div>

      <div class="col-md-8 col-lg-9">
        <div class="row gy-5 row-cols-1">
          <!-- TYPOGRAPHY -->
          <div class="col">
            <h1 class="text-default" id="code-1">Typography</h1>
            <hr class="my-5">
            <!-- Headings -->
            <div id="code-2">
              <h3>Headings</h3>
              <p>Todos os cabeçalhos <span class="text-danger">.display-*</span> do Bootstrap foram reformulados 
              para títulos. Agora para utiliza-los é só escrever <span class="text-danger">.headline-*</span>.</p>
              <div>
                <h1 class="headline-1">.headline-1</h1>
                <h1 class="headline-2">.headline-2</h1>
                <h1 class="headline-3">.headline-3</h1>
                <h1 class="headline-4">.headline-4</h1>
                <h1 class="headline-5">.headline-5</h1>
                <h1 class="headline-6">.headline-6</h1>

                <div class="border p-4 mt-3 bg-light">
                  <code>
                  <span><</span>h1 class="headline-1">.headline-1<span><</span>/h1<span>></span> <br>
                  <span><</span>h1 class="headline-2">.headline-2<span><</span>/h1<span>></span> <br>
                  <span><</span>h1 class="headline-3">.headline-3<span><</span>/h1<span>></span> <br>
                  <span><</span>h1 class="headline-4">.headline-4<span><</span>/h1<span>></span> <br>
                  <span><</span>h1 class="headline-5">.headline-5<span><</span>/h1<span>></span> <br>
                  <span><</span>h1 class="headline-6">.headline-6<span><</span>/h1<span>></span> <br>
                  </code>
                </div>
              </div>
            </div><!-- /.Headings -->
          </div><!-- .col-12 -->

          <!-- COMPONENTS -->
          <div class="col">
            <h1 class="text-default" id="code-3">Components</h1>
            <hr class="my-5">
            
            <!-- button -->
            <div>
              <h3 id="code-4">1- Button</h3>
              <p>Utilize o botão do tema para layouts mais elaborados.</p>
              <div>
                <a href="#!" class="btn-theme">.btn-theme</a>
                <a href="#!" class="btn-theme">.btn-theme <i class="fal fa-chevron-double-right"></i></a>

                <div class="border p-4 mt-3 bg-light">
                  <code>
                    <span><</span>a href="#!" class="btn-theme">.btn-theme<span><</span>/a<span>></span> <br>
                    <span><</span>a href="#!" class="btn-theme">.btn-theme <span><</span>i class="fal fa-chevron-double-right"<span>></span></i><span><</span>/a<span>></span>
                  </code>
                </div>
              </div>
            </div><!-- /.button -->

            <!-- Cards -->
            <div class="mt-5">
              <h3 id="code-5">2- Cards</h3>
              <p>Crie blocos de cards animados apenas usando o cursor do mouse. Confira todos abaixo:</p>

              <!-- scale Card -->
              <div>
                <h4 class="mt-5" id="code-5-1">2.1- Scale inside card</h4>
                <p>Crie blocos animados para suas informações.</p>
                <h5 class="text-secondary mb-3">Exemplo:</h5>

                <div class="card-scale" style="max-width:400px">
                  <i class="fad fa-globe-americas"></i>
                  <h3>olá mundo!</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, non.</p>
                </div>

                <div class="border p-4 mt-3 bg-light">
                  <code>
                    <span><</span>div class="card-scale" style="max-width:400px"<span>></span><br>
                      &nbsp;&nbsp;<span><</span>i class="fad fa-globe-americas"<span>></span><span><</span>/i<span>></span><br>
                      &nbsp;&nbsp;<span><</span>h3<span>></span>olá mundo!<span><</span>/h3<span>></span><br>
                      &nbsp;&nbsp;<span><</span>p<span>></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, non.<span><</span>/p<span>></span><br>
                    <span><</span>/div<span>></span>
                  </code>
                </div>
              </div>
              
              <!-- Flip card -->
              <div>
                <h4 class="mt-5" id="code-5-2">2.2- Flip card</h4>
                <p>Esconda informações e mostre apenas passando o mouse.</p>
                <h5 class="text-secondary mb-3">Exemplo:</h5>

                <div class="scene-card" style="max-width:400px">
                  <div class="card-flip">
                    <div class="card_face front">
                      <p>Olá Mundo!</p>
                    </div>
                    <div class="card_face back">
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Doloremque tenetur asperiores, quis temporibus commodi 
                        ut atque cupiditate rerum voluptates odio?</p>
                    </div>
                  </div>
                </div>

                <div class="border p-4 mt-3 bg-light">
                  <code>
                    <span><</span>div class="scene-card" style="max-width:400px"<span>></span><br>
                    &nbsp;&nbsp;<span><</span>div class="card-flip"<span>></span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span><</span>div class="card_face front"<span>></span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><</span>p>Olá Mundo!<span><</span>/p<span>></span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span><</span>/div<span>></span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span><</span>div class="card_face back"<span>></span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><</span>p<span>></span>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Doloremque tenetur asperiores, quis temporibus commodi ut atque cupiditate rerum voluptates odio?<span><</span>/p<span>></span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span><</span>/div<span>></span><br>
                    &nbsp;&nbsp;<span><</span>/div<span>></span><br>
                    <span><</span>/div<span>></span><br>
                  </code>
                </div>
              </div>

              <!-- Drawer Menu -->
              <div>
                <h4 class="mt-5" id="code-6">3- Drawer menu</h4>
                <p>Deslize o dedo para direita no mobile para abri-lo ou clique no botão abaixo. Utilize <span class="text-danger">.drawerButton</span> para abrir o drawer.</p>
                <h5 class="text-secondary mb-3">Exemplo:</h5>
                
                <button role="button" tyle="button" class="btn btn-outline-primary drawerButton">Abrir drawer</button>
                <nav class="drawer-mobile" id="drawer">
                  <span class="close-menu" aria-label="Fechar">
                    <i class="fal fa-times"></i>
                  </span>
                  <div class="wrap">
                    <ul>
                      <li><a href="#">Início</a></li>
                      <li><a href="">Exemplo submenu <i class="fal fa-arrow-down"></i></a>
                        <ul class="submenu">
                          <li><a href="javascript:void(0);">item 1</a></li>
                          <li><a href="javascript:void(0);">item 2</a></li>
                          <li><a href="javascript:void(0);">item 3</a></li>
                          <li><a href="javascript:void(0);">item 4</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </nav>                

                <div class="border p-4 mt-3 bg-light">
                  <code>
                    <span><</span>button role="button" tyle="button" class="btn btn-outline-primary drawerButton">Abrir drawer<span><</span>/button> <br>
                    <span><</span>nav class="drawer-mobile" id="drawer"><br>
                    &nbsp;&nbsp;<span><</span>span class="close-menu" aria-label="Fechar"><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span><</span>i class="fal fa-times"><span><</span>/i><br>
                    &nbsp;&nbsp;<span><</span>/span><br>
                    &nbsp;&nbsp;<span><</span>div class="wrap"><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span><</span>ul><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><</span>li><span><</span>a href="#">Início<span><</span>/a><span><</span>/li><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><</span>li><span><</span>a href="">Exemplo submenu <span><</span>i class="fal fa-arrow-down"><span><</span>/i><span><</span>/a><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><</span>ul class="submenu"><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><</span>li><span><</span>a href="javascript:void(0);">item 1<span><</span>/a><span><</span>/li><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><</span>li><span><</span>a href="javascript:void(0);">item 2<span><</span>/a><span><</span>/li><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><</span>li><span><</span>a href="javascript:void(0);">item 3<span><</span>/a><span><</span>/li><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><</span>li><span><</span>a href="javascript:void(0);">item 4<span><</span>/a><span><</span>/li><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><</span>/ul><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><</span>/li><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span><</span>/ul><br>
                    &nbsp;&nbsp;<span><</span>/div><br>
                    <span><</span>/nav>
                  </code>
                </div>
              </div>

              <!-- Social links -->
              <div>
                <h4 class="mt-5" id="code-7">4- Social links</h4>
                <p>Crie uma lista de links para as redes sociais</p>
                <h5 class="text-secondary mb-3">Exemplo:</h5>

                <ul class="list-inline social-list">
                  <li>
                    <a href="#!" target="_blank" rel="noreferrer" aria-label="social button">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#!" target="_blank" rel="noreferrer" aria-label="social button">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#!" target="_blank" rel="noreferrer" aria-label="social button">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#!" target="_blank" rel="noreferrer" aria-label="social button">
                      <i class="fab fa-telegram-plane"></i>
                    </a>
                  </li>
                </ul>

                <div class="border p-4 mt-3 bg-light">
                  <code>
                  <span><</span>ul class="list-inline social-list"<span>></span><br>
                    &nbsp;&nbsp;<span><</span>li<span>></span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span><</span>a href="#!" target="_blank" rel="noreferrer" aria-label="social button"<span>></span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><</span>i class="fab fa-instagram"><span><</span>/i<span>></span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span><</span>/a<span>></span><br>
                    &nbsp;&nbsp;<span><</span>/li<span>></span><br>
                    &nbsp;&nbsp;<span><</span>li<span>></span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span><</span>a href="#!" target="_blank" rel="noreferrer" aria-label="social button"<span>></span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><</span>i class="fab fa-facebook-f"><span><</span>/i<span>></span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span><</span>/a<span>></span><br>
                    &nbsp;&nbsp;<span><</span>/li<span>></span><br>
                    &nbsp;&nbsp;<span><</span>li<span>></span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span><</span>a href="#!" target="_blank" rel="noreferrer" aria-label="social button"<span>></span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><</span>i class="fab fa-twitter"><span><</span>/i<span>></span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span><</span>/a<span>></span><br>
                    &nbsp;&nbsp;<span><</span>/li<span>></span><br>
                    &nbsp;&nbsp;<span><</span>li<span>></span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span><</span>a href="#!" target="_blank" rel="noreferrer" aria-label="social button"<span>></span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><</span>i class="fab fa-telegram-plane"><span><</span>/i<span>></span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span><</span>/a<span>></span><br>
                    &nbsp;&nbsp;<span><</span>/li<span>></span><br>
                  <span><</span>/ul<span>></span><br>
                  </code>
                </div>
              </div>
            </div><!-- /.Cards -->
          </div><!-- /.col-12 -->

          <!-- FORMS -->
          <div class="col">
            <h1 class="text-default" id="code-8">Forms</h1>
            <hr class="my-5">

            <!-- inputs -->
            <div>
              <h3 id="code-8-1">1- Inputs</h3>
              <p>Inspirado no material UI, crie inputs customizadas de forma simples. Para as classes com <span class="text-danger">.material-form</span>, utilize a função criada <span class="text-danger" title="Encontre em inc/general.php">input()</span>, escrevendo assim, mesmo código.</p>
              
              <!-- input 1 -->
              <div>
                <h4 class="mt-5">1.1- .material-form.standard-basic</h4>
                <p>Utilize uma input simples sem borda e translucidas.</p>
                <h5 class="text-secondary mb-3">Exemplo:</h5>
                <form class="material-form standard-basic">
                  <?php input('Nome', 'name', 'text', true) ?>
                  <?php input('E-mail', 'email', 'email', true) ?>
                  <?php input('Mensagem', 'mensage', 'textarea', false) ?>
                </form>

                <div class="border p-4 bg-light">
                  <code>
                    <span><</span>form class="material-form standard-basic"<span>></span> <br>
                      &nbsp;&nbsp; <span><</span>?php input('Nome', 'name', 'text', true) ?> <br>
                      &nbsp;&nbsp; <span><</span>?php input('E-mail', 'email', 'email', true) ?> <br>
                      &nbsp;&nbsp; <span><</span>?php input('Mensagem', 'mensage', 'textarea', false) ?> <br>
                    <span><</span>/form<span>></span>
                  </code>
                </div>
              </div>

              <!-- input 2 -->
              <div>
                <h4 class="mt-5">1.2- .material-form.outlined-basic</h4>
                <p>Input com borda e estilosa.</p>
                <h5 class="text-secondary mb-3">Exemplo:</h5>
                <form class="material-form outlined-basic">
                  <?php input('Nome', 'name', 'text', true) ?>
                  <?php input('E-mail', 'email', 'email', true) ?>
                  <?php input('Mensagem', 'mensage', 'textarea', false) ?>
                </form>

                <div class="border p-4 bg-light">
                  <code>
                    <span><</span>form class="material-form outlined-basic"<span>></span> <br>
                      &nbsp;&nbsp; <span><</span>?php input('Nome', 'name', 'text', true) ?> <br>
                      &nbsp;&nbsp; <span><</span>?php input('E-mail', 'email', 'email', true) ?> <br>
                      &nbsp;&nbsp; <span><</span>?php input('Mensagem', 'mensage', 'textarea', false) ?> <br>
                    <span><</span>/form<span>></span>
                  </code>
                </div>
              </div>
            
              <!-- input 3 -->
              <div>
                <h4 class="mt-5">1.3- .translucent-form</h4>
                <p>São inputs simples e translucidas, porém poderosas em layouts para se adaptarem a cor de fundo deixando tudo mais elegante. Utilize também em seu formulário <span class="text-danger">.input-light</span>, para fundos mais escuros.</p>
                <h5 class="text-secondary mb-3">Exemplo:</h5>
                <form class="translucent-form input-light bg-primary p-4 rounded">
                  <input type="text" name="name" placeholder="Nome">
                  <input type="email" name="email" placeholder="Nome">
                  <textarea name="mensage" placeholder="Mensagem"></textarea>
                </form>

                <div class="border p-4 bg-light mt-3">
                  <code>
                    <span><</span>form class="translucent-form input-light bg-primary p-4 rounded"<span>></span><br>
                    &nbsp;&nbsp;<span><</span>input type="text" name="name" placeholder="Nome"<span>></span><br>
                    &nbsp;&nbsp;<span><</span>input type="email" name="email" placeholder="Nome"<span>></span><br>
                    &nbsp;&nbsp;<span><</span>textarea name="mensage" placeholder="Mensagem"><span><</span>/textarea<span>></span><br>
                    <span><</span>/form>
                  </code>
                </div>
              </div>

            </div>
            <!-- /.inputs -->
          </div><!-- /.col-12 -->
        </div>
      </div>

    </div><!-- /.row -->
  </div><!-- /.container -->
</section>

<?php get_footer(); ?>
