
<!DOCTYPE html>
<!--[if gt IE 8]><!--> 
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>myBooks</title>
		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="favicon.ico">
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
		<!-- Animate.css -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="css/icomoon.css">
		<!-- Simple Line Icons -->
		<link rel="stylesheet" href="css/simple-line-icons.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="css/magnific-popup.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<!-- Modernizr JS -->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<style>
		.mainTitle {
			font-weight:bold;
		}
		.sizeBookCol {
			width:115px;
			height:156px;
			margin: 25px; 
			float:left;
			
		}
		</style>
	</head>




	<body>
		<header role="banner" id="fh5co-header">
			<div class="container">
				<?include("header.php");?>				
			</div>
		</header>
		
		<section id="fh5co-work">
			<div class="container">
				<?
					// if(!empty($_REQUEST['email'])) $email = $_REQUEST['email'];
					// else $email = "";
					
				?>
					<h2>로그인</h2>
					<form action="signin_proc.php" method="post">
						<div class="form-group"> 
							<label for="email" >E-mail:</label>
							<input type="text" class="form-control" id="email" name="email" palceholder="이메일을 입력하세요">
							<!-- <input type="text" class="form-control" id="email" name="email" value="<?=$email?>" palceholder="이메일을 입력하세요"> -->
						</div>
						<div class="form-group"> 
							<label for="pwd">비밀번호:</label>
							<input type="password" class="form-control" id="pwd" name="pwd"  palceholder="비밀번호를 입력하세요">
						</div>
						<!-- <div class="checkbox">
							<label><input type="checkbox" name="remember">비밀번호 기억하기</label>
						</div> -->
						<button type="submit" class="btn btn-default btn-lg btn-outline-info">로그인</button>
					</form>
			</div>
		</section>
	
		

	

	
		<footer id="footer" role="contentinfo">
			<a href="#" class="gotop js-gotop"><i class="icon-arrow-up2"></i></a>
			<div class="container">
				<div class="">
					<div class="col-md-12 text-center">
						<p>&copy; MyBooks. All Rights Reserved. <br>Created by <a href="http://freehtml5.co/" target="_blank">김재연</a></p>
						
					</div>
				</div>
				
			</div>
		</footer>
	


	
		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- Stellar Parallax -->
		<script src="js/jquery.stellar.min.js"></script>
		<!-- Counter -->
		<script src="js/jquery.countTo.js"></script>
		<!-- Main JS (Do not remove) -->
		<script src="js/main.js"></script>

	</body>
</html>

