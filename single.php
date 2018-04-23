<?php get_header(); $category = get_the_category(); ?>
<!--  -->
<section id="webdoor" class="b" style="<?php if(get_post_meta($post->ID, "Cor do Banner Interno", true)){ echo "background:".get_post_meta($post->ID, "Cor do Banner Interno", true)." !important"; } ?>">
	<div class="wrap">
		<div>
			<div>
				<div>
					<?php
					echo '<h1 class="b">'.get_the_title().'</h1><h2 class="b">Every '.$category[0]->cat_name.'</h2>';
					if(get_post_meta($post->ID, "Texto Interno", true)){
						echo '<p class="b">'.get_post_meta($post->ID, "Texto Interno", true).'</p>';
					} else {
						echo '<p class="b">'.get_the_content().'</p>';
					}
					?>
				</div>
			</div>
			<div>
				<div>
					<div>
						<?php if(wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-6', $post->ID ), 'full' )[0]){ ?>
							<img src="<?php echo wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-6', $post->ID ), 'full' )[0]; ?>" alt="<?php echo get_the_title(); ?>">	
							<?php } else { ?>
							<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), full); ?>" alt="<?php echo get_the_title(); ?>">
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--  -->
	<section id="description" class="b" style="<?php if(get_post_meta($post->ID, "Cor Descrição Destaque", true)){ echo "background:".get_post_meta($post->ID, "Cor Descrição Destaque", true)." !important"; } ?>">
		<div class="wrap">
			<div>
				<div>
					<?php 
					if(get_post_meta($post->ID, "Título Quote", true)||get_post_meta($post->ID, "Quote", true)){
						?>
						<div>
							<div>						
								<?php
								if(get_post_meta($post->ID, "Título Quote", true)){ echo '<h1 class="b">'.get_post_meta($post->ID, "Título Quote", true).'</h1>'; }
								if(get_post_meta($post->ID, "Quote", true)){ echo '<p class="b">'.get_post_meta($post->ID, "Quote", true).'</p>'; }
								?>
							</div>
						</div>

						<?php
					}
					?>

					<?php 
					if(wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-1', $post->ID ), 'full' )[0]){
						echo '<img width="100%" height="auto" src="'.wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-1', $post->ID ), 'full' )[0].'" alt="'.get_the_title().'" />';
					} else {
						echo '
						<style type="text/css">
							body main section#description .wrap > * > * > div{position:relative;}
							body main section#description .wrap{padding:80px 0;}
							body main section#description .wrap > * > * > div > div{-webkit-flex: 0 100%;-ms-flex: 0 100%;-webkit-box-flex: 0;flex: 0 100%;}
						</style>
						';
					}
					?>
				</div>
			</div>
		</div>
	</section>
	<section id="galeria">
		<?php
		if(wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-2', $post->ID ), 'full' )[0]){
			echo '<div style="background-image:url('.wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-2', $post->ID ), 'full' )[0].');"><span><!-- --></span></div>';
		}
		if(wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-3', $post->ID ), 'full' )[0]){
			echo '<div style="background-image:url('.wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-3', $post->ID ), 'full' )[0].');"><span><!-- --></span></div>';
		}
		if(wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-4', $post->ID ), 'full' )[0]){
			echo '<div style="background-image:url('.wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-4', $post->ID ), 'full' )[0].');"><span><!-- --></span></div>';
		}
		?>
	</section>
	<?php 
	if(get_post_meta($post->ID, "Acabamento", true)||get_post_meta($post->ID, "Ferramentas", true)||get_post_meta($post->ID, "Peças", true)||get_post_meta($post->ID, "Cores", true)||get_post_meta($post->ID, "Material", true)||get_post_meta($post->ID, "Display", true)||get_post_meta($post->ID, "Memória", true)||get_post_meta($post->ID, "CPU", true)||get_post_meta($post->ID, "Câmera", true)||wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-5', $post->ID ), 'full' )[0]){
		?>
		<?php if(get_post_meta($post->ID, "Acabamento", true)||get_post_meta($post->ID, "Ferramentas", true)||get_post_meta($post->ID, "Peças", true)||get_post_meta($post->ID, "Cores", true)||get_post_meta($post->ID, "Material", true)||get_post_meta($post->ID, "Display", true)||get_post_meta($post->ID, "Memória", true)||get_post_meta($post->ID, "CPU", true)||get_post_meta($post->ID, "Câmera", true)){ ?>
		<section id="specs" style="<?php if(get_post_meta($post->ID, "Cor Especificação", true)){ echo "background:".get_post_meta($post->ID, "Cor Especificação", true)." !important"; } ?>">
			<div class="wrap">
				<div>
					<div>
						<h3 class="b">Especificações</h3>

						<?php if(get_post_meta($post->ID, "Display", true)||get_post_meta($post->ID, "Armazenamento", true)||get_post_meta($post->ID, "CPU", true)||get_post_meta($post->ID, "Câmera", true)){ ?>
						<ul>
							<?php 
							if(get_post_meta($post->ID, "Display", true)) {echo '<li><i class="b icon-smartphone"><!-- --></i><p class="b">Display<br/>'.get_post_meta($post->ID, "Display", true).'</p></li>';} 
							if(get_post_meta($post->ID, "Armazenamento", true)) {echo '<li><i class="b icon-memory-card"><!-- --></i><p class="b">Armazenamento<br/>'.get_post_meta($post->ID, "Armazenamento", true).'</p></li>';} 
							if(get_post_meta($post->ID, "CPU", true)) {echo '<li><i class="b icon-cpu-chip"><!-- --></i><p class="b">CPU<br/>'.get_post_meta($post->ID, "CPU", true).'</p></li>';} 
							if(get_post_meta($post->ID, "Câmera", true)) {echo '<li><i class="b icon-photo-camera"><!-- --></i><p class="b">Câmera<br/>'.get_post_meta($post->ID, "Câmera", true).'</p></li>';} 
							?>
						</ul>
						<?php } ?>
						<ul>
							<?php
							if(get_the_content()){
								echo '
								<li>
									<h4 class="b">Descrição</h4>
									<p class="b">'.get_the_content().'</p>
								</li>
								';
							}
							if(get_post_meta($post->ID, "Acabamento", true)||get_post_meta($post->ID, "Ferramentas", true)||get_post_meta($post->ID, "Peças", true)||get_post_meta($post->ID, "Cores", true)||get_post_meta($post->ID, "Material", true)||get_post_meta($post->ID, "Tamanho e Peso", true)||get_post_meta($post->ID, "Memória", true)||get_post_meta($post->ID, "CPU", true)||get_post_meta($post->ID, "Bateria", true)){
								echo '
								<li>
									<h4 class="b">Especificações</h4>
									<ul class="b">';
										if(get_post_meta($post->ID, "Tamanho e Peso", true)){echo "<li><p><strong>Tamanho e Peso</strong><br/>".get_post_meta($post->ID, "Tamanho e Peso", true)."</p></li>";}
										if(get_post_meta($post->ID, "Memória", true)){echo "<li><p><strong>Memória</strong><br/>".get_post_meta($post->ID, "Memória", true)."</p></li>";}
										if(get_post_meta($post->ID, "Armazenamento", true)){echo "<li><p><strong>Armazenamento</strong><br/>".get_post_meta($post->ID, "Armazenamento", true)."</p></li>";}
										if(get_post_meta($post->ID, "CPU", true)){echo "<li><p><strong>Processador</strong><br/>".get_post_meta($post->ID, "CPU", true)."</p></li>";}
										if(get_post_meta($post->ID, "Bateria", true)){echo "<li><p><strong>Bateria</strong><br/>".get_post_meta($post->ID, "Bateria", true)."</p></li>";}
										if(get_post_meta($post->ID, "Cores", true)){echo "<li><p><strong>Cores</strong><br/>".get_post_meta($post->ID, "Cores", true)."</p></li>";}
										if(get_post_meta($post->ID, "Material", true)){echo "<li><p><strong>Material</strong><br/>".get_post_meta($post->ID, "Material", true)."</p></li>";}
										if(get_post_meta($post->ID, "Peças", true)){echo "<li><p><strong>Peças</strong><br/>".get_post_meta($post->ID, "Peças", true)."</p></li>";}
										if(get_post_meta($post->ID, "Ferramentas", true)){echo "<li><p><strong>Ferramentas</strong><br/>".get_post_meta($post->ID, "Ferramentas", true)."</p></li>";}
										if(get_post_meta($post->ID, "Acabamento", true)){echo "<li><p><strong>Acabamento</strong><br/>".get_post_meta($post->ID, "Acabamento", true)."</p></li>";}
										echo '</ul>
									</li>
									';
								}
								?>
							</ul>
							<?php if(get_post_meta($post->ID, "Manual", true)||get_post_meta($post->ID, "Lista de Modens 3G", true)){ ?>
							<ul>
								<?php
								if(get_post_meta($post->ID, "Manual", true)){echo "<li><h4><a href='".get_post_meta($post->ID, "Manual", true)."' title='Download do Manual'>Download do Manual</a></h4></li>";}
								if(get_post_meta($post->ID, "Lista de Modens 3G", true)){echo "<li><h4><a href='".get_post_meta($post->ID, "Lista de Modens 3G", true)."' title='Lista de Modens 3G'>Lista de Modens 3G</a></h4></li>";}
								?>
							</ul>
							<?php } ?>
						</div>
					</div>
					<?php				
					if(wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-5', $post->ID ), 'full' )[0]){
						echo '<div><img width="100%" height="auto" src="'.wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-5', $post->ID ), 'full' )[0].'" alt="'.get_the_title().'" /></div>';
					}
					?>		
				</div>
			</section>		
			<?php } ?>
			<?php 
		}
		?>
			<?php if(get_post_meta($post->ID, "Acabamento", true)||get_post_meta($post->ID, "Ferramentas", true)||get_post_meta($post->ID, "Peças", true)||get_post_meta($post->ID, "Cores", true)||get_post_meta($post->ID, "Material", true)){ ?>
			<style text='text/css'>
			<?php
			echo "
			body main section#specs .wrap > :first-child{
				-webkit-box-align: flex-start;
				-webkit-align-items: flex-start;
				-ms-flex-align: flex-start;
				align-items: flex-start;
			}
			body main section#description .wrap{padding-top:0;}
			body main section#specs .wrap h3 ~ * > *{
				padding-left:0 !important;
				padding-right:0 !important;
				border:0px !important;
				-webkit-flex: 0 100% !important;
				-ms-flex: 0 100% !important;
				-webkit-box-flex: 0 !important;
				flex: 0 100% !important;
				text-align:left;
			}
			body main section#specs .wrap h3 ~ * > *:not(:last-child){padding-bottom: 30px;}
			@media screen and (min-width: 641px) {
				body main section#specs .wrap > :first-child > *{
				  	-webkit-flex: 0 60%;
				  	-ms-flex: 0 60%;
				  	-webkit-box-flex: 0;
				  	flex: 0 60%;
				}
			}
			";
			?>
			</style>
			<?php } ?>
	    	<script type="text/javascript">
		        jQuery(document).ready(function(){
					$(".pre_footer p").each(function() {
					    var text = $(this).text();
					    <?php echo 'text = text.replace("produto", "'.get_the_title().'");'; ?>
					    $(this).text(text);
					});     
		        });
	      	</script>
			<?php get_footer(); ?>

