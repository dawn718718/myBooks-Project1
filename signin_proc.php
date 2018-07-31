<html>
<meta charset="utf-8">
</html>
<?php
include "./conn.php";
$email = $_REQUEST['email'];

$pwd = $_REQUEST['pwd'];

$sql = "SELECT email,username,pwd from users where email='$email'";
$result= mysql_query($sql,$conn);
$row = mysql_fetch_array($result);

if($row==null){
    $msg = "아이디를 찾을 수 없습니다.";
?>

<script>
    alert('<?=$msg?>');
    location.href="signin.php";
</script>
<?
}else {
    if($row[2] != $pwd ) {
        $msg = "비밀번호가 일치하지 않습니다.";
?>
    <script>
        alert('<?=$msg?>');
        location.href="signin.php?email=<?=$email?>";
    </script>
<?
    }else {
        session_start();
        $_SESSION['email'] = $row[0];
        $_SESSION['username'] = $row[1];
    }
}
mysql_close($conn);
?>
<script>
    location.href="index.php";
</script>




