<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
</head>
<body>
<div id="container">
  <h1><?php echo $heading; ?></h1>
<ul>
  <?php foreach ($entries as $row): ?>
    <li><?php echo anchor('blog/show/'.$row->id, $row->title); ?> </li>
  <?php endforeach; ?>
<ul>
<p><?php echo anchor('blog/edit', 'New Entry'); ?></p>
</div>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</body>
</html>
