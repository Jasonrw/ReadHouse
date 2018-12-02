<!DOCTYPE html>
<html lang="en">
	<?php get_header();?>
	<body>
	<?php while ( have_posts() ) : the_post(); ?>
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
						<div class="col-sm-4">
						<?php 
							$img_url =get_post_meta($post->ID, 'picture', true);
								if($img_url == NULL){
									$img_url = 'https://placehold.it/418x628?text=BOOKCOVER';
								}
						?>
							<img class="img-thumbnail" src="<?php echo $img_url;?>" class="img-responsive" style="width:100%" alt="Image"> 
						</div>
						<div class="col-sm-8">
							<div class="row">
								<div class="col-lg-10">
									<h2><?php the_title();?></h2>
									<h4>
										<strong>作者:</strong> 姓名</h4> 
									<p>
										<strong>上传日期：:</strong> <?php the_time( get_option( 'date_format' ) ); ?></p>
									<p>
										<strong>文件大小：:</strong> 12.5MB</p>
								</div>
								<div class="col-lg-8">
									<div class="panel panel-default">
										<div class="panel-heading" >下载地址</div>
										<div class="panel-body">
											<span>MOBI：  </span><button class="btn btn-primary">下载</button>
											<span>EPUB：  </span><button class="btn btn-primary">下载</button>
											<span>PDF：  </span><button class="btn btn-primary">下载</button>
											<span>TXT：  </span><button class="btn btn-primary">下载</button><br><br>
											<span>MOBI：  </span><button class="btn btn-primary">推送</button>
											<span>EPUB：  </span><button class="btn btn-primary">推送</button>
											<span>PDF：  </span><button class="btn btn-primary">推送</button>
											<span>TXT：  </span><button class="btn btn-primary">推送</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row" style="margin-top:10px">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading" >内容简介</div>
								<div class="panel-body">
									<?php the_content(); ?>
									<?php endwhile; ?>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row" style="margin-top:10px">
						<div class="col-lg-12">
			<?php    
			comments_template( '', true);?>
						</div>
					</div>
				</div>
				<?php get_sidebar();?>
			</div>
		</div>

		<?php get_footer();?>
	</body>
</html>
