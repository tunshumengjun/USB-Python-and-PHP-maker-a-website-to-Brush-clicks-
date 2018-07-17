<!doctype html>
<html>
<head>
<style>
	body{text-align: center;
	background-color:yellow;
	font-size: 30px;
	font-family: Impact, Haettenschweiler, Franklin Gothic Bold, Arial Black," sans-serif"
	
	}
	
</style>	
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body=>
<?php
	$fpxq = fopen("ip.txt","a ");
	fwrite($fpxq,date("Y-m-d H:i:s"));
fwrite($fpxq,"	");
fwrite($fpxq,$_SERVER[REMOTE_ADDR]);
fwrite($fpxq,"	");
fwrite($fpxq,$_SERVER[HTTP_X_REWRITE_URL]);
fwrite($fpxq,"	");
fwrite($fpxq,$_SERVER[HTTP_USER_AGENT]);
fwrite($fpxq,"	");
fwrite($fpxq,$_SERVER["HTTP_REFERER"]);
fwrite($fpxq," ");
fclose($fpxq);
	
?>
<div id="bodyh">
	<h1>欢迎来到属于卡搭的流量攻击网站</p>
</div>
<div id="bodyp1">
	<p>在下方填写你的卡搭链接&nbsp;默认刷1000点击量</p>
</div>
<form name="form1" method="post" action="index.php">
	↓输入卡搭链接↓
  <br></br>
	<input type="text" name="url" size="50">
	<br></br>
	<input name="submit" type="submit" value="开刷">
</form>
<?php
	$fp = fopen("log.txt","a");

		if(@$_POST["submit"]=="开刷"){
			
		$fpx = fopen("do.txt","a ");
	fwrite($fpx,date("Y-m-d H:i:s"));
fwrite($fpx,"	");
fwrite($fpx,$_SERVER[REMOTE_ADDR]);
fwrite($fpx,"	");
fwrite($fpx,$_SERVER[HTTP_X_REWRITE_URL]);
fwrite($fpx,"	");
fwrite($fpx,$_SERVER[HTTP_USER_AGENT]);
fwrite($fpx,"	");
fwrite($fpx,$_SERVER["HTTP_REFERER"]);
fwrite($fpx," ");
fwrite($fpx,$_POST[url]);
fclose($fpx);	
			
			
		echo "<script language=\"JavaScript\">alert(\"提交成功 请耐心等待数据处理\");</script>";
		fwrite($fp,"\r\n1");
		fwrite($fp,$_POST[url]);
		fwrite($fp,"\r\n1");
		fclose($fp);
		}

	
?>	
<p>此网站于7/17开始投入使用 仅供娱乐 禁止私自交易</p>
<p>后端使用PHP+PYTHON搭建 三台12核心服务器同时工作 安心使用</a>
<p>此网站仅作学习参考 不要骂我啊喂</p>
<p>如果遇到提交未刷的情况 请各位重新提交并提交多次 后台总会捕捉到提交信息 此为BUG</p>
<a href='http://qm.qq.com/cgi-bin/qm/qr?k=Z6bY9hmEPQvjhBKWkRMG75vSj23Or0yI'>.网站管理员|</A>
<a href='http://qm.qq.com/cgi-bin/qm/qr?k=Z6bY9hmEPQvjhBKWkRMG75vSj23Or0yI'>网站源码下载|</A>
<a href='https://space.bilibili.com/108040256/#/'>豚鼠萌君的B站.</A>



<p>此网站免费使用 试用期7天</p>
<p>如果骂声太多 此网站将于7/24关闭</p>
<a href='http://iwillwaitforyouforever.xyz:50'>神淘汰</a>
<br></br>
<a href='http://iwillwaitforyouforever.xyz:50/log.txt'>点击这里查看后台数据 </a>
<br></br>
<p>↓室长交流群链接↓</p>
<a href='http://qm.qq.com/cgi-bin/qm/qr?k=HKcHlp4HgCglFbmaqvuepbDoZKYprIPU'>点击加入Scratch室长交流群</a>
<br></br>
<a href='http://qm.qq.com/cgi-bin/qm/qr?k=k4l1ygDIGVmHZ9x-fPpRQZ2K1JeYbbJQ'>启德上空的大转弯</a>

<p>室长QQ一览:</p>
<p>豚鼠萌君:3306191807</p>
<p>梦想工作室室长:3188468169</p>
<p>小盖工作室室长:996524319</p>
<p>洛九工作室室长:2190930493</p>
<p>CTF工作室室长:2718721915</p>
<p>CMT工作室室长:641838724</p>
<P>未上榜室长请加入室长群申请添加</p>
<div id="red">
</body>
</html>