<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url('rs/flatui/bootstrap/css/bootstrap.css');?>" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="<?php echo base_url('rs/flatui/css/flat-ui.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('rs/flatui/css/demo.css');?>" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo base_url('rs/flatui/images/favicon.ico');?>">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body> 
  	<nav class="navbar navbar-inverse" role="navigation" style="border-radius:0px;">
  		<form class="navbar-form navbar-right" action="#" role="search">
	      <div class="form-group">
	        <div class="input-group">
	          <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
	          <span class="input-group-btn">
	            <button type="submit" class="btn"><span class="fui-search"></span></button>
	          </span>            
	        </div>
	      </div>               
	    </form>
	</nav>
  	<div class="container">
  		 <div class="login">
        <div class="login-screen">
          <div class="login-icon">
            <img src="<?php echo base_url('rs/flatui/images/icons/png/book.png');?>" alt="Welcome to Mail App" />
            <h4>Welcome to <small>Dbw Net</small></h4>
          </div>

          <div class="login-form">
            <div class="form-group">
              <input type="text" class="form-control login-field" value="" placeholder="用户名" id="login-name" />
              <label class="login-field-icon fui-user" for="login-name"></label>
            </div>

            <div class="form-group">
              <input type="password" class="form-control login-field" value="" placeholder="密码" id="login-pass" />
              <label class="login-field-icon fui-lock" for="login-pass"></label>
            </div>

            <a class="btn btn-primary btn-lg btn-block" href="#">登录</a>
            <div class="container-fluid">
				<div class="row-fluid">
					<div class="span4">
						
					</div>
					<div class="span4">
						<a class="login-link" href="#">注册</a>
					</div>
					<div class="span4">
						<a class="login-link" href="#">忘记密码?</a>
					</div>
				</div>
			</div>        
            
          </div>
        </div>
      </div>
  	</div>  <!--End Container-->   

    <footer>
         
    </footer> 
    
  </body>
</html>
