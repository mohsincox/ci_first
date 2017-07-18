<?php// echo validation_errors(); ?>

<?php //echo form_open('blog_controller/store'); ?>
<form method="post" action="http://localhost/ci_first/index.php/blog_controller/store">
    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="content">Content</label>
    <textarea name="content"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />

</form>