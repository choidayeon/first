<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
<meta property="og:image" content="/og_logo.png">
<meta property="og:image:type" content="image/png">
<title>한국환경협회</title>

<link rel="stylesheet" href="/css/common.css">
<link rel="stylesheet" href="/css/fonts.css">
<link rel="stylesheet" href="/css/swiper.css">
<link rel="stylesheet" href="/js/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/style.css">

<script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/js/prefixfree.min.js"></script>
<script type="text/javascript" src="/js/swiper.min.js"></script>
<script type="text/javascript" src="/js/user.script.js"></script>

</head>

<body>

<?php
include_once("pageConf.php");
?>

<div class="txt_hidden">
	<a href="#header">상단 바로가기</a>
	<a href="#nav">메뉴 바로가기</a>
	<a href="#contents">본문 바로가기</a>
	<a href="#footer">하단정보 바로가기</a>
</div>
<div id="wrapper">
	<!--header-->
	<header id="header">
		<div class="hd_top cont_center">
			<h1><a href="/"><img src="/images/logo.svg" alt="한국환경협회" /></a></h1>
			<div class="top_right">
			    <ul>
			        <li><a href="">로그인</a></li>
			        <li><a href="">회원가입</a></li>
			    </ul>
			    <div class="sns">
			        <a href=""><i class="fa fa-facebook"></i></a>
			        <a href=""><img src="/images/kakao-talk.png" alt=""></a>
			    </div>
			</div>
		</div>
    </header>
	<!--header-->
		<nav id="nav" class="hd_btm">
		<!-- nav -->
		<?php include_once("navi.php");?> 
		<!-- //navi -->
		</nav>
		<div id="btn_nav"><a href="#;" class="btn_hbg"><span>메뉴보기</span></a></div>

  <?php if (!defined('_INDEX_')) { ?>
		<!--contents-->
		<figure id="sub_visual" class="sub_visual<?php echo $mainNum?>" style="background:url(/images/sub_visual<?php echo $mainNum?>.jpg) no-repeat center; ">
		    <div class="cont_center">
			<h2><?=$메뉴명1차?></h2>
			<ul class="sub_menu_li">
					<?php
						 $i = 1;
						 foreach ($pageConf['2차메뉴명'][intval($mainNum)] as $key => $val) {
							 echo '      <li><a href="JavaScript:goPage(\''.$mainNum.sprintf('%02d', $key).'\')"'.($key==intval($subNum) ? ' class="on"':'').'>'.$pageConf['2차메뉴명'][intval($mainNum)][$i++].'</a></li>'.PHP_EOL;
						 }
				 ?>
				</ul>
				</div>
		</figure>
		<section id="sub_contents" class="cont_center sub<?php echo $mainNum?> sub<?php echo $mainNum.$subNum?>">
			<nav id="sub_menu">
				<h2><?=$메뉴명2차?></h2>				
				<ol class="location">
					<li>HOME</li>
					<li>-</li>
					<li><?=$메뉴명1차?></li>
					<li>-</li>
					<li><?=$메뉴명2차?></li>
				</ol>
            </nav>
	<?php } ?>
