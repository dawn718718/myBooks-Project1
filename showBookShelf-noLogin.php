
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
		<link href="https://fonts.googleapis.com/css?family=Yeon+Sung|Stylish" rel="stylesheet">
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
		.loginComment {
			text-align:right;
			color:black;
			font-size:17px;
		}
		</style>
	</head>




	<body>
	<header role="banner" id="fh5co-header">
		<div class="container">
			<?include("header.php");?>
			
		</div>	
	</header>



	
		<section id="fh5co-work" data-section="work">
 		<!--페이지 메인 타이틀-->
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate mainTitle">내 책장</h2>
					</div>
				</div>
			</div>
			

		    <div class="container">
				<!-- 검색 결과 디스플레이 -->
				<div class="row row-bottom-padded-sm" id="SearchR">
					<img class="col-sm-6" src="images/bookshelf_notitle.png" alt="책장샘플이미지" height="600px">
					<!-- <img class="col-sm-1" src="images/arrow1.jpeg" alt="화살표" height="30px" width="30px"> -->

					<div class="col-sm-5" >
						<p style="font-size:50px;color:#595959; vertical-align: baseline;margin:70px;">책을 추가하고<br>나만의 책장을<br>만들어 보세요<br><span style="font-size: 27px;">로그인 후 이용가능합니다</span>
						</p>
					</div>

				</div> 
				<div class="row">
						<a href="signup.php"><button type="button" class="btn btn-primary col-md-4 " style="margin-left:20px;font-size:17px;" ><stron>회원가입하기</strong></button></a>
						<a href="signin.php"><button type="button" class="btn btn-primary col-md-4 " style="margin-left:20px;font-size:17px;" ><stron>로그인</strong></button></a>

					</div>
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

