$(function(){
	
});

console.log("%c%c博客名称%c青衫慧博客", "line-height:28px;","line-height:28px;padding:4px;background:#222;color:#fff;font-size:16px;margin-right:15px","color:#3fa9f5;line-height:28px;font-size:16px;");
console.log("%c%c网站地址%chttps://qsh5.cn", "line-height:28px;","line-height:28px;padding:4px;background:#222;color:#fff;font-size:16px;margin-right:15px","color:#ff9900;line-height:28px;font-size:16px;");
console.log("%c%c企鹅号码%c381318751", "line-height:28px;","line-height:28px;padding:4px;background:#222;color:#fff;font-size:16px;margin-right:15px","color:#008000;line-height:28px;font-size:16px;");
console.log("%c%c联系邮箱%cqingshanking97@gmail.com", "line-height:28px;","line-height:28px;padding:4px;background:#222;color:#fff;font-size:16px;margin-right:15px","color:#00B2EE;line-height:28px;font-size:16px;");
console.log("%c%c座右铭：%c不是你努力无用，而是你不够努力！", "line-height:28px;","line-height:28px;padding:4px;background:#222;color:#fff;font-size:16px;margin-right:15px","color:#7FFF00;line-height:28px;font-size:16px;");
window.console && window.console.log("%c青衫慧博客%c  Copyright © 2014-%s","color:#52BAF5; text-shadow: 0 1px 0 #ccc,0 2px 0 #c9c9c9,0 3px 0 #bbb,0 4px 0 #b9b9b9,0 5px 0 #aaa,0 6px 1px rgba(0,0,0,.1),0 0 5px rgba(0,0,0,.1),0 1px 3px rgba(0,0,0,.3),0 3px 5px rgba(0,0,0,.2),0 5px 10px rgba(0,0,0,.25),0 10px 10px rgba(0,0,0,.2),0 20px 20px rgba(0,0,0,.15);font-size:5em","font-size:12px;color:#5db8f8;", (new Date).getFullYear());
var r = "页面崩溃啦！百度一下：青衫慧博客",
    n = document.title;
$(document).on("visibilitychange",function(){
    document.title = "hidden" === document.visibilityState ? r : n
});
//百度自动推送代码
(function(){    
	var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);    
})();
//百度自动推送结束