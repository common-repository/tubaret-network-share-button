<?php 
	$tubaretSites = array(
	'tubaret' => 'http://www.tubaret.com',
	'gameret' => 'http://www.gameret.com',
	'indieret' => 'http://www.indieret.com',
	'viajeret' => 'http://www.viajeret.com'
	);
?>


<iframe scrolling="no"
		style="width: 70px; height: 78px; overflow: hidden; border: 0;" 
		class="tbr_wp_share <?php echo get_option('tbr_wp_position_horiz', 'right') ?> <?php echo get_option('tbr_wp_position_vert', 'top') ?> <?php echo get_option('tbr_wp_site', 'tubaret')?> <?php echo get_option('tbr_wp_size', 'large')?>"
		src="<?php echo $tubaretSites[get_option('tbr_wp_site', 'tubaret')]; ?>/story/button?button_size=<?php echo get_option('tbr_wp_size', 'large')?>"
		></iframe>