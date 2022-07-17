<?php include_once('header.php')?>
<?php
    $pdo=new PDO('mysql:host=localhost;dbname=post;charset=utf8','root');
    $sql=$pdo->prepare('delete from post_table where id=?');
    if ($sql->execute([$_REQUEST['id']])) {
        echo '成功刪除該文章';
    } else {
        echo '刪除失敗';
    }
?>
<?php include_once('footer.php')?>