<html>
<meta charset="utf-8">
</html>
<style>
.loginComment {
			text-align:right;
			color:#666666;
			font-size:19px;
            padding-right:30px;
            /* font-weight:bold; */
		}
</style>
<!-- 로그인 세션키 가져오기 -->
<?php
					session_start();
					$email = (isset($_SESSION['email']))?  $_SESSION['email']: "";
					$username = (isset($_SESSION['username']))? $_SESSION['username'] : "";
?>

<nav class="navbar navbar-default">
				
    <div class="navbar-header">
        <!-- 모바일 토글 메뉴 버튼 -->
        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
        <a class="navbar-brand" href="index.php">myBooks</a> 
    </div>

    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php" class="external"><span>Main</span></a></li>
            <li><a href="showBookShelf.php"  class="external"><span>My Books</span></a></li>
            <li><a href="signup.php" class="external"><span>Join</span></a></li>
            
            <!-- 세션키가 있으면 -->
            <? if(!$email == ""){?>
                <li><a href="javascript:logout();" class="external"> <span>LogOut</span></a></li>
                <div class="row">
                    <div class="col-md-12 loginComment" >안녕하세요 <?=$username.'('.$email.')'?>님 
                </div>
                <script>
                function logout() {
                var a = confirm("로그아웃하시겠습니까?");
                if(a){
                    location.href="signout.php";
                    }
                else{
                    return;
                    }
            }
                </script> 
            <?}?>

            <!-- 세션키가 없으면 -->
            <? if($email == ""){?>
                <li><a href="javascript:login();" class="external"><span>LogIn</span></a></li>
        </div>
                <script>
                function login() {
                var a = confirm("로그인창으로 이동하시겠습니까?");
                if(a){
                    location.href="signin.php";
                    }
                else{
                    return;
                    }
                }
                </script>
            <?}?>

        </ul>
    </div>

    <!-- 세션키가 있으면 -->
    <!-- <? if(!$email == ""){?>
        <div class="row">
            <div class="col-md-12 loginComment" >안녕하세요, <?=$username.'('.$email.')'?>님 &nbsp
                <button class="btn btn-sm" onclick=logout()>Log Out</button>
            </div>
        </div>

         <script>
            function logout() {
                var a = confirm("로그아웃하시겠습니까?");
                if(a){
                    location.href="signout.php";
                    }
                else{
                    return;
                    }
            }
        </script> 
    <?}?> -->

    <!-- 세션키가 없으면 -->
    <!-- <? if($email == ""){?>
        <div class="row">
            <div class="col-md-12 loginComment" >어서오세요 GUEST님. 
                <button class="btn btn-sm" onclick=login()>Log In</button>
            </div>
        </div>

        <script>
            function login() {
                var a = confirm("로그인창으로 이동하시겠습니까?");
                if(a){
                    location.href="signin.php";
                    }
                else{
                    return;
                    }
            }
        </script>
    <?}?> -->

    

</nav>
