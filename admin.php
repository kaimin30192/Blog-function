<?php include_once('header.php')?>
<table class="table">
    <thead class="thead-light">
        <tr>
        <th scope="col">id</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Date</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <div class="card mt-3 mb-3" style="width: 70rem;">
<?php
    $pdo=new PDO('mysql:host=localhost;dbname=post;charset=utf8','root');
    foreach ($pdo->query('select * from post_table') as $row) {
        echo '<tr>';
        echo '<th scope="row">', $row['id'], '</th>';
        echo '<td>', $row['title'], '</td>';
        echo '<td>', $row['author'], '</td>';
        echo '<td>', $row['created_at'], '</td>';
        echo '<td>
            <a href="/Demo/edit_page.php?id=', $row['id'], '" type="button" class="btn btn-secondary btn-sm mr-2">編輯</a>
            <a href="/Demo/delete.php?id=', $row['id'], '" type="button" class="btn btn-danger btn-sm">刪除</a>
        </td>';
        echo '</tr>';
    }
?>
        </div>
    </tbody>
</table>
<?php include_once('footer.php')?>