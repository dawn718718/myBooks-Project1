<?php
	include "conn.php";
	$title=strip_tags($_POST["title1"]);
	$cover_path=$_POST["img1"];
	$writer=strip_tags($_POST["writer1"]);
	$publisher=$_POST["publisher1"];
	$pub_date=$_POST["pub_date1"];
	$pub_date_created=date_create($pub_date);
	$isbn=$_POST["isbn1"];
?>
<!DOCTYPE html>
	
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
        .spanAddOnText {
			color:#333638;
			font-size: 18px;
		}

		.inputText {
			color:#333638;
			font-size:18px;
		}

		.buttons {
			color:#333638;
			font-size: 21px;
			margin-top:100px;
			margin-left:10px
		}
		.firstButtons {
			color:#333638;
			font-size: 21px;
			margin-left:100px;
			margin-top:100px;
        }
        
        .inputMargin {
            margin-bottom: 80px;
        }

        .tipP  {
			margin-top:55px;
            color:#0c4eb2;
            font-weight:bold;
            font-size:20px;
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
	
		<section id="fh5co-work">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate">책 상세 정보 입력하기</h2>
					</div>
				</div>

<!-- 검색결과 자동 입력란 및 사용자 본인 노트 기록 -->
				<div class="row row-bottom-padded-sm" id="SearchR">
					<p class="form-control-static tipP">네이버 책 검색 시스템에서 자동으로 기입되는 정보입니다</p>
					<form action="insertBookDb.php" method="post" class="form-horizontal">
						<div class="form-group">
							<label for="title" class="control-label col-sm-2 spanAddOnText">도서명</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="title" name="title" value="<?=$title?>">
							</div>
						</div>
						<div class="form-group">
							<label for="writer" class="control-label col-sm-2 spanAddOnText">작가</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="writer" name="writer" value="<?=$writer?>">
							</div>
						</div>
						<div class="form-group">
							<label for="publisher" class="control-label col-sm-2 spanAddOnText">출판사</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="publisher" name="publisher" value="<?=$publisher?>">
							</div>
						</div>
						<div class="form-group">
							<label for="pub_date" class="control-label col-sm-2 spanAddOnText">출판일</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" id="pub_date" name="pub_date" value="<?=date_format($pub_date_created,'Y-m-d')?>">
							</div>
						</div>
						<div class="form-group">
							<label for="isbn" class="control-label col-sm-2 spanAddOnText">ISBN</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="isbn" name="isbn" value="<?=$isbn?>">
							</div>
						</div>
						<div class="form-group">
						<p class="form-control-static tipP">사용자가 직접 기입하는 정보입니다</p>
								<label for="read_date" class="control-label col-sm-2 spanAddOnText">읽기 완료 날짜</label>
								<div class="col-sm-10">
									<input type="date" class="form-control" id="read_date" name="read_date">
								</div>
						</div>
						<div class="form-group">
								<label for="read_date" class="control-label col-sm-2 spanAddOnText">기억하고 싶은 문장</label>
								<div class="col-sm-10">
									<textarea class="form-control" id="rem_words" name="rem_words" rows="8"></textarea>
								</div>
						</div>
						<div class="form-group">
								<label for="comments" class="control-label col-sm-2 spanAddOnText">나의 코멘트</label>
								<div class="col-sm-10">
									<textarea class="form-control" id="comments" name="comments" rows="8"></textarea>
								</div>
						</div>
						<!-- <div class="form-group">
							<label for="audio_path" class="control-label col-sm-2 spanAddOnText">오디오 북 파일</label>
							<div class="col-sm-5">
								<input type="file" class="form-control" id="audio_path" name="audio_path" accept="audio/mepg, audio/ogg" >
							</div>
							<div class="col-sm-5">
								<audio controls>
										<source src="#" type="audio/mpeg">
										<source src="#" type="audio/ogg">
								</audio>
							</div>
						</div> -->
						
						<input type="hidden" id="email" name="email" value=<?=$email?>>
						<input type="hidden" id="cover_path" name="cover_path" value=<?=$cover_path?>>
						
						<div class="form-group row">
								<input type="submit" value="저장" class="btn btn-lg col-xs-2 firstButtons">
								<input type="button" value="취소" class="btn btn-lg col-xs-2 buttons" onclick="goback()">
								<input type="reset" value="초기화" class="btn btn-lg col-xs-2 buttons">
						</div>
						<script>
						function goback(){
							window.history.back();
						}
						</script>
					</form>	
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
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/magnific-popup-options.js"></script>
		<!-- Main JS (Do not remove) -->
		<script src="js/main.js"></script>

	</body>
</html>

