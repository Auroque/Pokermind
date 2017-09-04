<?php get_header(); ?>
<?php 
		//****************** Exibe posts se eles existirem *******************************************
		if(have_posts()) : while(have_posts()) : the_post();
	?>
	<div class="section single">
		<div class="container">
		
		
			<div class="row">
			
			<div class="col-md-8">
                    <div class="col-md-12 artigo-single">
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                        <p class="extra">Publicado em <?php the_date('d/m/Y'); ?> às <?php the_time('g:i a'); ?> - <?php comments_number('Nenhum comentário', '1 comentário', '% comentários'); ?></p>
                        <p class="permalink">Autor: <i class="fa fa-pencil"></i> <?php the_Author(); ?>
                <?php 
                     endwhile;
                     else:
                ?>
                <p>Nenhum post publicado!</p>
                <?php
                    endif; 

                     //******************************* fim da exibição de posts ***********************************
                ?>
                </p>
                </div>
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
   					<a href="<?php the_field('banner_sid_01') ?>" target="_blank"><img id="sid-img" src="<?php the_field('imagem_banner_sid_01') ?>" alt="Imagem publicitária 1"></a>
    			</div>
    			
		</div>
		
		
		
	</div>

<?php get_footer(); ?>