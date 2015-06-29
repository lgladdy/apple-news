<h1>Exporting <?php echo $post->post_title; ?></h1>

<form method="post">
	<?php wp_nonce_field( 'export', 'apple-export-nonce' ); ?>
	<table class="form-table">
		<tr>
			<th scope="row">Pullquote</th>
			<td>
			<textarea name="pullquote" placeholder="Lorem ipsum..." rows="10" class="large-text"><?php echo $post_meta[ 'apple_export_pullquote' ][0] ?></textarea>
				<p class="description">This is optional and can be left blank. A pull
				quote is a key phrase, quotation, or excerpt that has been pulled from an
				article and used as a graphic element, serving to entice readers into the
				article or to highlight a key topic.</p>
			</td>
		</tr>
		<tr>
			<th scope="row">Pullquote position</th>
			<td>
				<input name="pullquote_position" type="number" class="small-text" value="<?php echo $post_meta[ 'apple_export_pullquote_position' ][0] ?>">
				<p class="description">The position in the article the pullquote will appear.</p>
			</td>
		</tr>
	</table>

	<p class="submit">
		<a href="<?php echo admin_url( 'admin.php?page=apple_export_index' ); ?>" class="button">Back</a>
		<button type="submit" class="button button-primary">Export Post</button>
	</p>
</form>