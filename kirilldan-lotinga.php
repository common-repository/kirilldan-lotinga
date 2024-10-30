<?php
/**
 * Plugin Name: Kirilldan lotinga
 * Plugin URI: https://savodxon.uz
 * Version: 1.0
 * Author: Javlon Juraev
 * Author URI: https://www.facebook.com/jjavlon
 * Description: Kirill yozuvidagi sayt matnini lotin yozuviga o'girib ko'rsatadigan plagin
 * License: GPL2
 */



add_action('wp_enqueue_scripts', 'kirilldan_lotinga_style');
add_action('wp_footer', 'kirilldan_lotinga_script');

function kirilldan_lotinga_script() {
	$htmlOutput = '<button id="kirilldan_lotinga" class="button button-primary" onclick="kirilldanLotingaOyna()">A</button>
		<div id="kirilldan_lotinga_oyna">
			 <button id="kirilldan_lotinga_lat" class="button button-primary" onclick="kirilldanLotingaTugma()">Kirill yozuvida o‘qish</button>
			 <button id="kirilldan_lotinga_cyr" class="button button-primary" onclick="kirilldanLotingaTugma()">Лотинда ёзувида ўқиш</button>
		</div>';
    echo $htmlOutput;
	wp_register_script('kirilldan-lotinga', plugins_url('kirilldan-lotinga.js', __FILE__), '', '', true);
	wp_enqueue_script('kirilldan-lotinga');
}
function kirilldan_lotinga_style() {
	wp_register_style('kirilldan-lotinga', plugins_url('kirilldan-lotinga.css', __FILE__));
	wp_enqueue_style('kirilldan-lotinga');

}




