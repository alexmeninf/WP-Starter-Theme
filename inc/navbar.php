<h1>
  <?php 
  if (is_404()) echo 'Página não encontrada';

  elseif (is_search()) echo 'Resultados da pesquisa';

  else the_title();
  ?>
</h1>