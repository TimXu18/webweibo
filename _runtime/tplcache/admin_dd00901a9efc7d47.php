<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo ($ts['site']['site_name']); ?>管理后台</title>
<link href="__APP__/admin.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/ts2/js/tbox/box.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
	var _UID_ = "<?php echo ($uid); ?>";
	var _PUBLIC_ = "__PUBLIC__";	
</script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<!-- <script type="text/javascript" src="__PUBLIC__/ts2/js/common.js"></script> -->
<script type="text/javascript" src="__PUBLIC__/js/core.js"></script>
<!-- <script type="text/javascript" src="__PUBLIC__/ts2/js/tbox/box.js"></script> -->
<script type="text/javascript" src="__PUBLIC__/js/tbox/box.js"></script>
</head>
<body>
<div class="so_main">
  <div class="Toolbar_inbox">
	<a href="<?php echo U('admin/Tool/cleanErrorData');?>" class="btn_a"><span>删除异常数据</span></a>
    <a href="<?php echo U('admin/Tool/refreshCommentOrder');?>" class="btn_a"><span>刷新评论楼层</span></a>
	<a href="<?php echo U('admin/Tool/cleanErrorFollow');?>" class="btn_a"><span>清除幽灵粉丝</span></a>
	<a href="<?php echo U('admin/Tool/refreshWeiboComment');?>" class="btn_a"><span>刷新分享评论数</span></a>
  </div>
</div>
</body>
</html>