<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head profile="http://gmpg.org/xfn/11" >
<link href="https://plus.google.com/108710716995880095704" rel="publisher" /><script type="text/javascript">
(function() 
{var po = document.createElement("script");
po.type = "text/javascript"; po.async = true;po.src = "https://apis.google.com/js/plusone.js";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(po, s);
})();</script>
<meta name="google-site-verification" content="iOENWWiSVGXmdSWwCrh5UmlDPAasmg24OMoiKSoj51c" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="rp919c035c59a14ad299e6325cd3fa61cb" content="4826a6fc744b43dbaedaf6f6e2852c97" />
<meta name='yandex-verification' content='73b3ef414ed7488c' />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!--3a9f6b4e--> <!--3a9f6b4e-->
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />

<?php wp_head(); ?>
<?php
$tracker = get_option(PADD_NAME_SPACE . '_tracker_head','');
if (!empty($tracker)) {
	echo stripslashes($tracker);
}
?>
<!-- Yandex.Metrika counter -->
<div style="display:none;"><script type="text/javascript">
(function(w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter7683082 = new Ya.Metrika({id:7683082, enableAll: true});
        }
        catch(e) { }
    });
})(window, 'yandex_metrika_callbacks');
</script></div>
<script src="//mc.yandex.ru/metrika/watch_visor.js" type="text/javascript" defer="defer"></script>
<noscript><div><img src="//mc.yandex.ru/watch/7683082" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<!-- Send Pulse -->
<script charset="UTF-8" src="//cdn.sendpulse.com/js/push/e6c7ead9f752fb870f6c37462b28f5c8_0.js" async></script>
<!-- End Send Pulse -->

</head>

<body <?php body_class(); ?>>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1&appId=220658491278315";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
$tracker = get_option(PADD_NAME_SPACE . '_tracker_top','');
if (!empty($tracker)) {
	echo stripslashes($tracker);
}
?>
<div id="container">
	<div id="container-pad">

	<p class="no-display"><a href="#skip-to-content"><?php echo __('К содержанию', PADD_THEME_SLUG); ?></a></p>
<nav>
	<div id="header">
		<div id="header-pad" class="append-clear">
			<div class="box box-masthead">
				<?php $tag = (is_home()) ? 'h1' : 'p'; ?>
				<<?php echo $tag; ?> class="title"><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></<?php echo $tag; ?>>
				<p class="description">// <?php bloginfo('description'); ?></p>
			</div>

			<div class="box box-socialnet">
				<h3>Социальные сети</h3>
				<div class="interior">
					<?php padd_theme_widget_socialnet(); ?>
				</div>
			</div>
		</div>
	</div>

	<div id="slideout-menu">

					<?php
						wp_nav_menu('menu=top'); 
 					?>	
	
	</div>

	<div id="menubar">
		<div id="menubar-pad">
			<div class="box box-mainmenu">
				<h3>Основное меню</h3>
				<div class="interior">
					<?php
						wp_nav_menu('menu=top'); 
 					?>
				</div>
			</div>
		</div>
	</div>
	
	<ul id="mob-nav">
		<li id="menu-icon">
			<span class="fas fa-bars"></span>		
		</li>
		<li id="mob-title"><a href="<?php echo get_option("siteurl"); ?>">Маркетинг в эпоху Интернета</a></li>	
		<li id="mobsearch-icon">
			<span class="fas fa-search"></span>		
	</li>
	</ul>

	<div id="mobsearch-box">
		<?php get_search_form(); ?>		
	</div>
		
	<!--<div id="menu-icon">
		<i class="fas fa-bars"></i>		
		</div>
		<ul>
		<li><a href="#">Главная</a></li>
		<li><a href="https://localhost/marketingbuzz/internet-marketing">Интернет маркетинг</a></li>
		<li><a href="https://localhost/marketingbuzz/smm">Социальные медиа</a></li>
		<li><a href="https://localhost/marketingbuzz/seo">SEO</a></li>
		<li><a href="https://localhost/marketingbuzz/kejsy">Кейсы</a></li>	
		<li><a href="https://solo-way.com">Об Авторе</a></li>
		<li>
			<div id="search-icon">
				<i class="fas fa-search"></i>
			</div>
		</li>		
		
		</ul>

	</div> -->
</nav>
	<a name="skip-to-content"></a>

<?php if (is_home()) : ?>
	<?php
		$accordion = get_option(PADD_NAME_SPACE . '_accordion_enable','1');
		if ('1' == $accordion) :
	?>
	<div id="featured">
		<div id="featured-pad">
			<div class="box box-featured">
				<?php padd_theme_post_featured_posts(); ?>
			</div>
		</div>
	</div>
	<?php
		endif;
	?>

<?php endif; ?>

<?php if (is_single () ) { ?>


  <meta property="og:image" content="<?php echo catch_that_image() ?>" />

<?php } ?>

	<div id="body">		
		<div id="body-pad">
		