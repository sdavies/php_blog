<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Blog Entry</title>
</head>
<body>
<div id="container">
  <p><?php echo anchor('blog','Back to Blog'); ?></p>
  <h1>Blog Entry</h1>
  <?php echo form_open('blog/save'); ?>
    <?php echo form_hidden('id', $blog->id); ?>
    <p>Title:</p>
    <p><input type="text" name="title" value="<?php echo $blog->title; ?>" /></p>
    <p><textarea name="body" rows=10"><?php echo $blog->body; ?></textarea></p>
    <p><input type="submit" value="Save" /></p>
  </form>
</div>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</body>
</html>
