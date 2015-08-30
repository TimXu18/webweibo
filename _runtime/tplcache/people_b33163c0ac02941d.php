<?php if (!defined('THINK_PATH')) exit();?><div class="mod-user clearfix">
    <?php if(empty($userList['data'])): ?>
    <p>暂时没有相关用户</p>
    <?php else: ?>
    <?php if(is_array($userList["data"])): ?><?php $i = 0;?><?php $__LIST__ = $userList["data"]?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><dl <?php if(is_integer(($key + 1) / 5)): ?>class="no-margin"<?php endif; ?>>
        <dt><a href="<?php echo ($vo["space_url"]); ?>"><img uid="<?php echo ($vo["uid"]); ?>" src="<?php echo ($vo["avatar_big"]); ?>" width="180" height="180" /></a><?php if($vo['group_icon_only']): ?><a href="javascript:;" title="<?php echo ($vo['group_icon_only']['user_group_name']); ?>" class="group_icon_only"><img alt="<?php echo ($vo['group_icon_only']['user_group_name']); ?>" src="<?php echo ($vo['group_icon_only']['user_group_icon_url']); ?>" ></a><?php endif; ?> </dt>
        <dd class="clearfix">
            <p class="name"><a href="<?php echo ($vo["space_url"]); ?>" event-node="face_card" uid="<?php echo ($vo["uid"]); ?>" class="left"><?php echo ($vo["uname"]); ?></a>
            <?php if($GLOBALS['ts']['mid'] != $vo['uid']): ?>
            <?php echo W('FollowBtn', array('fid'=>$vo['uid'], 'type'=>'jia', 'uname'=>$vo['uname'], 'follow_state'=>$vo['follow_state']));?>
            <?php endif; ?>
            </p>
            <p class="tags">
            <?php if(is_array($vo["user_tag"])): ?><?php $i = 0;?><?php $__LIST__ = $vo["user_tag"]?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$v): ?><?php ++$i;?><?php $mod = ($i % 2 )?><span><a href="<?php echo U('people/Index/index', array('cid'=>$key,'sex'=>$sex,'area'=>$area,'verify'=>$verify,'type'=>$type));?>"><?php echo ($v); ?></a></span><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?></p>
            <div class="people-info">
              <div class="item"><h6>分享</h6><span><?php echo (($vo["userdata"]["weibo_count"])?($vo["userdata"]["weibo_count"]):0); ?></span></div>
              <div class="item"><h6>关注</h6><span><?php echo (($vo["userdata"]["following_count"])?($vo["userdata"]["following_count"]):0); ?></span></div>
              <div class="item" style="margin-right:0;"><h6>粉丝</h6><span event-node="follower_count" event-args="uid=<?php echo ($vo["uid"]); ?>"><?php echo (($vo["userdata"]["follower_count"])?($vo["userdata"]["follower_count"]):0); ?></span></div>
            </div>
            
        </dd>
    </dl><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
    <?php endif; ?>
</div>
<div class="page"><?php echo ($userList["html"]); ?></div>