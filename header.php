<!DOCTYPE html>
	<head>
		<title>
			<?php bloginfo(‘name’); ?>
		</title>
		<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
					<style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }

    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
	  background-image: url("<?php echo get_stylesheet_directory_uri() ?>/imgs/background.jpg");
	  background-size: cover;
	  color:#FFFFFF
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
					</style>
				</head>
				
					<div class="jumbotron">
						<div style="background-color:rgba(0, 0, 0, 0.5);width:500px" class="container text-center">
							<h1 >
								<a href="<?php bloginfo('url'); ?>"> <?php bloginfo('name'); ?>
								</a>
							</h1>      
							<p>
								<?php bloginfo('description'); ?>
							</p>
						</div>
					</div>
				<body>


					<nav class="navbar navbar-inverse">
						<div class="container-fluid">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
									<span class="icon-bar"/>
									<span class="icon-bar"/>
									<span class="icon-bar"/>
								</button>
								<a class="navbar-brand" href="#">Logo</a>
							</div>
							<div class="collapse navbar-collapse" id="myNavbar">
								<ul class="nav navbar-nav">
									<li class="active">
										<a href="<?php bloginfo('url'); ?>">首页</a>
									</li>
									<?php
			$category_ids = get_all_category_ids();
			foreach($category_ids as $cat_id) {
				$cat_name = get_cat_name($cat_id);
				$category_link = get_category_link( $cat_id );
				echo '<li>
<a href="'.$category_link.'">'.$cat_name.'</a>
</li>';
			}
		?>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<li style="margin-top:10px">
										<input type="text" class="form-control"  placeholder="Search">
										</li>
										<li style="margin-top:10px;margin-right:50px">
											<button class="btn btn-default" type="submit">
												<span class="glyphicon glyphicon-search"/>
											</button>
										</li>
										<li>
											<a href="#">
												<span class="glyphicon glyphicon-user"/> 我的账户</a>
										</li>
									</ul>
								</div>
							</div>
						</nav>
</body>