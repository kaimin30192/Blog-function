<?php
    $pdo=new PDO('mysql:host=localhost;dbname=post;charset=utf8','root');
    $sql=$pdo->prepare('insert into post_table values(null,?,?,?,0,null)');
    if (empty($_REQUEST['title'])){
        echo '請輸入標題!';
    }
    else if (empty($_REQUEST['author'])){
        echo '請輸入作者!';
    }
    else if (empty($_REQUEST['content'])){
        echo '請輸入內文!';
    }
    else if ($sql->execute([$_REQUEST['author'], $_REQUEST['title'], $_REQUEST['content']])){
        echo '新增成功!';
    }
    else {
        echo '新增失敗!';
    }
    require 'admin.php';
?>