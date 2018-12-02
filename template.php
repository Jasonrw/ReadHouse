<!DOCTYPE html>
<html lang="en">
<head>
  <title>读书小屋</title>
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
	  background-image: url("./imgs/background.jpg");
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
<body>

<div class="jumbotron">
  <div style="background-color:rgba(0, 0, 0, 0.5);width:500px" class="container text-center">
    <h1 >读书小屋</h1>      
    <p>免费电子书资源推送</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">首页</a></li>
        <li><a href="#">社会人文</a></li>
        <li><a href="#">网络小说</a></li>
        <li><a href="#">英文原版</a></li>
        <li><a href="#">言情小说</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li style="margin-top:10px">
			<input type="text" class="form-control"  placeholder="Search">
		</li>
		<li style="margin-top:10px;margin-right:50px">
			<button class="btn btn-default" type="submit">
				<i class="glyphicon glyphicon-search"></i>
			</button>
		</li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> 我的账户</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">    
  <div class="row">
	<div class="col-lg-2">
	<div class="row">
	<div class="col-lg-2">
	</div>
	<div class="col-lg-10" style="max-width:250px">
      <div style="min-height:500px" class="panel panel-default">
        <div class="panel-heading">左侧栏（推荐信息）</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
      </div>
	 </div>
	 </div>
    </div>
    <div class="col-lg-8"> 
      <div class="row">
		<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading">示例书名</div>
			<div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
			<div class="panel-footer">示例描述--示例描述--示例描述--示例描述</div>
		</div>
		</div>
		<div class="col-lg-4"> 
		<div class="panel panel-default">
			<div class="panel-heading">示例书名</div>
			<div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
			<div class="panel-footer">示例描述--示例描述--示例描述--示例描述</div>
		</div>
		</div>
		<div class="col-lg-4"> 
		<div class="panel panel-default">
			<div class="panel-heading">示例书名</div>
			<div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
			<div class="panel-footer">示例描述--示例描述--示例描述--示例描述</div>
		</div>
		</div>
		</div>
		
		<div class="row">
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-heading">示例书名</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">示例描述--示例描述--示例描述--示例描述</div>
      </div>
    </div>
    <div class="col-lg-4"> 
      <div class="panel panel-default">
        <div class="panel-heading">示例书名</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">示例描述--示例描述--示例描述--示例描述</div>
      </div>
    </div>
    <div class="col-lg-4"> 
      <div class="panel panel-default">
        <div class="panel-heading">示例书名</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">示例描述--示例描述--示例描述--示例描述</div>
      </div>
    </div>
  </div>
    </div>
	<div class="col-lg-10" style="max-width:250px">
      <div style="min-height:500px" class="panel panel-default">
        <div class="panel-heading">右侧栏（排行榜）</div>
        <div class="panel-body">
			<ol>
				<li><h4>书名123</h4></li>
				<li><h4>书名123</h4></li>
				<li><h4>书名123</h4></li>
				<li>书名123</li>
				<li>书名123</li>
				<li>书名123</li>
				<li>书名123</li>
				<li>书名123</li>
				<li>书名123</li>
				<li>书名123</li>
				<li>书名123</li>
				<li>书名123</li>
				<li>书名123</li>
			</ol>
		</div>
      </div>
    </div>
  </div>
  
  
  
  
</div><br>

<br><br>

<footer class="container-fluid text-center">
<div class="row" >
	<div class="col-lg-1">
	</div>
	<div class="col-lg-10">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>本站资源来源说明</h4>
			</div>
			<div class="panel-body">
				<p>本站所有资源搜集于互联网，所提供下载链接也是站外链接，网站本身并不存储相关资源文件，如资源下载链接侵犯到版权方，请发送邮件到#######@gmail.com，站长核实后会第一时间移除，谢谢
				</p>
			</div>
		</div>
	</div>
  </div>
  <p>Copyright© 2018 JasonHu 保留所有权</p>  
  <!--<form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
  -->
</footer>

</body>
</html>
