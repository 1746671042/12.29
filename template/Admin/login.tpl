
<!DOCTYPE html>

<head>

	<meta charset="utf-8" />

	<title>后台登录</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="public/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="public/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="public/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="public/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="public/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="public/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="public/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES -->

	<link href="public/css/login.css" rel="stylesheet" type="text/css"/>

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="public/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="login">

	<!-- BEGIN LOGO -->

	<div class="logo">

		<img src="public/image/logo-big.png" alt="" /> 

	</div>

	<!-- END LOGO -->

	<!-- BEGIN LOGIN -->

	<div class="content">

		<!-- BEGIN LOGIN FORM -->

		<form class="form-vertical login-form" >

			<h3 class="form-title">后台管理员登陆</h3>

			<div class="alert alert-error hide"  id="logo_msg">

				<button class="close" data-dismiss="alert"></button>

				<span id="logo_alert"></span>

			</div>

			<div class="control-group">

				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->

				<label class="control-label visible-ie8 visible-ie9">Username</label>

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-user"></i>

						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Username" name="username"/>

					</div>

				</div>

			</div>

			<div class="control-group">

				<label class="control-label visible-ie8 visible-ie9">Password</label>

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-lock"></i>

						<input class="m-wrap placeholder-no-fix" type="password" placeholder="Password" name="password"/>

					</div>

				</div>

			</div>
			<div class="form-actions">
				<label class="checkbox">
				<input type="checkbox" name="remember" value="1"/> Remember me
				</label>
				<button type="button" class="btn green pull-right" id="register-submit-btn">
				登录 <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
			<div class="forget-password">
				<h4>Forgot your password ?</h4>
				<p>
					no worries, click <a href="javascript:;" class="" id="forget-password">here</a>
					to reset your password.
				</p>
			</div>
			<div class="create-account">
				<p>
					Don't have an account yet ?&nbsp; 

					<a href="javascript:;" id="register-btn" class="">Create an account</a>

				</p>

			</div>

		</form>

		<!-- END LOGIN FORM -->        

		<!-- BEGIN FORGOT PASSWORD FORM -->

		

		<!-- END FORGOT PASSWORD FORM -->

		<!-- BEGIN REGISTRATION FORM -->

		

		<!-- END REGISTRATION FORM -->

	</div>

	<!-- END LOGIN -->

	<!-- BEGIN COPYRIGHT -->

	<div class="copyright">

		2013 &copy; Metronic. Admin Dashboard Template.

	</div>

	<!-- END COPYRIGHT -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="public/js/jquery-1.10.1.min.js" type="text/javascript"></script>

	<script src="public/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="public/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

	<script src="public/js/bootstrap.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="public/js/excanvas.min.js"></script>

	<script src="public/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="public/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="public/js/jquery.blockui.min.js" type="text/javascript"></script>  

	<script src="public/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="public/js/jquery.uniform.min.js" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<script src="public/js/jquery.validate.min.js" type="text/javascript"></script>

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<script src="public/js/app.js" type="text/javascript"></script>

	<script src="public/js/login.js" type="text/javascript"></script>      

	<!-- END PAGE LEVEL SCRIPTS --> 

	<script>

		jQuery(document).ready(function() {     

		  App.init();

		  Login.init();

		});

	</script>

	<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->

</html>


<script>
    {literal}
    $("#register-submit-btn").click(function(){
        var name = $("input[name='username']").val();
        var pwd = $("input[name='password']").val();
         $.ajax({
                    type:"get",
                    url:"index.php?class=Admin&action=checkLogin&name="+name+"&pwd="+pwd,
                    data:{name:name,pwd:pwd},
                    success:function(data){
                        $("#logo_msg").show();
                        data = $.parseJSON(data);
                        console.log(data.message);
                        if(data.code ==200){
                            alert(data.message);
                           $("#login_alert").html(data.message);
                           window.location.href="index.php?class=index&action=shouye";
                        }else{
                            alert(data.message);
                           $("#login_alert").html(data.message);
                        }
                    }
                });
    } )
    {/literal}
</script>