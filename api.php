<?php header('Content-type:text/html;charset=utf-8');
    if(isset($_GET['title']) && !empty($_GET['title']) && isset($_GET['src']) && !empty($_GET['src']) ){
        $title=$_GET['title'];
        $src=$_GET['src'];
    }else{
        echo "<br />参数错误（501 - Not Implemented）：请检查title、src参数是否正常并重试" ;die();
    }
    if(isset($_GET['domain']) && !empty($_GET['domain'])){
        $configname="config/config_".$_GET['domain'].".php";
        if(!file_exists($configname)){
            echo "<br />参数错误（501 - Not Implemented）：未注册的域名 请检查并重试 如您未注册域名请不要带domain参数" ;die();
        }
    }else{
        $configname="config/config_null.php";
    }
    include $configname ;
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>
        <?php echo $_GET['title'];?> - DanmuPlayer
    </title>
    <link rel="stylesheet" href="assets/DanmuPlayer/css/danmuplayer.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/js/highlight/styles/monokai.css">
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/highlight/highlight.pack.js"></script>
    <script src="assets/DanmuPlayer/js/danmuplayer.js"></script>
    <style>
        p {
    font-family: "Microsoft YaHei" ! important;
    line-height: 1em;
    font-color: #222;
}

pre {
    line-height: 2em;
    font-family: "Microsoft YaHei" ! important;
}

h4 {
    line-height: 2em;
}

#c,#danmup {
		/*position: relative;*/
    margin-right: auto;
    margin-left: auto;
}
    </style>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
    <script>
        $(document).ready(function() {
            $("#danmup").danmuplayer({
                src: "<?php echo $_GET['src'];?>", 
                height: <?php if(isset($_GET['height'])){echo $_GET['height'];}else{echo "450";}?>,     //GET视频高度 默认450px
                width: <?php if(isset($_GET['width'])){echo $_GET['width'];}else{echo "800";}?>,    //过GET视频宽度 默认800px
                speed: <?php echo "$speed";?>, 
                danmuss: {}, //默认的danmuss对象
                default_font_color: "<?php echo "$default_font_color";?>", 
                font_size_small: <?php echo "$font_size_small";?>, 
                font_size_big: <?php echo "$font_size_big";?>, 
                opacity: "40", 
                top_botton_danmu_time: 6000, //底部及顶部弹幕存留的世界
                url_to_get_danmu: "http://www.shutdown-s.com/DanmuPlayer/get.php?title=<?php echo $_GET['title'];?>&domain=<?php if(isset($_GET['domain'])){echo $_GET['domain'];}else{echo "null";}?>", 
                url_to_post_danmu: "http://www.shutdown-s.com/DanmuPlayer/post.php?title=<?php echo $_GET['title'];?>&domain=<?php if(isset($_GET['domain'])){echo $_GET['domain'];}else{echo "null";}?>" 
            });
        });
    </script>
</head>
<body>
<div id="danmup"></div>
<center>Danmu Player<br />（Android等部分移动设备暂时无法显示弹幕 果咩~）<br />
            Powered by <a href="http://acgit.org/" target="_blank">AcGit.OrG</a><br />
            APIed by <a href="http://www.shutdown-s.com" target="_blank">www.shutdown-s.com</a><br />
            API地址：<a href="http://www.shutdown-s.com/DanmuPlayer/" target="_blank">http://www.shutdown-s.com/DanmuPlayer/</a>
</center>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"5","bdPos":"right","bdTop":"93"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
</dody>
</html>