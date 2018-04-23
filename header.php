<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IEMobile 7 ]> <html dir="ltr" lang="en-US"class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html dir="ltr" lang="en-US" class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7 ]>    <html dir="ltr" lang="en-US" class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html dir="ltr" lang="en-US" class="no-js ie8 oldie"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" itemscope itemtype="http://schema.org/Organization" dir="ltr" lang="en-US" class="no-js"><!--<![endif]-->
<head>
  <title><?php wp_title(); ?></title>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
  <meta http-equiv="cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
  <meta http-equiv="pragma" content="no-cache" />
  <meta name="viewport" content="width=device-width" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />

  <link rel="canonical" href="<?php echo site_url(); ?>" />

  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="HandheldFriendly" content="true" />

  <!-- SEO -->

  <meta name="audience" content="all" />
  <meta name="keywords" content="" />

  <meta name="author" content="Wesley Andrade" />
  <meta name="copyright" content="" />
  <meta name="resource-type" content="Document" />
  <meta name="distribution" content="Global" />
  <meta name="robots" content="index, follow, ALL" />
  <meta name="GOOGLEBOT" content="index, follow" />
  <meta name="rating" content="General" />
  <meta name="revisit-after" content="2 Days" />
  <meta name="language" content="pt-br" />

  <?php wp_meta(); ?>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/default.css?v='.rand(5, 15); ?>" type="text/css" media="all" />

  <link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_url')."?v=".rand(5, 15); ?>"> 

  <script src="http://code.jquery.com/jquery-latest.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv-printshiv.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fullPage.js" type="text/javascript"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/functions.js?v=<?php echo rand(5, 15); ?>" type="text/javascript"></script>

  <script type="text/javascript">(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=493767340741485";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <?php wp_head(); ?>
</head>
<body <?php
    $offset = 0;
    $pagename = get_query_var('pagename');  
    global $post;
    if ( !$pagename && $id > 0 ) {  
        $post = $wp_query->get_queried_object();  
        $pagename = $post->post_name;  
    }
    if (is_front_page() || is_home()) {
      echo 'class="pg-home"';
    } else if(is_archive()){
      echo 'class="pg-interna pg-archive page_id_'.$post->ID.'"';
    } else if(is_single()){
      echo 'class="pg-interna pg-single page_id_'.$post->ID.'"';
    } else {
      echo 'class="pg-interna page_'.$pagename.' page_id_'.$post->ID.'"';
    }
  ?>>
  <style type="text/css">
    @font-face {
      font-family: 'proximanovacond-light';
      src: url("<?php echo get_template_directory_uri(); ?>/fonts/proximanovacond-light.eot?v=4.6.2");
      src: url("<?php echo get_template_directory_uri(); ?>/fonts/proximanovacond-light.eot?#iefix&v=4.6.2") format("embedded-opentype"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanovacond-light.woff2?v=4.6.2") format("woff2"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanovacond-light.woff?v=4.6.2") format("woff"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanovacond-light.ttf?v=4.6.2") format("truetype"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanovacond-light.svg?v=4.6.2#proximanovacond-light") format("svg");
      font-weight: normal;
      font-style: normal; }
    @font-face {
      font-family: 'proximanovacond-regular';
      src: url("<?php echo get_template_directory_uri(); ?>/fonts/proximanovacond-regular.eot?v=4.6.2");
      src: url("<?php echo get_template_directory_uri(); ?>/fonts/proximanovacond-regular.eot?#iefix&v=4.6.2") format("embedded-opentype"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanovacond-regular.woff2?v=4.6.2") format("woff2"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanovacond-regular.woff?v=4.6.2") format("woff"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanovacond-regular.ttf?v=4.6.2") format("truetype"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanovacond-regular.svg?v=4.6.2#proximanovacond-regular") format("svg");
      font-weight: normal;
      font-style: normal; }  
    @font-face {
      font-family: 'proximanovacond-semibold';
      src: url("<?php echo get_template_directory_uri(); ?>/fonts/proximanovacond-semibold.eot?v=4.6.2");
      src: url("<?php echo get_template_directory_uri(); ?>/fonts/proximanovacond-semibold.eot?#iefix&v=4.6.2") format("embedded-opentype"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanovacond-semibold.woff2?v=4.6.2") format("woff2"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanovacond-semibold.woff?v=4.6.2") format("woff"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanovacond-semibold.ttf?v=4.6.2") format("truetype"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanovacond-semibold.svg?v=4.6.2#proximanovacond-semibold") format("svg");
      font-weight: normal;
      font-style: normal; }  
    @font-face {
      font-family: 'proximanova-light';
      src: url("<?php echo get_template_directory_uri(); ?>/fonts/proximanova-light.eot?v=4.6.2");
      src: url("<?php echo get_template_directory_uri(); ?>/fonts/proximanova-light.eot?#iefix&v=4.6.2") format("embedded-opentype"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanova-light.woff2?v=4.6.2") format("woff2"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanova-light.woff?v=4.6.2") format("woff"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanova-light.ttf?v=4.6.2") format("truetype"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanova-light.svg?v=4.6.2#proximanova-light") format("svg");
      font-weight: normal;
      font-style: normal; }  
    @font-face {
      font-family: 'proximanova-regular';
      src: url("<?php echo get_template_directory_uri(); ?>/fonts/proximanova-regular.eot?v=4.6.2");
      src: url("<?php echo get_template_directory_uri(); ?>/fonts/proximanova-regular.eot?#iefix&v=4.6.2") format("embedded-opentype"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanova-regular.woff2?v=4.6.2") format("woff2"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanova-regular.woff?v=4.6.2") format("woff"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanova-regular.ttf?v=4.6.2") format("truetype"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanova-regular.svg?v=4.6.2#proximanova-regular") format("svg");
      font-weight: normal;
      font-style: normal; }  
    @font-face {
      font-family: 'proximanova-semibold';
      src: url("<?php echo get_template_directory_uri(); ?>/fonts/proximanova-semibold.eot?v=4.6.2");
      src: url("<?php echo get_template_directory_uri(); ?>/fonts/proximanova-semibold.eot?#iefix&v=4.6.2") format("embedded-opentype"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanova-semibold.woff2?v=4.6.2") format("woff2"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanova-semibold.woff?v=4.6.2") format("woff"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanova-semibold.ttf?v=4.6.2") format("truetype"), 
      url("<?php echo get_template_directory_uri(); ?>/fonts/proximanova-semibold.svg?v=4.6.2#proximanova-semibold") format("svg");
      font-weight: normal;
      font-style: normal; }  
    @font-face {
        font-family: 'every';
        src: url('<?php echo get_template_directory_uri(); ?>/fonts/every.eot');
        src: url('<?php echo get_template_directory_uri(); ?>/fonts/every.eot?#iefix') format('embedded-opentype'),
             url('<?php echo get_template_directory_uri(); ?>/fonts/every.woff') format('woff'),
             url('<?php echo get_template_directory_uri(); ?>/fonts/every.ttf') format('truetype'),
             url('<?php echo get_template_directory_uri(); ?>/fonts/every.svg#every') format('svg');
        font-weight: normal;
        font-style: normal;}
  </style>
  <div id="wrap">
    <header class="b">
      <nav id="mobileMenu" class="b">
        <ul>
          <?php wp_nav_menu( array( 'container' => false, 'menu' => 'header', 'items_wrap' => '%3$s' ) ); ?>
        </ul>
      </nav>
      <div class="b wrap">
        <div>
          <div>
            <a class="b" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
              <?php 
              if ( get_theme_mod( 'logo' ) ) :
                echo "<img src='".esc_url( get_theme_mod( 'logo' ) )."' alt='".esc_attr( get_bloginfo( 'name', 'display' ) )."'>";
              else :
                echo "<span class='icon-logo'><!-- --></span>";
              endif;
              ?>
            </a>          
          </div>
          <div>
            <nav>
              <ul id="menu">
                <?php wp_nav_menu( array( 'container' => false, 'menu' => 'header', 'items_wrap' => '%3$s' ) ); ?>
              </ul>             
            </nav>             
          </div>          
        </div>      
      </div>
    </header>
    <!-- header -->
    <script type="text/javascript">
        jQuery(document).ready(function(){
          <?php
            $args = array('post_type' => 'produtos', 'order' => 'ASC');
            $query_produtos = new WP_Query($args);
            $produto = (have_posts()) ? sizeof($query_produtos->posts) : $offset;
            $query_produtos_qti = $query_produtos->found_posts;

            if($produto!=""&&$produto!=$offset){
              echo 'var produtos_labels="';
              while($query_produtos -> have_posts()) : $query_produtos -> the_post();
                // echo "<li><a href='".get_permalink()."' title='".get_the_title()."'>".get_the_title()."</a></li>";
                switch (true){
                  case stristr(get_the_title(),'701'):
                  case stristr(get_the_title(),'700'):
                  echo "<li><i class='icon-website-03'></i><a href='".get_permalink()."' title='".get_the_title()."'>".get_the_title()."</a></li>";
                  break;
                  case stristr(get_the_title(),'kids'):
                  echo "<li><i class='icon-website-09'></i><a href='".get_permalink()."' title='".get_the_title()."'>".get_the_title()."</a></li>";
                  break;                  
                  case stristr(get_the_title(),'smartphone'):
                  echo "<li><i class='icon-website-02'></i><a href='".get_permalink()."' title='".get_the_title()."'>".get_the_title()."</a></li>";
                  break;
                  case stristr(get_the_title(),'relógio'):
                  echo "<li><i class='icon-website-05'></i><a href='".get_permalink()."' title='".get_the_title()."'>".get_the_title()."</a></li>";
                  break;
                  case stristr(get_the_title(),'maleta'):
                  echo "<li><i class='icon-website-07'></i><a href='".get_permalink()."' title='".get_the_title()."'>".get_the_title()."</a></li>";
                  break;
                  default:
                  echo "<li><a href='".get_permalink()."' title='".get_the_title()."'>".get_the_title()."</a></li>";
                  break;
                }
              endwhile;
              echo '";';

              echo 'var produtos_thumbs="';
              while($query_produtos -> have_posts()) : $query_produtos -> the_post();
              echo "<li><img src='".wp_get_attachment_url(get_post_thumbnail_id($post->ID), full)."'/></li>";
              endwhile;
              echo '";';
          ?>

          $( "#menu > li" ).each(function() {
            var text = $(this).first().children('a').text();
            if(text == "produtos" || text == "Produtos"){
              $(this).append("<ul><li><ul>"+produtos_labels+"</ul></li><!--<li><ul>"+produtos_thumbs+"</ul></li>--></ul>");
            }
          });

            $( "#mobileMenu ul > li" ).each(function() {
              var text = $(this).first().children('a').text();
              if(text == "produtos" || text == "Produtos"){
                $(this).append("<ul><li>"+produtos_labels+"</li></ul>");
              }
            });
        
          <?php 
              // for ($i = 1; $i <= $produto; $i++) {
              //   echo '
              //     $( "#menu > li > ul > li > ul > li:nth-child('.$i.')" ).hover(function() {
              //       $( "#menu > li > ul > li:last-child > ul > li:not(:nth-child('.$i.'))" ).hide();
              //       $( "#menu > li > ul > li:last-child > ul > li:nth-child('.$i.')" ).show();
              //     });
              //   ';
              // } 
            }
            wp_reset_query();

            if(is_single()){
              echo "
                $('body').find('.pre_footer h3').text('Onde Comprar?');
                $('body').find('.pre_footer h3 + p').text('".get_theme_mod( 'onde-comprar-txt' )."');
                $('body').find('.pre_footer i').removeClass().addClass('icon-location');
                $('body').find('.btn').text('Saiba Mais');
              ";
            }

            echo "
              var fullPageCreated = false;
              createFullpage();

              if ($(window).width() < 1024) {
                fullPageCreated = false;    
                $.fn.fullpage.destroy('all');
              }

              $(window).resize(function(){
                if ($(window).width() < 1024) {
                  fullPageCreated = false;    
                  $.fn.fullpage.destroy('all');
                } else {
                  createFullpage();
                }
              });

              function createFullpage() {
                if(fullPageCreated === false) {
                  fullPageCreated = true;
                  $('#fullpage').fullpage({
                    navigation: true,
                    navigationPosition: 'left',
                    onLeave: function(anchorLink, index){
                      if(index > ".$query_produtos_qti."){
                        if ($(window).width() > 1023) {
                          $('header').addClass('lightTheme');
                        }
                      } else {
                        $('.lightTheme').removeClass('lightTheme');
                      }
                    }
                  }); 
                }
              }
            ";
          ?>    
        });
      </script>
      <?php 
        if (is_front_page() || is_home()) {
          echo '<main id="fullpage">';
        } else {
          echo '<main>';
        }
      ?>