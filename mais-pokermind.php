<?php 
// Template Name: mais-pokermind
?>

<?php get_header(); ?>
<div class="section">
    <div class="container">

        <div class="row">
            <div class="col-md-8">
            <?php query_posts('cat=6');
    				 if(have_posts()) : while(have_posts()) : the_post();?>
			   <div class="posts-col-2" style="padding-top:10px;">
                   <div class="col-md-12" style="padding:10px;">
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
                </div>
                <?php 
                     endwhile;
                     else:
                ?>
                <p>Nenhum post publicado!</p>
                <?php
                    endif;
                ?>
            </div>
            <?php wp_reset_query(); ?>
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
    			</div>
    			
		</div>
    </div>
</div>
<?php get_footer(); ?>