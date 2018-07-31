<?php
  $keyword=$_POST['keyword'];
  $client_id = "J5r3rlQ2tTVz2OX34fHg";
  $client_secret = "zsyFIXV4zs";
  $encText = urlencode($keyword);
  
  $url = "https://openapi.naver.com/v1/search/book.json?query=".$encText."&display=30"; // json 결과
  //$url = "https://openapi.naver.com/v1/search/blog.xml?query=".$encText; // xml 결과

  $is_post = false;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, $is_post);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $headers = array();
  $headers[] = "X-Naver-Client-Id: ".$client_id;
  $headers[] = "X-Naver-Client-Secret: ".$client_secret;
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $response = curl_exec($ch);
  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  
  curl_close ($ch);
  if($status_code == 200) {
    // echo "<pre>";
    // var_dump(json_decode($response));
    // echo "</pre>";
    // $obj=json_decode($response);
    // echo $obj->items[0]->title;echo "<br>";
    // echo $obj->items[0]->link;echo "<br>";
    // echo $obj->items[0]->image;echo "<br>";
    // echo $obj->items[0]->author;echo "<br>";
    // echo $obj->items[0]->price;echo "<br>";
    // echo $obj->items[0]->publisher;echo "<br>";
    // echo $obj->items[0]->pubdate;echo "<br>";
    // echo $obj->items[0]->isbn;echo "<br>";
    echo $response;


  } else {
    echo "Error 내용:".$response;
  }
?>