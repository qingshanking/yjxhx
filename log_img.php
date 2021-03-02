<?php
/**
 * 多图模板
 */
if (!defined('EMLOG_ROOT')) { exit('error!');}
?>
<article> 
	<!--lbox begin-->
	<div class="lbox">
    <div class="whitebg lanmu"><img src="<?php echo TEMPLATE_URL;?>images/lm0<?php echo rand(1, 4); ?>.jpg">
        <h1><?php echo isset($sortName)?$sortName:"最新博文" ?></h1>
        <p><?php echo index_sort($sortid); ?></p>
    </div>
    <div class="zhuanti whitebg">
    	<h2 class="htitle"><span class="hnav"></span><?php echo isset($sortName)?$sortName:"最新博文" ?></h2>
    	<ul>
    		<?php
				if (!empty($logs)):
					foreach ($logs as $value):
					    $filter_lv = preg_replace("/\[lv\](.*)\[\/lv\]/Uims", '', $value['content']);
                        $filter_cv = preg_replace("/\[cv\](.*)\[\/cv\]/Uims", '', $filter_lv);
                        if (preg_match_all("|<img[^>]+src=\"([^>\"]+)\"?[^>]*>|is", $filter_cv, $imgs)) {
                            $imgNum = count($imgs[1]);                              
                        }
                    
			?>
    		<li>
    			<i class="ztpic">
    				<a href="<?php echo $value['log_url']; ?>">
    					<img src="<?php echo !empty($imgs[1]) ? $imgs[1][0] : TEMPLATE_URL.'images/'. rand(1, 4) .'.jpg'; ?>">
    						
    				</a>
    			</i>
    			<b><?php echo $value['log_title']; ?></b>
    			<span><?php echo subString(strip_tags($value['log_description']),0,180,"..."); ?></span>
    			<a href="<?php echo $value['log_url']; ?>" class="readmore">文章阅读</a> 
    		</li>   
    		<?php
                
                	endforeach;
                	else:
                ?>  
                <p> 抱歉，没有符合您查询条件的结果 </p></li>
                <?php endif; ?> 		
      </ul>
    </div>
    
    
    <!--bloglist end--> 
  </div>
  <div class="rbox">
    <?php include View::getView('side');?>
  </div>
</article>
<?php include View::getView('footer');?>