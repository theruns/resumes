<script id="allmobilize" charset="utf-8" src="style/js/allmobilize.min.js"></script>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld"  />
<!-- end 云适配 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>拉勾网-最专业的互联网招聘平台</title>
<meta property="qc:admins" content="23635710066417756375" />
<meta content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网" name="description">
<meta content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招" name="keywords">
<meta name="baidu-site-verification" content="QIQ6KC1oZ6" />


<!-- <div class="web_root"  style="display:none">h</div> -->
<script type="text/javascript">
var ctx = "h";
console.log(1);
</script>
<link rel="Shortcut Icon" href="h/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="style/css/style.css"/>
<link rel="stylesheet" type="text/css" href="style/css/external.min.css"/>
<link rel="stylesheet" type="text/css" href="style/css/popup.css"/>
<script src="style/js/jquery.1.10.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="style/js/jquery.lib.min.js"></script>
<script src="style/js/ajaxfileupload.js" type="text/javascript"></script>
<script type="text/javascript" src="style/js/additional-methods.js"></script>
<!--[if lte IE 8]>
    <script type="text/javascript" src="style/js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
<script type="text/javascript" src="style/js/conv.js"></script>
</head>
<body>
<div id="body">
	<?php
     if (!Yii::$app->user->isGuest) { ?>        
        <div id="header">
            <div class="wrapper">
            <a href="index.html" class="logo">
            <img src="style/images/logo.png" width="229" height="43" alt="拉勾招聘-专注互联网招聘" />
            </a>
            <ul class="reset" id="navheader">
                <li class="current"><a href="?r=welcome/show">首页</a></li>
                <li ><a href="" >公司</a></li>
                <li ><a href="#" target="_blank">论坛</a></li>
                <li ><a href="?r=resume/myresume" rel="nofollow">我的简历</a></li>
                <li ><a href="" rel="nofollow">发布职位</a></li>
            </ul>
            <ul class="loginTop">
                <li><a href="?r=reg/login" rel="nofollow">登录</a></li> 
                <li>|</li>
                <li><a href="?r=reg/register" rel="nofollow">注册</a></li>
            </ul>
            </div></div>
     <?php   
     }else{ ?>
        <div id="header">
            <div class="wrapper">
                <a class="logo" href="index.html">
                    <img width="229" height="43" alt="拉勾招聘-专注互联网招聘" src="style/images/logo.png">
                </a>
                <ul id="navheader" class="reset">
                    <li><a href="?r=index/index">首页</a></li>
                    <li class="current"><a href="?r=company/list">公司</a></li>
                    <li><a target="_blank" href="">论坛</a></li>
                                        <li>
                            <a rel="nofollow" href="">简历管理</a>
                                                </li>
                                                        <li><a rel="nofollow" href="create.html">发布职位</a></li>
                                </ul>
                            <dl class="collapsible_menu">
                    <dt>
                        <span><?=isset($_SESSION['username'])?$_SESSION['username']:'';?>&nbsp;</span> 
                        <span class="red dn" id="noticeDot-1"></span>
                        <i></i>
                    </dt>
                                        <dd><a href="positions.html">我发布的职位</a></dd>
                        <dd><a href="positions.html">我收到的简历</a></dd>
                        <dd class="btm"><a href="myhome.html">我的公司主页</a></dd>
                        <dd><a href="jianli.html">我要找工作</a></dd>
                                                    <dd><a href="accountBind.html">帐号设置</a></dd>
                                    <dd class="logout"><a rel="nofollow" href="?r=reg/logout">退出</a></dd>
                </dl>
                                </div></div>
    <?php
    }
    ?>




<?=$content;?>
  <div id="footer">
		<div class="wrapper">
			<a href="h/about.html" target="_blank" rel="nofollow">联系我们</a>
		    <a href="h/af/zhaopin.html" target="_blank">互联网公司导航</a>
		    <a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
		    <a class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信<i></i></a>
			<div class="copyright">&copy;2013-2014 Lagou <a target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action">京ICP备14023790号-2</a></div>
		</div>
	</div>


<script type="text/javascript" src="style/js/core.min.js"></script>
<script type="text/javascript" src="style/js/popup.min.js"></script>


<!-- <script src="style/js/wb.js" type="text/javascript" charset="utf-8"></script>
 -->


</body>
</html>	