<?php
	include "conn.php";
	$isbn=$_GET['isbn'];
	$query="SELECT * from books where isbn='$isbn'";
	$rs=mysql_query($query,$conn);
	list($isbn,$email,$cover_path,$title,$writer,$publisher,$pub_date,
	$read_date,$audio_path,$rem_words,$comments,$moreinfo,$book_reg_date)=mysql_fetch_array($rs);
	
?>
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
        .spanAddOnText {
			color:#333638;
			font-size: 18px;
		}

		.inputText {
			color:#333638;
			font-size:18px;
			/* font-size: 17px; */
		}

		.buttons {
			color:#333638;
			font-size: 21px;
			margin-top:100px;
			margin-left:30px
		}
		.firstButtons {
			color:#333638;
			font-size: 21px;
			margin-left:150px;
			margin-top:100px;
        }
        
        .inputMargin {
            margin-bottom: 80px;
        }

        .audioMargin {
            margin-left:170px;
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
                    <h2 class="to-animate">내 책 상세정보 열어보기</h2>
				</div>
			</div>

			

			<!-- 검색결과 자동 입력란 및 사용자 본인 노트 기록 -->
			<div class="row row-bottom-padded-sm" id="SearchR">
					<form action="updateBookDb.php" method="post" class="form-horizontal">
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
								<input type="date" class="form-control" id="pub_date" name="pub_date" value="<?=$pub_date?>">
							</div>
					</div>
					<div class="form-group">
							<label for="isbn" class="control-label col-sm-2 spanAddOnText">ISBN</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="isbn" name="isbn" value="<?=$isbn?>" readonly>
							</div>
					</div>

					<div class="form-group">
							<label for="read_date" class="control-label col-sm-2 spanAddOnText">읽은 날짜</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" id="read_date" name="read_date" value="<?=$read_date?>">
							</div>
					</div>
					<div class="form-group">
							<label for="rem_words" class="control-label col-sm-2 spanAddOnText">기억하고 싶은 문장</label>
							<div class="col-sm-10">
								<textarea class="form-control" id="rem_words" name="rem_words" rows="8"><?=$rem_words?></textarea>
							</div> 
					</div>
					<div class="form-group">
							<label for="comments" class="control-label col-sm-2 spanAddOnText">나의 코멘트</label>
							<div class="col-sm-10">
								<textarea class="form-control" id="comments" name="comments" rows="8"><?=$comments?></textarea>
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
					<input type="hidden" id="moreinfo" name="moreinfo" value=<?=$moreinfo?>>

					<div class="form-group">
							<input type="submit" value="내용 수정하기" class="btn btn-default btn-lg col-sm-3 firstButtons">
							<input type="button" value="책장 목록으로" class="btn btn-default btn-lg col-sm-3 buttons" onclick="goBookShelf()">
							<input type="button" value="책 삭제하기" class="btn btn-default btn-lg col-sm-3 buttons" onclick="deleteBook()">		
					</div>
					<script>
					function goBookShelf() {
						location.href="showBookShelf.php"
					}
					function deleteBook() {
						window.open("preDel.php?isbn=<?=$isbn?>");
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


	<!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
	<script src="js/jquery.style.switcher.js"></script>
	<script>
		$(function(){
			$('#colour-variations ul').styleSwitcher({
				defaultThemeId: 'theme-switch',
				hasPreview: false,
				cookie: {
		          	expires: 30,
		          	isManagingLoad: true
		      	}
			});	
			$('.option-toggle').click(function() {
				$('#colour-variations').toggleClass('sleep');
			});
		});
	</script>
	<!-- End demo purposes only -->

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

