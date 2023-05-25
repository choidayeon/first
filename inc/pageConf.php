<?php
//if (!defined("_GNUBOARD_")) exit;
$pageConf = array();
if(!$_ADMIN_){
	$arrTmp = substr(basename($_SERVER['PHP_SELF']),0,-4);
	$mainNum = substr($arrTmp, 3, 2);
	$subNum = substr($arrTmp, 5, 2);
	$depth3 = substr($arrTmp, 7, 2);
	if($bo_table){
		$mainNum = substr($bo_table, 1, 2);
		$subNum = substr($bo_table, 3, 2);
		$depth3 = substr($bo_table, 5, 2);
	}
	if($fm_id){
		$mainNum = '07';
		$subNum = '01';
	}
	$pageConf = array(
	/****************************** 여기서부터 수정하세요 *********/
		  '1차메뉴명' => // 1차 메뉴명
			array(1=> 
				 "협회소개"
				,"협회가 하는 일"
				,"고객센터"
			) 

		, '2차메뉴명' => // 2차 메뉴명
			array(

			  1 => // 첫번째 메뉴 하위메뉴 :: 
				array(1=> 
                    "CEO 인사말", "경영비전", "CI/BI 소개", "조직도", "찾아오시는길"
				)

			, 2 => // 두번째 메뉴 하위메뉴 :: 
				array(1=> 
					   "협회가 하는 일", "환경교육사업", "환경체험 연구원사업", "기업사회공헌 컨설팅", "국제환경개선 교류사업"
				)
			
			, 3 => // 세번째 메뉴 하위메뉴 :: 
				array(1=> 
					 "공지사항","회원광장", "질문과 답변", "후원하기"
				)


			)
		,'3차메뉴명' => // 1차 메뉴명
			array(1=> 
				 "COMPANY INFO"
				,"PRODUCT INFO"
				,"SCENE"
				,"COMMUNITY"
				,"ESTIMATE"


			) 
	/****************************** 여기서까지만 수정하세요 *********/
	);


	if(!defined('_INDEX_') && !(int)$subNum) {
		$mainNum = '05';
		$subNum = '09';
	}

	$메뉴명1차 = $pageConf['1차메뉴명'][(int)$mainNum];
	$메뉴명2차 = $pageConf['2차메뉴명'][(int)$mainNum][(int)$subNum];
	$메뉴명3차 = $pageConf['3차메뉴명'][(int)$mainNum];

if(!function_exists('mkDropdown')){
	function mkDropdown(){
		global $pageConf;

		if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/css/SuckerFish.css'))
			return "\n<div style='font-weight:bold;color:#f00'>/css/SuckerFish.css 파일이 없습니다.</div>\n";

		$preloadimg = "";
		for($i=1; $i<=count($pageConf['1차메뉴명']); $i++)
			for($j=1; $j<=count($pageConf['2차메뉴명'][$i]); $j++)
				$preloadimg .= ($i>1||$j>1 ? ", ":null)."'/new/images/left_mn".sprintf('%02d', $i)."_".sprintf('%02d', $j)."_on.gif'";

$ret = <<<HEREDOC
	<link href="/css/SuckerFish.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript">
	$(document).ready(function(){
		$('#nav-one li').hover(
			function(){ $('ul', this).fadeIn('fast'); },
			function() { } 
		);
		if (document.all) {
			$('#nav-one li').hoverClass ('sfHover');
		}

		$('#nav-one li ul li img').hover(
				function(){ this.src = this.src.replace('_off', '_on'); },
				function(){ this.src = this.src.replace('_on', '_off'); }
		);
	});
	$.fn.hoverClass = function(c) {
		return this.each(function(){
			$(this).hover( 
				function() { $(this).addClass(c); },
				function() { $(this).removeClass(c); }
			);
		});
	};
	</script>
HEREDOC;

		$ret .= "<ul id='nav-one' class='nav'>\n";
		for($i=1; $i<=count($pageConf['1차메뉴명']); $i++){
			$ret .= "\t<li style='width:20%'><img src='/new/images/navi_".sprintf('%02d', $i).".gif' alt='".$pageConf['1차메뉴명'][$i]."' onClick=\"goPage('".sprintf('%02d', $i)."01')\">";

			$cnt = count($pageConf['2차메뉴명'][$i]);
			if($cnt > 0){
				$ret .= "\n\t\t<ul class='menul{$i}'>\n";
				for($j=1; $j<=$cnt; $j++){
					$ret .= "\t\t\t<li><img src='/new/images/sub_menu".sprintf('%02d', $i)."_".sprintf('%02d', $j)."_off.gif' alt='".$pageConf['2차메뉴명'][$i][$j]."' onClick=\"goPage('".sprintf('%02d', $i).sprintf('%02d', $j)."')\" /></li>\n";
				}
				$ret .= "\t\t</ul>\n";
			}

			$ret .= "\t</li>\n";
		}
		$ret .= "</ul>\n";

		return $ret;
	}
}

if(!function_exists('mkLeftmenu')){
	function mkLeftmenu($mainNum, $subNum=0){
		global $pageConf;
		$mainNum = (int)$mainNum;

		if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/css/SuckerFish.css'))
			return "\n<div style='font-weight:bold;color:#f00'>/css/SuckerFish.css 파일이 없습니다.</div>\n";

		$cnt = count($pageConf['2차메뉴명'][$mainNum]);
		$preloadimg = "";
		for($i=1; $i<=$cnt; $i++)
			$preloadimg .= ($i>1 ? ", ":null)."'/images/left_mn".sprintf('%02d', $mainNum).sprintf('%02d', $i)."_on.gif'";


$ret = <<<HEREDOC
	<link href="/css/SuckerFish.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript">
	$(document).ready(function(){
		$('#left-one li img.off').hover(
				function(){ this.src = this.src.replace('_off', '_on'); },
				function(){ this.src = this.src.replace('_on', '_off'); }
		);
	});
	</script>
HEREDOC;

		$ret .= "<ul>\n";
		for($i=1; $i<=$cnt; $i++){
			$ret .= "\t<li><a href=\"JavaScript:goPage('".sprintf('%02d', $mainNum).sprintf('%02d', $i)."')\">".$pageConf['2차메뉴명'][$mainNum][$i]."</a></li>\n";
		}
		$ret .= "</ul>\n";

		return $ret;
	}
}


}
?>