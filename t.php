<?php 
/**
 * 微语部分
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<header class="top-header" id="header">
<div class="flex-row">
	<a href="javascript:;" class="header-icon waves-effect waves-circle waves-light on" id="menu-toggle"><i class="icon icon-lg icon-navicon"></i></a>
	<div class="flex-col header-title ellipsis">
		<?php echo $Navi_Model->getNaviNameByUrl('t');?>
	</div>
	<div class="search-wrap" id="search-wrap">
		<a href="javascript:;" class="header-icon waves-effect waves-circle waves-light" id="back"><i class="icon icon-lg icon-chevron-left"></i></a> <form name="keyform" method="get" action="<?php echo BLOG_URL; ?>index.php">		
		<input id="key" class="search-input" autocomplete="off" name="keyword" placeholder="输入感兴趣的关键字"><a href="javascript:;" class="header-icon waves-effect waves-circle waves-light" id="search"><i class="icon icon-lg icon-search"></i></a>
		</form>
	</div>
	<a href="javascript:;" class="header-icon waves-effect waves-circle waves-light" id="menuShare"><i class="icon icon-lg icon-share-alt"></i></a>
</div>
</header>
<header class="content-header post-header">
<div class="container fade-scale in">
<h1 class="title"> <?php echo $Navi_Model->getNaviNameByUrl('t');?> </h1>
<h5 class="subtitle">
<time class="page-time"> <?php echo $twnum; ?> </time></h5>
</div>
</header>
<div class="container body-wrap">
<article id="post-data-sync-in-vue-single-page-application" class="post-article article-type-post fade in" itemprop="blogPost">
<div class="post-card">
<h1 class="post-card-title"> 微语 </h1>
<div class="post-meta">
<time class="post-time"> 总共 ( <?php echo $twnum ?> ) </time>
</div>
<div class="content container-tw">
        <div class="tw">
          <ul class="archives-monthlisting">
            <?php 
    foreach($tws as $val):
    $tid = (int)$val['id'];
    $img = empty($val['img']) ? "" : '<a title="查看图片" href="'.BLOG_URL.str_replace('thum-', '', $val['img']).'" target="_blank"><img style="border: 1px solid #EFEFEF;" src="'.BLOG_URL.$val['img'].'"/></a>';
    ?>
    <li>
      <div class="time" > <?php echo $val['date']; ?> </div>
              <div class="tw-content"><em></em><?php echo $val['t'].'<br/>'.$img;?>
              </div>
            </li>
            <?php endforeach;?>
          </ul>
        </div>
      </div>
      </article>
<?php if($pageurl){ ?>
 <nav id="page-nav">
 <div class="inner">
<?php echo $pageurl;?> 
</div>
</nav>
<?php } ?>    
</div>
<?php include View::getView('footer');?>
