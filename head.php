<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

run_event('pre_head');

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<div id="skip_to_container">
    <a href="#gnb">주메뉴 바로가기</a>
    <a href="#main">본문 바로가기</a>
</div>

<!-- 상단 시작 { -->
<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>


</div>

  <header>
  <div class="widget">
        <div class="js-sticky-widget">
          <div class="inner">
            <div id="logo">
              <a href="https://iammes.cafe24.com/gnuboard5/">Ktwon4u - 케이타운포유</a>
            </div>
            <div class="util">
               <button type="button" class="gnb_btn gnb_search_btn" title="검색">
              <span class="sound_only">검색</span>
              </button>
               <button type="button" class="gnb_btn gnb_cart_btn" title="장바구니">
              <span class="sound_only">장바구니</span>
              </button>
               
              <button type="button" class="gnb_btn gnb_mypage_btn" title="마이페이지">
                <span class="sound_only">마이페이지</span>
                <div class="myonly">
                  <?php if ($is_member) {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php" class="only-log log_mypage   ">마이페이지</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/logout.php" class="only-log log_mypage">로그아웃</a></li>
                <?php if ($is_admin) {  ?>
                <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>" class="only-log log_mypage">관리자</a></li>
                <?php }  ?>
                <?php } else {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
                <?php }  ?>
                </div>
                </button>
              
              <button type="button" class="gnb_btn gnb_menu_btn" title="전체메뉴">
                <span class="sound_only">전체메뉴열기</span>
              </button> 
                <script>
               $(function(){
                    $(".gnb_menu_btn").click(function(event){
                        event.stopPropagation(); // 이벤트 버블링 차단
                        $("#gnb_all, #gnb_all_bg").show();
                        $(".gnb_wrapper #gnb_all").addClass("on")
                    });
                    $(".gnb_close_btn, #gnb_all_bg").click(function(event){
                        event.stopPropagation(); // 이벤트 버블링 차단
                        $("#gnb_all, #gnb_all_bg").hide();
                        $(".gnb_wrapper #gnb_all").removeClass("on")
                    });

                    $(".gnb_search_btn").on("click", function(event){
                        event.stopPropagation(); // 이벤트 버블링 차단
                        $("#search_all").toggle();
                        $(this).toggleClass("close")
                    });

                  });
                </script>
            </div>

          <nav id="gnb">
        <h2>메인메뉴</h2>
        <div class="gnb_wrap">
            <ul id="gnb_1dul">
                <!-- <li class="gnb_1dli gnb_mnal"><button type="button" class="gnb_menu_btn" title="전체메뉴"><i class="fa fa-bars" aria-hidden="true"></i><span class="sound_only">전체메뉴열기</span></button></li> -->
                <?php
				$menu_datas = get_menu_db(0, true);
				$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                $i = 0;
                foreach( $menu_datas as $row ){
                    if( empty($row) ) continue;
                    $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
                ?>
                <li class="gnb_1dli <?php echo $add_class; ?>" style="z-index:<?php echo $gnb_zindex--; ?>">
                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                    <?php
                    $k = 0;
                    foreach( (array) $row['sub'] as $row2 ){

                        if( empty($row2) ) continue; 

                        if($k == 0)
                            echo '<span class="bg">하위분류</span><div class="gnb_2dul"><ul class="gnb_2dul_box">'.PHP_EOL;
                    ?>
                        <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li>
                    <?php
                    $k++;
                    }   //end foreach $row2

                    if($k > 0)
                        echo '</ul></div>'.PHP_EOL;
                    ?>
                </li>
                <?php
                $i++;
                }   //end foreach $row

                if ($i == 0) {  ?>
                    <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                <?php } ?>
            </ul>
        </div>
    </nav>
    
    <div class="gnb_wrapper">
    <div id="gnb_all" style="z-index: 9000;">
      <div class="inner">
                <h2 class="blind">전체메뉴</h2>
                <ul class="gnb_al_ul">
                    <?php
                    
                    $i = 0;
                    foreach( $menu_datas as $row ){
                    ?>
                    <li class="gnb_al_li">
                        <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_al_a"><?php echo $row['me_name'] ?></a>
                        <?php
                        $k = 0;
                        foreach( (array) $row['sub'] as $row2 ){
                            if($k == 0)
                                echo '<ul>'.PHP_EOL;
                        ?>
                            <li><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a></li>
                        <?php
                        $k++;
                        }   //end foreach $row2

                        if($k > 0)
                            echo '</ul>'.PHP_EOL;
                        ?>
                    </li>
                    <?php
                    $i++;
                    }   //end foreach $row

                    if ($i == 0) {  ?>
                        <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                    <?php } ?>
                </ul>
                <button type="button" class="gnb_nav_b gnb_search_btn"></button>
                <button type="button" class="gnb_nav_b gnb_cart_btn"></button>
                <a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php" class="only-log log_mypage   "> <button type="button" class="gnb_nav_b gnb_mypage_btn"></button></a>
               
                <button type="button" class="gnb_nav_b gnb_close_btn"></button>
                <script>
                  $(function (){
                    $(".gnb_al_li a").on("click",function(){
                      $(".gnb_al_li").addClass("on")
                    })
                    $(".gnb_al_li a").on("click",function(){
                      $(".gnb_al_li").removeClass("on")
                      $(this).parent().addClass("on")
                    })
                  })
                </script>
                </div>
              </div>
              <div id="gnb_all_bg"></div>
            <div id="search_all">
                    <div class="hd_sch_wr">
            <fieldset id="hd_sch">
                <legend>사이트 내 전체검색</legend>
                <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
                <input type="hidden" name="sfl" value="wr_subject||wr_content">
                <input type="hidden" name="sop" value="and">
                <label for="sch_stx" class="sound_only">검색어 필수</label>
                <input type="text" name="stx" id="sch_stx" maxlength="20" placeholder="검색어를 입력해주세요">
                <button type="submit" id="sch_submit" value="검색"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
                </form>

                <script>
                function fsearchbox_submit(f)
                {
                    var stx = f.stx.value.trim();
                    if (stx.length < 2) {
                        alert("검색어는 두글자 이상 입력하십시오.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
                    var cnt = 0;
                    for (var i = 0; i < stx.length; i++) {
                        if (stx.charAt(i) == ' ')
                            cnt++;
                    }

                    if (cnt > 1) {
                        alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }
                    f.stx.value = stx;

                    return true;
                }
                
                </script>
            </fieldset>
                
            <?php echo popular(); // 인기검색어, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정  ?>
        </div>
       </div>  
  </div>
  </div>
      </div>  
      </div>
    

   
 </header>
<!-- } 상단 끝 -->


<hr>


<div id="main">
<!-- 콘텐츠 시작 { -->
<?php if (!defined("_INDEX_")) { ?><h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2><?php }
