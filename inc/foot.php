<?php if (!defined('_INDEX_')) { ?>
</section>
<!-- contents-->

<?php } ?>
<footer id="footer">
	<div class="ft_top">
	   <div class="cont_center">
            <div class="ptn_slider">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide"><a href="" target="_blank"><img src="/images/f_logo01.jpg" alt="한국환경공단" /></a></li>
                    <li class="swiper-slide"><a href="" target="_blank"><img src="/images/f_logo02.jpg" alt="인천광역시" /></a></li>
                    <li class="swiper-slide"><a href="" target="_blank"><img src="/images/f_logo03.jpg" alt="서울특별시" /></a></li>
                    <li class="swiper-slide"><a href="" target="_blank"><img src="/images/f_logo04.jpg" alt="수도권대기환경청" /></a></li>
                    <li class="swiper-slide"><a href="" target="_blank"><img src="/images/f_logo05.jpg" alt="환경부" /></a></li>
                    <li class="swiper-slide"><a href="" target="_blank"><img src="/images/f_logo06.jpg" alt="한국환경산업기술원" /></a></li>
                </ul>
            </div>
		</div>
	</div>
	<div class="ft_btm cont_center">
		<ul class="ft_menu">
			<li><a href="#">개인정보처리방침</a></li>
			<li><a href="#">경영방침</a></li>
			<li><a href="/html/sub0105.php">찾아오시는길</a></li>
		</ul>
		<ul class="info">
			<li>(사)한국환경협회</li>
			<li>대표 : 강성중</li>
			<li>사업자번호 : 497-82-00350</li>
			<li>주소 : 인천광역시 연수구 함박뫼로 78-1 2층</li>
			<li>전화번호 : 032-816-1280</li>
			<li>팩스 : 032-817-1280</li>
			<li>이메일 : kea128@naver.com</li>
		</ul>
		<p class="copyright">ⓒ 한국환경협회. All rights reserved. Hosting by <a href="http://www.ad-plus.kr/" target="_blank">AD communication.</a></p>
	</div>
</footer>
<div id="quick1" class="quick">

</div>

</div>
<!-- wrapper -->
<!-- wrapper -->
<script>
	<!--
        var visual = new Swiper('#visual',{
				autoplay: {
                  delay: 4500,
                  disableOnInteraction: false,
                },
				loop:true,
                pagination: {
                  el: ".swiper-pagination",
                  type: "fraction",
                },
			})
        
        
			var rt_slider = new Swiper('.ptn_slider',{
				autoplay:{},
				loop:true,
				slidesPerView:6,
                spaceBetween: 20,
			})
            
            $(function() {
                        $('ul.tab li').click(function() {
                            var activeTab = $(this).attr('data-tab');
                            $('ul.tab li').removeClass('current');
                            $('.tabcontent').removeClass('current');
                            $(this).addClass('current');
                            $('#' + activeTab).addClass('current');
                        })
                    });
    
            $(function() {
                        $('ul.tab2 li').hover(function() {
                            var activeTab = $(this).attr('data-tab');
                            $('ul.tab2 li').removeClass('current');
                            $('.tabcontent2').removeClass('current');
                            $(this).addClass('current');
                            $('#' + activeTab).addClass('current');
                        })
                    });


			$('.caution .btn_show').click(function(){
				$('.caution .cont').slideToggle();
				return false;
			})


			var gc_slider1 = new Swiper('.gc_slider1',{
				autoplay:{},
				loop:true,
				slidesPerView:4,
				navigation: {
	        nextEl: '.gc_next1',
	        prevEl: '.gc_prev1',
	      },

			})

			$(document).ready(function(){
				$('#btn_nav').click(function(){
					$('#wrapper').toggleClass('on')
				})
			})
	//-->
</script>
</body>
</html>
