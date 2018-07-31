<html>
<meta charset="utf-8">
</html>
<?php
    include "conn.php";
    $title=$_POST['title'];
    $writer=$_POST['writer'];
    $publisher=$_POST['publisher'];
    $pub_date=$_POST['pub_date'];
    $isbn=$_POST['isbn'];
    $rem_words=$_POST['rem_words'];
    $read_date=$_POST['read_date'];
    $comments=$_POST['comments'];
    // $audio_path=$_POST['audio_path'];
    $query="UPDATE books 
    set title='$title',writer='$writer',publisher='$publisher',pub_date='$pub_date',rem_words='$rem_words',
    read_date='$read_date',comments='$comments' where isbn='$isbn'";
    $rs=mysql_query($query,$conn);
    if($rs){
?>
<script>
    alert("성공적으로 수정되었습니다. 책장으로 이동합니다.");
    location.href="showBookShelf.php";
</script>
<?php
    }else {
?>
<script>
    alert("수정에 실패하였습니다. 다시 시도해보십시오.");
    location.history(-1);
</script>
<?php
    }
    

?>