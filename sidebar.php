<!DOCTYPE html>

<div class="col-sm-2" style="max-width:250px">
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
				<a class="list-group-item" style="border:none; padding:10px 5px" href="<?php echo get_permalink($recent['ID']) ?>">
					
						<?php echo $recent["post_title"] ?>
					
				</a>
				<hr style="margin-top:1px; margin-bottom:1px; border: 0;border-bottom: 1px dashed #ccc;background: #999;"/>
				<?php } ?>

			</ol>
		</div>
	</div>
</div>
