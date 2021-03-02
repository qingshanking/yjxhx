<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<article>
	<!--lbox begin-->
	<div class="lbox">
    <div class="content_box whitebg">
    	<h2 class="htitle"><span class="con_nav">您现在的位置是：<a href="/">网站首页</a>><a href="/"><?php blog_sort($logid); ?> </a></span><?php blog_sort($logid); ?> </h2>
    	<h1 class="con_tilte"><?php echo $log_title; ?></h1>
    	<p class="bloginfo">
    		<i class="avatar"><img src="<?php blog_author_avatar($value['author']) ?>"></i>
    		<span><?php blog_author($author); ?></span>
    		<span><?php echo gmdate('Y-n-j', $date); ?></span>
    		<span>【<?php blog_sort($logid); ?> 】</span>
    		<span><?php echo $views; ?>人已围观</span>
    	</p>
    	<!--<p class="con_info"><b>简介</b>测试。</p>-->    	
    	<script>cambrian.render('body')</script>
        <div class="con_text">
        	<?php echo $log_content; ?>
            <p class="share"><b>转载：</b>感谢您对<?php echo $blogname; ?>的认可，以及对我们原创作品以及文章的青睐，非常欢迎各位朋友分享到个人站长或者朋友圈，但转载请说明文章出处“来源<?php echo $blogname; ?>”。</p>
            <!--<p><span class="diggit">很赞哦！ (74)</span></p>-->
        <div class="nextinfo">
        	<?php neighbor_log($neighborLog);?>
        </div>        
        </div>
    </div>
    <div id="authorarea">
        	<div class="authorinfo">
        		<div class="author-avater">
        			<img class="avaterimg" alt="作者：<?php echo $blogname; ?>" title="作者：<?php echo $blogname; ?>" src="<?php blog_author_avatar($value['author']) ?>" height="50" width="50">
        		</div>
        		<div class="author-des">
        			<div class="author-meta">
        				<span class="post-author-name">
        					<?php blog_author($author); ?>
        				</span>
        				<span class="post-author-tatus">
        					<a href="javascript:void(0);" target="_blank">?篇文章</a>
        				</span>
        				<span class="post-author-url">
        					<a href="<?php echo BLOG_URL; ?>" rel="nofollow" target="_blank">站点</a>
        				</span>
        				<!--<span class="post-author-weibo">
        					<a href="https://weibo.com/yzy171717" rel="nofollow" target="_blank">微博</a>
        				</span>-->
        			</div>
        			<p class="author-description">编程改变世界。</p>
        		</div>
        	</div>
        	<div class="bdshare">
        		<?php checkbaidu($logid); ?>
            </div>
    </div>
    <div class="whitebg">
     <?php page_random()?>
    </div>

    <div class="whitebg gbook">
        <h2 class="htitle">文章评论</h2>      
        <ul>
      	    <?php blog_comments($comments);?>
      		<?php blog_comments_post($logid, $ckname, $ckmail, $ckurl, $verifyCode, $allow_remark);?>
        </ul>
    </div>
  </div>
  <!--lbox end-->
    <div class="rbox">
    	<?php include View::getView('side');?>
    </div>
</article>
<?php
 include View::getView('footer');
?>