<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if(defined('G5_THEME_PATH')) {
//     require_once(G5_THEME_PATH.'/index.php');
//     return;
// }

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>
        <div class="wrap">
          <!-- CD 슬라이드 -->
          <section class="main-wrapper">
            <div class="mianslide">
              <h2 class="blind">EVENT</h2>
              <div class="container is-slider">
                <div class="slider_wrap">
                  <div class="slider_left">
                    <div class="swiper is-content">
                      <div class="swiper-wrapper is-content">
                        <div class="swiper-slide is-content">
                          <div class="slider_info-top s1">
                            <p class="slider_tagline">EVENT</p>
                            <div class="slider-title">
                              <p class="slider-title-text-artist">NEW JEANS</p>
                              <p class="slider-title-text-nth">
                                2nd Mini Album :
                              </p>
                              <p class="slider-title-text-albumtit">Get Up</p>
                            </div>
                          </div>
                          <div class="slider_info-middle s1">
                            <p class="slider_info-text">
                              예약 판매 기간 내 구매시 <br />
                              홀로그램 포토카드 특전 증정
                            </p>
                          </div>
                          <div class="slider_info-bottom s1">
                            <a href="https://iammes.cafe24.com/gnuboard5/item_view.php">READ MORE</a>
                          </div>
                        </div>
                        <div class="swiper-slide is-content">
                          <div class="slider_info-top s2">
                            <p class="slider_tagline">EVENT</p>
                            <div class="slider-title">
                              <p class="slider-title-text-artist">NCT 2023</p>
                              <p class="slider-title-text-nth">4th Album :</p>
                              <p class="slider-title-text-albumtit">
                                Golden Age
                              </p>
                            </div>
                          </div>
                          <div class="slider_info-middle s2">
                            <p class="slider_info-text">
                              발매 기념 <br />
                              럭키드로우 이벤트 안내
                            </p>
                          </div>
                          <div class="slider_info-bottom s2">
                          <a href="https://iammes.cafe24.com/gnuboard5/item_view.php">READ MORE</a>
                          </div>
                        </div>
                        <div class="swiper-slide is-content">
                          <div class="slider_info-top s3">
                            <p class="slider_tagline">EVENT</p>
                            <div class="slider-title">
                              <p class="slider-title-text-artist">STAYC</p>
                              <p class="slider-title-text-nth">
                                3rd Mini Album :
                              </p>
                              <p class="slider-title-text-albumtit">
                                TEENFRESH
                              </p>
                            </div>
                          </div>
                          <div class="slider_info-middle s3">
                            <p class="slider_info-text">
                              온라인 럭키드로우 이벤트 안내 <br />
                              케타포 럭키드로우 포토카드 증정
                            </p>
                          </div>
                          <div class="slider_info-bottom s3">
                          <a href="https://iammes.cafe24.com/gnuboard5/item_view.php">READ MORE</a>
                          </div>
                        </div>
                        <div class="swiper-slide is-content">
                          <div class="slider_info-top s4">
                            <p class="slider_tagline">EVENT</p>
                            <div class="slider-title">
                              <p class="slider-title-text-artist">RIIZE</p>
                              <p class="slider-title-text-nth">
                                1st Single Album :
                              </p>
                              <p class="slider-title-text-albumtit">
                                Get a Guitar
                              </p>
                            </div>
                          </div>
                          <div class="slider_info-middle s4">
                            <p class="slider_info-text">
                              예약 판매 기간 내 구매시 <br />
                              미공개 포토카드 특전 증정
                            </p>
                          </div>
                          <div class="slider_info-bottom s4">
                          <a href="https://iammes.cafe24.com/gnuboard5/item_view.php">READ MORE</a>
                          </div>
                        </div>
                        <div class="swiper-slide is-content">
                          <div class="slider_info-top s5">
                            <p class="slider_tagline">EVENT</p>
                            <div class="slider-title">
                              <p class="slider-title-text-artist">TREASURE</p>
                              <p class="slider-title-text-nth">
                                3rd ANNIVERSARY
                              </p>
                              <p class="slider-title-text-albumtit">MAGAZINE</p>
                            </div>
                          </div>
                          <div class="slider_info-middle s5">
                            <p class="slider_info-text">
                              케타포 단독 포토카드<br />
                              10종 중 1종 랜덤 증정 (1:1)
                            </p>
                          </div>
                          <div class="slider_info-bottom s5">
                          <a href="https://iammes.cafe24.com/gnuboard5/item_view.php">READ MORE</a>
                          </div>
                        </div>
                        <div class="swiper-slide is-content">
                          <div class="slider_info-top s6">
                            <p class="slider_tagline">EVENT</p>
                            <div class="slider-title">
                              <p class="slider-title-text-artist">JISOO</p>
                              <p class="slider-title-text-nth">PHOTOBOOK</p>
                              <p class="slider-title-text-albumtit">[ME]</p>
                            </div>
                          </div>
                          <div class="slider_info-middle s6">
                            <p class="slider_info-text">
                              케타포 단독 포토카드 <br />
                              2종 중 1종 랜덤 증정 (1:1)
                            </p>
                          </div>
                          <div class="slider_info-bottom s6">
                          <a href="https://iammes.cafe24.com/gnuboard5/item_view.php">READ MORE</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-arrow-main">
                      <div class="swiper-arrows">
                        <div class="swiper-main-prev"></div>
                        <div class="swiper-main-next"></div>
                      </div>
                    </div>

                    <!-- <div class="swiper-pagination"></div> -->
                  </div>
                  <div class="slider_right">
                    <div class="swiper is-photo is-round">
                      <div class="swiper-wrapper is-photo">
                        <div class="swiper-slide is-photo">
                          <div class="slide-img">
                            <div class="slide-edge"></div>
                            <div class="slide-img-box">
                              <img
                                src="./images/main/MainSlide_NEWJEANS_MAIN.jpg"
                                alt="NEWJEANS 2nd Mini Album Get Up"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide is-photo">
                          <div class="slide-img">
                            <div class="slide-edge"></div>
                            <div class="slide-img-box">
                              <img
                                src="./images/main/MainSlide_NCT2023.jpg"
                                alt="NEWJEANS 2nd Mini Album Get Up"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide is-photo">
                          <div class="slide-img">
                            <div class="slide-edge"></div>
                            <div class="slide-img-box">
                              <img
                                src="./images/main/MainSlide_stayc_teenfresh.jpg"
                                alt="NEWJEANS 2nd Mini Album Get Up"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide is-photo">
                          <div class="slide-img">
                            <div class="slide-edge"></div>
                            <div class="slide-img-box">
                              <img
                                src="./images/main/MainSlide_riize_.jpg"
                                alt="NEWJEANS 2nd Mini Album Get Up"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide is-photo">
                          <div class="slide-img">
                            <div class="slide-edge"></div>
                            <div class="slide-img-box">
                              <img
                                src="./images/main/MainSlide_TRESAURE.jpg"
                                alt="NEWJEANS 2nd Mini Album Get Up"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide is-photo">
                          <div class="slide-img">
                            <div class="slide-edge"></div>
                            <div class="slide-img-box">
                              <img
                                src="./images/main/MainSlide_JISOO.jpg"
                                alt="NEWJEANS 2nd Mini Album Get Up"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- EVENT TAB -->
          <section class="eventTab-warp ev-g container">
            <h2 class="blind">EVENT</h2>
            <div class="evenTab evt1">
              <div class="eventcontent">
                <a href="https://iammes.cafe24.com/gnuboard5/bbs/board.php?bo_table=gallery&wr_id=13">
                  <img
                    src="./images/main/EVENT_STAYC.jpg"
                    alt="STAYC TEENFRESH 컴백 기념 특전 증정"
                  />
                  <div class="eventcontent-txt">
                    <h2>STAYC</h2>
                    <span
                      >3rd Mini Album [TEENFRESH] <br />
                      컴백 기념 특전 증정</span
                    >
                    <!-- <button>바로가기</button> -->
                  </div>
                </a>
              </div>
            </div>
            <div class="evenTab evt2">
              <div class="eventcontent">
              <a href="https://iammes.cafe24.com/gnuboard5/bbs/board.php?bo_table=gallery">
                  <img
                    src="./images/main/EVENT_NCTDREAM.jpg"
                    alt="NCTDREAM ISTJ 온라인 럭키드로우 포토카드 증정"
                  />
                  <div class="eventcontent-txt">
                    <h2>NCT DREAM</h2>
                    <span
                      >3rd Album [ISTJ] <br />
                      온라인 럭키드로우 포토카드 증정</span
                    >
                    <!-- <button>바로가기</button> -->
                  </div>
                </a>
              </div>
            </div>
            <div class="evenTab evt3">
              <div class="eventcontent">
              <a href="https://iammes.cafe24.com/gnuboard5/bbs/board.php?bo_table=gallery">
                  <img
                    src="./images/main/EVENT_SEJUNG.jpg"
                    alt="STAYC TEENFRESH 컴백 기념 특전 증정"
                  />
                  <div class="eventcontent-txt">
                    <h2>KIM SEJEONG</h2>
                    <span
                      >1st Album [문(門)] <br />
                      대면/영상통화 사인회 & 특전 증정</span
                    >
                    <!-- <button>바로가기</button> -->
                  </div>
                </a>
              </div>
            </div>
            <div class="evenTab evt4">
              <div class="eventcontent">
              <a href="https://iammes.cafe24.com/gnuboard5/bbs/board.php?bo_table=gallery">
                  <img
                    src="./images/main/EVENT_V.jpg"
                    alt="STAYC TEENFRESH 컴백 기념 특전 증정"
                  />
                  <div class="eventcontent-txt">
                    <h2>V</h2>
                    <span
                      >1st Solo Album [Layover] <br />
                      예약판매 특전 증정</span
                    >
                    <!-- <button>바로가기</button> -->
                  </div>
                </a>
              </div>
            </div>
          </section>
          <!-- PREORDER TAB -->
          <section class="preorder">
            <div class="preorder-wrap container">
              <div class="preorder-left">
                <div class="swiper is-pretxt">
                  <div class="slider-wrapper is-pretxt">
                    <div class="swiper-slide is-pretxt">
                      <div class="slider_pre-top pt1">
                        <p class="slider_tag">프리오더</p>
                        <h2 class="slider-pre-tit">PRE-ORDER</h2>
                      </div>
                      <div class="slider_pre-middle pt2">
                        <p class="slider_pre-info">
                          Ktown4u와 함께 다양한 상품을 미리 만나보세요!
                        </p>
                      </div>
                      <div class="slider_pre-bottom"></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-arrow-wrap">
                  <div class="swiper-arrow-prev">
                    <div class="swiper-pre-prev"></div>
                  </div>
                  <div class="swiper-arrow-next">
                    <div class="swiper-pre-next"></div>
                  </div>
                </div>
              </div>
              <div class="preorder-right">
                <div class="swiper is-preimg">
                  <div class="swiper-wrapper is-preimg">
                    <div class="swiper-slide is-preimg">
                      <a href="javascript:void(0)" class="prebx-wrap">
                        <div class="prebx-capsule">
                          <div class="prebx-capsule-img">
                            <img
                              src="./images/main/PREORDER_1NCT2023.jpg"
                              alt="19% [예약] [케타포 Special Gift] NCT 2023 - Golden Age (랜덤버전) 19300원"
                            />
                          </div>
                          <div class="prebx-capsule-text">
                            <span class="capsule-sale">19%</span>
                            <span class="capsule-title"
                              >[예약] [케타포 Special Gift] <br />
                              NCT 2023 - Golden Age (랜덤버전)</span
                            >
                            <div class="capsule-price">
                              <span class="capsule-price-nego">19,300원</span>
                              <span class="capsule-price-net">23,800원</span>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="swiper-slide is-preimg">
                      <a href="javascript:void(0)" class="prebx-wrap">
                        <div class="prebx-capsule">
                          <div class="prebx-capsule-img">
                            <img
                              src="./images/main/PREORDER_2riize.jpg"
                              alt="19% [예약] 라이즈(RIIZE) - Get A Guitar (랜덤버전) 14,900원"
                            />
                          </div>
                          <div class="prebx-capsule-text">
                            <span class="capsule-sale">19%</span>
                            <span class="capsule-title"
                              >[예약] 라이즈(RIIZE) - <br />
                              Get A Guitar (랜덤버전)</span
                            >
                            <div class="capsule-price">
                              <span class="capsule-price-nego">14,900원</span>
                              <span class="capsule-price-net">18,500원</span>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="swiper-slide is-preimg">
                      <a href="javascript:void(0)" class="prebx-wrap">
                        <div class="prebx-capsule">
                          <div class="prebx-capsule-img">
                            <img
                              src="./images/main/PREORDER_3somi.jpg"
                              alt="19% [예약] 전소미(JEON SOMI) - GAME PLAN (랜덤버전) 19300원"
                            />
                          </div>
                          <div class="prebx-capsule-text">
                            <span class="capsule-sale">19%</span>
                            <span class="capsule-title"
                              >[예약] 전소미(JEON SOMI) - <br />
                              GAME PLAN (랜덤버전)</span
                            >
                            <div class="capsule-price">
                              <span class="capsule-price-nego">19,300원</span>
                              <span class="capsule-price-net">23,800원</span>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="swiper-slide is-preimg">
                      <a href="javascript:void(0)" class="prebx-wrap">
                        <div class="prebx-capsule">
                          <div class="prebx-capsule-img">
                            <img
                              src="./images/main/PREORDER_4everglow.png"
                              alt="19% [예약] [영상통화 사인이벤트] 에버글로우(EVERGLOW) - ALL MY GIRLS 28,200원"
                            />
                          </div>
                          <div class="prebx-capsule-text">
                            <span class="capsule-sale">19%</span>
                            <span class="capsule-title"
                              >[예약] [영상통화 사인이벤트] <br />
                              에버글로우 (EVERGLOW) - 싱글앨범 4집 [ALL MY
                              GIRLS] (랜덤버전)</span
                            >
                            <div class="capsule-price">
                              <span class="capsule-price-nego">28,200원</span>
                              <span class="capsule-price-net">34,800원</span>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="swiper-slide is-preimg">
                      <a href="javascript:void(0)" class="prebx-wrap">
                        <div class="prebx-capsule">
                          <div class="prebx-capsule-img">
                            <img
                              src="./images/main/PREORDER_5V2.png"
                              alt="19%[예약] [케타포 Special Gift] V - Layover (랜덤버전) 19300원"
                            />
                          </div>
                          <div class="prebx-capsule-text">
                            <span class="capsule-sale">19%</span>
                            <span class="capsule-title"
                              >[예약] [케타포 Special Gift] <br />
                              V - Layover (랜덤버전)</span
                            >
                            <div class="capsule-price">
                              <span class="capsule-price-nego">19,300원</span>
                              <span class="capsule-price-net">23,800원</span>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="swiper-slide is-preimg">
                      <a href="javascript:void(0)" class="prebx-wrap">
                        <div class="prebx-capsule">
                          <div class="prebx-capsule-img">
                            <img
                              src="./images/main/PREORDER_6seventeen.jpg"
                              alt="19% [예약] [재발매] 세븐틴(SEVENTEEN) - YOU MAKE MY DAY 17100원"
                            />
                          </div>
                          <div class="prebx-capsule-text">
                            <span class="capsule-sale">19%</span>
                            <span class="capsule-title"
                              >[예약] [재발매] 세븐틴(SEVENTEEN) - <br />
                              YOU MAKE MY DAY
                            </span>
                            <div class="capsule-price">
                              <span class="capsule-price-nego">17,100원</span>
                              <span class="capsule-price-net">21,100원</span>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-scrollbar is-preorder"></div>
            </div>
          </section>
          <!-- 광고 (PC, TAB, MOB) -->
          <div class="ad_kt4">
            <a href="#">
              <div class="ad_kt4_img container">
                <img
                  src="./images/main/OFFICIAL_LIGHT_STICK.png"
                  class="desktop_img"
                  alt="OFFICIAL LIGHT STICK Ktown4u에서만 만날 수 있는 응원봉!"
                />
                <img
                  src="./images/main/OFFICIAL_LIGHT_STICK_1024.png"
                  class="tablet_img"
                  alt="OFFICIAL LIGHT STICK Ktown4u에서만 만날 수 있는 응원봉!"
                />
                <img
                  src="./images/main/OFFICIAL_LIGHT_STICK_768.png"
                  class="mobile_img"
                  alt="OFFICIAL LIGHT STICK Ktown4u에서만 만날 수 있는 응원봉!"
                />
                <img
                  src="./images/main/OFFICIAL_LIGHT_STICK_428.png"
                  class="mobile_img2"
                  alt="OFFICIAL LIGHT STICK Ktown4u에서만 만날 수 있는 응원봉!"
                />
              </div>
            </a>
          </div>
          <!-- 신상품  -->
          <section class="new_life new container">
            <div class="new_life-wrap">
              <div class="new_life-header">
                <span class="new_life-header_tagline">NEW RELEASE</span>
                <h2 class="new_life-header_tagtit">신상품</h2>
                <div class="new_life-header_taginfo">
                  <span class="new_life-header-info1"
                    >Ktown4u에서 새롭게 만나볼 수 있는 신상품들을 소개합니다!
                  </span>
                </div>
              </div>
              <ul class="new_life_middle">
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/NEW_6PLAVE.png"
                          alt="PLAVE - 1st Mini Album [ASTERUM : The Shape of Things to Come]"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          PLAVE - 1st Mini Album [ASTERUM : The Shape of Things
                          to Come]
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day"> 2023-08-24</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">17,800원</span>
                          <span class="nl_text-cost">22,000원</span>
                          <span class="nl_text-dis">19%</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/NEW_2VANNER.jpg"
                          alt="[대면 사인이벤트] 배너 (VANNER) - 미니앨범 1집 [VENI VIDI VICI] (랜덤버전)"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          [대면 사인이벤트] 배너 (VANNER) - 미니앨범 1집 [VENI
                          VIDI VICI] (랜덤버전)
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-08-21</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">15,600원</span>
                          <span class="nl_text-cost">19,300원</span>
                          <span class="nl_text-dis">19%</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/NEW_5JIHYO.jpg"
                          alt="지효 (JIHYO) - 미니앨범 1집 [ZONE] (Digipack Ver.)"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          지효 (JIHYO) - 미니앨범 1집 [ZONE] (Digipack Ver.)
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-08-18</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">12,600원</span>
                          <span class="nl_text-cost">15,600원</span>
                          <span class="nl_text-dis">19%</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/NEW_1STAYC.jpg"
                          alt="스테이씨 (STAYC) - 미니앨범 3집 [TEENFRESH] (Platform Ver.)"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          스테이씨 (STAYC) - 미니앨범 3집 [TEENFRESH] (Platform
                          Ver.)
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-08-16</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">12,600원</span>
                          <span class="nl_text-cost">15,600원</span>
                          <span class="nl_text-dis">19%</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/NEW_9JOYUTI.jpg"
                          alt="조유리 (JO YU RI) - [LOVE ALL]"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          [2CD 세트상품] 조유리 (Jo YuRi) - Jo YuRi - 미니앨범
                          2집 [LOVE ALL] (PULL Ver. + PUSH Ver.)
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-08-09</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">35,600원</span>
                          <span class="nl_text-cost">44,000원</span>
                          <span class="nl_text-dis">19%</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/NEW_10UKNOW.png"
                          alt="유노윤호 (U-KNOW) - [Reality Show]"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          [특전 포토카드 증정] 유노윤호 (U-KNOW) - 미니앨범 3집
                          [Reality Show] (Script Ver.)
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-08-07</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">16,300원</span>
                          <span class="nl_text-cost">20,100원</span>
                          <span class="nl_text-dis">19%</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/NEW_12SOMI.jpg"
                          alt="[2CD 세트상품] 전소미 (JEON SOMI) - EP ALBUM [GAME PLAN]
                        (PHOTOBOOK Ver.) (RED ver. + BLACK ver.)"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          [2CD 세트상품] 전소미 (JEON SOMI) - EP ALBUM [GAME
                          PLAN] (PHOTOBOOK Ver.) (RED ver. + BLACK ver.)
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-08-07</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">16,800원</span>
                          <span class="nl_text-cost">20,700원</span>
                          <span class="nl_text-dis">19%</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/NEW_8THEBOYZ.png"
                          alt="더보이즈 (THE BOYZ) - 정규앨범 2집 [[PHANTASY] Pt.1 Christmas In August] (PLATFORM ver) (Glitter ver.)"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          더보이즈 (THE BOYZ) - 정규앨범 2집 [[PHANTASY] Pt.1
                          Christmas In August] (PLATFORM ver) (Glitter ver.)
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-08-07</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">17,800원</span>
                          <span class="nl_text-cost">22,000원</span>
                          <span class="nl_text-dis">19%</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/NEW_11BG.jpg"
                          alt="브브걸 (BBGIRLS) - 더블 싱글앨범 [ONE MORE TIME] (PLVE)"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          브브걸 (BBGIRLS) - 더블 싱글앨범 [ONE MORE TIME]
                          (PLVE)
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-08-03</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">12,600원</span>
                          <span class="nl_text-cost">15,600원</span>
                          <span class="nl_text-dis">19%</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/NEW_7MAMAMOO++.jpg"
                          alt="마마무+ (MAMAMOO+) - 미니앨범 1집 [TWO RABBITS]"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          마마무+ (MAMAMOO+) - 미니앨범 1집 [TWO RABBITS]
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-08-03</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">17,800원</span>
                          <span class="nl_text-cost">22,000원</span>
                          <span class="nl_text-dis">19%</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/NEW_4KWON_EUN_BI.jpg"
                          alt="권은비 (KWON EUN BI) - 싱글앨범 1집 [The Flash]"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          권은비 (KWON EUN BI) - 싱글앨범 1집 [The Flash]
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-08-02</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">13,400원</span>
                          <span class="nl_text-cost">16,500원</span>
                          <span class="nl_text-dis">19%</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/NEW_3BAND_NAH.png"
                          alt="나상현씨밴드 (Band Nah) - [축제]"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          [특전 포토카드 증정] 나상현씨밴드 (Band Nah) - [축제]
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-07-31</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">16,800원</span>
                          <span class="nl_text-cost">20,700원</span>
                          <span class="nl_text-dis">19%</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
              <a href="javascript:void(0)" class="new_life-_header-info2"
                >더보기</a
              >
            </div>
          </section>
          <!-- LIFE STYLE -->
          <section class="new_life life container">
            <div class="new_life-wrap">
              <div class="new_life-header">
                <span class="new_life-header_tagline">K - STYLE</span>
                <h2 class="new_life-header_tagtit">라이프 스타일</h2>
                <div class="new_life-header_taginfo">
                  <span class="new_life-header-info1"
                    >Ktown4u에서 준비하고 만나보는 라이프 스타일!
                  </span>
                  <a href="javascript:void(0)" class="new_life-_header-info2"
                    >더보기</a
                  >
                </div>
              </div>
              <ul class="new_life_middle">
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/LIFE_ivoryT.png"
                          alt="[뱀뱀X이륙] 반팔티셔츠_베이지_L "
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          [뱀뱀X이륙] 반팔티셔츠_베이지_L
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-08-05</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">52,000원</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/LIFE_blackT.png"
                          alt="케이타운포유 베이직 3단 우산 (색상 랜덤) "
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          [뱀뱀X이륙] 반팔티셔츠_블랙_L
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-08-05</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">52,000원</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/LIFE_hat-dip.png"
                          alt="[뱀뱀X이륙] 캡모자_딥블루"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          [뱀뱀X이륙] 캡모자_딥블루
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-08-05</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">52,000원</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/LIFE_hat-blue.png"
                          alt="[뱀뱀X이륙] 캡모자_페일블루"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          [뱀뱀X이륙] 캡모자_페일블루
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-08-05</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">52,000원</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/LIFE_umbrella.jpg"
                          alt="케이타운포유 베이직 3단 우산 (색상 랜덤) "
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          [당일배송] 케이타운포유 베이직 3단 우산 (색상 랜덤)
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-08-25</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">9,900원</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/LIFE_TONEUP.jpg"
                          alt="[폴라로이드 사진 5매 증정] 올인원 톤업크림 4종"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          [폴라로이드 사진 5매 증정] 올인원 톤업크림 4종
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-08-14</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">16,280원</span>
                          <span class="nl_text-cost">22,000원</span>
                          <span class="nl_text-dis">26%</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/LIFE_aqua.jpg"
                          alt=" [특전 포토카드 증정] 온그리디언츠 아쿠아 차징 에센스"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          [특전 포토카드 증정] 온그리디언츠 아쿠아 차징 에센스
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-08-01</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">32,000원</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/LIFE_cleanball.jpg"
                          alt="[특전 포토카드 증정] 온그리디언츠 김바덕 제주 시카 클렌징 볼"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          [특전 포토카드 증정] 온그리디언츠 김바덕 제주 시카
                          클렌징 볼
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-08-01</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">18,000원</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/LIFE_round.jpg"
                          alt="케타포 베이직 라운드티셔츠 [White] (4sizes)"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          케타포 베이직 라운드티셔츠 [White] (4sizes)
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-07-03</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">14,900원</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/LIFE_polo.jpg"
                          alt="케타포 베이직 폴로티셔츠 [Black] (4sizes)"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          케타포 베이직 폴로티셔츠 [Black] (4sizes)
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-07-03</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">19,900원</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/LIFE_OREO_P.jpg"
                          alt="오레오 x 블랙핑크 초코맛 핑크버전 800g*1EA"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          오레오 x 블랙핑크 초코맛 핑크버전 800g*1EA
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-02-08</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">22,500원</span>
                          <span class="nl_text-cost">25,000원</span>
                          <span class="nl_text-dis">10%</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="new_life_middle-infomation">
                  <a href="javascript:void(0)" class="new_life_middle-info">
                    <div class="nl-info nm1">
                      <div class="nl-img">
                        <img
                          src="./images/main/LIFE_OREO_B.jpg"
                          alt="오레오 x 블랙핑크 딸기맛 블랙버전 800g*1EA"
                        />
                      </div>
                      <div class="nl_text">
                        <strong class="nl_text-title">
                          오레오 x 블랙핑크 딸기맛 블랙버전 800g*1EA
                        </strong>
                        <p class="nl_text-release">
                          <span class="nl-data">발매일 :</span>
                          <span class="nl-day">2023-02-08</span>
                        </p>
                        <p class="nl_text-price">
                          <span class="nl_text-sale">22,500원</span>
                          <span class="nl_text-cost">25,000원</span>
                          <span class="nl_text-dis">10%</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </section>
          <!-- 실시간 차트 -->
          <section class="ktown4u_chart">
            <div class="chart-wrap container">
              <div class="chart-left">
                <h2 class="chart_tit">Ktown4u 실시간 차트</h2>
              </div>
              <div class="chart-right">
                <ul class="chart_1-3-wrap">
                  <li class="chart_1-3 ch1">
                    <div class="chart_capsule">
                      <a href="javascript:void(0)" class="chart_capsule-wrap">
                        <div class="chartbx_capsule">
                          <div class="chartbx_capsule-img">
                            <img
                              src="./images/main/CHART_1LE'V.jpg"
                              alt="레비 (LE'V) - 1st EP Album [A.I.BAE] (POCAALBUM)"
                            />
                          </div>
                          <div class="chartbx_capsule-text">
                            <span class="chartbx_capsule-artist cca1"
                              >Le'v</span
                            >
                            <span class="chartbx_capsule-albumtitle"
                              >레비 (LE'V) - 1st EP Album <br />
                              [A.I.BAE] (POCAALBUM)</span
                            >
                            <span class="chartbx_capsule-release">
                              Release Date : <br />2023-08-18
                            </span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li class="chart_1-3 ch2">
                    <div class="chart_capsule">
                      <a href="javascript:void(0)" class="chart_capsule-wrap">
                        <div class="chartbx_capsule">
                          <div class="chartbx_capsule-img">
                            <img
                              src="./images/main/CHART_2JIHYO.jpg"
                              alt="지효 (JIHYO) - 미니앨범 1집 [ZONE]"
                            />
                          </div>
                          <div class="chartbx_capsule-text">
                            <span class="chartbx_capsule-artist cca2"
                              >JIHYO</span
                            >
                            <span class="chartbx_capsule-albumtitle"
                              >지효 (JIHYO) <br />
                              - 미니앨범 1집 [ZONE]</span
                            >
                            <span class="chartbx_capsule-release">
                              Release Date : <br />2023-08-18
                            </span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li class="chart_1-3 ch3">
                    <div class="chart_capsule">
                      <a href="javascript:void(0)" class="chart_capsule-wrap">
                        <div class="chartbx_capsule">
                          <div class="chartbx_capsule-img">
                            <img
                              src="./images/main/CHART_3V(WEVERS).jpg"
                              alt="V - [Layover] (Weverse Albums ver.)"
                            />
                          </div>
                          <div class="chartbx_capsule-text">
                            <span class="chartbx_capsule-artist cca3">V</span>
                            <span class="chartbx_capsule-albumtitle"
                              >V - [Layover] <br />
                              (Weverse Albums ver.)</span
                            >
                            <span class="chartbx_capsule-release">
                              Release Date : <br />2023-09-08
                            </span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                </ul>
                <ul class="chart_4-add-wrap">
                  <li class="chart_4-add ch4">
                    <a href="javascript:void(0)" class="chart_4-add-text">
                      <span class="chart_4-add-rank">4</span>
                      <div class="chart_4-add-images-wrap">
                        <div class="chart_4-add-images">
                          <img
                            src="./images/main/CHART_4NCT2023.jpg"
                            alt="NCT 2023 - 정규앨범 4집 [Golden Age] (Archiving Ver.)"
                          />
                        </div>
                      </div>
                      <div class="chart_4-add-contents">
                        <span class="chart_4-add-artist">NCT2023</span>
                        <span class="chart_4-add-album"
                          >NCT 2023 - 정규앨범 4집 [Golden Age] (Archiving
                          Ver.)</span
                        >
                        <span class="chart_4-add-release"
                          >Release Date : 2023-08-28</span
                        >
                      </div>
                    </a>
                  </li>
                  <li class="chart_4-add ch5">
                    <a href="javascript:void(0)" class="chart_4-add-text">
                      <span class="chart_4-add-rank">5</span>
                      <div class="chart_4-add-images-wrap">
                        <div class="chart_4-add-images">
                          <img
                            src="./images/main/CHART_5V.jpg"
                            alt="V - [Layover]"
                          />
                        </div>
                      </div>
                      <div class="chart_4-add-contents">
                        <span class="chart_4-add-artist">V</span>
                        <span class="chart_4-add-album">V - [Layover]</span>
                        <span class="chart_4-add-release"
                          >Release Date : 2023-09-08</span
                        >
                      </div>
                    </a>
                  </li>
                  <li class="chart_4-add ch6">
                    <a href="javascript:void(0)" class="chart_4-add-text">
                      <span class="chart_4-add-rank">6</span>
                      <div class="chart_4-add-images-wrap">
                        <div class="chart_4-add-images">
                          <img
                            src="./images/main/CHART_6NCT2023.jpg"
                            alt="NCT 2023 - 정규앨범 4집 [Golden Age] (Collecting Ver.)"
                          />
                        </div>
                      </div>
                      <div class="chart_4-add-contents">
                        <span class="chart_4-add-artist">NCT2023</span>
                        <span class="chart_4-add-album"
                          >NCT 2023 - 정규앨범 4집 [Golden Age] (Collecting
                          Ver.)</span
                        >
                        <span class="chart_4-add-release"
                          >Release Date : 2023-08-28</span
                        >
                      </div>
                    </a>
                  </li>
                  <li class="chart_4-add ch7">
                    <a href="javascript:void(0)" class="chart_4-add-text">
                      <span class="chart_4-add-rank">7</span>
                      <div class="chart_4-add-images-wrap">
                        <div class="chart_4-add-images">
                          <img
                            src="./images/main/CHART_7Wei.png"
                            alt="위아이 (WEi) - 미니앨범 6집 [Love Pt.3 : Eternally]"
                          />
                        </div>
                      </div>
                      <div class="chart_4-add-contents">
                        <span class="chart_4-add-artist">WEi</span>
                        <span class="chart_4-add-album"
                          >위아이 (WEi) - 미니앨범 6집 [Love Pt.3 :
                          Eternally]</span
                        >
                        <span class="chart_4-add-release"
                          >Release Date : 2023-06-29</span
                        >
                      </div>
                    </a>
                  </li>
                  <li class="chart_4-add ch8">
                    <a href="javascript:void(0)" class="chart_4-add-text">
                      <span class="chart_4-add-rank">8</span>
                      <div class="chart_4-add-images-wrap">
                        <div class="chart_4-add-images">
                          <img
                            src="./images/main/CHART_8BLACKPINK.jpg"
                            alt="블랙핑크 (BLACKPINK) - 블랙핑크 더 게임 OST [THE GIRLS] Reve Black ver. (LIMITED EDITION)"
                          />
                        </div>
                      </div>
                      <div class="chart_4-add-contents">
                        <span class="chart_4-add-artist">BLACKPINK</span>
                        <span class="chart_4-add-album"
                          >블랙핑크 (BLACKPINK) - 블랙핑크 더 게임 OST [THE
                          GIRLS] Reve Black ver. (LIMITED EDITION)</span
                        >
                        <span class="chart_4-add-release"
                          >Release Date : 2023-08-25</span
                        >
                      </div>
                    </a>
                  </li>
                  <li class="chart_4-add ch9">
                    <a href="javascript:void(0)" class="chart_4-add-text">
                      <span class="chart_4-add-rank">9</span>
                      <div class="chart_4-add-images-wrap">
                        <div class="chart_4-add-images">
                          <img
                            src="./images/main/CHART_9TREASURE.png"
                            alt="트레저 (TREASURE) - 2ND FULL ALBUM [REBOOT] PHOTOBOOK VER."
                          />
                        </div>
                      </div>
                      <div class="chart_4-add-contents">
                        <span class="chart_4-add-artist">TREASURE</span>
                        <span class="chart_4-add-album"
                          >트레저 (TREASURE) - 2ND FULL ALBUM [REBOOT] PHOTOBOOK
                          VER.</span
                        >
                        <span class="chart_4-add-release"
                          >Release Date : 2023-07-28</span
                        >
                      </div>
                    </a>
                  </li>
                  <li class="chart_4-add ch10">
                    <a href="javascript:void(0)" class="chart_4-add-text">
                      <span class="chart_4-add-rank">10</span>
                      <div class="chart_4-add-images-wrap">
                        <div class="chart_4-add-images">
                          <img
                            src="./images/main/CHART_99EVERGLOW.png"
                            alt="에버글로우 (EVERGLOW) - 싱글앨범 4집 [ALL MY GIRLS]"
                          />
                        </div>
                      </div>
                      <div class="chart_4-add-contents">
                        <span class="chart_4-add-artist">EVERGLOW</span>
                        <span class="chart_4-add-album"
                          >에버글로우 (EVERGLOW) - 싱글앨범 4집 [ALL MY
                          GIRLS]</span
                        >
                        <span class="chart_4-add-release"
                          >Release Date : 2023-07-28</span
                        >
                      </div>
                    </a>
                  </li>
                  <li class="chart_4-add add">
                    <a href="javascript:void(0)" class="add_text">
                      <span class="material-icons-round"> add </span>
                      <span class="add_text-add">더보기</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </section>
          <!-- 오프라인 매장 안내 -->
          <section class="ktown4u_offline">
            <div class="ktown4u_offline-wrap">
              <a
                href="#"
                target="_blank"
                title="새창 열림"
                class="offline-text"
              >
                <span class="offline_tag">OFFLINE STORE</span>
                <h2 class="offline_tit">오프라인 매장 안내</h2>
                <span class="offline_content"
                  >Ktown4u를 오프라인 매장에서 만나볼 수 있는 기회! <br />
                  Ktown4u 매장을 찾아보세요!</span
                >
                <span class="offline_button">바로가기</span>
              </a>
            </div>
          </section>
          <!-- BRAND SHOP 슬라이드 -->
          <section class="new_life brandshop container">
            <div class="new_life-wrap">
              <div class="new_life-header brand-head">
                <span class="new_life-header_tagline">BARND SHOP</span>
                <h2 class="new_life-header_tagtit">브랜드샵</h2>
                <div class="new_life-header_taginfo">
                  <span class="new_life-header-info1"
                    >Ktown4u에서도 만나볼 수 있다! 다양한 브랜드샵들을
                    만나보세요!
                  </span>
                </div>
              </div>
              <div class="swiper is-brand">
                <div class="swiper-wrapper is-brand">
                  <div class="swiper-slide is-brand">
                    <a href="javascript:void(0)" class="brandshop_circle">
                      <img src="./images/main/BRAND_1.png" alt="어프어프" />
                      <h2>EARP EARP</h2>
                    </a>
                  </div>
                  <div class="swiper-slide is-brand">
                    <a href="javascript:void(0)" class="brandshop_circle">
                      <img
                        src="./images/main/BRAND_2.jpg"
                        alt="수앙 스튜디오"
                      />
                      <h2>SOOANG STUDIO</h2>
                    </a>
                  </div>
                  <div class="swiper-slide is-brand">
                    <a href="javascript:void(0)" class="brandshop_circle">
                      <img src="./images/main/BRAND_3.jpg" alt="motemote" />
                      <h2>MOTEMOTE</h2>
                    </a>
                  </div>
                  <div class="swiper-slide is-brand">
                    <a href="javascript:void(0)" class="brandshop_circle">
                      <img src="./images/main/BRAND_4.jpg" alt="mote mote" />
                      <h2>WITH HAM</h2>
                    </a>
                  </div>
                  <div class="swiper-slide is-brand">
                    <a href="javascript:void(0)" class="brandshop_circle">
                      <img src="./images/main/BRAND_5.jpg" alt="pink rue" />
                      <h2>PINK RUE</h2>
                    </a>
                  </div>
                  <div class="swiper-slide is-brand">
                    <a href="javascript:void(0)" class="brandshop_circle">
                      <img src="./images/main/BRAND_6.png" alt="GOD SHOP" />
                      <h2>GOD SHOP</h2>
                    </a>
                  </div>
                  <div class="swiper-slide is-brand">
                    <a href="javascript:void(0)" class="brandshop_circle">
                      <img src="./images/main/BRAND_7.png" alt="BE ON D" />
                      <h2>BE ON D:</h2>
                    </a>
                  </div>
                  <div class="swiper-slide is-brand">
                    <a href="javascript:void(0)" class="brandshop_circle">
                      <img src="./images/main/BRAND_8.png" alt="OKIKI" />
                      <h2>OKIKI</h2>
                    </a>
                  </div>
                  <div class="swiper-slide is-brand">
                    <a href="javascript:void(0)" class="brandshop_circle">
                      <img src="./images/main/BRAND_9.png" alt="Ongredients" />
                      <h2>Ongredients</h2>
                    </a>
                  </div>
                  <div class="swiper-slide is-brand">
                    <a href="javascript:void(0)" class="brandshop_circle">
                      <img src="./images/main/BRAND_10.png" alt="FINNS" />
                      <h2>FINNS</h2>
                    </a>
                  </div>
                  <div class="swiper-slide is-brand">
                    <a href="javascript:void(0)" class="brandshop_circle">
                      <img
                        src="./images/main/BRAND_11.png"
                        alt="FIORO STUDIO"
                      />
                      <h2>FIORO STUDIO</h2>
                    </a>
                  </div>
                  <div class="swiper-slide is-brand">
                    <a href="javascript:void(0)" class="brandshop_circle">
                      <img
                        src="./images/main/BRAND_12.jpg"
                        alt="DICON ISSUE N°14"
                      />
                      <h2>DICON ISSUE N°14</h2>
                    </a>
                  </div>
                  <div class="swiper-slide is-brand">
                    <a href="javascript:void(0)" class="brandshop_circle">
                      <img src="./images/main/BRAND_13.png" alt="DONGSUH" />
                      <h2>DONGSUH</h2>
                    </a>
                  </div>
                </div>
                <div class="swiper-scrollbar is-brand"></div>
              </div>
              <a href="javascript:void(0)" class="new_life-_header-info2"
                >더보기</a
              >
            </div>
          </section>
        </div>


<?php
include_once(G5_PATH.'/tail.php');