<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
  <title>提示</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="__THEME__/admin/admin.css" rel="stylesheet" type="text/css">
  <base target="_self" />
</head>
<body>
<div class="Prompt">
  <div class="Prompt-inner">
    <?php if($type == 'success') { ?>
    <p><i class="ico-ok-big"></i><?php echo ($message); ?></p>
    <?php } else { ?>
    <div class="box-ver"><i class="ico-error-big"></i><?php echo ($message); ?></div>
    <?php } ?>
  </div>
</div>
<?php if($url) { ?>
<script type="text/javascript">
document.onload = setTimeout(function() {
  window.location.href = '<?php echo ($url); ?>';
}, <?php echo ($s); ?> * 1000);
</script>
<?php } ?>
</body>
</html>