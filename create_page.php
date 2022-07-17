<?php include_once('header.php')?>
<div class="text-center">
    <h1>新增文章</h1>
</div>
<form action="create.php" method="post">
    <div class="form-group">
        <label for="exampleFormControlTextarea1">標題</label>
        <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" name="title"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">作者</label>
        <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" name="author"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">內文</label>
        <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="10" name="content"></textarea>
    </div>
    <input type="submit" value="新增">
</form>
<?php include_once('footer.php')?>