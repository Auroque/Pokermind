
<?php get_header(); ?>
	<div class="section">
		<div class="container">
			<div class="row" id="pagina">
				<div class="col-md-12">
					<h1 class="error">Erro 404!</h1>
					<hr>
					<p>Esta página não existe ou está com problema, entre em contato com o administrador deste site. <br>
					Você será redirecionado para a pagina principal deste site.</p>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
   window.setTimeout("location.href='<?php echo get_option('home') ?>';", 5000);
</script>
<?php get_footer(); ?>