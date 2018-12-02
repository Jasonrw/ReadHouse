<!DOCTYPE html>

<div class="col-lg-10" style="max-width:250px">
	<div style="min-height:500px" class="panel panel-warning">
		<div class="panel-heading">
			<h4>排行榜</h4>
		</div>
		<div class="panel-body">
			<ol class="list-group">
				<?php 
					$args = array( 'numberposts' => '10', 'orderby'=>'comment_count', 'order' => 'DESC','post_status' => 'publish' );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent )
					{?>
				<a class="list-group-item" style="border:none" href="<?php echo get_permalink($recent['ID']) ?>">
					<h4>
						<?php echo $recent["post_title"] ?>
					</h4>
				</a>
				<?php } ?>

			</ol>
		</div>
	</div>
</div>
