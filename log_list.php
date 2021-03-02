<?php
/**
 * 站点首页模板
 */
if (!defined('EMLOG_ROOT')) {
    exit('error!');
}
?>
<article> 	
    <!--lbox begin-->
    <div class="lbox"> 
    	<?php
    		if(tool_ishome()){
    	?>
    	<!--banbox begin-->
    	<div class="banbox">
    		<div class="banner">
    			<div id="banner" class="fader">
    				<li class="slide" ><a href="/" target="_blank"><img src="<?php echo TEMPLATE_URL; ?>images/1.jpg"></a></li>
    				<li class="slide" ><a href="/" target="_blank"><img src="<?php echo TEMPLATE_URL; ?>images/2.jpg"></a></li>
    				<li class="slide" ><a href="/" target="_blank"><img src="<?php echo TEMPLATE_URL; ?>images/3.jpg"></a></li>
    				<li class="slide" ><a href="/" target="_blank"><img src="<?php echo TEMPLATE_URL; ?>images/4.jpg"></a></li>
    				<div class="fader_controls">
    					<div class="page prev" data-target="prev"></div>
    					<div class="page next" data-target="next"></div>
    					<ul class="pager_list"></ul>
    				</div>
    			</div>
            </div>
        </div>
        <!--banbox end-->
        <!--headline begin-->
        <div class="headline">
        	<ul>
        		<li>
        			<a href="/" title="测试主题">
        				<img src="<?php echo TEMPLATE_URL; ?>images/h1.jpg" alt="测试主题"><span>测试主题</span>
        		    </a>
        		</li>
        		<li>
        			<a href="/" title="测试主题">
        				<img src="<?php echo TEMPLATE_URL; ?>images/h2.jpg" alt="测试主题"><span>测试主题</span>
        		    </a>
        		</li>
        	</ul>
        </div>
        <!--headline end-->
        <div class="clearblank"></div>
        <!--<div class="tab_box whitebg">
        	<div class="tab_buttons">
        		<ul>
        			<li class="newscurrent">个人博客</li>
        			<li>工作日记</li>
        			<li>心路历程</li>
        			<li>我的博客</li>
        			<li>前端技术</li>
        		</ul>
        	</div>
        	<div class="newstab">
        		<div class="newsitem">
        			<div class="newspic">
        				<ul>
        					<li><a href="/"><img src="<?php echo TEMPLATE_URL; ?>images/2.jpg"><span>个人博客，属于我的小世界！</span></a></li>
        					<li><a href="/"><img src="<?php echo TEMPLATE_URL; ?>images/4.jpg"><span>个人网站做好了，百度不收录怎么办？来，看看他们怎么做的</span></a></li>
        				</ul>
        			</div>
        			<ul class="newslist">
        				<li><i></i><a href="/">个人博客，属于我的小世界！</a>
        					<p>个人博客，用来做什么？我刚开始就把它当做一个我吐槽心情的地方，也就相当于一个网络记事本，写上一些关于自己生活工作中的小情小事，也会放上一些照片，音乐。每天工作回家后就能访问自己的网站，一边听着音乐，一边写写文章。</p>
        				</li>
        				<li><i></i><a href="/">安静地做一个爱设计的女子</a>
        					<p>自从入了这行，很多人跟我说可以做网络教程，我也有考虑，但最终没有实现，因为我觉得在这个教程泛滥的时代，直接做一套免费的原创个人博客模板更为实在。</p>
        				</li>
        				<li><i></i><a href="/">我是怎么评价自己的？</a>
        					<p>为了挨打轻一些，问我哪里来的，我瞎说了一个说那个谁家的，结果，打得更凶。最后事情还原了真相，我妈说，你要说说奶奶家的，都不会打你了。从此以后，我知道撒谎是会付出更惨痛的代价的，我不再撒谎，也不喜欢爱撒谎的人。</p>
        				</li>
        				<li><i></i><a href="/">个人网站做好了，百度不收录怎么办？来，看看他们怎么做的。</a>
        					<p>不管你是学前端的还是后端的，作为一个程序员，做一个自己的博客，那是必然的。咱们的圈子就这么大，想让更多的人了解你，看看你的技术多牛逼，扔一个博客地址就行了</p>
        				</li>
        				<li><i></i><a href="/">做个人博客如何用帝国cms美化留言增加头像选择</a>
        					<p>帝国cms的留言板系统很简单，用户名，邮箱，电话，没有头像显示，如果要增加头像选择，而又不增加表或者字段的情况下，选择改用其中一个字段，比如电话这个，修改一下即可</p>
        				</li>
                    </ul>
                </div>
                <div class="newsitem">
                	<div class="newspic">
                		<ul>
                			<li><a href="/"><img src="<?php echo TEMPLATE_URL; ?>images/3.jpg"><span>个人博客，属于我的小世界！</span></a></li>
                			<li><a href="/"><img src="<?php echo TEMPLATE_URL; ?>images/1.jpg"><span>个人网站做好了，百度不收录怎么办？来，看看他们怎么做的</span></a></li>
                		</ul>
                	</div>
                	<ul class="newslist">        				
        				<li><i></i><a href="/">安静地做一个爱设计的女子</a>
        					<p>自从入了这行，很多人跟我说可以做网络教程，我也有考虑，但最终没有实现，因为我觉得在这个教程泛滥的时代，直接做一套免费的原创个人博客模板更为实在。</p>
        				</li>
        				<li><i></i><a href="/">我是怎么评价自己的？</a>
        					<p>为了挨打轻一些，问我哪里来的，我瞎说了一个说那个谁家的，结果，打得更凶。最后事情还原了真相，我妈说，你要说说奶奶家的，都不会打你了。从此以后，我知道撒谎是会付出更惨痛的代价的，我不再撒谎，也不喜欢爱撒谎的人。</p>
        				</li>
        				<li><i></i><a href="/">个人博客，属于我的小世界！</a>
        					<p>个人博客，用来做什么？我刚开始就把它当做一个我吐槽心情的地方，也就相当于一个网络记事本，写上一些关于自己生活工作中的小情小事，也会放上一些照片，音乐。每天工作回家后就能访问自己的网站，一边听着音乐，一边写写文章。</p>
        				</li>
        				<li><i></i><a href="/">个人网站做好了，百度不收录怎么办？来，看看他们怎么做的。</a>
        					<p>不管你是学前端的还是后端的，作为一个程序员，做一个自己的博客，那是必然的。咱们的圈子就这么大，想让更多的人了解你，看看你的技术多牛逼，扔一个博客地址就行了</p>
        				</li>
        				<li><i></i><a href="/">做个人博客如何用帝国cms美化留言增加头像选择</a>
        					<p>帝国cms的留言板系统很简单，用户名，邮箱，电话，没有头像显示，如果要增加头像选择，而又不增加表或者字段的情况下，选择改用其中一个字段，比如电话这个，修改一下即可</p>
        				</li>
                   </ul>
                </div>
                <div class="newsitem">
                	<div class="newspic">
                		<ul>
                			<li><a href="/"><img src="<?php echo TEMPLATE_URL; ?>images/3.jpg"><span>个人博客，属于我的小世界！</span></a></li>
                			<li><a href="/"><img src="<?php echo TEMPLATE_URL; ?>images/1.jpg"><span>个人网站做好了，百度不收录怎么办？来，看看他们怎么做的</span></a></li>
                		</ul>
                	</div>
                	<ul class="newslist">       
                		<li><i></i><a href="/">我是怎么评价自己的？</a>
        					<p>为了挨打轻一些，问我哪里来的，我瞎说了一个说那个谁家的，结果，打得更凶。最后事情还原了真相，我妈说，你要说说奶奶家的，都不会打你了。从此以后，我知道撒谎是会付出更惨痛的代价的，我不再撒谎，也不喜欢爱撒谎的人。</p>
        				</li> 				
        				<li><i></i><a href="/">安静地做一个爱设计的女子</a>
        					<p>自从入了这行，很多人跟我说可以做网络教程，我也有考虑，但最终没有实现，因为我觉得在这个教程泛滥的时代，直接做一套免费的原创个人博客模板更为实在。</p>
        				</li>        				
        				<li><i></i><a href="/">个人博客，属于我的小世界！</a>
        					<p>个人博客，用来做什么？我刚开始就把它当做一个我吐槽心情的地方，也就相当于一个网络记事本，写上一些关于自己生活工作中的小情小事，也会放上一些照片，音乐。每天工作回家后就能访问自己的网站，一边听着音乐，一边写写文章。</p>
        				</li>
        				<li><i></i><a href="/">个人网站做好了，百度不收录怎么办？来，看看他们怎么做的。</a>
        					<p>不管你是学前端的还是后端的，作为一个程序员，做一个自己的博客，那是必然的。咱们的圈子就这么大，想让更多的人了解你，看看你的技术多牛逼，扔一个博客地址就行了</p>
        				</li>
        				<li><i></i><a href="/">做个人博客如何用帝国cms美化留言增加头像选择</a>
        					<p>帝国cms的留言板系统很简单，用户名，邮箱，电话，没有头像显示，如果要增加头像选择，而又不增加表或者字段的情况下，选择改用其中一个字段，比如电话这个，修改一下即可</p>
        				</li>
                   </ul>
                </div>
                <div class="newsitem">
                	<div class="newspic">
                		<ul>
                			<li><a href="/"><img src="<?php echo TEMPLATE_URL; ?>images/3.jpg"><span>个人博客，属于我的小世界！</span></a></li>
                			<li><a href="/"><img src="<?php echo TEMPLATE_URL; ?>images/1.jpg"><span>个人网站做好了，百度不收录怎么办？来，看看他们怎么做的</span></a></li>
                		</ul>
                	</div>
                	<ul class="newslist">   
                		<li><i></i><a href="/">安静地做一个爱设计的女子</a>
        					<p>自从入了这行，很多人跟我说可以做网络教程，我也有考虑，但最终没有实现，因为我觉得在这个教程泛滥的时代，直接做一套免费的原创个人博客模板更为实在。</p>
        				</li>        
                		<li><i></i><a href="/">我是怎么评价自己的？</a>
        					<p>为了挨打轻一些，问我哪里来的，我瞎说了一个说那个谁家的，结果，打得更凶。最后事情还原了真相，我妈说，你要说说奶奶家的，都不会打你了。从此以后，我知道撒谎是会付出更惨痛的代价的，我不再撒谎，也不喜欢爱撒谎的人。</p>
        				</li>		
        				<li><i></i><a href="/">个人博客，属于我的小世界！</a>
        					<p>个人博客，用来做什么？我刚开始就把它当做一个我吐槽心情的地方，也就相当于一个网络记事本，写上一些关于自己生活工作中的小情小事，也会放上一些照片，音乐。每天工作回家后就能访问自己的网站，一边听着音乐，一边写写文章。</p>
        				</li>
        				<li><i></i><a href="/">个人网站做好了，百度不收录怎么办？来，看看他们怎么做的。</a>
        					<p>不管你是学前端的还是后端的，作为一个程序员，做一个自己的博客，那是必然的。咱们的圈子就这么大，想让更多的人了解你，看看你的技术多牛逼，扔一个博客地址就行了</p>
        				</li>
        				<li><i></i><a href="/">做个人博客如何用帝国cms美化留言增加头像选择</a>
        					<p>帝国cms的留言板系统很简单，用户名，邮箱，电话，没有头像显示，如果要增加头像选择，而又不增加表或者字段的情况下，选择改用其中一个字段，比如电话这个，修改一下即可</p>
        				</li>
                   </ul>
                </div>
                <div class="newsitem">
                	<div class="newspic">
                		<ul>
                			<li><a href="/"><img src="<?php echo TEMPLATE_URL; ?>images/3.jpg"><span>个人博客，属于我的小世界！</span></a></li>
                			<li><a href="/"><img src="<?php echo TEMPLATE_URL; ?>images/1.jpg"><span>个人网站做好了，百度不收录怎么办？来，看看他们怎么做的</span></a></li>
                		</ul>
                	</div>
                	<ul class="newslist">       
                		<li><i></i><a href="/">我是怎么评价自己的？</a>
        					<p>为了挨打轻一些，问我哪里来的，我瞎说了一个说那个谁家的，结果，打得更凶。最后事情还原了真相，我妈说，你要说说奶奶家的，都不会打你了。从此以后，我知道撒谎是会付出更惨痛的代价的，我不再撒谎，也不喜欢爱撒谎的人。</p>
        				</li> 				
        				<li><i></i><a href="/">安静地做一个爱设计的女子</a>
        					<p>自从入了这行，很多人跟我说可以做网络教程，我也有考虑，但最终没有实现，因为我觉得在这个教程泛滥的时代，直接做一套免费的原创个人博客模板更为实在。</p>
        				</li>        				
        				<li><i></i><a href="/">个人博客，属于我的小世界！</a>
        					<p>个人博客，用来做什么？我刚开始就把它当做一个我吐槽心情的地方，也就相当于一个网络记事本，写上一些关于自己生活工作中的小情小事，也会放上一些照片，音乐。每天工作回家后就能访问自己的网站，一边听着音乐，一边写写文章。</p>
        				</li>
        				<li><i></i><a href="/">个人网站做好了，百度不收录怎么办？来，看看他们怎么做的。</a>
        					<p>不管你是学前端的还是后端的，作为一个程序员，做一个自己的博客，那是必然的。咱们的圈子就这么大，想让更多的人了解你，看看你的技术多牛逼，扔一个博客地址就行了</p>
        				</li>
        				<li><i></i><a href="/">做个人博客如何用帝国cms美化留言增加头像选择</a>
        					<p>帝国cms的留言板系统很简单，用户名，邮箱，电话，没有头像显示，如果要增加头像选择，而又不增加表或者字段的情况下，选择改用其中一个字段，比如电话这个，修改一下即可</p>
        				</li>
                   </ul>
                </div>    
           </div>
        </div>-->
        <!--tab_box end-->
        <!--精彩专题-->
        <!--<div class="zhuanti whitebg">
			<h2 class="htitle"><span class="hnav"><a href="/">原创模板</a><a href="/">古典</a><a href="/">清新</a><a href="/">低调</a></span>精彩专题</h2>
			<ul>
				<li> <i class="ztpic"><a href="/" target="_blank"><img src="<?php echo TEMPLATE_URL; ?>images/1.jpg"></a></i> <b>个人博客模板《今夕何夕》-响应式个人...</b><span>个人博客模板《今夕何夕》，宽屏响应式个人博客模板，采用冷色系为主，固定导航栏和侧边栏，无缝滚动图片...</span><a href="" target="_blank" class="readmore">文章阅读</a> </li>
				<li> <i class="ztpic"><a href="/" target="_blank"><img src="<?php echo TEMPLATE_URL; ?>images/2.jpg"></a></i> <b>个人博客模板《今夕何夕》-响应式个人...</b><span>个人博客模板《今夕何夕》，宽屏响应式个人博客模板，采用冷色系为主，固定导航栏和侧边栏，无缝滚动图片...</span><a href="" target="_blank" class="readmore">文章阅读</a> </li>
        		<li> <i class="ztpic"><a href="/" target="_blank"><img src="<?php echo TEMPLATE_URL; ?>images/3.jpg"></a></i> <b>个人博客模板《今夕何夕》-响应式个人...</b><span>个人博客模板《今夕何夕》，宽屏响应式个人博客模板，采用冷色系为主，固定导航栏和侧边栏，无缝滚动图片...</span><a href="" target="_blank" class="readmore">文章阅读</a> </li>
        		<li> <i class="ztpic"><a href="/" target="_blank"><img src="<?php echo TEMPLATE_URL; ?>images/4.jpg"></a></i> <b>个人博客模板《今夕何夕》-响应式个人...</b><span>个人博客模板《今夕何夕》，宽屏响应式个人博客模板，采用冷色系为主，固定导航栏和侧边栏，无缝滚动图片...</span><a href="" target="_blank" class="readmore">文章阅读</a> </li>
        		<li> <i class="ztpic"><a href="/" target="_blank"><img src="<?php echo TEMPLATE_URL; ?>images/h2.jpg"></a></i> <b>个人博客模板《今夕何夕》-响应式个人...</b><span>个人博客模板《今夕何夕》，宽屏响应式个人博客模板，采用冷色系为主，固定导航栏和侧边栏，无缝滚动图片...</span><a href="" target="_blank" class="readmore">文章阅读</a> </li>
        		<li> <i class="ztpic"><a href="/" target="_blank"><img src="<?php echo TEMPLATE_URL; ?>images/h1.jpg"></a></i> <b>个人博客模板《今夕何夕》-响应式个人...</b><span>个人博客模板《今夕何夕》，宽屏响应式个人博客模板，采用冷色系为主，固定导航栏和侧边栏，无缝滚动图片...</span><a href="" target="_blank" class="readmore">文章阅读</a> </li>
     		</ul>
     	</div>-->
     	<!--首页广告-->
     	<div class="ad whitebg">
     		<img src="<?php echo TEMPLATE_URL; ?>images/as.png">
     	</div>
		<?php } ?>
		<div class="whitebg bloglist">            
            <h2 class="htitle"><?php echo isset($sortName)?$sortName:"最新博文" ?></h2>            
			<ul>
				<?php
					if (!empty($logs)):
                	    foreach ($logs as $value):
                            $filter_lv = preg_replace("/\[lv\](.*)\[\/lv\]/Uims", '', $value['content']);
                            $filter_cv = preg_replace("/\[cv\](.*)\[\/cv\]/Uims", '', $filter_lv);
                            if (preg_match_all("|<img[^>]+src=\"([^>\"]+)\"?[^>]*>|is", $filter_cv, $imgs)) {
                                $imgNum = count($imgs[1]);                              
                            }
                            if (!empty($imgs[1]) && $imgNum >= 4) {
                ?>
                <!--多图模式 置顶设计-->
				<li>
					<h3 class="blogtitle"><a href="<?php echo $value['log_url']; ?>" target="_blank"><b></b><?php echo $value['log_title']; ?></a></h3>
					<span class="bplist">
						<?php
                            $n = 4;
                            for ($i = 0; $i < $n; $i++) {
                            	if (strpos($imgs[1][$i], 'thum-')) {
                            		$img = $imgs[1][$i];
                                } else {
                                	$img_basename = basename($imgs[1][$i]);
                                	$img_thumname = 'thum-' . basename($imgs[1][$i]);
                                	$img_thum = str_replace($img_basename, $img_thumname, $imgs[1][$i]);
                                	$img_size = @getimagesize($img_thum);
                                	if ($img_size) {
                                		$img = $img_thum;
                                	} else {
                                		$img = $imgs[1][$i];
                                    }
                                }
                        ?> 
                        <a href="<?php echo $value['log_url']; ?>"><img src="<?php echo $img; ?>" alt=""></a>
                        <?php
                        	}
                        ?>						
					</span>
					<p class="blogtext"><?php echo subString(strip_tags($value['log_description']),0,180,"..."); ?></p>
					<p class="bloginfo">
						<i class="avatar"><img src="<?php blog_author_avatar($value['author']) ?>">"></i>
						<span><?php blog_author($value['author']);?></span>
						<span><?php echo gmdate('Y年n月j日', $value['date']); ?></span>
						<span>【<?php blog_sort($value['logid']);?>】</span>
					</p>
                </li>
                <?php
                	   }elseif(!empty($imgs[1]) && $imgNum < 4){                	    	
                	    	
                ?>
                <!--单图-->
                <li>
                	<h3 class="blogtitle"><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h3>
                	<span class="blogpic imgscale">
                		<i><?php blog_sort($value['logid']);?></i>
                		<a href="<?php echo $value['log_url']; ?>" title="<?php echo $value['log_title']; ?>">
                			<?php
                                $n = 1;
                                for ($i = 0; $i < $n; $i++) {
                                $img = str_replace('thum-', '', $imgs[1][$i]);
                            ?>
                            <img src="<?php echo $img; ?>" alt="<?php echo $value['log_title']; ?>">                            
                            <?php
                                }
                            ?>
                			
                		</a>
                	</span>
                	<p class="blogtext"><?php echo subString(strip_tags($value['log_description']),0,180,"..."); ?></p>
                	<p class="bloginfo">
                		<i class="avatar"><img src="<?php blog_author_avatar($value['author']) ?>"></i>
                		<span><?php blog_author($value['author']);?></span>
                		<span><?php echo gmdate('Y年n月j日', $value['date']); ?></span>
                		<span>【<a href="/"><?php blog_sort($value['logid']);?></a>】</span></p>
                	<a href="<?php echo $value['log_url']; ?>" class="viewmore">阅读更多</a>
                </li>
                <?php
                }
				else{
					?>
                    <!--无图模式-->					
					<li>
                	<h3 class="blogtitle"><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h3>
					<p class="blogtext"><?php echo subString(strip_tags($value['log_description']),0,180,"..."); ?></p>
					<p class="bloginfo">
					    <i class="avatar"><img src="<?php blog_author_avatar($value['author']) ?>"></i>
						<span></span>
						<span><?php echo gmdate('Y年n月j日', $value['date']); ?></span>
						<span>【<a href="/"><?php blog_sort($value['logid']);?></a>】</p>
						<a href="<?php echo $value['log_url']; ?>" class="viewmore">阅读更多</a>                	
                </li>
					
				<?php	
				}
                	endforeach;
                	else:
                ?>      
                <p> 抱歉，暂无文章! </p></li>
                <?php endif; ?>
            </ul>
        </div>
        <!--bloglist end--> 
        <!--pagelist-->
        <?php if($page_url){ ?>
        	<div class="pagelist">
        		<?php echo $page_url;?> 
        	</div>
        <?php } ?>
        <!--pagelist end--> 
    </div>
    <!--右侧导航栏-->
    <div class="rbox">
   	    <?php include View::getView('side');?>
    </div>
</article>
<?php include View::getView('footer');?>
