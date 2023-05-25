<?php
include_once('../inc/top.php');
?>


<!-- * 카카오맵 - 지도퍼가기 -->
<!-- 1. 지도 노드 -->
<div id="daumRoughmapContainer1652429892066" class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%; "></div>

<!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1652429892066",
		"key" : "2a8be",
		"mapWidth" : "100%",
		"mapHeight" : "400"
	}).render();
</script>


<div class="sub_title">한국환경협회 오시는길 <span>인천광역시 연수구 함박뫼로 78-1</span></div>

<div class="map_icon">
    <div class="cont">
        <img src="/images/map_icon01.jpg" alt="">
        <h4>버스정류장 <br/><span>동남스포피아</span></h4>
        <ul>
            <li>- 일반버스 : 4, 6, 65, 75</li>
            <li>- 마을버스 : 523</li>
        </ul>
    </div>
    <div class="cont">
        <img src="/images/map_icon02.jpg" alt="">
        <h4>지하철 <br/><span>수인분당선 연수역 3번출구</span></h4>
    </div>
</div>

<?php
include_once('../inc/foot.php');
?>
