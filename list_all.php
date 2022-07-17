<?php
    $pdo=new PDO('mysql:host=localhost;dbname=post;charset=utf8','root');
    if (empty($pdo->query('select * from post_table'))) {
        echo '尚無文章';
    } else {
        foreach ($pdo->query('select * from post_table') as $row) {
            echo '<div class="card mt-3 mb-3" style="width: 70rem;">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">', $row['title'], '</h5>';
            echo '<h6 class="card-subtitle mb-2 text-muted">', $row['author'], '</h6>';
            echo '<h6 class="card-subtitle mb-2 text-muted">', $row['created_at'], '</h6>';
            echo '<a href="/Demo/post.php?id=', $row['id'], '" class="card-link">more...</a>';
            echo '</div>';
            echo '</div>';
        }
    }
?>