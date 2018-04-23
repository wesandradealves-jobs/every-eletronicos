				<?php if(get_theme_mod( 'suporte-txt' )){ ?>
				<section class="section pre_footer fp-auto-height">
					<div class="wrap">
						<i class="icon-android-call"><!-- --></i>
						<h3 class="b">Suporte</h3>
						<p class="b"><?php echo get_theme_mod( 'suporte-txt' ); ?></p>
						<a href="/suporte" class="btn btn_default_2">Me Ajude</a>
					</div>
				</section>
				<?php } ?>
				<footer id="footer" class="section fp-auto-height">
					<div class="wrap">
						<ul>
							<li>
				            	<a class="b" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
					                <?php 
					                if ( get_theme_mod( 'logo' ) ) :
					                  echo "<img src='".esc_url( get_theme_mod( 'logo' ) )."' alt='".esc_attr( get_bloginfo( 'name', 'display' ) )."'>";
					                else :
					                  echo "<span class='icon-logo'><!-- --></span>";
					                endif;
					                ?>
				            	</a>
							</li>
							<li>
								<ul>
									<li><p><strong class="b">Produtos</strong></p></li>
					                <?php 
					                    $args = array('post_type' => 'produtos', 'order' => 'ASC');
					                    $query_produtos = new WP_Query($args);
					                    while($query_produtos -> have_posts()) : $query_produtos -> the_post(); 
					                    echo "<li><a href='".get_the_permalink()."'>".get_the_title()."</a></li>";
					                    endwhile; 
					                    wp_reset_query();
					                ?>
								</ul>
							</li>
							<li>
								<ul>
									<li><p><strong class="b">Every</strong></p></li>
									<?php wp_nav_menu( array( 'container' => false, 'menu' => 'header', 'items_wrap' => '%3$s' ) ); ?>
								</ul>
							</li>
							<li>
								<ul>
				        			<?php if(get_theme_mod( 'telefone' )){ ?>
				        				<li><p><strong class="b">Se quiser bater um papo, ligue</strong><?php echo get_theme_mod( 'telefone' ); ?></p></li>
									<?php
				        				}
				        			?>
				        			<?php if(get_theme_mod( 'email' )){ ?>
				        				<li><p><strong class="b">Tá sem tempo? mande um e-mail</strong><?php echo get_theme_mod( 'email' ); ?></p></li>
									<?php
				        				}
				        			?>
									<?php if(get_theme_mod( 'facebook' )||get_theme_mod( 'twitter' )||get_theme_mod( 'instagram' )){
											echo '<li>
													<p><strong class="b">Tá de bobeira na internet? ;-)</strong></p>
													<ul class="social">'; 
									?>
									<?php 
										if(get_theme_mod( 'facebook' )){
											echo '<li><a href="'.get_theme_mod( 'facebook' ).'" title="Facebook"></a></li>';
										}
										if(get_theme_mod( 'twitter' )){
											echo '<li><a href="'.get_theme_mod( 'twitter' ).'" title="Twitter"></a></li>';
										}
										if(get_theme_mod( 'instagram' )){
											echo '<li><a href="'.get_theme_mod( 'instagram' ).'" title="Instagram"></a></li>';
										}
									?>
									<?php
											echo '
													</ul>
												</li>';
						 				} 
						 			?>
								</ul>
							</li>
							<li>
								<p>© Copyright <?php echo get_bloginfo('name').", ".date('Y')." - Todos os direitos reservados"; ?></p>
							</li>
						</ul>
					</div>
				</footer>
			</main>
		</div>
        <div id="fb-root"></div>
        <?php wp_footer(); ?> 
    </body>
</html>