<!DOCTYPE html>
<html lang="en">
	<?php get_header();?>
	<body>

		<div class="container-fluid">    
			<div class="row">
				<div class="col-lg-2">
					<div class="row">
						<div class="col-lg-2">
						</div>
						<?php get_sidebar('left');?>
					</div>
				</div>
				<div class="col-lg-8"> 
					<div class="row">
						<?php 
							$args = array( 'numberposts' => '6', 'order' => 'DESC','post_status' => 'publish' );
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent )
							{
								$img_url =get_post_meta($recent['ID'], 'picture', true);
								if($img_url == NULL){
									$img_url = 'https://placehold.it/418x628?text=BOOKCOVER';
								}
						?>
						<a href="<?php echo get_permalink($recent['ID']); ?>">
							<div class="col-lg-3">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4>
											<?php echo $recent["post_title"]; ?>
										</h4>
									</div>
									<div class="panel-body">
										<img src="<?php echo $img_url; ?>" class="img-responsive" style="width:100%" alt="Image">
										</div>
										<div class="panel-footer">
											<?php echo $recent["post_excerpt"]; ?>
										</div>
									</div>
								</div>
							</a>
							<?php } ?>
						</div>
					</div>
					<?php get_sidebar(); ?>
				</div>
			</div>
			<br>

				<br>
					<br>
						<?php get_footer();?>

					</body>
				</html>