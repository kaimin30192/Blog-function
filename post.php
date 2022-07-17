<?php include_once('header.php')?>
<?php
    $pdo=new PDO('mysql:host=localhost;dbname=post;charset=utf8','root');
    $sql=$pdo->prepare('select * from post_table where id=?');
    $sql->execute([$_REQUEST['id']]);
    foreach ($sql->fetchAll() as $row)
        echo '<div class="card mt-3 mb-3" style="width: 70rem;">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">', $row['title'], '</h5>';
        echo '<h6 class="card-subtitle mb-2 text-muted">', $row['author'], '</h6>';
        echo '<p class="card-text">', $row['content'], '</p>';
        echo '</div>';
        echo '</div>';
?>
<?php include_once('footer.php')?>