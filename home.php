<?php get_header();



// Template Name: Home



 ?>

    <div class="section slider">

    	<div class="container">

    		<div class="row">

		        <div class="col-md-8">

		        	<iframe src="https://player.twitch.tv/?channel=poker_mind" frameborder="0" allowfullscreen="true" scrolling="no" height="400" width="100%"></iframe><a href="https://www.twitch.tv/poker_mind?tt_medium=live_embed&tt_content=text_link" style="padding:2px 0px 4px; display:block; width:345px; font-weight:normal; font-size:10px; text-decoration:underline;">Assista ao vídeo ao vivo de Poker_Mind em www.twitch.tv</a>

		        </div>

		        <div class="col-md-4">

		            <iframe width="100%" height="415" src="https://www.youtube.com/embed/G1r-KQ64PR0" frameborder="0" allowfullscreen></iframe>

		        </div>    			

    		</div>

    	</div>

    </div>

    <div class="section publicidade_01">

    	<div class="container">

    		<div class="row">

    			<div class="col-md-12">

    				<a href="<?php the_field('link_publicidade_01') ?>" target="_blank"><img src="<?php the_field('full_publicidade_01') ?>" alt="Imagem publicitária 1"></a>

    			</div>

    		</div>

    	</div>

    </div>

    <div class="section">

    	<div class="container">

    		<div class="row">

    			<div class="col-md-4">

    				<?php query_posts('cat=3') ?>

    				<?php $contador = 1; 

    				 if(have_posts()) : while(have_posts()) : the_post();?>

    				<?php

    				if($contador == 1){

    				?>

    				<div class="posts-col-1">

						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

					</div>

					<?php 

					} 

						else{



					?>

					<div class="posts-col-2">

					<div class="col-md-3 no-padding">

						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

					</div>

					<div class="col-md-9">

						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

						<p id="name-autor"><i class="fa fa-heart" aria-hidden="true"></i> <?php

						$categoria = get_the_category();

						$nomeCategoria = $categoria[0]->cat_name;

						echo $nomeCategoria;

						?></p>

					</div>

					</div>



					<?php };

						$contador = $contador +1;

						 endwhile;

						 else:

					?>

					<p>Nenhum post publicado!</p>

					<?php

						endif; 

						 //******************************* fim da exibição de posts ***********************************

					?>

					<?php wp_reset_query(); ?>

                    <a href="<?php echo get_permalink(200); ?>"><div class="leia-mais">Leia Mais</div></a>

    			</div>

    			<div class="col-md-4">

    				<?php query_posts('cat=4') ?>

    				<?php $contador = 1; 

    				 if(have_posts()) : while(have_posts()) : the_post();?>

    				<?php

    				if($contador == 1){

    				?>

    				<div class="posts-col-1">

    					

						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

					</div>

					<?php 

					} 

						else{



					?>

					<div class="posts-col-2">

						<div class="col-md-3 no-padding">

							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

						</div>

						<div class="col-md-9">

							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

							<p id="name-autor"><i class="fa fa-heart" aria-hidden="true"></i> <?php

						$categoria = get_the_category();

						$nomeCategoria = $categoria[0]->cat_name;

						echo $nomeCategoria;

						?></p>

						</div>

					</div>



					<?php };

						$contador = $contador +1;

						 endwhile;

						 else:

					?>

					<p>Nenhum post publicado!</p>

					<?php

						endif; 

						 //******************************* fim da exibição de posts ***********************************

					?>

					<?php wp_reset_query(); ?>

                    <a href="<?php echo get_permalink(204); ?>"><div class="leia-mais">Leia Mais</div></a>

    			</div>

    			<div class="col-md-4">

    				<div class="widget_text01">

    					<h3 class="no-padding">REDES SOCIAIS</h3>

    						<div class="row">
    							<a href="https://www.twitch.tv/poker_mind" target="_blank">

    								<div class="col-md-2 icon-height ico-01" style="background-color: #884ba7;">

    									<i class="fa fa-twitch" aria-hidden="true"></i>

    								</div>

    								<div class="col-md-10 icon-height text-01" style="background-color: #793b98;">

    									<p>Twitch</p>

    								</div>

    							</a>

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

    							<a href="https://www.instagram.com/poker.mind/?hl=pt-br" target="_blank">

    								<div class="col-md-2 icon-height ico-05">

    									<i class="fa fa-instagram" aria-hidden="true"></i>

    								</div>

    								<div class="col-md-10 icon-height text-05">

    									<p>Instagram</p>

    								</div>

    							</a>

    						</div>

    				</div>

   					<a title="Tabela" href="<?php the_field('imagem_banner_sid_01') ?>"><img id="sid-img" class="modal-image" src="<?php the_field('imagem_banner_sid_01') ?>" alt="Imagem publicitária 1"></a>



<div tabindex="-1" class="modal fade" id="myModal" role="dialog">

  <div class="modal-dialog">

  <div class="modal-content">

    <div class="modal-header">

		<button class="close" type="button" data-dismiss="modal">×</button>

		<h3 class="modal-title">Heading</h3>

	</div>

	<div class="modal-body">

		

	</div>

	<div class="modal-footer">

		<button class="btn btn-default" data-dismiss="modal">Fechar</button>

	</div>

   </div>

  </div>

</div>

    			</div>

    		</div>

    	</div>

    </div>

    <div class="section publicidade_01">

    	<div class="container">

    		<div class="row">

    			<div class="col-md-12">

    				<a href="<?php the_field('link_publicidade_02') ?>" target="_blank"><img id="sid-img" src="<?php the_field('full_publicidade_02') ?>" alt="Imagem publicitária 1" /></a>

    			</div>

    		</div>

    	</div>

    </div>

    <div class="section sec_artigo">

    	<div class="container">

    		<div class="row">

    			<div class="col-md-8 artigo">

    				<?php query_posts('posts_per_page=3&cat=6'); ?>

    				<?php $contador = 1; 

    				 if(have_posts()) : while(have_posts()) : the_post();?>

    				<?php

    				if($contador == 1){

    				?>

						<a href="<?php the_permalink(); ?>"><img title="image title" alt="thumb image" class="wp-post-image" 

             			src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;"></a>

             			<p id="name-cat"><?php

						$categoria = get_the_category();

						$nomeCategoria = $categoria[0]->cat_name;

						echo $nomeCategoria;

						?></p>

						<a href="<?php the_permalink(); ?>"><h2 class="art_title"><?php the_title(); ?></h2></a>

						<p id="name-autor"><i class="fa fa-heart" aria-hidden="true"></i> <?php the_Author(); ?></p>

						<p id="resumo"><?php the_excerpt(); ?></p>

					<?php 

					} 

						else{



					?>

					<div class="col-md-5 artigo-min">

						<a href="<?php the_permalink(); ?>"><img title="image title" alt="thumb image" class="wp-post-image" 

             			src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;"></a>

					</div>

					<div class="col-md-7 artigo-min">

						<p id="name-cat"><?php

						$categoria = get_the_category();

						$nomeCategoria = $categoria[0]->cat_name;

						echo $nomeCategoria;

						?></p>

						<a href="<?php the_permalink(); ?>"><h2 class="art_title2"><?php the_title(); ?></h2></a>

						<p id="name-autor"><i class="fa fa-heart" aria-hidden="true"></i> <?php the_Author(); ?></p>

						<p id="resumo"><?php the_excerpt(); ?></p>

					</div>



					<?php };

						$contador = $contador +1;

						 endwhile;

						 else:

					?>

					<p>Nenhum post publicado!</p>

					<?php

						endif; 

						 //******************************* fim da exibição de posts ***********************************

					?>

					<?php wp_reset_query(); ?>

                    <a href="<?php echo get_permalink(202); ?>"><div class="leia-mais">Leia Mais</div></a>

    			</div>

    			<div class="col-md-4 widget_text01">

    				<h3 class="no-padding">RANKING</h3>

    				<div class="col-md-12 margem_top">

    					<a href="<?php the_field('link_banner_sid_02') ?>" target="_blank"><img id="sid-img" src="<?php the_field('imagem_banner_sid_02') ?>" alt="Imagem publicitária 1"></a>

    				</div>

    				<div class="col-md-12 margem_top">

    					<a href="<?php the_field('link_banner_sid_03') ?>" target="_blank"><img id="sid-img" src="<?php the_field('imagem_banner_sid_03') ?>" alt="Imagem publicitária 1"></a>

    				</div>

    			</div>

    		</div>

    	</div>

    </div>

    <div class="section parceiros">

    	<div class="container">

    		<div class="row text-center">

    			<div class="col-md-2 col-md-offset-5">

    				<h3 class="parceiro_title">PARCEIROS</h3>

                </div>

                <div class="col-md-12">

                   <br/>

                   <br/>

                    <div class="col-md-4 text-center">

                        <img src="<?php echo get_template_directory_uri(); ?>/img/liga.png">

                    </div>

                    <div class="col-md-4 text-center">

                        <img src="<?php echo get_template_directory_uri(); ?>/img/ak.png">

                    </div>

                    <div class="col-md-4 text-center">

                        <img src="<?php echo get_template_directory_uri(); ?>/img/sysclub.png">

                    </div>

    			</div>

    		</div>

    		<div class="row">

    			<div class="col-md-2">



    			</div>

    		</div>

    	</div>

    </div>







        <div class="section footer_redes">

    	<div class="container">

    		<div class="row text-center">

    			<div class="col-md-2 col-md-offset-5">

    				<h3 class="redes_title">Nas redes</h3>

                </div>

                <div class="col-md-12">

                   <br/>

                   <br/>

                    <div class="col-md-4 text-center">

                        <div class="fb-page" data-href="https://www.facebook.com/pokermind/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/pokermind/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/pokermind/">Poker Mind - BR</a></blockquote></div>

                    </div>

                    <div class="col-md-4 text-center">

                        <a class="twitter-timeline" data-height="500" href="https://twitter.com/pokermindBR">Tweets by pokermindBR</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

                    </div>

                    <div class="col-md-4 text-center">

                       <!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/67958ea0366f5bcdb6d24e0b5c7c92f3.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>


                    </div>

    			</div>

    		</div>

    		<div class="row">

    			<div class="col-md-2">



    			</div>

    		</div>

    	</div>

    </div>



<?php get_footer(); ?>