<?php
    header('Content-Type:text/html; charset=utf-8');

    $postTitle=$_POST['postTitle'];
    $postName=$_POST['postName'];
    $postDetail=$_POST['postDetail'];

    // echo "$postTitle $postName $postDetail";
    // $postDetail=nl2br($postDetail);

    $remove_character = array("\n", "\r\n", "\r");

    $postDetail = str_replace($remove_character,"<br>", $postDetail);

    $conn=mysqli_connect("localhost", "kamniang", "rhdiddl12!", "kamniang");

    mysqli_query($conn, 'set names utf-8');

    $sql="INSERT INTO `WebBoard` (postTitle, postName, postDetail) VALUES ('$postTitle', '$postName', '$postDetail')";
    $result=mysqli_query($conn, $sql);

    if($result){
        echo '저장됐습니다';
    }else{
        echo 'z...';
    }

    mysqli_close($conn);




?>