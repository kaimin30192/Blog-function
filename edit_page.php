<?php include_once('header.php')?>
<?php
    $pdo=new PDO('mysql:host=localhost;dbname=post;charset=utf8','root');
    $sql=$pdo->prepare('select * from post_table where id=?');
    $sql->execute([$_REQUEST['id']]);
    foreach ($sql->fetchAll() as $row)
        echo '<div class="card mt-3 mb-3" style="width: 70rem;">';
        echo '<div class="card-body">';
        echo '<form action="create.php" method="post">';
        echo '<div class="form-group">';
        echo '<label for="exampleFormControlTextarea1">標題</label>';
        echo '<textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" name="title">', $row['title'], '</textarea>';
        echo '</div>';
        echo '<div class="form-group">';
        echo '<label for="exampleFormControlTextarea1">作者</label>';
        echo '<textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" name="author">', $row['author'], '</textarea>';
        echo '</div>';
        echo '<div class="form-group">';
        echo '<label for="exampleFormControlTextarea1">內文</label>';
        echo '<textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="10" name="content">', $row['content'], '</textarea>';
        echo '</div>';
        echo '<input type="submit" value="更新">';
        echo '</form>';
        echo '</div>';
        echo '</div>';
?>
<?php include_once('footer.php')?>