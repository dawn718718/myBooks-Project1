<html>
<meta charset="utf-8">
</html>
<?php
include "conn.php";
$isbn=$_GET['isbn'];
$email=$_GET['email'];
$pwd=$_GET['pwd'];

//시작: 비번과 이메일 일치 검증
$query1 = "SELECT count(*) from users where email='$email' and pwd='$pwd'";
$rs1=mysql_query($query1,$conn);
$row1=mysql_fetch_array($rs1);
if(!$row1[0]==1) {
?>
    <script>
    alert("비밀번호가 맞지 않습니다. 다시 시도해보세요.");
    function goback() {
        window.history.back();
    }
    goback();
    </script>
<?
exit;
}
//끝: 비번과 이메일 일치 검증

$query2="DELETE from books where email='$email' and isbn='$isbn'";
$rs2=mysql_query($query2,$conn);
if($rs2){
?>
    <script>
    alert("성공적으로 삭제되었습니다.");
    location.href="showBookShelf.php";
    </script>
<?php

} else {
?>

    <script>
        alert("삭제에 실패했습니다. 다시 시도해보세요.");
    </script>

<?
exit;
}



?>
