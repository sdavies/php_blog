<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $blog->title; ?></title>
</head>
<body>
<div id="container">
  <div id="actions">
    <p><?php echo anchor('blog','Back to Blog'); ?></p>
    <p><?php echo anchor('blog/edit/'.$blog->id, 'Edit'); ?></p>
    <p><?php echo anchor('blog/delete/'.$blog->id, 'Delete'); ?></p>
  </div>
  <h1><?php echo $blog->title; ?></h1>
  <p><?php echo $blog->body; ?></p>
  <div id="comments">
    <?php foreach ($comments as $row): ?>
      <hr>
      <p><?php echo $row->body; ?></p>
      <p><?php echo $row->author; ?></p>
    <?php endforeach; ?>
  </div>
  <p><?php echo anchor('comment/edit/'.$blog->id, 'Add Comment'); ?></p>
</div>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</body>
</html>
