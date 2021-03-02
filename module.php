<?php 
/**
 * 侧边栏组件、页面模块
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>

<?php
// 判断是否为首页
function tool_ishome()
{
    if (BLOG_URL . trim(Dispatcher::setPath(), '/') == BLOG_URL) {
        return true;
    } else {
        return false;
    }
}	

//widget：日历

function widget_calendar($title){ 
   ?>
   
   
<?php


}



//blog：导航
function blog_navi(){
    global $CACHE; 
    $navi_cache = $CACHE->readCache('navi');
    ?>
            <?php
            foreach($navi_cache as $value):
            if ($value['pid'] != 0) {
                continue;
            }
            if($value['url'] == ROLE_ADMIN && (ROLE == ROLE_ADMIN || ROLE == ROLE_WRITER)):
            ?>
                <li><a href="<?php echo BLOG_URL; ?>admin/">管理</a></li>
                <li><a href="<?php echo BLOG_URL; ?>admin/?action=logout">退出</a></li>
            <?php 
                continue;
            endif;
            $newtab = $value['newtab'] == 'y' ? 'target="_blank"' : '';
            $value['url'] = $value['isdefault'] == 'y' ? BLOG_URL . $value['url'] : trim($value['url'], '/');
            $current_tab = BLOG_URL . trim(Dispatcher::setPath(), '/') == $value['url'] ? 'active' : 'common';
            ?>
            <?php if (!empty($value['children']) || !empty($value['childnavi'])) :?>
            <li class="menu">
                <?php if (!empty($value['children'])):?>
                <a href="<?php echo $value['url']; ?>"<?php echo $newtab;?>><?php echo $value['naviname']; ?> <b class="caret"></b></a>
                <ul class="sub">
                    <?php foreach ($value['children'] as $row){
                            echo '<li><a href="'.Url::sort($row['sid']).'">'.$row['sortname'].'</a></li>';
                    }?>
                </ul>
                <?php endif;?>
                <?php if (!empty($value['childnavi'])) :?>
                <a href="<?php echo $value['url']; ?>" <?php echo $newtab;?>><?php echo $value['naviname']; ?> <b class="caret"></b></a>
                <ul class="sub">
                    <?php foreach ($value['childnavi'] as $row){
                            $newtab = $row['newtab'] == 'y' ? 'target="_blank"' : '';
                            echo '<li><a href="' . $row['url'] . "\" $newtab >" . $row['naviname'].'</a></li>';
                    }?>
                </ul>
                <?php endif;?>
                	<span></span>
            </li>
            <?php else:?>
            	<li><a href="<?php echo $value['url']; ?>" <?php echo $newtab;?>> <?php if($value['naviname']=="首页"){  ?> <i class="icon icon-lg icon-home"></i> <?php }elseif($value['naviname']=="微语"){  ?> <i class="icon icon-lg icon-coffee"></i> <?php }elseif($value['naviname']=="留言"){  ?> <i class="icon icon-lg icon-comments"></i> <?php }elseif($value['naviname']=="关于"){  ?> <i class="icon icon-lg icon-id-card"></i>   <?php }elseif($value['naviname']=="归档"){  ?> <i class="icon icon-lg icon-calendar"></i> <?php }elseif($value['naviname']=="友链"){  ?> <i class="icon icon-lg icon-link"></i> <?php }elseif($value['naviname']=="相册"){  ?> <i class="icon icon-lg icon-camera"></i> <?php }elseif($value['naviname']=="登录"){  ?> <i class="icon icon-lg icon-lock"></i> <?php }else{  ?> <i class="icon icon-lg icon-book"></i> <?php } ?>  <?php echo $value['naviname']; ?></a></li>
                
            <?php endif;
            endforeach;           
}
//widget：分类
function widget_sort($title){
	global $CACHE;
    $sort_cache = $CACHE->readCache('sort'); ?>
    <div class="links whitebg">
    	<h2 class="htitle"><?php echo $title; ?></h2>
    	<ul>
    		<?php
    			foreach($sort_cache as $value):
    			    if ($value['pid'] != 0) continue;
    	    ?>
    	    <li><a href="<?php echo Url::sort($value['sid']); ?>"><?php echo $value['sortname']; ?>(<?php echo $value['lognum'] ?>)</a></li>
    	    <?php endforeach; ?>
        </ul>
    </div>
<?php
}
//widget：最新微语
function widget_twitter($title){
	global $CACHE; 
	$newtws_cache = $CACHE->readCache('newtw');
	$istwitter = Option::get('istwitter');
?>
<div class="whitebg notice">
	<h2 class="htitle"><?php echo $title; ?></h2>
	<ul>
	<?php
		foreach($newtws_cache as $value): 
	?>
	<li><?php echo $value['content'] ?></li>
	<?php 
		endforeach; 
    ?>
	</ul>
</div>
<?php 
}
//统计标签总数
function count_tag_all(){
	//$db = MySql::getInstance();
    $db = Database::getInstance();
	$data = $db->once_fetch_array("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "tag");
	return $data['total'];
} 
//底部统计信息
function widget_tongji(){
	$sta_cache = Cache::getInstance()->readCache('sta'); /*必须添加*/
?>
<div class="whitebg tongji">
      <h2 class="htitle">站点信息</h2>
      <ul>
        <li><b>网站运行</b>：<?php echo floor((time()-strtotime(20170307))/86400); ?>天</li>
        <li><b>文章统计</b>：<a href="/archive.html" target="_blank"><?php echo $sta_cache['lognum'];?></a>篇文章</li>
        <li><b>评论总数</b>：<?php echo $sta_cache['comnum_all']; ?>条</li>
        <li><b>标签统计</b>：<?php echo count_tag_all(); ?>个</li>
        <li><b>微信公众号</b>：扫描二维码，关注我们</li>
        <li class="tongji_gzh"><img src="<?php echo TEMPLATE_URL; ?>images/wx.png"></li>
      </ul>
 </div><?php
}


//解决页面标题重复
function page_tit($page) {
	if ($page>=2){ 
		echo ' _第'.$page.'页'; 
	}
} 
// 侧边栏-作者信息
function widget_blogger($title)
{
    global $CACHE;
    $user_cache = $CACHE->readCache('user');
    $name = $user_cache[1]['name'];
    $avatar = empty($user_cache[1]['photo']['src']) ? BLOG_URL . 'admin/views/images/avatar.jpg' : BLOG_URL . $user_cache[1]['photo']['src'];
    ?>
    <div class="card">
    	<h2>我的名片</h2>
    	<p>网名：<?php echo $name; ?></p>
    	<p>介绍：<?php echo $user_cache[1]['des']; ?></p>
    	<p>现居：北京市-海淀区</p>
    	<p>Email：qingshanking@vip.qq.com</p>
    	<ul class="linkmore">
    		<li><a href="http://qsh5.cn" target="_blank" class="iconfont icon-zhuye" title="网站地址"></a></li>
    		<li><a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=dgcfGBEFHhcYHR8YETYAHwZYBwdYFRkb" target="_blank" class="iconfont icon-youxiang" title="我的邮箱"></a></li>
    		<li><a href="http://wpa.qq.com/msgrd?v=3&uin=381318751&site=qq&menu=yes" target="_blank" class="iconfont icon---" title="QQ联系我"></a></li>
    		<li id="weixin"><a href="#" target="_blank" class="iconfont icon-weixin" title="关注我的微信"></a><i><img src="<?php echo TEMPLATE_URL; ?>images/wx.png"></i></li>
       </ul>
    </div>
    
    <?php
}
// 文章作者
function blog_author($uid)
{
    global $CACHE;
    $user_cache = $CACHE->readCache('user');
    $author = $user_cache[$uid]['name'];
    echo '<a class="name" href="' . Url::author($uid) . '" title="' . $author . '">' . $author . '</a>';
}
// 文章作者头像
function blog_author_avatar($uid)
{
    global $CACHE;
    $user_cache = $CACHE->readCache('user');
    $author = $user_cache[$uid]['name'];
    $avatar = empty($user_cache[$uid]['photo']['src']) ? BLOG_URL . 'admin/views/images/avatar.jpg' : BLOG_URL . $user_cache[$uid]['photo']['src'];
    echo $avatar;
}
// 文章分类
function blog_sort($blogid)
{
    global $CACHE;
    $log_cache_sort = $CACHE->readCache('logsort');
    ?>
    <?php
    if (empty($log_cache_sort[$blogid])) {
        ?>
        <a href="javascript:;">默认分类</a>
        <?php
    } else {
        ?>
        <a href="<?php echo Url::sort($log_cache_sort[$blogid]['id']); ?>"><?php echo $log_cache_sort[$blogid]['name']; ?></a>
        <?php
    }
}
// 侧边栏-热门文章
function widget_hotlog($title)
{
    $index_hotlognum = Option::get('index_hotlognum');
    $Log_Model = new Log_Model();
    $randLogs = $Log_Model->getHotLog($index_hotlognum);
    ?>
    <div class="whitebg paihang">
    	<h2 class="htitle"><?php echo $title; ?></h2>
    	<section class="topnews imgscale"><a href="/"><img src="<?php echo TEMPLATE_URL; ?>images/h1.jpg"><span>模板测试开发中</span></a></section>
    	<ul>
    		<?php
                foreach ($randLogs as $value) {
                    ?>
                    <li><i></i><a href="<?php echo Url::log($value['gid']); ?>"><?php echo $value['title']; ?></a></li>
                    <?php
                }
                ?>
            </ul>
        </div>
    <?php
}
// 侧边栏-随机文章
function widget_random_log($title)
{
    $index_randlognum = Option::get('index_randlognum');
    $Log_Model = new Log_Model();
    $randLogs = $Log_Model->getRandLog($index_randlognum);
    ?>
    <div class="whitebg wenzi">
    	<h2 class="htitle"><?php echo $title; ?></h2>
        <ul>
                <?php
                foreach ($randLogs as $value) {                 
                    ?>
                    <li><a href="<?php echo Url::log($value['gid']); ?>"><?php echo $value['title']; ?></a></li>                    
                    <?php
                }
                ?>
            </ul>
        </div>
    <?php
} 
// 侧边栏-友情链接
function widget_link($title)
{    
    if (!tool_ishome()) {
        return;
    }
    $db = Database::getInstance();
    $links = $db->query ("SELECT siteurl,sitename,description FROM ".DB_PREFIX."link WHERE hide='n' ORDER BY taxis ASC");
    $out='<div class="links whitebg"><h2 class="htitle"><span class="sqlink"><a href="/link.html">更多友链</a></span>' .$title. '</h2><ul>';
    while ($row = $db->fetch_array($links)){
      $out.='<li><a href="'.$row['siteurl'].'" title="" target="_blank">'.$row['sitename'].'</a><li>';
    }
    $out.='</ul></div>';
    widget_tongji();
    echo $out;
    
}
// 文章阅读页-相邻文章
function neighbor_log($neighborLog)
{
    extract($neighborLog);
    ?>
    <?php
    if ($prevLog) {
        ?>
        <p>上一篇： <a class="li-left" href="<?php echo Url::log($prevLog['gid']) ?>"><?php echo $prevLog['title']; ?></a></p>       
        <?php
    }
    if ($nextLog) {
        ?>
        <p>下一篇：<a class="li-right" href="<?php echo Url::log($nextLog['gid']) ?>"><?php echo $nextLog['title']; ?></a></p>        
        <?php
    }
}

// 文章阅读页-随机文章
function page_random()
{
    $db = DataBase::getInstance();
    $sql = "SELECT gid,title,date FROM " . DB_PREFIX . "blog WHERE type='blog' ORDER BY rand() LIMIT 0,5";
    $list = $db->query($sql);
    ?>
    <h2 class="htitle">相关文章</h2>
        <ul class="otherlink">
            <?php
            while ($value = $db->fetch_array($list)) {
                $i++;
                ?>
                <li><a href="<?php echo Url::log($value['gid']); ?>"><?php echo $value['title']; ?></a></li>
                <?php
            }
            ?>
        </ul>
    <?php
}
//分类描述
function index_sort($sid){
	global $CACHE;
	$sort_cache = $CACHE->readCache('sort'); 
	//下面这行代码的作用是用来调用分类标题的代码
	//$title = $sort_cache[$sid]['sortname'];
	//下面这行代码的作用是用来调用分类描述
	$description = $sort_cache[$sid]['description'];
	//下面这行代码的作用是用来调用分类别名
	//$cname = $sort_cache[$sid]['alias'];
	return $description;
}
// 判断内容页是否百度收录,并且以博主和或者理员身份访问博客文章时自动向百度提交未收录的文章
function baidu($url){
	$url='http://www.baidu.com/s?wd='.$url;
	$curl = curl_init();
	curl_setopt($curl,CURLOPT_URL,$url);
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
	$rs=curl_exec($curl);
	curl_close($curl);
	if(!strpos($rs,'没有找到')){
		return 1; 
	}else{ 
		return 0; 
		}   
}
function checkbaidu($id){
	$url=Url::log($id);
	if(baidu($url)==1)
	{  
		echo '<a style="color:#1EA83A;" rel="external nofollow" title="点击查看！" target="_blank" href="http://www.baidu.com/s?wd='.$url.'">[百度已收录]</a>';
	} else { 
		if (ROLE == 'admin' || ROLE == 'writer') { 
			$urls = array($url,);
			$api = 'http://data.zz.baidu.com/urls?site=https://qsh5.cn&token=w1BQaRHSv4Qwliit';
			$ch = curl_init();
			$options =  array(CURLOPT_URL => $api,CURLOPT_POST => true,CURLOPT_RETURNTRANSFER => true,CURLOPT_POSTFIELDS => implode("\n", $urls),CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),);
			curl_setopt_array($ch, $options);
			$result = curl_exec($ch);
			echo '';
		}
		echo '<a style="color:red;" rel="external nofollow" title="点击提交收录！" target="_blank" href="http://zhanzhang.baidu.com/sitesubmit/index?sitename='.$url.'">[百度未收录]</a>';
	} 
}

// 评论列表
function blog_comments($comments)
{
    extract($comments);
    
    foreach ($commentStacks as $cid) {
    	$comment = $comments[$cid];
    	$comment['poster'] = $comment['url'] ? '<a href="' . $comment['url'] . '" target="_blank">' . $comment['poster'] . '</a>' : $comment['poster'];
    ?>
    <div class="fb" id="comment-<?php echo $comment['cid']; ?>">
    	<ul style="background:url(<?php echo getGravatar($comment['mail']); ?>) no-repeat top 20px left 10px;background-size:50px 50px;">
    		<p class="fbtime"><span><?php echo $comment['date']; ?></span><?php echo $comment['poster']; ?></p>
    		<p class="fbinfo"><?php echo $comment['content']; ?></p>
      	</ul>
    </div>
   <?php blog_comments_children($comments, $comment['children']);?>
    <?php
    }            
}
// 评论子列表
function blog_comments_children($comments, $children)
{
    foreach ($children as $child) {
        $comment = $comments[$child];
        $comment['poster'] = $comment['url'] ? '<a href="' . $comment['url'] . '" target="_blank">' . $comment['poster'] . '</a>' : $comment['poster'];
        ?>
        <div class="hf">
          <ul>
          <p class="zzhf"><font color="#FF0000">站长回复:</font><?php echo $comment['content']; ?></p>
        </ul>
      </div>
        <?php
    }
}
// 评论发布
function blog_comments_post($logid, $ckname, $ckmail, $ckurl, $verifyCode, $allow_remark)
{
    ?>
    <form method="post" name="commentform" action="<?php echo BLOG_URL; ?>index.php?action=addcom" id="commentform">
        <input type="hidden" name="gid" value="<?php echo $logid; ?>">
            <?php
            if (ROLE == ROLE_VISITOR) {
            ?>
            <p class="yname"><span>用户名:</span>
            	<input type="text" class="inputText" name="comname" value="<?php echo $ckname; ?>" tabindex="1" placeholder="昵称（必填）" size="16">
            </p>
            <p class="yname"><span>邮箱:</span>
            	<input type="text" class="inputText" name="commail" value="<?php echo $ckmail; ?>" tabindex="2" placeholder="邮箱（选填）" size="16">
            </p>
            <p class="yname"><span>个人主页:</span>
            	<input type="text" class="inputText" name="comurl" value="<?php echo $ckurl; ?>" tabindex="3" placeholder="邮箱（选填）" size="16">
            </p>
            <?php
            	if (!empty($verifyCode)) {   
            		$code='<p class="yzm"><span>验证码:</span><input type="text" name="imgcode" class="inputText" placeholder="验证码" tabindex="5" size="17">';
            	    $code .='<img src="'. BLOG_URL .'include/lib/checkcode.php" align="absmiddle" name="plKeyImg" id="plKeyImg" onclick="this.src=\''. BLOG_URL .'include/lib/checkcode.php?\' + Math.random()" title="看不清楚,点击刷新"> </p>';
            		echo $code;
                    }
                    ?>
            <?php
            }
            ?>
            <textarea name="comment" id="comment" rows="6" placeholder="欢迎在这里发表评论，但是垃圾评论不受欢迎！" style="width: 100%;"></textarea>
            <input name="imageField" type="submit" value="立即发布" class="fbpl">
            <input type="hidden" name="pid" id="comment-pid" value="0" tabindex="1">
    </form>        
    <?php
}
?>
