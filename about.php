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
            <section class="itemview-main">
                <h2 class="blind">
                    NEWJEANS(뉴진스) - 2ND EP [GET UP] [THE POWERPUFF GIRLS X NJ BOX VER] (랜덤버전)
                </h2>
                <div class="itemview-left">
                    <div class="itemalbum-images">
                        <img
                            src="./images/contents/itemview_newjeans_album.png"
                            alt="NEWJEANS(뉴진스) - 2ND EP [GET UP] [THE POWERPUFF GIRLS X NJ BOX VER] (랜덤버전)"
                        />
                    </div>
                    <div class="artist_goto">
                        <a href="#" class="artist_goto-wrap">
                            <div class="artist_goto-image">
                                <img
                                    src="./images/contents/newjeans_goto.jpg"
                                    alt="NEWJEANS(뉴진스) 스토어 바로가기"
                                />
                            </div>
                            <span class="artist_goto-text">NEWJEANS(뉴진스) 스토어 바로가기</span>
                            <i class="fa-solid fa-angle-right artist_goto-arrow"></i>
                        </a>
                    </div>
                </div>
                <div class="itemview-right">
                    <div class="prod_view_info_cont">
                        <div class="product_info_up">
                            <div class="kt4_prod_info info-tit">
                                <h1 class="info-title">
                                    <p class="agency">어도어</p>
                                    <p class="info-album">
                                        NEWJEANS(뉴진스) - 2ND EP [GET UP] [THE POWERPUFF GIRLS X NJ
                                        BOX VER] (랜덤버전)
                                    </p>
                                    <p class="info-albumtit">NEWJEANS(뉴진스)-2ND EP[GET UP]</p>
                                </h1>
                            </div>
                            <div class="kt4_prod_info info-price">
                                <span class="discount_rate">19%</span>
                                <span class="final_price">18,600원</span>
                                <span class="price_origin">23,000원</span>
                            </div>
                            <div class="kt4_prod_info info-details">
                                <dl class="details-box detail-release">
                                    <dt class="info-detail-tit releasedate">출시일</dt>
                                    <dd class="info-detail-text releasedate-day">2023-07-21</dd>
                                </dl>
                                <dl class="details-box detail-receiving">
                                    <dt class="info-detail-tit info-recevining">입고예정</dt>
                                    <dd class="info-detail-text info-recevining-day">2023-08-11</dd>
                                </dl>
                                <dl class="details-box info-delivery">
                                    <dt class="info-detail-tit info-deliverycharge">배송비</dt>
                                    <dd class="info-deliverycharge-txt">
                                        Ktown4u 조건배송 <br />
                                        2,000원 (20,000원 이상 구매 시 무료)
                                        <p class="delivery-txt3">도서 산간 지역 추가 요금 있음</p>
                                    </dd>
                                </dl>
                                <dl class="details-box info-deliveryinfo">
                                    <dt class="info-detail-tit info-deliveryinfo">배송안내</dt>
                                    <dd class="info-deliveryinfo-txt">
                                        <p>
                                            <span class="deliveryinfo-txt1"
                                                >예상출고일 1일 이내</span
                                            >
                                            <span class="deliveryinfo-txt2"
                                                >(상품주문 후 2~3일 이내 받을 수 있습니다.)</span
                                            >
                                        </p>
                                    </dd>
                                </dl>
                            </div>
                            <div class="kt4_prod_info count-wrap">
                                <div class="count-left">
                                    <span class="count_button-wrap">
                                        <button id="decrease">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input
                                            type="number"
                                            value="1"
                                            min="1"
                                            max="100"
                                            step="1"
                                            id="my-input"
                                        />
                                        <button id="increase">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </span>
                                </div>
                                <div class="count-right">
                                    <span class="val">18,600</span>
                                    <span class="unit">원</span>
                                </div>
                            </div>
                        </div>
                        <div class="product_info_down">
                            <div class="kt4_info-total-price">
                                <span class="kt4_info-total">
                                    총
                                    <span class="cart-count">1</span>
                                    개
                                </span>
                                <span class="kt4_info-price">
                                    <span class="val">18,600</span>
                                    <span class="unit">원</span>
                                </span>
                            </div>
                            <div class="kt4_product_btn_area">
                                <a href="#" class="kt4_button gotocart">장바구니</a>
                                <a href="#" class="kt4_button buy">구매하기</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="kt4_associate-wrap">
                <ul class="kt4_associate-image">
                    <li>
                        <img src="./images/contents/ASSOCIATE_KT4.png" alt="ktown4u" />
                    </li>
                    <li>
                        <img src="./images/contents/ASSOICATE_hanter.svg" alt="hanter_chart" />
                    </li>
                    <li>
                        <img src="./images/contents/ASSOICATE_circle.svg" alt="circle_chart" />
                    </li>
                </ul>
                <h3 class="kt4_associate-text">
                    Ktown4u의 음반 판매자료는 온/오프라인 동일하게 케이타운포유차트, 한터차트,
                    써클차트의 판매량 집계에 100% 제공/반영됩니다.
                </h3>
            </section>
            <section class="kt4_all_info-wrap">
                <div class="kt4_delivery_information">
                    <h2 class="kt4_delivery-info">
                        <span class="delivery-tit">NOTICE</span>
                        <span class="deliveryinfo">
                            아웃박스는 상품 보호를 위한 충격 방지용으로 제작되어 미세한 스크래치 및
                            흠집, 변색 등이 포장/배송 과정에서 생겨날 수 있고 이는 교환 사유가 될 수
                            없습니다.
                        </span>
                    </h2>
                </div>
                <div class="info-wrap kt4_albumm_information-wrap">
                    <div class="album_information">
                        <div class="album_info album_info-1">
                            <h2 class="detail_info-tit album-albumtit">음반정보</h2>
                            <span class="album-artistinfo"
                                >NewJeans[NewJeans 2nd EP 'Get Up'] (THE POWERPUFF GIRLS X NJ Box
                                ver.)</span
                            >
                            <span class="album_contentsinfo">
                                뉴진스가 2023년 7월! 새로운 신곡으로 돌아옵니다.
                                <br />
                                <br />
                                두 번째 EP [Get Up]은 총 6곡으로 구성되어 있으며 뉴진스의 독특한
                                음악적 성취를 인상적으로 드러낼 앨범으로, 앨범 전체에 담긴 서사와
                                함께 각각의 곡이 담아내고 있는 이야기의 흐름을 따라 1번 트랙부터 6번
                                트랙까지 순서대로 전곡을 감상해 보시는 것을 추천합니다.
                                <br />
                                <br />
                                *1번 트랙 'New Jeans'는 앨범 전체의 프롤로그와 같은 곡으로, 특별히
                                2023년 25주년을 맞는 Warner Bros. Discovery의 POWERPUFF GIRLS와의
                                컬래버레이션 뮤직비디오가 공개될 예정입니다. POWERPUFF GIRLS의
                                에너지를 닮은 뉴진스의 모습을 기대해 주세요.
                                <br />
                                <br />
                                *첫 번째 EP와 대칭되는 개념의 3개의 타이틀곡 'Super Shy', 'ETA',
                                'Cool With You'는 각기 전혀 다른 스타일의 곡으로 다채롭고 이색적인
                                매력을 선보입니다.
                                <br />
                                <br />*한국 걸밴드 문법에서 벗어난 인터루드 트랙 'Get Up', 신비로운
                                신스 사운드가 돋보이는 이번 앨범의 에필로그 곡 'ASAP'까지.
                            </span>
                        </div>
                        <div class="album_info album_info-2">
                            <h2 class="detail_info-tit album_detailtit">앨범사양</h2>
                            <span class="album_detailinfo">
                                - 아웃박스 : 2종 중 1종 랜덤 / W197 X H133 X T28
                                <br />
                                <br />
                                - 포토북 : 1세트 (3권) / W129 X H194 / 1권당 84 Pages
                                <br />
                                <br />
                                - 가사지 : 1종 / W129 X H 194 / 24 Pages
                                <br />
                                <br />
                                - 엽서 : 1세트 (5장) / W100 X H150
                                <br />
                                <br />
                                - 책갈피 : 1세트 (2장) / MAX W41 X H77
                                <br />
                                <br />
                                - 스티커 : 1세트 (3장) / W124 X H189
                                <br />
                                <br />
                                - 포토카드 : 1세트 (5장) / W55 X H85
                                <br />
                                <br />
                                - CD-R : 1종 / W120 X H120
                                <br />
                                <br />
                                *포토북 3권 중 1권은 Bunny Beach Bag ver. 포토북 공통 1종과
                                동일합니다.
                                <br />
                                <br />
                                *가사지는 Bunny Beach Bag ver.과 동일합니다.
                                <br />
                                <br />
                                *스티커 3장 중 1장은 Bunny Beach Bag ver. 스티커 공통 1종과
                                동일합니다.
                            </span>
                        </div>
                        <div class="album_info album_info-3">
                            <h2 class="detail_info-tit album_tracktit">트랙리스트</h2>
                            <span class="album_trackinfo">
                                1. New Jeans
                                <br />
                                <br />
                                2. Super Shy
                                <br />
                                <br />
                                3. ETA
                                <br />
                                <br />
                                4. Cool With You
                                <br />
                                <br />
                                5. Get Up
                                <br />
                                <br />
                                6. ASAP
                            </span>
                        </div>
                    </div>
                </div>
                <div class="album_details_images">
                    <img
                        src="./images/contents/newjeans_item_view.jpg"
                        alt="NEWJEANS(뉴진스)-2ND EP[GET UP]"
                    />
                </div>
                <div class="info-wrap pipn-infomation">
                    <h2 class="detail_info-tit pipntit">상품정보제공고시</h2>
                    <span class="pipninfo"
                        >상품명 : NewJeans(뉴진스) - [NewJeans 2nd EP 'Get Up] (THE POWERPUFF GIRLS
                        X NJ Box ver.) (랜덤버전)
                        <br />
                        <br />
                        원산지 : Korea
                        <br />
                        <br />
                        제조/수입 : 와이지플러스
                        <br />
                        <br />
                        품질보증기준 : 관련법 및 소비자 분쟁 해결규정에 따름.
                        <br />
                        <br />
                        AS 책임자 연락처 : Ktown4u, 02-552-0978
                    </span>
                </div>
            </section>
            <section class="kt4_cont-wrap">
                <div class="info-wrap kt4_cont">
                    <div class="kt4_cont kt4_cont-delivery">
                        <h2 class="detail_info-tit cont-delivery-tit">배송</h2>
                        <span class="cont-deliveryinfo">
                            - Ktown4u의 배송비는 2만원 이상 구매 시 무료배송입니다. <br /><br />
                            - 상품을 다수 주문 시, 입고 지연 상품이 포함되는 경우 전 상품의 재고
                            확보 후 합배송으로 발송됩니다. <br /><br />
                            - 배송일 : 재고 보유 상품의 경우 영업일 기준 1~5일 이내 순차 출고
                            <br /><br />
                            - 출고 및 배송 일정은 재고 확보 및 지역 택배사 사정에 따라 지연될 수
                            있습니다.<br /><br />
                            - Ktown4u의 전 상품은 CJ대한통운 택배를 이용하여 배송이 됩니다.<br /><br />
                        </span>
                    </div>
                    <div class="kt4_cont kt4_cont-cancel">
                        <h2 class="detail_info-tit cont-cancel-tit">주문취소</h2>
                        <span class="cont-cancelinfo">
                            - 결제 후 주문취소를 원하시는 경우 마이페이지에서 '취소신청' 버튼을
                            누르시면 취소 접수가 가능합니다.
                            <br /><br />
                            - 주문상태가 '주문', 또는 '상품준비중', '발송준비중' 인 경우 취소접수
                            가능하며, 이벤트 응모 구매 또는 '출고대기중' 상태일 경우 취소 접수가
                            불가합니다.
                            <br /><br />

                            - 취소 접수 후 주문취소는 영업일 기준 2일 이내 순차 진행되며, 결제수단에
                            따라 환불 처리는 취소일로부터 영업일 기준 3~7일 정도 소요될 수 있습니다.
                            <br /><br />

                            - 배송 출고 대기 및 배송 준비중 상태 등 배송이 시작된 이후에는 배송지
                            수정 및 취소 접수가 불가합니다.
                            <br /><br />

                            - 주문 후 24시간 이내에 결제완료 되지 않을 경우 자동으로 주문 삭제되며,
                            복구는 불가합니다. 주문 상태에 따라 아래 내용을 확인해주세요.
                            <br /><br />

                            - 주문 : 주문 후 결제 전 상태, 결제완료 : 주문 후 24시간 이내에 결제가
                            완료된 상태, 주문삭제 : 주문 후 24시간 이내에 결제가 되지 않은 상태,
                            취소 : 결제완료된 주문의 취소 접수가 완료된 상태
                            <br /><br />

                            - 무통장 입금/휴대폰 전월 결제 취소 건 환불 시 구매자 명의 계좌로 환불
                            가능합니다. (타인 계좌로 환불 어려운 점 양해 부탁드립니다.)
                            <br /><br />

                            - 추가 문의 사항은 로그인 후, [Ktown4u 홈페이지 우측 하단 말풍선
                            이모티콘CS Talk에 문의 해 주시면 처리 도와드리겠습니다.]
                        </span>
                    </div>
                    <div class="kt4_cont kt4_cont-change">
                        <h2 class="detail_info-tit cont-change-tit">교환/환불 안내</h2>
                        <span class="cont-changeinfo">
                            - 상품 설명에 교환/반품과 관련한 안내가 있는 경우 아래 내용보다
                            우선합니다. (유통사 사정에 따라 달라질 수 있습니다.)
                            <br /><br />
                            - 고객 귀책사유로 인한 단순변심 반품 시 배송비 차감 후 환불 될 예정이며,
                            차감배송비는 최초 배송비 포함 여부에 따라 상이할 수 있습니다.(배송비
                            무료)
                            <br /><br />

                            - 상품 수령 후 교환 및 환불은 14일 이내에 신청 가능하며 다음 사항에
                            해당되는 경우 교환/반품이 불가합니다. <br /><br />

                            * 교환/반품 가능 기간이 경과된 경우 <br /><br />

                            * 복제가 가능한 상품 등의 포장을 훼손한 경우 : 예: CD/LP, DVD/Blu-ray,
                            소프트웨어, 만화책, 잡지, 영상 화보집 <br /><br />

                            * 구매자의 책임 있는 사유로 상품 등이 멸실 또는 훼손된 경우 <br /><br />

                            - 사전 교환/반품 접수 없이 반송하거나, 직접 발송하실 경우는 처리 및
                            응대가 불가합니다. 사전에 로그인 후, [Ktown4u 홈페이지 우측 하단 말풍선
                            이모티콘CS Talk에 문의 해 주시면 처리 도와드리겠습니다.]에 우선 접수
                            부탁드립니다. <br /><br />

                            - 주문 완료후 여러 주문의 합포장 및 합배송은 불가합니다. <br /><br />

                            - 주문 완료후 타 상품 및 옵션 변경 불가합니다. 취소 후 재 주문
                            부탁드립니다. <br /><br />

                            - 교환, 환불은 반품 상품이 도착된 이후 처리 가능하며, 맞교환 또는 타
                            상품 교환은 불가합니다. <br /><br />

                            - 그 외 전자상거래등에서의 소비자보호에 관한 법률에 규정되어 있는 소비자
                            청약철회 가능범위에 해당하는 경우 교환/반품이 가능합니다. <br /><br />

                            - 해외에서 국내로 상품을 배송하는 해외구매대행서비스의 경우 전자상거래
                            등에서의 소비자보호에 관한 법률 제17조 2항 5호 및 동법시행령 제21조에
                            의하여 반품 및 교환이 제한될 수 있습니다. <br /><br />
                        </span>
                    </div>
                    <div class="kt4_cont kt4_cont-error">
                        <h2 class="detail_info-tit cont-error-tit">누락/파손/불량 안내</h2>
                        <span class="cont-errorinfo">
                            - 누락/파손/불량에 대한 교환 및 반품 처리를 위해서는 개봉시부터 촬영된
                            언박싱 영상이 필요합니다. 상품 개봉 시 영상 촬영을 꼭 부탁드립니다.
                            (상자 개봉 동영상이 없을 경우, 응대 불가할 수 있으니 개봉 시 반드시
                            촬영하시기 바랍니다.) <br /><br />
                            - 누락/파손/불량시 언박싱 영상의 내용을 일부 캡쳐하여 구매한 상품,
                            누락된 상품 및 구성, 수량과 이미지를 함께 로그인 후, [Ktown4u 홈페이지
                            우측 하단 말풍선 이모티콘(CS Talk)]에 문의 해 주시면 처리
                            도와드리겠습니다. (전달된 이미지로 누락/파손/불량내용 확인이 어려울
                            경우, 언박싱 영상을 다시 요청 할 수 있습니다.) <br /><br />
                            - 상품 구성품(앨범,굿즈,잡지 전부 포함)의 경미한 스크래치, 오염, 접힘은
                            제작상의 이슈로 교환 및 반품이 어렵습니다. <br /><br />
                            - 상품의 아웃케이스는 상품을 보호하기 위함으로 , 유통과정상 발생되는
                            오염 및 파손으로 인한 교환 및 반품은 불가합니다. <br /><br />
                            - 상품의 누락, 파손, 불량의 경우 새 상품으로 교환 및 환불, 적립금으로
                            보상 가능합니다. 단, 상품 재고 부족 시 교환 진행이 어려울 수 있습니다.
                        </span>
                    </div>
                    <div class="kt4_cont kt4_cont-break">
                        <h2 class="detail_info-tit cont-break-tit">국내 택배 분실/파손</h2>
                        <span class="cont-breakinfo">
                            - Ktown4u에서는 국내 택배 배송 시 CJ 대한통운을 통해 배송됩니다. CJ
                            대한통운에 따른 분실 및 파손 시 아래의 기한을 확인해주세요. <br /><br />
                            - 파손 : 배송일(예정일)로부터 14일 이내 사고 등록 가능 - 분실 :
                            배송일(예정일)로부터 30일 이내 사고 등록 가능 <br /><br />
                            - 분실 및 파손 관련하여 해당 기한을 경과한 경우 사고 접수 불가능
                            <br /><br />
                        </span>
                    </div>
                    <div class="kt4_cont kt4_cont-review">
                        <h2 class="detail_info-tit cont-review-tit">리뷰</h2>
                        <span class="cont-reviewinfo">
                            - 텍스트 리뷰 100점 / 사진 리뷰 300점 / 동영상 리뷰 500점으로 마일리지
                            적립됩니다. <br /><br />
                            - 월간 베스트 리뷰 1등 5,000점 / 2등 3,000점 / 3등 2,000점으로 마일리지
                            적립됩니다. <br /><br />
                            - 월간 베스트 리뷰는 좋아요와 댓글 수, 사진 및 영상의 퀄리티와 내용에
                            따라 관리자의 판단으로 선정됩니다. <br /><br />
                            - 상품 금액이 5,000원 이상일 경우 리뷰 작성 시 마일리지가 적립됩니다.
                            <br /><br />
                            - 리뷰 승인 이후 영업일 기준 5일 이내에 마일리지 적립됩니다. - 적립된
                            마일리지는 1건의 주문에 최대 10,000점 사용 가능합니다. <br /><br />
                            - 리뷰 작성으로 인한 마일리지는 반품 및 리뷰 삭제 시 반환될 수 있습니다.
                            <br /><br />
                            - 주문 최소 금액 및 일부 이벤트 상품 구매 리뷰의 경우 마일리지 적립이
                            불가할 수 있습니다. <br /><br />
                            - 작성해주신 리뷰 및 사진/동영상은 상업적 용도(마케팅 자료)로 활용될 수
                            있습니다. <br /><br />
                            - 리뷰는 주문번호 기준으로 작성 가능하며, 1건의 주문에 동일 상품을
                            여러개 구매하였을 경우 1번만 등록, 동일 상품에 대해서 주문번호가 다른
                            경우에는 리뷰 작성이 가능합니다. <br /><br />
                            - 리뷰 작성은 배송완료일로부터 30일 이내에 작성 가능합니다. <br /><br />
                            - 20자 이상이나 특수 문자나 초성 등으로 작성되어 자세한 사용 후기를 알
                            수 없는 경우, 상품과 연관이 없거나 중복인 리뷰는 등록이 제한될 수
                            있습니다. <br /><br />
                            - 웹사이트 캡쳐나 지나치게 어둡거나 흐려서 상품을 알아보기 힘든 경우,
                            택배 상자 또는 내용물이 없는 포장재만 촬영한 리뷰는 등록이 제한될 수
                            있습니다. <br /><br />
                            - 동영상 리뷰의 경우 실 상품이 아닌 상품이 촬영된 전자기기 화면을 재촬영
                            또는 캡쳐하여 제작한 영상, 화면이 거꾸로 촬영되거나 기울여져 알아보기
                            어려운 영상의 리뷰는 등록이 제한될 수 있습니다.
                        </span>
                    </div>
                    <div class="kt4_cont kt4_cont-return">
                        <h2 class="detail_info-tit cont-return-tit">반송지 주소 및 연락처</h2>
                        <span class="cont-returninfo">
                            - 인천광역시 북항로120번길 55, 9층 49번 도크, 청라로지스틱스센터
                            케이타운포유 (22853) 상품을 보내실때는 꼭 CJ대한통운 택배 (☎
                            1588-1255)를 이용하여 주시길 바라며, 타 택배사를 이용하실 경우 택배비는
                            고객님께서 선불로 지불 해 주셔야 합니다.
                        </span>
                    </div>
                </div>
                <div class="kt4_packing">
                    <img
                        src="./images/contents/kt4_packing_info.png"
                        alt="저희 케타포는 고객님들의 안심하고 온라인 쇼핑을 할 수 있도록 패킹 영상 녹화 시스템을 도입하여 더욱 정직하고 믿을 수 있는 배송 서비스를 제공하고 있습니다."
                    />
                </div>
            </section>
 </div>


<!-- 여기 아래부터 모든 HTML 요소 구성 끝 -->
<?php
include_once(G5_PATH.'/tail.php');
?>