<?php /*  iNova
<a href="https://inova.agency" target="_blank" rel="noopener" title="iNova">
	<img src="https://assets.comet.com.br/comet/wordpress/2020/05/11084631/inova.png" alt="iNova" height="28">
</a> */ ?>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-left">
				<p>&copy; <?= date('Y') . ' ' . get_bloginfo('name') ?>, todos os direitos reservados.</p>
			</div>

			<div class="col-lg-6 text-center text-lg-right">
				<p>Um desenvolvimento <a href="https://comet.com.br/" target="_blank" rel="noopener" title="Comet">
						<img
							src="https://s3-sa-east-1.amazonaws.com/s3.dvulgsolucoes.com.br/assets/img/logo-desenvolvimento-dvulg-dark.png"
							alt="Comet" height="28">
					</a>
				</p>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<?php support_comments_facebook(); ?>

</body>

</html>