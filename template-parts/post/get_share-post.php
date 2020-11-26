<div class="share-post">
  <span>Compartilhe</span>
  <ul>
    <li>
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
    </li>
    <li>
      <a href="https://twitter.com/intent/tweet?text=<?php the_title() ?>%2E%20notícia%20completa%20em%3A%20&tw_p=tweetbutton&url=<?php the_permalink() ?>" class="twitter-share-button" target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a>
    </li>
    <li>
      <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=&summary=<?php the_title() ?>&source=" target="_blank" rel="noopener"><i class="fab fa-linkedin-in"></i></a>
    </li>
    <li>
      <a href="https://api.whatsapp.com/send?phone=&text=<?php the_title() ?>.%20Saiba%20mais%20em%3A%20<?php the_permalink() ?>" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i></a>
    </li>
    <li>
      <a href="https://telegram.me/share/url?url=<?php the_permalink() ?>&text=<?= the_title() ?>" target="_blank" rel="noopener"><i class="fab fa-telegram-plane"></i></a>
    </li>
  </ul>
</div>