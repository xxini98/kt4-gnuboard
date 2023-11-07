<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>


<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->


<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>
</div>
<!-- } 하단 끝 -->


<div id="ft">
<section class="footer_first-wrap">
        <div class="ft_sec container">
          <div class="ff_box ft_cscenter">
            <h3 class="ff_bx-tit">고객문의 (CS Center)</h3>
            <a href="#" class="cs-talk">CS Talk</a>
            <p>
              <span class="cs_notice ft_talk-time">상담시간 09:00 ~ 17:00</span>
              <span class="cs_notice ft_talk-lunch"
                >점심시간 : 12:00 ~ 13:00</span
              >
              <span class="cs_notice ft_talk-holiday">연중무휴</span>
            </p>
          </div>
          <div class="ff_box ft_community">
            <h3 class="ff_bx-tit">COMMUNITY</h3>
            <ul class="ft_com-ul">
              <li class="ft_com-li">
                <a href="https://iammes.cafe24.com/gnuboard5/bbs/board.php?bo_table=notice">공지사항</a>
              </li>
              <li class="ft_com-li">
              <a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a>
              </li>
              <li class="ft_com-li">
                <a href="#">뉴스</a>
              </li>
              <li class="ft_com-li">
              <a href="<?php echo get_pretty_url('content', 'provision'); ?>">이용약관</a>
              </li>
              <li class="ft_com-li">
                <a href="#">케타포 코엑스 안내</a>
              </li>
              <li class="ft_com-li">
                <a href="#">1:1 문의</a>
              </li>
              <li class="ft_com-li">
                <a href="#">FAQ</a>
              </li>
              <li class="ft_com-li">
              <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
              </li>
            </ul>
          </div>
          <div class="ff_box ft_company">
            <h3 class="ff_bx-tit">제휴사</h3>
            <ul class="ft_company-ul">
              <li class="ft_company-li">
                <a
                  target="_blank"
                  href="https://www.cjlogistics.com/ko/tool/parcel/tracking"
                >
                  <i class="ft_company-icon ftc1"></i>
                  <span>대한통운</span>
                </a>
              </li>
              <li class="ft_company-li">
                <a
                  target="_blank"
                  href="https://www.hanjin.com/kor/CMS/DeliveryMgr/WaybillSch.do?mCode=MN038"
                >
                  <i class="ft_company-icon ftc2"></i>

                  <span>한진택배</span>
                </a>
              </li>
              <li class="ft_company-li">
                <a target="_blank" href="https://www.hanteochart.com/">
                  <i class="ft_company-icon ftc3"></i>

                  <span>HANTER CHART</span>
                </a>
              </li>
              <li class="ft_company-li">
                <a target="_blank" href="https://circlechart.kr/">
                  <i class="ft_company-icon ftc4"></i>

                  <span>CIRCLE CHART</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="footer_second-wrap">
        <div class="ft_sec container">
          <ul class="fi_sec-ul">
            <li class="ft_sec-li ft_sec-company">
              <strong>회사명</strong>
              <span>(주)케이타운포유</span>
            </li>
            <li class="ft_sec-li ft_sec-cpnum">
              <strong>사업자등록번호</strong>
              <span>120-87-71116</span>
            </li>
            <li class="ft_sec-li ft_sec-rep">
              <strong>대표</strong>
              <span>송효민</span>
            </li>
            <li class="ft_sec-li ft_sec-num">
              <strong>전화번호</strong>
              <span>02-552-9855</span>
            </li>
            <li class="ft_sec-li ft_sec-all">
              <strong>제휴문의</strong>
              <span>Ktown4u@ktown4u.com</span>
            </li>
            <li class="ft_sec-li ft_sec-sellnum">
              <strong>통신판매신고번호</strong>
              <span
                >제2011-서울강남-02223호
                <a href="#">[사업자정보확인]</a>
              </span>
            </li>
            <li class="ft_sec-li ft_sec-add">
              <strong>사무실 주소</strong>
              <span> 서울특별시 강남구 영동대로 513, 3층(삼성동, 코엑스)</span>
            </li>
            <li class="ft_sec-li ft_sec-dadd">
              <strong>물류센터 주소</strong>
              <span
                >인천광역시 북항로120번길 55, 9층 49번 도크, 청라로지스틱스센터
                케이타운포유 (22853)</span
              >
            </li>
            <li class="ft_sec-li ft_sec-copy">
              <span
                >Copyright ⓒ All rights reserved.
                <strong>KR.Ktown4u.com</strong></span
              >
            </li>
          </ul>
          <div class="ft_sec-sns">
            <ul class="ft_sns-ul">
              <li class="ft_sns ft-x">
                <a target="_blank" href="https://twitter.com/Ktown4u_main">
                  <i class="ft_sns-icon fts1"></i>
                </a>
              </li>
              <li class="ft_sns ft-you">
                <a
                  target="_blank"
                  href="https://www.youtube.com/channel/UCyt7xvgOZN5i2U4yUFHpr-A"
                >
                  <i class="ft_sns-icon fts2"></i>
                </a>
              </li>
              <li class="ft_sns ft-insta">
                <a target="_blank" href="https://www.instagram.com/ktown4u/">
                  <i class="ft_sns-icon fts3"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>


    <!-- <div id="ft_wr">
        <div id="ft_link" class="ft_cnt">
            <a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a>
            <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
            <a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a>
            <a href="<?php echo get_device_change_url(); ?>">모바일버전</a>
        </div> -->
        <!-- <div id="ft_company" class="ft_cnt">
        	<h2>사이트 정보</h2>
	        <p class="ft_info">
	        	회사명 : 회사명 / 대표 : 대표자명<br>
				주소  : OO도 OO시 OO구 OO동 123-45<br>
				사업자 등록번호  : 123-45-67890<br>
				전화 :  02-123-4567  팩스  : 02-123-4568<br>
				통신판매업신고번호 :  제 OO구 - 123호<br>
				개인정보관리책임자 :  정보책임자명<br>
			</p>
	    </div>


    </div>
    <!-- <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div> -->
    <!-- <div id="ft_copy">Copyright &copy; <b>소유하신 도메인.</b> All rights reserved.</div> -->



    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
      let mybutton = document.getElementById("top_btn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 1500) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


    });
    </script>
</div>

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");
