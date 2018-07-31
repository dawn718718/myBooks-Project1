<html>
<meta charset="utf-8">
</html>
<?php
include "conn.php";
$isbn=$_POST['isbn'];
$email=$_POST['email'];
$cover_path=$_POST['cover_path'];
$title=$_POST['title'];
$writer=$_POST['writer'];
$publisher=$_POST['publisher'];
$pub_date=$_POST['pub_date'];
$read_date=$_POST['read_date'];
$rem_words=$_POST['rem_words'];
$comments=$_POST['comments'];
$moreinfo="http://www.naver.com";
// $audio_path="";

$query="INSERT into books(isbn,email,cover_path,title,writer,publisher,pub_date,
read_date,rem_words,comments,moreinfo,book_reg_date) 
values('$isbn','$email','$cover_path','$title','$writer','$publisher',
'$pub_date','$read_date','$rem_words','$comments','$moreinfo', now())";
// '$audio_path' 임시 삭제
$rs=mysql_query($query,$conn);
if($rs){
?>
<script>
    alert("성공적으로 책이 추가되었습니다. 책장으로 이동합니다.");
    location.href="showBookShelf.php";
</script>
<?php
} else {

?>
<script>
    alert("책 추가에 실패하였습니다. 다시 시도해보세요.");
    location.href="addBook.php";
</script>
<?php
}

?>