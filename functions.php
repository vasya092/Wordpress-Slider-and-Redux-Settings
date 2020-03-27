<?
require_once (dirname(__FILE__) . '/inc/theme-config.php'); //конфиг redux-framework

// загрузка основных скриптов
function load_slider_scripts() {
	wp_register_style('slider-style', get_template_directory_uri() . '/assets/css/slider.css');
	wp_enqueue_style( 'slider-style' );
	wp_register_script('slider_script', get_template_directory_uri() . '/assets/js/slider.js', array(), null, true );
	wp_enqueue_script('slider_script');
}
add_action( 'wp_enqueue_scripts', 'load_slider_scripts' );

add_shortcode( 'wp_sl', 'showSlider' );
function showSlider( $atts, $content = null) {
	$GLOBALS['slides'] = array();
	do_shortcode($content);
	$result = '
	<div id="slider-block">
		<div id="arrow-next" class="arrow">></div>
		<div id="arrow-prev" class="arrow"><</div>';
	if(is_array($GLOBALS['slides'])) {
		foreach ($GLOBALS['slides'] as $slide) 
		{
			$result .= $slide;
		}
	}
	$result .= '</div>';
	 return $result;
}
	
add_shortcode( 'img', 'addSlide' );
function addSlide($atts)
{
	$atts = shortcode_atts( array(
		'url' => 'http://nep.websourcepro.ru/wp-content/uploads/2020/03/Canada_Parks_Lake_Mountains_Forests_Scenery_Rocky_567540_3840x2400.jpg',
		'alt' => 'Фото на слайдере'
	), $atts );
	$i = $GLOBALS['slide_count']+1;
	$GLOBALS['slides'][$i] = '
	<div class="slider-element anim">
		<img src="'.$atts['url'].'" alt="'.$atts['alt'].'">
	</div>';
	$GLOBALS['slide_count'] = $i;
	return true;
}