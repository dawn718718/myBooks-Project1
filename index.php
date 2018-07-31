<?
include "conn.php";
?>

<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>MyBooks</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
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
		<link href="https://fonts.googleapis.com/css?family=Yeon+Sung" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
		<style>
		.sizeBookCol {
			width:115px;
			height:156px;
			margin: 25px; 
			float:left;
			
		}
		.moreBookButton {
			font-size:15px;
			background-color:#7a7a7a;
			color: black;
			text-decoration:none;
		}
		a {
			text-decoration:none;
		}
		
		.howtouse_title {
			color:#595959;font-size:45px;text-align:center;margin-top:200px;
		}
		.stepNum {
			margin-top:40px;margin-left:5px;font-size:100px;text-align:center;font-weight:bold;margin-right:30px;
		}
		.stepExp{
			margin-top:35px;font-size:26px; display:inline;vertical-align:middle;text-align:left;
		}
		 /* * {
			 border: 1px solid red;
		 } */
		
		</style>
	</head>

	<body>
		<header role="banner" id="fh5co-header">
			<div class="container">
				<?include("header.php");?>
			</div>
		</header>
		<!-- 상단 탑 메인 이미지 및 글씨 -->
		<section id="fh5co-home" data-section="home" style="background-image: url(images/full_image_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="gradient"></div>
			<div class="container">
				<div class="text-wrap">
					<div class="text-inner">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<h1 class="to-animate">나만의 책장을 만들어보세요.</h1>
								<h2 class="to-animate">읽었던 책이 잘 기억나지 않나요? 내가 좋아했던 문장, 남기고 싶은 말을 책 정보와 함께 노트로 기록해보세요.</h2><br>
								
							</div>
						</div>

<? if($email == ""){?>		
						<!-- 세션키 없을 경우 / 로그인 입력창 및 임시키-->
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="to-animate" style="color:#1f1f14;font-size: 20px;">모든 메뉴는 <strong>로그인 후</strong> 이용할 수있습니다.</div><br><br>
							</div>
						</div>

						<div class="row" style="height:100px;">
							<div class="col-md-8 col-md-offset-2" style="text-algin:center">
								<button type="button" class="btn btn-primary btn-lg"  onclick="GoSignin()">&nbsp &nbsp 로그인 &nbsp &nbsp</button>
								<button type="button" class="btn btn-primary btn-lg" onclick="GoJoin()"> &nbsp &nbsp회원가입 &nbsp &nbsp</button>
							</div>				
						</div>
						<script>
						function GoSignin(){
							location.href="signin.php";
						}
						function GoJoin(){
							location.href="signup.php";
						}
						</script>
						
						
						
						
<?} ?>
					</div>
				</div>
			</div>
			<div class="slant"></div>
		</section>

<!-- 3줄 버튼 (새 책 추가, 내 책장가기, 검색하기) -->
		<section id="fh5co-intro">
			<div class="container">
				<div class="row row-bottom-padded-lg">
					<div class="fh5co-block to-animate" style="background-image: url(images/img_7.jpg);">
						<div class="overlay-darker"></div>
						<div class="overlay" style="border-color: grey"></div>
						<div class="fh5co-text">
							<i class="fh5co-intro-icon icon-bulb"></i>
							<h1>새 책 추가하기</h1>
							<p style="font-size:18px;">네이버 책 데이터베이스를 이용한 책 검색을 통해 원하는 책을 손쉽게 내 책장으로 가져와 관리할 수 있습니다.</p>
<? if(!$email == ""){?>		
							<p><a href="searchBook.php" class="btn btn-primary">Click Me</a></p>
<?}?>

<? if($email == ""){?>
							<p onclick="alert()"><a class="btn btn-primary">Click Me</a></p>
							<script>
							function alert(){
								var a = confirm("로그인한 경우만 사용 가능한 메뉴입니다. 로그인 하시겠습니까?");
								if(a){
									location.href="signin.php";
								}else {
									return;
								}
							}
							</script>
<?}?>
						</div>
					</div>

					<div class="fh5co-block to-animate" style="background-image: url(images/img_8.jpg);">
						<div class="overlay-darker"></div>
						<div class="overlay"  style="border-color: grey"></div>
						<div class="fh5co-text">
							<i class="fh5co-intro-icon icon-wrench"></i>
							<h1>책장 보기</h1>
							<p style="font-size:18px;">내 책장의 책들을 갤러리 형식으로 보여주어, 책에 대한 정보 및 나의 나만의 노트들을 둘러보고 수정할 수 있습니다. </p>
							<p><a href="showBookShelf.php" class="btn btn-primary">Click Me</a></p>
						</div>
					</div>
					<div class="fh5co-block to-animate" style="background-image: url(images/img_10.jpg);">
						<div class="overlay-darker"></div>
						<div class="overlay" style="border-color: grey"></div>
						<div class="fh5co-text">
							<i class="fh5co-intro-icon icon-rocket"></i>
							<h1>책 통계</h1>
							<p style="font-size:18px;">지금까지 읽은 책 정보에 대한 간략한 통계를 만들어주어, 책장에 놓인 책에 대한 수치를 한 눈에 알 수 있습니다.</p>
							<p><a href="#fh5co-counters" class="btn btn-primary">Click Me</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>


<? if($email == ""){?>		
<!-- 세션키 없을 경우 / 갤러리 캡쳐 이미지-->
	<div class="container">
		<div class="row row-bottom-padded-sm" id="SearchR">
			<img class="col-sm-6" src="images/bookshelf_withTitle.png" alt="책장샘플이미지" height="600px">
			<div class="col-sm-6" >
				<p style="font-size:50px;color:#595959; margin-top:180px; margin-left:70px;">책을 추가하고<br><span style="font-weight:bold">나만의 책장</span>을<br>만들어 보세요.</p>
			</div>
		</div> 
	</div>
<!-- 세션키 없을 경우 / 책 추가 방법 3 스텝-->
	</div class="container">
		<div class="row row-bottom-padded-sm">
			<p class="howtouse_title">내가 읽은 책을 <br><span style="font-weight:bold;">검색창</span>을 이용해서<br> 책장에 넣는 방법</p>
		</div>

		<!-- step1 -->
		<div class="row row-bottom-padded-sm" style="text-align:center;" id="SearchR">
			<div class="col-sm-3" style="margin-left:200px;">
				<img src="images/search_img.png" alt="step1" width="200" height="223">
			</div>
			<div class="stepNum col-sm-1">1</div>
			<div class="stepExp col-sm-4"><span style="font-weight:bold">책 제목을 검색한다.</span> <br>네이버 책 DB와의 연동으로, 사용자가 책 일일이 정보를 입력하지 않고 책 검색어만으로 책을 추가할 수 있어요.</div>
		</div>

		<!-- step2 -->
		<div class="row row-bottom-padded-sm" style="text-align:center;" id="SearchR">
			<div class="col-sm-3" style="margin-left:200px;">
				<img src="images/step2.png" alt="step2" width="200" height="223">
			</div>
			<div class="stepNum col-sm-1">2</div>
			<div class="stepExp col-sm-4"><span style="font-weight:bold">추가할 책을 선택한다.</span> <br>자동으로 입력된 책의 기본적인 정보 외에 나만의 서평이나 기억하고 싶은 문장을 담은 독서 노트를 추가할 수 있어요.</div>
		</div>

		<!-- step3 -->
		<div class="row row-bottom-padded-sm" style="text-align:center;" id="SearchR">
			<div class="col-sm-3" style="margin-left:200px;">
				<img src="images/step3.png" alt="step3" width="200" height="223">
			</div>
			<div class="stepNum col-sm-1">3</div>
			<div class="stepExp col-sm-4"><span style="font-weight:bold">책장에 넣는다.</span><br>내 책장에서 지금까지 추가한 책을 한눈에 볼 수 있으며, 책을 클릭하면 책 정보 및 책에 대한 내 기록을 다시 열어 볼 수 있어요.</div>
		</div>
	</div>
<?}?>


<!-- 세션키 있을 경우 / 책 갤러리 -->
<? if(!$email == ""){?>

		<section id="fh5co-work" data-section="work">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate">나의 책장</h2>
						
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3 id="gallery_title">가장 최근에 추가한 책을 순서대로 보여줍니다.</h3><br>	
							</div>
						</div>
					</div>
				</div>
				<div id="row_for_blank" class="row">
<!-- 책이 하나도 책장에 없을 경우 1 -->
					<?php
						$query="SELECT count(isbn) from books where email='$email'";
						$rs=mysql_query($query,$conn);
						$row=mysql_fetch_array($rs);
						$bookCnt=$row[0];
					?>

					<?if($bookCnt==0){?>
						<div class="col-sm-3" >
						<a href="searchBook.php">
							<p style="width:130px; height:160px; text-align:center;border:4px dotted grey;"></p>
						</a>
					</div>
					<?}?>
				</div>
<!-- 루프 돌릴 갤러리 column 단위 시작-->
				<div class="row row-bottom-padded-sm" id="SearchR">
						<?php
							
							
							//그 외 경우
							$query="SELECT * from books where email='$email' order by book_reg_date desc limit 28";
							$rs=mysql_query($query,$conn);
							$i=0;
							while(list($isbn,$email_db,$cover_path,$title,$writer,$publisher,$pub_date,
							$read_date,$audio_path,$rem_words,$comments,$moreinfo,$book_reg_date)=mysql_fetch_array($rs)){;
						?>
							<div class="sizeBookCol">
								<a href="OpenBookDetails.php?isbn=<?=$isbn?>">
									<div>
										<img src='<?=$cover_path?>' alt='<?=$title?>' width="115" height="156" >
									</div>
								</a>
							</div> 
						<?php
							}
						?>

				</div> 
<!-- (책 있을경우) 책 추가하기 / (책 하나도 없을 경우) 책 더보기-->
					<?if($bookCnt!=0){?>
						<div id="show_more_books_btn" class="row">
							<a href="showBookShelf.php"><button type="button" class="btn btn-primary col-md-4 " style="margin-left:20px;font-size:17px;" ><stron>내 책장으로 이동하여 책 더보기</strong></button></a>
						</div>
					<? } else {?>
					<div id="add_book_btn" class="row">
						<p class="col-sm-7" style="color:#666666;font-size:23px">책장에 책이 없습니다.<br>  아래 버튼을 눌러 책장에 넣을 책을 찾으러 가보세요.</p>
					</div>

					<div class="row">
					<a href="searchBook.php"><button type="button" class="btn btn-primary col-md-4 " style="margin-left:20px;font-size:17px;" ><stron>책 추가하기</strong></button></a>
					</div>
					<? }?>
			</div>
		</section>
<?} ?>


	
<!-- 통계 전광판 -->
		<section id="fh5co-counters" style="background-image: url(images/full_image_1.jpg);" data-stellar-background-ratio="0.5">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center to-animate">
						<h2>내 책에 관한 기록</h2>
					</div>
				</div>

				<div class="row">
					<?
					$query1="SELECT count(isbn) from books where email='$email'";
					$rs1=mysql_query($query1,$conn);
					$row1=mysql_fetch_array($rs1);
					$book_count=$row1[0];
					// echo "<span style='color:white'>".$row1[0]."</span>";
					?>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="fh5co-counter to-animate">
							<i class="fh5co-counter-icon icon-briefcase to-animate-2"></i>
							<span class="fh5co-counter-number js-counter" data-from="0" data-to="<?=$book_count?>" data-speed="1000" data-refresh-interval="50"><?=$book_count?></span>
							<span class="fh5co-counter-label">읽은 책 수</span>
						</div>
					</div>

					<?
					$query1="SELECT count(rem_words) from books where email='$email' and rem_words <> ''";
					$rs1=mysql_query($query1,$conn);
					$row1=mysql_fetch_array($rs1);
					$rem_words_count=$row1[0];
					// echo "<span style='color:white'>".$row1[0]."</span>";
					?>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="fh5co-counter to-animate">
							<i class="fh5co-counter-icon icon-code to-animate-2"></i>
							<span class="fh5co-counter-number js-counter" data-from="0" data-to="<?=$rem_words_count?>" data-speed="1000" data-refresh-interval="50"><?=$rem_words_count?></span>
							<span class="fh5co-counter-label">기억하고 싶은 말</span>
						</div>
					</div>

					<?
					$query1="SELECT count(comments) from books where email='$email' and comments <> ''";
					$rs1=mysql_query($query1,$conn);
					$row1=mysql_fetch_array($rs1);
					$comment_count=$row1[0];
					// echo "<span style='color:white'>".$row1[0]."</span>";
					?>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="fh5co-counter to-animate">
							<i class="fh5co-counter-icon icon-cup to-animate-2"></i>
							<span class="fh5co-counter-number js-counter" data-from="0" data-to="<?=$comment_count?>" data-speed="1000" data-refresh-interval="50"><?=$comment_count?></span>
							<span class="fh5co-counter-label">나만의 노트</span>
						</div>
					</div>

					<?
					$query1="SELECT count(writer) from books where email='$email' and writer <> ''";
					$rs1=mysql_query($query1,$conn);
					$row1=mysql_fetch_array($rs1);
					$writer_count=$row1[0];
					// echo "<span style='color:white'>".$row1[0]."</span>";
					?>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="fh5co-counter to-animate">
							<i class="fh5co-counter-icon icon-people to-animate-2"></i>
							<span class="fh5co-counter-number js-counter" data-from="0" data-to="<?=$writer_count?>" data-speed="1000" data-refresh-interval="50"><?=$writer_count?></span>
							<span class="fh5co-counter-label">만난 작가 수</span>
						</div>
					</div>
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
	
	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>


