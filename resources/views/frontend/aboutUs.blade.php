<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>榮輔環保公司</title>
    <link rel="stylesheet" href="{{ asset('css/aboutUs.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/header&footer.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>

<body>




    <header>
        <div class="nav-bar">
            <div class="logo-container">
                <a class="logo" href="/">
                    <img class="logo-img" src="{{ asset('img/Logo.png') }}">
                </a>
                <div class="price-btn"><a href="/contactUs">我要估價<img
                            src="{{ asset('img/header&footer/SVG-search.svg') }}" alt=""></a></div>
            </div>

            <ul class="nav-btn-list">

                <li class="nav-btn btn-aboutUs"><a href="/aboutUs">關於我們</a>
                    <ul>
                        <li><a href="/aboutUs#info-area">證照執照</a></li>
                        <li><a href="/aboutUs#info-area">設備機具</a></li>
                        <li><a href="/aboutUs#history-area">創建歷史</a></li>
                        <li><a href="/benefits">員工福利</a></li>
                    </ul>
                </li>

                <li class="nav-btn"><a href="/index#bulletin-board">最新消息</a>
                    <ul>
                        <li><a href="/index#bulletin-board">最新消息</a></li>
                        <li><a href="/index#bulletin-board">人員招募</a></li>
                    </ul>
                </li>

                <li class="nav-btn"><a href="/service">服務實績</a>
                    <ul>
                        <li><a href="/service">績效照片</a></li>
                        <li><a href="/service">公益服務</a></li>
                    </ul>
                </li>

                <li class="nav-btn"><a href="/index#question-board">常見問題</a></li>
                <li class="nav-btn"><a href="/contactUs">聯絡我們</a></li>
            </ul>

            <div class="social-media-area">
                <a href="/contactUs">
                    <img src="{{ asset('img/header&footer/SVG-mail.svg') }}" alt="">
                </a>
                <a href="https://www.facebook.com/zzz70042123" target="_blank">
                    <img src="{{ asset('img/header&footer/SVG-FB.svg') }}" alt="">
                </a>

            </div>
        </div>

        <div class="phone-ham"></div>
        <div class="phone-menu">
            <ul class="phone-btn-list">

                <li class="phone-btn phone-about-btn">關於我們
                    <ul class="phone-about-list">
                        <li><a href="/aboutUs#info-area">證照執照</a></li>
                        <li><a href="/aboutUs#info-area">設備機具</a></li>
                        <li><a href="/aboutUs#history-area">創建歷史</a></li>
                        <li><a href="/benefits">員工福利</a></li>
                    </ul>
                </li>

                <li class="phone-btn phone-news-btn">最新消息
                    <ul class="phone-news-list">
                        <li><a href="/index#bulletin-board">最新消息</a></li>
                        <li><a href="/index#bulletin-board">人員招募</a></li>
                    </ul>
                </li>

                <li class="phone-btn phone-service-btn">服務實績
                    <ul class="phone-service-list">
                        <li><a href="/service">績效照片</a></li>
                        <li><a href="/service">公益服務</a></li>
                    </ul>
                </li>

                <li class="phone-btn"><a href="/index#question-board">常見問題</a></li>
                <li class="phone-btn"><a href="/contactUs">聯絡我們</a></li>
            </ul>

            <div class="phone-social-media">
                <a href="https://www.facebook.com/zzz70042123" target="_blank">
                    <img src="{{ asset('img/header&footer/SVG-FB.svg') }}" alt="">
                </a>
                <a href="/contactUs">
                    <img src="{{ asset('img/header&footer/SVG-mail.svg') }}" alt="">
                </a>

            </div>

        </div>
    </header>


    <main>
        <div class="slogan-area">
            <div class="slogan-content">
                <div class="slogan-text">品質要第一</div>
                <div class="slogan-text">服務需至上</div>
                <div class="slogan-text">環境無汙染</div>
                <div class="slogan-text">工作零災害</div>
            </div>
        </div>

        <div id="history-area">
            <div class="history-title">創建歷史</div>

            <div class="history-showcase">
                <div class="history-content">
                    <div class="history-date">民國七十八年</div>
                    <div class="history-text">成立。</div>
                </div>

                <div class="history-content">
                    <div class="history-date">民國八十一年</div>
                    <div class="history-text">以歷年的經驗環保局之督導下，提出了第一本公有民營計劃書。</div>
                </div>

                <div class="history-content">
                    <div class="history-date">民國八十二年</div>
                    <div class="history-text">執行了台中市中區公有民營代清運委託計劃</div>
                </div>

                <div class="history-content">
                    <div class="history-date">民國九十二年</div>
                    <div class="history-text">取得ISO 9001品質保證認證至今</div>
                </div>

                <div class="history-content">
                    <div class="history-date">民國九十二年</div>
                    <div class="history-text">承包臺中市政府環保局委託代清運工作至今</div>
                </div>
            </div>
        </div>

        <div id="info-area">
            <div class="info-card">
                <div class="info-name">設備機具</div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/machine/car(1).jpg')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/machine/car(2).jpg')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/machine/car(3).jpg')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/machine/car(4).jpg')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/machine/car(5).jpg')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/machine/car(6).jpg')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/machine/car(7).jpg')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/machine/car(8).jpg')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/machine/car(9).jpg')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/machine/car(10).jpg')}}" alt=""></div>
                    </div>
                </div>
                <a href="/service">
                    <div class="info-btn">看更多</div>
                </a>
            </div>

            <div class="info-card">
                <div class="info-name">證照執照</div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/license/license(1).jpg')}}" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/license/license(2).jpg')}}" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/license/license(3).jpg')}}" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/license/license(4).jpg')}}" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/license/license(5).jpg')}}" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/license/license(6).jpg')}}" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/license/license(7).jpg')}}" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/license/license(8).jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <a href="/service">
                    <div class="info-btn">看更多</div>
                </a>
            </div>

            <div class="info-card">
                <div class="info-name">公益服務</div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/service/service(1).jpg')}}" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/service/service(2).jpg')}}" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('img/aboutUs/service/service(3).jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <a href="/service">
                    <div class="info-btn">看更多</div>
                </a>
            </div>
        </div>

        <div class="client-area">
            <div class="client-title">榮輔服務單位</div>
            <div class="client-showcase">
                <div class="client-card">
                    <img src="{{asset('img/aboutUs/client/client_hocom.jpg')}}" alt="">
                    <div class="client-name">裕毛屋</div>

                </div>

                <div class="client-card">
                    <img src="{{asset('img/aboutUs/client/client_meatMarket.jpg')}}" alt="">
                    <div class="client-name">肉品市場</div>

                </div>

                <div class="client-card">
                    <img src="{{asset('img/aboutUs/client/client_carrefour.jpg')}}" alt="">
                    <div class="client-name">家樂福青海店</div>
                </div>

                <div class="client-card">
                    <img src="{{asset('img/aboutUs/client/client_FCU.jpg')}}" alt="">
                    <div class="client-name">逢甲大學</div>

                </div>

                <div class="client-card">
                    <img src="{{asset('img/aboutUs/client/client_funcom.jpg')}}" alt="">
                    <div class="client-name">楓康超市</div>


                </div>

                <div class="client-card">
                    <img src="{{asset('img/aboutUs/client/client_ckcgroup.jpg')}}" alt="">
                    <div class="client-name">潮港城</div>

                </div>
            </div>
        </div>


    </main>



    <footer>
        <a class="footer-logo" href="/">
            <img class="logo-img" src="{{ asset('img/Logo.png') }}">
        </a>
        <div class="footer-info">

            <ul class="information">臺中市南屯區大墩四街400巷20號1樓
                <li>電話：04-23827080/04-23827081</li>
                <li>傳真：04-23824270</li>
                <li>聯絡信箱：n6260@ms32.hinet.net</li>
            </ul>

            <ul class="business-hours">營業時間:
                <li> 週一~五: 08:00 – 17:00</li>
            </ul>

            <div class="footer-social-media-area">
                <a href="https://www.facebook.com/zzz70042123" target="_blank">
                    <img src="{{ asset('img/header&footer/SVG-FB-black.svg') }}" alt="">
                </a>
                <a href="/contactUs">
                    <img src="{{ asset('img/header&footer/SVG-mail-black.svg') }}" alt="">
                </a>

            </div>

        </div>
        <div class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.847069559323!2d120.6420298148232!3d24.142008284397768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693db8f531fd3d%3A0xe6f1a995d9e8592d!2z5qau6LyU5LyB5qWt6IKh5Lu95pyJ6ZmQ5YWs5Y-4!5e0!3m2!1szh-TW!2stw!4v1668348951020!5m2!1szh-TW!2stw"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="copy-right">CopyRight&copy;榮輔企業股份有限公司&nbsp;<span><a href="https://www.moi.gov.tw/cp.aspx?n=10953"
                    target="_blank"> 隱私權政策</a></span></div>
    </footer>


    <script src="{{asset('')}}js/header.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: {
                delay: 1000,

            },

        });
    </script>
</body>

</html>
