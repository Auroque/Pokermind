	<div class="section rodape">
		<div class="container">
			<div class="row">
				<div class="col-md-4 text-left">
				    <h3>NAVEGAÇÃO</h3>
				    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</div>
				<div class="col-md-4">
				    <h3>SIGA A POKER MIND</h3>
				    <div class="col-md-12 no-padding">
    							<a href="https://www.facebook.com/pokermind/" target="_blank">
    								<div class="col-md-2 icon-height ico-01">
    									<i class="fa fa-facebook" aria-hidden="true"></i>
    								</div>
    								<div class="col-md-10 icon-height text-01">
    									<p>Facebook</p>
    								</div>
    							</a>
    							<a href="https://twitter.com/pokermindbr" target="_blank">
    								<div class="col-md-2 icon-height ico-02">
    									<i class="fa fa-twitter" aria-hidden="true"></i>
    								</div>
    								<div class="col-md-10 icon-height text-02">
    									<p>Twitter</p>
    								</div>
    							</a>
    							<a href="https://www.youtube.com/channel/UCfQ6-3qAfl29PkO_2XJMVWQ" target="_blank">
    								<div class="col-md-2 icon-height ico-03">
    									<i class="fa fa-youtube" aria-hidden="true"></i>
    								</div>
    								<div class="col-md-10 icon-height text-03">
    									<p>Youtube</p>
    								</div>
    							</a>
                    </div>
                </div>
				<div class="col-md-4">
                <h3>MAIS CLICADAS</h3>
				    <?php
                        $nova_consulta = new WP_Query( 
                            array(
                                'posts_per_page'      => 3,                 // Máximo de 3 artigos
                                'no_found_rows'       => true,              // Não conta linhas
                                'post_status'         => 'publish',         // Somente posts publicados
                                'ignore_sticky_posts' => true,              // Ignora posts fixos
                                'orderby'             => 'meta_value_num',  // Ordena pelo valor da post meta
                                'meta_key'            => 'tp_post_counter', // A nossa post meta
                                'order'               => 'DESC'             // Ordem decrescente
                            )
                        );
                        ?>

                        <div class="mais-vistos">
                            <?php if ( $nova_consulta->have_posts() ): ?>
                                <?php while ( $nova_consulta->have_posts() ): ?>

                                    <?php $nova_consulta->the_post(); ?>
                                    <?php $tp_post_counter = get_post_meta( $post->ID, 'tp_post_counter', true );?>

                                    <div class="mais-visto clearfix">
                                        
                                        <div class="col-md-3 no-padding">
                                            <?php if( has_post_thumbnail() ): ?>
                                                <div class="mais-visto-thumbnail">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_post_thumbnail('thumbnail-mais-vistas'); ?>
                                                    </a>
                                                </div> <!-- .mais-visto-thumbnail -->
                                            <?php endif; // has_post_thumbnail ?>
                                        </div>
                                        <div class="col-md-9 no-padding">
                                            <h5 class="mais-visto-titulo">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title();?>
                                                </a>
                                            </h5> <!-- .mais-visto-titulo -->
                                        </div>
                                    </div> <!-- .mais-visto -->
                                    <br/>
                                <?php endwhile; ?>
                            <?php endif; // have_posts ?>

                            <?php wp_reset_postdata(); ?>
                            <?php wp_reset_query(); ?>
                        </div> <!-- .mais-vistos -->
				    
				</div>
			</div>
		</div>
	</div>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!--Link java script-->
	<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script><!--Link biblioteca js do bootstrap-->
	<script src="<?php bloginfo('template_directory'); ?>/js/cycle.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/animation.js"></script><!--Link de Animações-->
	<script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script><!--Slide-->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.js"></script>
</body>
</html>