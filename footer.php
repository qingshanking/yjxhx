<?php
/**
 * 页面底部信息
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<footer>
	<div class="box">
    <div class="wxbox">
    	<ul>
    		<li><img src="<?php echo TEMPLATE_URL; ?>images/wx.png"><span>微信公众号</span></li>
    		<li><img src="<?php echo TEMPLATE_URL; ?>images/wx.png"><span>我的微信</span></li>
    	</ul>
    </div>
    <div class="endnav">
        <p><b>站点声明：</b></p>       
        <p>1、本站资源部分来自互联网收集，仅供用于学习和交流，请勿用于商业用途。 如有侵权、不妥之处，请联系站长并出示版权证明以便删除。敬请谅解！ </p>
        <p>2、所有文章未经授权禁止转载、摘编、复制或建立镜像，如有违反，追究法律责任。举报邮箱：<a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=dgcfGBEFHhcYHR8YETYAHwZYBwdYFRkb" target="_blank">qingshanking@vip.qq.com</a></p>
        <p>Copyright &copy; 2014-<?php echo date("Y"); ?> <a href="<?php echo BLOG_URL; ?>" target="_blank"><?php echo $blogname; ?></a> All Rights Reserved. 备案号：<a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $icp; ?></a></p>
    </div>
  </div>
  <a href="#">
  <div class="top"></div>
  </a>
</footer>
<?php
echo $footer_info; 
doAction('index_footer'); ?>
</body>
</html>