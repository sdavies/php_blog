<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Comment Entry</title>
</head>
<body>
<div id="container">
  <div id="actions">
    <p><?php echo anchor('blog','Back to Blog'); ?></p>
  </div>
  <h1>Comment Entry</h1>
  <?php foreach ($comments as $row): ?>
    <p><?php echo $row->body; ?></p>
    <p><?php echo $row->author; ?></p>
    <hr>
  <?php endforeach; ?>

<?php echo form_open('comment/save'); ?>
  <?php echo form_hidden('entry_id', $this->uri->segment(3)); ?>
  <p><textarea name="body" rows=10"></textarea></p>
  <p>Author:</p>
  <p><input type="text" name="author" /></p>
  <p><input type="submit" value="Submit Commment" /></p>
</form>
</div>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</body>
</html>

