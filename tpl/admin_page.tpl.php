<div class="wrap">
	<?php if ($template['update']){?>
		<div class="updated settings-error"><p><strong>Cambios guardados</strong></p></div>
	<?php } ?>
	<h2>Tubaret Network - Share Button Settings</h2>
	<p>Tubaret Network es una red de portales de noticias y artículos. En tu blog puedes añadir el botón del portal principal, dedicado a noticias de ámbito general, o bien incrustar el botón de alguno de los portales especializados.</p>
	<form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
		<input type="hidden" name="tbr_wp_submit" value="true"> 
		<h3>Escoge el portal de Tubaret Network donde quieres compartir tus artículos</h3>
		<select name="tbr_wp_site" id="tbr_wp_site">
			<option value="tubaret" <?php selected( $template['options']['site'], 'tubaret' ); ?>>Tubaret - Portal generalista</option>
			<option value="gameret" <?php selected( $template['options']['site'], 'gameret' ); ?>>Gameret - Videojuegos y frikeces</option>
			<option value="indieret" <?php selected( $template['options']['site'], 'indieret' ); ?>>Indieret - Música Indie</option>
			<option value="viajeret" <?php selected( $template['options']['site'], 'viajeret' ); ?>>Viajeret - Viajes, turismo y Ocio</option>
		</select>

		<h3>Tamaño del botón</h3>
		<select name="tbr_wp_size" id="tbr_wp_size">
			<option value="small" <?php selected( $template['options']['size'], 'small' ); ?>>Pequeño</option>
			<option value="medium" <?php selected( $template['options']['size'], 'medium' ); ?>>Mediano</option>
			<option value="large" <?php selected( $template['options']['size'], 'large' ); ?>>Grande</option>
			<option value="xlarge" <?php selected( $template['options']['size'], 'xlarge' ); ?>>Extra Grande</option>
		</select>

		<h3>Posición del botón</h3>
		<p>- Vertical</p>
		<select name="tbr_wp_position_vert" id="tbr_wp_position_vert">
			<option value="top" <?php selected( $template['options']['position_vert'], 'top' ); ?>>Al principio del artículo</option>
			<option value="bottom" <?php selected( $template['options']['position_vert'], 'bottom' ); ?>>Al final del artículo</option>
		</select>
		<p>- Horizontal</p>
		<select name="tbr_wp_position_horiz" id="tbr_wp_position_horiz">
			<option value="left" <?php selected( $template['options']['position_vert'], 'left' ); ?>>Izquierda</option>
			<option value="right" <?php selected( $template['options']['position_horiz'], 'right' ); ?>>Derecha</option>
		</select>
		<p class="submit"><input type="submit" class="button-primary" value="Guardar Cambios" /></p>
	</form>

</div>