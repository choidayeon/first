<?php if (!defined('_INDEX_')) { ?>
	</div>
</div>
<?php } ?>
	<!--contents-->
	<!--footer-->
	<footer id="footer">
		<a class="ft_top" href="tel:1661-8960">
			<h2>고객센터</h2>
			<p class="tel">1661-8960</p>
			<p class="time">상담시간 : 0시 ~ 24시</p>
		</a>
		<a href="#" class="ft_mid">
			<span>카카오톡 상담</span>
		</a>
		<div class="ft_btm">
			<ul class="sns">
				<li><a href="#" target="_blank"><img src="images/sns1.gif" alt="페이스북" /></a></li>
				<li><a href="#" target="_blank"><img src="images/sns2.gif" alt="유튜브" /></a></li>
				<li><a href="#" target="_blank"><img src="images/sns3.gif" alt="트위터" /></a></li>
			</ul>
			<ul class="ft_menu">
				<li><a href="#">사업자정보확인</a></li>
				<li><a href="#">이용약관</a></li>
				<li><a href="#">이용안내</a></li>
			</ul>
			<ul class="info">
				<li>상호 : 365티켓</li>
				<li>사업자번호 : 123-45-67890</li>
			  <li>대표 : 홍길동</li>
				<li>주소 : 인천광역시 남동구 구월동 123-4 365빌딩 1층</li>
				<li>대표번호 : 070-000-0000</li>
			</ul>
			<p class="copyright">
				Copyright ⓒ 365티켓. All rights reserved.<br />Hosting by <a href="http://www.ad-plus.kr/" target="_blank">AD COMMUNICATION.</a></p>
		</div>
	</footer>
	<!--footer-->
</div>
<!-- wrapper -->
<script>
	<!--

	$(document).ready(function(){
		$('#btn_nav').click(function(){
			$('#wrapper').toggleClass('on');
			return false;
		})
	})

			var rt_slider = new Swiper('.rt_slider',{
				autoplay:{},
				loop:true,
				slidesPerView:6,
				direction:'vertical'
			})

			var hd_btm = new Swiper('.hd_btm',{
				autoplay:{
					delay: 0,
				},
				speed: 3000,
				loop:true,
      	freeMode: true,
				simulateTouch:false,
				allowTouchMove:false,

			})


			$('.caution .btn_show').click(function(){
				$('.caution .cont').slideToggle();
				return false;
			})

			$( "#tabs" ).tabs({
				activate : function(event,ui){}

			});
			$( "#tabs" ).on( "tabsactivate", function( event, ui ) {

							var gc_slider1 = new Swiper('.gc_slider1',{
								autoplay:{},
								loop:true,
								slidesPerView:1.5,
								navigation: {
					        nextEl: '.gc_next1',
					        prevEl: '.gc_prev1',
					      },
					      centeredSlides:true,

							})
							var gc_slider2 = new Swiper('.gc_slider2',{
								autoplay:{},
								loop:true,
								slidesPerView:1.5,
								navigation: {
					        nextEl: '.gc_next2',
					        prevEl: '.gc_prev2',
					      },
					      centeredSlides:true,

							})
							var gc_slider3 = new Swiper('.gc_slider3',{
								autoplay:{},
								loop:true,
								slidesPerView:1.5,
								navigation: {
					        nextEl: '.gc_next3',
					        prevEl: '.gc_prev3',
					      },
					      centeredSlides:true,

							})
			});


			var gc_slider1 = new Swiper('.gc_slider1',{
				autoplay:{},
				loop:true,
				slidesPerView:1.5,
				navigation: {
	        nextEl: '.gc_next1',
	        prevEl: '.gc_prev1',
	      },
	      centeredSlides:true,

			})
	//-->
</script>
</body>
</html>
