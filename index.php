<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>DanmuPlayer - API</title>
    <style>
body{color:rgb(105,106,82);text-align:center;line-height:18px;font-size:14px;width:662px;margin:0 auto;font-family:Arial,"Microsoft JhengHei","Microsoft YaHei";}div{margin:0 auto;width:662px;overflow:hidden;word-wrap:break-word;}div a span{background-color:#CC6699;border-radius:3px;color:white;font-weight:bold;padding:1px;}.orgg,.org,.green{background-color:#FFF9B7;color:green;border-style:solid;border-color:#ffa500;padding:3px 7px;border-width:1px;margin-bottom:5px;border-radius:5px;}.orgg,.org,input,button,.green,.ds-comment-body{-moz-box-shadow:2px 0px 10px #909090;-webkit-box-shadow:2px 0px 10px #909090;box-shadow:2px 0px 10px #909090;}.orgg,.org,input,button,.green{text-shadow:1px 1px 2px rgba(0,0,0,.3),1px 1px 2px rgba(3,3,3,.3);filter:alpha(Opacity=80);-moz-opacity:0.8;opacity:0.8;z-index:100;}button{height:22px;border:0px;padding:1px 3px;color:white;margin:3px;border-radius:3px;background-color:#009966;}input{border-radius:4px;background-color:white;border:1px;border-style:solid;border-color:silver;text-shadow:1px 1px 1px rgba(0,0,0,.1);}.txt-fade{font-size:12px;color:#9B9B9B;}        </style>
</head>
<dody class='body'>
    <div class='green'>DanmuPlayer - APIVer Ver1.0 Beta</div>
    <div class='orgg'>
        <form method="post" action="" target="_blank" ><br />
            视频标题*：<input type="text" name="title" required="required" style="width:480px;" maxlength="12" minlength="4" /><br />
            4-12字符 懂了没_(:з」∠)_！别给爹爹整那些乱七八糟的字符！没弹幕不怪我！<br />
            视频地址*：<input type="text" name="src" required="required" style="width:480px;" /><br />
            要传说中H264编码的mp4格式哦~ 没确保视频存在就滚！！<br />（我才不会告诉你复制到地址栏访问一下就好(ಡωಡ)哼~）<br />
            域名（如果你有向API提供自己用的数据库(๑•̀ㅂ•́)و✧）：<input type="text" name="domain" style="width:250px;" /><br />
            视频宽度*：<input type="text" name="width" required="required" style="width:60px;" /><br />
            不填默认800px(ง •̀_•́)ง<br />
            视频长度*：<input type="text" name="height" required="required" style="width:60px;" /><br />
            不填默认450px|ω・）<br /><br />
            Demo（*/∇＼*）：<a href="http://www.shutdown-s.com/DanmuPlayerDemo.html" target="_blank" >DanmuPlayerDemo.html</a><br />
            你也可以在生成的页面将源代码复制下来( ｰ̀εｰ́ )放在你的html页面上 这样就完成了播放器的调用<br /><br />
            <input type="submit" value="生成链接(在出现页面底部)" /><br /><br />
        </form>
    </div>
    <div class='org'>
        <center>Danmu Player - API Ver1.0<br />（Android等部分移动设备暂时无法显示弹幕 果咩~）<br />
            Powered by <a href="http://acgit.org/" target="_blank">AcGit.OrG</a><br />
            APIed by <a href="http://www.shutdown-s.com" target="_blank">www.shutdown-s.com</a><br />
            API地址：<a href="http://www.shutdown-s.com/DanmuPlayer/" target="_blank">http://www.shutdown-s.com/DanmuPlayer/</a>
        </center>
        <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more">分享到：</a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博">新浪微博</a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间">QQ空间</a><a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧">百度贴吧</a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博">腾讯微博</a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网">人人网</a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信">微信</a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友">QQ好友</a><a href="#" class="bds_mshare" data-cmd="mshare" title="分享到一键分享">一键分享</a><a href="#" class="bds_copy" data-cmd="copy" title="分享到复制网址">复制网址</a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{"bdSize":16}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
    </div>
</dody>

</html>
<?php
if(!empty($_POST)){
    if(isset($_POST['domain'])){
        $prm="title=".$_POST['title']."%26src=".$_POST['src']."%26domain=".$_POST['domain']."%26height=".$_POST['height']."%26width=".$_POST['width'] ;
    }else{
        $prm="title=".$_POST['title']."%26src=".$_POST['src']."%26height=".$_POST['height']."%26width=".$_POST['width'] ;
    }
$url = "http://api.t.sina.com.cn/short_url/shorten.xml?source=2774000654&url_long=http://www.shutdown-s.com/DanmuPlayer/api.php%3F$prm";
$t_url = file_get_contents($url) ;
$result = substr($t_url,60,19) ;
echo '<div class="org"><input type="text" value="'.$result.'" /><a href="'.$result.'" target="_blank">点我打开</a></div>' ;
}
?>