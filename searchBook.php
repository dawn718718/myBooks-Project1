
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
		<link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
		<style>
		.searchTip {
			/* font-weight:bold; */
			color:#fff;
			font-size:25px;
		}
		.searchTipSpan {
			font-weight:bold;
			color:#477982;
			font-size:20px;
		}
		* {
			/* border:1px solid red; */
		}
		.margin {
			margin-top:20px;
		}
		.alignBookTitleP {
			vertical-align:middle;
			color:#283032;
			font-size:35px;
			font-family: 'Nanum Brush Script', cursive;
			/* font-weight:bold; */
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
		<div class="container">
			<!-- 새책 추가 검색어 입력 컨테이너-->
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate mainTitle">새 책 추가하기</h2>
				</div>
			</div>
			<!-- echo $obj->items[0]->title;echo "<br>"; -->
			<script>	
			
				//동적으로 생성한 html의 경우, 아래와 같이 함수 작성해야함.
				//문서의 검색결과 책 모듈(.cc)를 클릭하면 실행할 사항들
				$(document).on("click",".cc",function(){
					// alert($(this).find("img").attr("src"));//.children("#title").val());
					$("#img1").val($(this).find("img").attr("src"));
					$("#title1").val($(this).find(".title").val());
					$("#publisher1").val($(this).find(".publisher").val());
					$("#pub_date1").val($(this).find(".pub_date").val());
					$("#isbn1").val($(this).find(".isbn").val());
					$("#writer1").val($(this).find(".writer").val());
					// document.form.submit();
					$("#myform").submit();
				});
		
			
				//검색어(var key=#keyword)값을 ajax로 "goApiNaver.php"에 넘기고 성공하면 받아온 json포맷의 데이터(data)를 html로 그려준다.
				function goSearch(key) {
					$.ajax({
							url: "goApiNaver.php",
							type: "post",
							data:{keyword:key},
							dataType: "json",
							success:function(data){
								$("#SearchR").empty();

								for(var i = 0; i < data.items.length; i++){
									var obj = data.items[i];
									var html="<div class='cc'><div class='container margin' ><div class='row col-sm-2'><img src='"+data.items[i].image+"'></div><div class='row col-sm-10'><p class='alignBookTitleP'>"+data.items[i].title+"</p><input type='hidden'  name='title[]' class='title' value='"+data.items[i].title+"'><input type='hidden' name='writer[]' class='writer' value='"+data.items[i].author+"'><input type='hidden' name='publisher[]' class='publisher' value='"+data.items[i].publisher+"'><input type='hidden' name='pub_date[]' class='pub_date' value='"+data.items[i].pubdate+"'><input type='hidden' name='isbn[]' class='isbn'  value='"+data.items[i].isbn+"'></div></div>";

									$("#SearchR").append(html);
								}
							}
						});
				}
				// 검색어(#keyword) 입력 후 엔터를 치면 입력된 검색어(var key=#keyword)값을 ajax로 php에 넘김
				$(document).on("keydown",function(e){
					if(e.keyCode == 13) {
						var key = $("#keyword").val();
						goSearch(key)
					}
				});
			
				// 검색하기(#goSearch) 버튼 클릭하면 입력된 검색어(var key=#keyword)값을 ajax로 php에 넘김
				$(document).ready(function () {
					$("#goSearch").click(function () {
						var key = $("#keyword").val();
						goSearch(key);
					});

					
				});


			</script>
			
			

			<!--  검색 컨테이너 -->
			<div class="container">
				<div class="row">
					<p class="col-sm-10 searchTip">검색할 책제목 또는 저자명을 넣어주세요 <br><span class="searchTipSpan">(NAVER 책 데이터베이스 검색 엔진을 이용합니다)</span></p>
				</div>
				<!-- 검색어 입력창 / 버튼-->
				<div class="row"> 
					<div class="col-sm-8">
						<input type="text" class="form-control form-control-lg " id="keyword" name="keyword">
					</div>
					<div class="col-sm-2">
						<button type="button" id="goSearch" class="btn btn-block btn-lg btn-primary">검색</button>
					</div>
				</div>
				
			</div>

			<form name="myform" id="myform" method="post" action="addBook.php">
				<input type="hidden" name="img1" 		id="img1">
				<input type="hidden" name="title1" 		id="title1">
				<input type="hidden" name="publisher1" 	id="publisher1">
				<input type="hidden" name="pub_date1" 	id="pub_date1">
				<input type="hidden" name="isbn1" 		id="isbn1">
				<input type="hidden" name="writer1" 	id="writer1">
				
			</form>
			<div class="row row-bottom-padded-sm" id="SearchR">
					
						<!-- /////////////
							루프 돌릴 컬럼 유닛
							///////////// 
						--> 
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


