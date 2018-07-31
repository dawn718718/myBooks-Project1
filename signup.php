
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

        <script>
            var regNameError = /^[0-9]+$/g;
            $(document).ready(function(){
                $("#signupForm").submit(function(){
                    
                    // 이름 유효성 검사
                    var myUserName = $("#username").val();
                    var myUserNameLength = myUserName.length;
                    if(myUserNameLength== 0 || myUserNameLength<2 || myUserNameLength>8) {
                        alert("이름은 2-8자리를 입력하세요.");
                        $("#username").focus();
                        return false;
                    }if(myUserName.match(regNameError)){
                        alert("이름에 숫자는 불가능합니다");
                        $("#username").focus();
                        return false;
                    }
    
                    
                    // 이메일 유효성 검사
                    var regEmail = /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i;
                    var myEmail = $("#email").val();
                    var myEmailLength = myEmail.length;
                    if(myEmailLength==0){
                        alert("이메일은 반드시 입력해야합니다.");
                        $("#email").focus();
                        return false;
                    }
                    if(!myEmail.match(regEmail)){
                        alert("유효하지 않은 이메일 주소입니다. abc@abc.com 형식으로 입력하십시오.");
                        $("#email").focus();
                        return false;
                    }
    
                    // 비밀번호 유효성검사
                    var regPw = /^[0-9a-zA-Z]{6,12}$/;   
                    var myPwd = $("input[id='pwd']").val();
                    var myPwdLength = myPwd.length;
                    
                    if(myPwdLength==0){
                        alert("비밀번호는 반드시 입력해야합니다.");
                        $("#pwd").focus();
                        return false;
                    }
                    if(!myPwd.match(regPw)){
                        alert("비밀번호는 6-12글자만 가능하며, 특수문자 사용은 불가능합니다. .");
                        $("input[id='pwd']").focus();
                        return false;
                    }
                    
                    // 비밀번호 다시 체크 유효성검사
                    var myPwdChk = $("input[id='pwdChk']").val();
                    if(myPwdChk==0){
                        alert("비밀번호는 반드시 입력해야합니다.");
                        $("#pwdChk").focus();
                        return false;
                    }
                    if (!myPwdChk==myPwd){
                        alert("입력한 비밀번호가 다릅니다.");
                        $("input[id='pwdChk']").focus();
                        return false;
                    }
                });
            });
            //이메일 중복 체크 윈도우 여는 스크립트
            function winopen() {
            window.open("checkDuplicatedEmail.html", "", "width=400px, height=100px");
        }
            
        </script>
        
        <section id="fh5co-work">
                <div class="container">
                        <h2>회원 가입</h2>
                        <form id="signupForm" action="insertUser.php" method="POST">
                            <div class="form-group"> <!-- 이름 -->
                                <label for="usename">이름</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="form-group"> <!-- 이메일 -->
                                <label for="email" >E-mail</label>
                                <input type="text" class="form-control col-sm-8" id="email" name="email">
                                <!-- <input type="button" class="form-control col-md-2" id="dcheck" value="이메일 중복확인" onclick=winopen()> -->
                            </div>
                            <div class="form-group"> <!-- 비밀번호 -->
                                <label for="pwd">비밀번호 &nbsp <span style="font-size:14px"> (6-12자 이내의 영문자와 숫자의 조합만 가능)<span></label>
                                <input type="password" class="form-control" id="pwd" name="pwd">
                            </div>
                            <div class="form-group"> <!-- 비밀번호 재입력 -->
                                <label for="pwdChk">비밀번호 재입력</label>
                                <input type="password" class="form-control" id="pwdChk" name="pwdChk">
                            </div>
                            <button type="submit" class="btn btn-default btn-lg">제출</button>
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

