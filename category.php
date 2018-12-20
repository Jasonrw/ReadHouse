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
				
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="row" style="margin-bottom:20px;">
						<div class="col-sm-2">
						<?php 
							$img_url =get_post_meta($post->ID, 'picture', true);
								if($img_url == NULL){
									$img_url = 'https://placehold.it/41x62?text=BOOKCOVER';
								}
						?>
							<img class="img-thumbnail" src="<?php echo $img_url;?>" class="img-responsive" style="width:123px;height:186px" alt="Image"> 
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-lg-10">
									<h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
										<strong>作者:</strong> 姓名
									<p>
										<strong>上传日期：:</strong> <?php the_time( get_option( 'date_format' ) ); ?></p>
									<p>
										<strong>文件大小：:</strong> 12.5MB</p>
								</div>
								
							</div>
						</div>
						<div class="col-sm-10">
							<?php the_excerpt(); ?>
						</div>
					</div>
						<hr style="border: 0;border-bottom: 1px dashed #ccc;background: #999;"/>
			<?php endwhile; ?>
					
					
					<div class="row" style="margin-top:10px">
					<?php the_posts_pagination( array(
'mid_size' => 3,
'prev_text' =>'上一页',
'next_text' =>'下一页',
'before_page_number' => '<span class="meta-nav screen-reader-text">第 </span>',
'after_page_number' => '<span class="meta-nav screen-reader-text"> 页</span>',
) ); ?>
					</div>
				</div>
				<?php get_sidebar();?>
			</div>
		</div>

		<?php get_footer();?>
	</body>
</html>
