<?php
/* www/sub/new.php */
include_once('./common.php');

// 페이지 제목
$g5['title'] = "";

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/sub.css">', 0);

include_once(G5_PATH.'/head.php');
?>

<!-- 여기 아래부터 모든 HTML 요소 구성 시작 -->


<div class="wrap container">
            <div class="event_main-wrap">
                <section class="event_main-header">
                    <h1 class="ectit event-header-title">이벤트</h1>
                    <ul class="ehl event-header-list1">
                        <li class="er-list event-list">
                            <a href="#">이벤트 목록</a>
                        </li>
                        <li class="er-list recipient">
                            <a href="#">당첨자 목록</a>
                        </li>
                    </ul>
                    <ul class="ehl event-header-list2">
                        <li class="er-list total-event on">
                            <a href="#">전체</a>
                        </li>
                        <li class="er-list ing-event">
                            <a href="#">진행 중 이벤트</a>
                        </li>
                        <li class="er-list fin-event">
                            <a href="#">종료된 이벤트</a>
                        </li>
                    </ul>
                </section>
                <section class="event_main-middle">
                    <div class="event_middle-title">
                        <h2>
                            (230820) STAYC (스테이씨) The 3rd Mini Album [TEENFRESH] 발매 기념 특전
                            증정 기념 이벤트
                        </h2>
                        <span class="event-days">진행 중 : 2023-08-14 ~ 2023-08-20</span>
                    </div>
                    <div class="event-middle-image">
                        <span class="blind"
                            >STAYC (스테이씨) The 3rd Mini Album [TEENFRESH] 발매 기념 특전 증정
                            기념 이벤트 <br />
                            STAYC 미니 3집 'TEENFRESH' 발매를 기념하며 Ktown4u에서 특전 증정
                            이벤트가 진행됩니다. 많은 성원 부탁드리며, 참여를 원하시는 분은 아래의
                            참여방법 및 주의사항을 확인해 주시기 바랍니다. <br />
                            응모기간 2000년 0월 00일 (월) ~ 2000년 0월 00일 (일) 23:59 (KST) (결제
                            완료기준) * 이벤트 오픈 전 구매자분들에게도 특전이 증정됩니다.
                            <br />응모장소 [Ktown4u 온라인] https://kr.ktown4u.com <br />응모대상
                            STAYC 미니 3집 'TEENFRESH'(Original ver.) 구매고객 <br />증정상품 미공개
                            셀카 포토카드 6종 중 랜덤 1종 (판매처별 이미지 상이) <br />
                            응모 시 주의사항 1. 이벤트 기간 내 구입한 상품은 이벤트 종료 이후에는
                            취소 및 환불이 불가합니다. 2. 특전은 구매하신 앨범과 함께 응모기간 종료
                            이후 발송될 예정입니다. 배송일정은 상품입고 및 특전수급 일정에 의해
                            변동될 수 있습니다. 3. 본 이벤트는 증정기간 내 결제 완료 처리가 된 주문
                            건에 한해서 자동으로 이벤트 기회가 부여됩니다. 4. 구매 수량 제한은
                            없으며, 구매한 수량만큼 특전이 증정됩니다. 5. 개인정보 보호법 관련
                            상품발송을 위해 참여자의 개인 정보를 아래와 같이 수집, 제공합니다
                            개인정보를 제공받는 자 수집항목,이름,생년월일,연락처,이메일,주소
                            수집목적 : STAYC 미니 3집 'TEENFRESH' 발매기념 특전 증정 이벤트 응모
                            6.본 이벤트는 진행 사정에 따라 사전고지 없이 일부 변경 및 취소될 수
                            있습니다. 이 이미지는 포트폴리용으로 제작되었으며 실제 이벤트가 아님을
                            알려드립니다. <br />
                            음반 판매 수량은 한터차트와 써클차트 집계에 반영됩니다.
                            <br />
                            ktown4u
                        </span>
                        <img
                            src="./images/contents/stayc_event.png"
                            alt="STAYC (스테이씨) The 3rd Mini Album [TEENFRESH] 발매 기념 특전
                        증정 기념 이벤트"
                        />
                    </div>
                </section>
            </div>
        </div>

<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->
<?php
include_once(G5_PATH.'/tail.php');
?>