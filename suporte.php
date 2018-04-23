<?php get_header(); ?>

<?php 
	$args = array('post_type' => 'avisos', 'post_per_page' => 1, 'order' => 'ASC');
	$query_aviso = new WP_Query($args);
	if($query_aviso->have_posts()=="1"){
?>
	<?php while($query_aviso -> have_posts()) : $query_aviso -> the_post(); ?>
	<div class="aviso">
		<?php the_excerpt(); ?>
	</div>
	<?php endwhile; wp_reset_query(); ?>
<?php 
	}
?>

<?php 
	$args = array('post_type' => 'faq', 'order' => 'ASC');
	$query_faq = new WP_Query($args);
	if($query_faq->have_posts()=="1"){
?>

<section id="faq" class="b">
	<div class="wrap">
		<h3 class="b">Perguntas Frequentes</h3>
		<p class="b">Tire suas dúvidas sem dor de cabeça</p>
		<ul class='accordion b'>
		<?php while($query_faq -> have_posts()) : $query_faq -> the_post(); ?>
			<li>
				<h4 class="b"><?php echo get_the_title(); ?></h4>
				<div class="b">
					<h4 class="b"><?php echo get_the_title(); ?></h4>
					<p class="b"><?php echo get_the_content(); ?></p>
				</div>
			</li>
	    <?php 
	    	endwhile; 
	    	wp_reset_query();
	    ?> 
	    </ul>
	</div>
</section>

<?php 
	}
?>

<?php 
	$args = array('post_type' => 'lojas', 'order' => 'ASC');
	$query_faq = new WP_Query($args);
	if($query_faq->have_posts()=="1"){
?>

<section id="onde-comprar" class="b">
	<div class="wrap">
		<h3 class="b">Onde Comprar?</h3>
		<p class="b">Encontre a loja credenciada mais próxima de você!</p>
		<ul class='b'>
			<li data-type="loja-virtual">
				<div>
					<div>
						<i class="b icon-loja-virtual"><!-- --></i>
						<h4 class="b">Lojas Virtuais</h4>
					</div>
				</div>
			</li>
			<li data-type="loja-fisica">
				<div>
					<div>
						<i class="b icon-loja"><!-- --></i>
						<h4 class="b">Lojas Físicas</h4>
					</div>
				</div>
			</li>
		</ul>
		<ul class='b'>
		<?php
			while($query_faq -> have_posts()) : $query_faq -> the_post(); 
				if(get_post_meta($post->ID, "Endereço", true)){
		?> 
			<li data-value="loja-fisica">
					<div>
						<div>
							<?php echo "<img src='".wp_get_attachment_url(get_post_thumbnail_id($post->ID), full)."'/>"; ?>
							<p>
								<span><?php echo get_post_meta($post->ID, "Endereço", true); ?></span>
							</p>	
						</div>
					</div>
			</li>
			<?php } else if(get_post_meta($post->ID, "Endereço Virtual", true)) { ?>
			<li data-value="loja-virtual">
					<div>
						<div>
							<?php echo "<a href='".get_post_meta($post->ID, "Endereço Virtual", true)."' title='".get_the_title()."'><img src='".wp_get_attachment_url(get_post_thumbnail_id($post->ID), full)."'/></a>"; ?>
						</div>
					</div>
			</li>
	    <?php
	    		}
		        endwhile;	
		        wp_reset_query();
		?> 
		</ul>
	</div>
</section>

<?php 
	} 
?>

<?php 
	$args = array('post_type' => 'assistencia_tecnica', 'order' => 'ASC');
	$query_faq = new WP_Query($args);
	if($query_faq->have_posts()=="1"){
?>

<section id="assistencia-tecnica" class="b">
	<div class="wrap">
		<h3 class="b">ENCONTRE NOSSAS ASSISTÊNCIAS TÉCNICAS</h3>
		<p class="b">Precisando de atendimento presencial? venha nos fazer uma vita!</p>
		<ul class='b'>
		<?php while($query_faq -> have_posts()) : $query_faq -> the_post(); ?>
			<li>
				<div>
					<div class="iframe">
						<iframe src="<?php echo get_post_meta($post->ID, "Mapa", true); ?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div>
					<h4 class="b"><?php echo get_the_title(); ?></h4>
					<p class="b"><?php echo get_the_content(); ?></p>
				</div>
			</li>
	    <?php
		    endwhile;	
		    wp_reset_query();
		?> 
		</ul>
	</div>
</section>

<?php 
	}
?>

<?php get_footer(); ?>