<?php 
/*
Custom:page_links
Description:友情链接
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<article>
	<div class="whitebg">
		<h2 class="htitle"><span class="hnav"></span>首页链接</h2>
		<ul class="site_tj">
			<?php
				$db = Database::getInstance();
				$indexlinks = $db->query ("SELECT * FROM ".DB_PREFIX."link WHERE  linksortid='1' AND hide='n' ORDER BY taxis ASC"); 
				$indexout='';
				while ($row = $db->fetch_array($indexlinks)){
					$indexout.='<li><a href="'.$row['siteurl'].'" target="_blank" title="'.$row['description'].'">'.$row['sitename'].'</a></li>';
				}
				echo $indexout;
		    ?>
	   </ul>
	</div>
	<div class="whitebg">
		<h2 class="htitle"><span class="hnav"></span>内页友联</h2>
		<ul class="site_tj site_yx">
			<?php
				$db = Database::getInstance();
				$indexlinks = $db->query ("SELECT * FROM ".DB_PREFIX."link WHERE  linksortid='2' AND hide='n' ORDER BY taxis ASC"); 
				$indexout='';
				while ($row = $db->fetch_array($indexlinks)){
					$indexout.='<li><a href="'.$row['siteurl'].'" target="_blank" title="'.$row['description'].'">'.$row['sitename'].'</a></li>';
				}
				echo $indexout;
		    ?>
		</ul>
	</div>
	<div class="whitebg">
		<h2 class="htitle"><span class="hnav"></span>博客联盟</h2>
		<ul class="site_tj site_yx">
			<?php
				$db = Database::getInstance();
				$indexlinks = $db->query ("SELECT * FROM ".DB_PREFIX."link WHERE  linksortid='4' AND hide='n' ORDER BY taxis ASC"); 
				$indexout='';
				while ($row = $db->fetch_array($indexlinks)){
					$indexout.='<li><a href="'.$row['siteurl'].'" target="_blank" title="'.$row['description'].'">'.$row['sitename'].'</a></li>';
				}
				echo $indexout;
		    ?>
		</ul>
	</div>
	<div class="whitebg">
		<h2 class="htitle"><span class="hnav"></span>失效友链</h2>
		<ul class="site_tj site_yx">
			<?php
				$db = Database::getInstance();
				$indexlinks = $db->query ("SELECT * FROM ".DB_PREFIX."link WHERE  linksortid='3' AND hide='n' ORDER BY taxis ASC"); 
				$indexout='';
				while ($row = $db->fetch_array($indexlinks)){
					$indexout.='<li><a href="https://qsh5.cn/" data-url="'.$row['siteurl'].'" target="_blank" title="'.$row['description'].'">'.$row['sitename'].'</a></li>';
				}
				echo $indexout;
		    ?>
		</ul>
	</div>
    <div class="whitebg gbook">
        <h2 class="htitle">文章评论</h2>      
        <ul>
      	    <?php blog_comments($comments);?>
      		<?php blog_comments_post($logid, $ckname, $ckmail, $ckurl, $verifyCode, $allow_remark);?>
        </ul>
    </div>
</article>
<?php
	include View::getView('footer');
?>