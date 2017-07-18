<form method="post" action="http://localhost/ci_first/index.php/blog_controller/update">
    <input type="input" name="id" value="<?php echo $id; ?>" />
    <label for="title">Title</label>
    <input type="input" name="title" value="<?php ; ?>"/><br />

    <label for="content">Content</label>
    <textarea name="content"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />

</form>