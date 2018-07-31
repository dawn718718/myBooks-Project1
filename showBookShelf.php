<?php
include "conn.php";
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
<!-- 혹시 세션키가 없으면 signin_popup.php 로 이동하여 로그인 안내 -->
			<?php
				if(!isset($_SESSION['email']) || !isset($_SESSION['username'])) {
						?>
							<script>
								location.href="showBookShelf-noLogin.php"
							</script>
						<?
						exit;
					}
			?>
		</div>	
	</header>

	
	<section id="fh5co-work" data-section="work">
<!--책장 화면 타이틀 컨테이너-->
		<div class="container">
			<div class="row"> 
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate mainTitle">내 책장</h2>
				</div>
			</div>
		</div>
			


<!--페이징 처리 PHP -->
		<?php 
			//게시물을 잘라서 가져온다. 0, 10, 20, 30...
			$no = (isset($_GET['no']))? $_GET['no'] : 0 ; // 게시물 시작 인덱스 번호
			$field = (isset($_GET['field']))? $_GET['field'] : "title"; 
			$sword = (isset($_GET['sword']))? $_GET['sword'] : "";
			$page_size = 35; //한 페이지 내 게시물 갯수 (레코드 수)
			$page_list_size = 10; // 한 리스트 내 페이지 갯수
			$PHP_SELF = $_SERVER['PHP_SELF']; //자기 자신의 서버 URL 경로
			$where = "where email='$email'" ;
			if($sword != "") { 
				$where = "where email='$email' AND $field LIKE '%$sword%'";//검색어가 포함되어 있으면,
			}
	
			//1.한 페이지에 보여줄 원하는 일정 부분의 레코드 세트 가져오기 
			// $query="SELECT * from books $where order by book_reg_date desc limit $no,$page_size";
			// $rs=mysql_query($query,$conn);

			//2.total_row : 테이블 내 총 레코드 갯수구하기
			$query = "SELECT count(*) from books $where"; //테이블 내 총 레코드 갯수
			$count = mysql_query($query,$conn);
			$rs1 = mysql_fetch_row($count);
			$total_row = $rs1[0]; // 게시물의 총 갯수와 총 페이지수 계산
			//echo $total_row; //352

			//음수일때 예외 처리
			if($total_row <=0) {
				$total_row = 0;
			}

			//3.$total_page : 페이지수 구하기 =전체레코드수-1 / 한 페이지내 책수
			$total_page = floor(($total_row -1) / $page_size);

			//4. $current_page: 현재 페이지 값 구하기
			$current_page = floor($no / $page_size);
		?>	

<!-- 검색 필터 -->
		<div class="container">
			<form action="showBookShelf.php" method="get">
				<div class="form-row">
					<div class="form-group col-sm-2">	
						<select name="field" class="form-control">
							<option value="title"<? echo ($field=="title")? "selected" : "" ; ?>>책제목</option>
							<option value="writer"<? echo ($field=="writer")? "selected" : "" ; ?> >저자</option>
						</select>
					</div>
					<div class="form-group col-sm-5">
						<input class="form-control" type="text" name="sword" value="<?=$sword?>">
					</div>
					<div class="form-group col-sm-3">
						<input class="btn btn-primary" type="submit" style="font-size:18px" value="검 색">
					</div>
				</div>
			</form>
		</div>

<!-- 책장 컨테이너 시작 -->
		<div class="container" style="margin-top:100px;">

<!-- 책이 하나도 없을 경우, 빈 박스 표시  -->
			<div id="row_for_blank" class="row">
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



<!-- 책이 있을 경우, 책장 디스플레이 루프 -->
			<div class="row row-bottom-padded-sm" id="SearchR">
				<?php
					$query="SELECT * from books $where order by book_reg_date desc limit $no,$page_size";
					$rs=mysql_query($query,$conn);
					$i=0;
					while(list($isbn,$email_db,$cover_path,$title,$writer,$publisher,$pub_date,$read_date,$audio_path,$rem_words,$comments,$moreinfo,$book_reg_date)=mysql_fetch_array($rs)){;
					
						
					
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

<!-- 페이징 리스트 숫자 표시 -->
			<div class="row">
				<div style="text-align: center; color:black">
					<?php
						//페이지 리스트 첫번째 페이지 구하기
						$start_page= (int)($current_page / $page_list_size) * $page_list_size; // 현재 페이지가 10을 넘어서는지 체크함
						

						//페이지리스트 마지막 페이지 구하기
						$end_page = $start_page + $page_list_size -1;
						//그런데 마지막리스트가 10개가 안될 수도 있으므로, 마지막 페이지와 전체 페이지를 비교해서 다시 계산
						if($total_page < $end_page) {
							$end_page = $total_page;
						}

						#이전 페이지 리스트 필요할때
						//시작지가 페이지 리스트보다 클때
					if($start_page >= $page_list_size){
						$pre_list = ($start_page -1) * $page_size;
						echo  "<a href=\"$PHP_SELF?no=$pre_list\"> << </a>";
					}
					##페이징
					for ($i= $start_page; $i <= $end_page; $i++) {
						$page = $i * $page_size; //$page: 전달될 페이지 값을 no로 변환
						$page_num = $i+1; //보여질 페이지 번호
						echo "<a style='color:#666666;
						font-size: 23px;' href=\"$PHP_SELF?no=$page&field=$field&sword=$sword\">";
						echo "$page_num";
						echo "</a>&nbsp";
					}

					## 다음페이지 리스트 필요할때
					//총페이지가 마지막 리스트페이지보다 클때
					if($total_page > $end_page) {
						$next_list = ($end_page +1) * $page_size; 
						echo "<a href=\"$PHP_SELF?no=$next_list\"> >> </a>";
					}

				?>
				</div>
			
			</div>
			
<!-- 책 더보기 버튼 (책 갯수가 0이 아닐 경우) / 새 책 추가하기 버튼 (책 갯수가 0일 경우)  -->
			<?if($bookCnt!=0){?>
					<div id="show_more_books_btn" class="row">
						<a href="searchBook.php">
							<button type="button" class="btn btn-primary col-md-4 " style="margin-left:20px;font-size:17px;" ><strong>새 책 추가하러가기</strong>
							</button>
						</a>
						
					</div>
			<? } else {?>
					<div id="add_book_btn" class="row">
						<p class="col-sm-7" style="color:#666666;font-size:23px">책장에 책이 없습니다.<br>  아래 버튼을 눌러 책장에 넣을 책을 찾으러 가보세요.</p>
					</div>
					<div class="row">
						<a href="searchBook.php">
							<button type="button" class="btn btn-primary col-md-4 " style="margin-left:20px;font-size:17px;" ><stron>새 책 추가하러가기</strong></button>
						</a>
						
					</div>
			<? }?>
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

