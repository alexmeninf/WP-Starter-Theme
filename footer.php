<footer class="footer-site">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<p>&copy; <?= date('Y') . ' ' . get_bloginfo('name') ?>, todos os direitos reservados.</p>
			</div>

			<div class="col-lg-6 text-center text-lg-end">
				<p>Um desenvolvimento <a href="https://inovany.com.br" target="_blank" rel="noopener" title="iNova">
					<img src="https://comet-space.nyc3.digitaloceanspaces.com/assets/default/logo-inova-dark.png" alt="Inova" height="25">	
					</a>
					<a href="https://bluelizard.com.br" target="_blank" rel="noopener" title="Blue Lizard">
						<img src="https://comet-space.nyc3.cdn.digitaloceanspaces.com/assets/default/logo-bluelizard-default.png" alt="Blue Lizard" height="25">	
					</a>
				</p>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<?php if (is_single()) support_comments_facebook(); ?>

</body>

</html>
