<html>
<meta charset="utf-8">
</html>
<?php
    
    include "conn.php";
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $sql1="SELECT COUNT(*) from users where email='$email'";
    $rs1=mysql_query($sql1,$conn);
    $row=mysql_fetch_array($rs1);
    if($row[0]==1){
        ?>
        <script>
            alert("이미 존재하는 이메일입니다.");
            location.href="signup.php";
        </script>
        <?
    }else {
    
            //사용자 입력값 DB에 입력
            $sql2 ="INSERT into users(username,email,pwd,user_reg_date) values('$username','$email','$pwd',now())";
            $rs2 = mysql_query($sql2,$conn);
            if($rs2){
        ?>
            <script>
                alert("성공적으로 가입되었습니다. 확인을 누르면 로그인창으로 이동합니다.");
                location.href="signin.php"
            </script>
        <?php 

        }
    }
?>
