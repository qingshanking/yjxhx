<?php 
/*
Custom:page_archive
Description:文章归档
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<article>
	<div class="whitebg timebox">
		<h2 class="htitle"><?php echo $log_title; ?></h2>
		<ul id="list" style="display:none;">
			<li><span>2018-11-08<a href="/xd/34.html" target="_blank">遇见一个未知的你
			<li><span>2018-11-08</span><i><a href="/notice/30.html" target="_blank">【个人博客空间申请】金牛云服，免费领空间啦</a></i></li>
		</ul>
		<ul id="list2">
			<?php
				function displayRecord(){
					global $CACHE; 
					$record_cache = $CACHE->readCache('record');
					$output = '';
					foreach($record_cache as $value){
						$output .= displayRecordItem($value['date']);
					}
					return $output;
				}
				function displayRecordItem($record){
					if (preg_match("/^([\d]{4})([\d]{2})$/", $record, $match)) {
						$days = getMonthDayNum($match[2], $match[1]);
						$record_stime = Strtotime($record . '01');
						$record_etime = $record_stime + 3600 * 24 * $days;
					} else {
						$record_stime = Strtotime($record);
						$record_etime = $record_stime + 3600 * 24;
					}
					$sql = "and date>=$record_stime and date<$record_etime order by top desc ,date desc";
					$result = archiver_db($sql);
					return $result;
				}
				function archiver_db($condition = ''){
					$DB = Database::getInstance();
					$sql = "SELECT gid, title, date,views FROM " . DB_PREFIX . "blog WHERE type='blog' and hide='n' $condition";
					$result = $DB->query($sql);
				    while ($row = $DB->fetch_array($result)) {
				    	$log_url = Url::log($row['gid']);
				        $output .= '<li><span>'.date('Y-m-d', $row['date']).' </span><i><a href="'.$log_url.'" target="_blank">'.$row['title'].'</a></i></li>';
				    }
				    $output .= '';
				    $output = empty($output) ? '<li>暂无文章</li>' :$output;
				    return $output;
				}
				echo displayRecord();
			?>			        
	    </ul>
	    <div class="clear"></div>
	</div>
</article>
<?php
	include View::getView('footer');
?>