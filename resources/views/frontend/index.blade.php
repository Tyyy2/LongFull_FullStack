<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>榮輔環保公司</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header&footer.css') }}">
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
        <div class="banner">
            <img src="{{ asset('img/LF_LOGO_W.png') }}" alt="">
        </div>
        <div id="bulletin-board">
            <div class="bulletin-title">
                <div class="news-title">最新消息</div>
                <div class="employ-title">人員招募</div>
            </div>

            <div class="news-area">

                <div class="news-card-area">
                    <div class="news-card">
                        <div class="card-img"><img src="{{ asset($news_database[0]->news_img_path) }}" alt="">
                        </div>
                        <div class="card-info-area">
                            <div class="card-title">{{ Str::limit($news_database[0]->news_title, 16, $end = '') }}
                            </div>
                            <div class="card-content">{{ Str::limit($news_database[0]->news_content, 40) }}</div>
                            <a href="/newsDetail/news{{ $news_database[0]->id }}">
                                <div class="card-btn">更多資訊</div>
                            </a>
                        </div>

                    </div>
                    <div class="news-card">
                        <div class="card-img"><img src="{{ asset($news_database[1]->news_img_path) }}" alt="">
                        </div>
                        <div class="card-info-area">
                            <div class="card-title">{{ Str::limit($news_database[1]->news_title, 16, $end = '') }}
                            </div>
                            <div class="card-content">{{ Str::limit($news_database[1]->news_content, 40) }}</div>
                            <a href="/newsDetail/news{{ $news_database[1]->id }}">
                                <div class="card-btn">更多資訊</div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="news-detail-area">
                    <div class="news-detail">
                        <div class="news-detail-content">{{ $news_database[2]->news_title }}</div>
                        <a href="/newsDetail/news{{ $news_database[2]->id }}" class="news-detail-button">看更多</a>
                    </div>
                    <div class="news-detail">
                        <div class="news-detail-content">{{ $news_database[3]->news_title }}</div>
                        <a href="/newsDetail/news{{ $news_database[3]->id }}" class="news-detail-button">看更多</a>
                    </div>
                    <div class="news-detail">
                        <div class="news-detail-content">{{ $news_database[4]->news_title }}</div>
                        <a href="/newsDetail/news{{ $news_database[4]->id }}" class="news-detail-button">看更多</a>
                    </div>
                </div>
            </div>
            <div class="employ-area area_none">
                <div class="employ-card">
                    <div class="card-img"><img src="{{ asset($employees_database[0]->employees_img_path) }}"
                            alt=""></div>
                    <div class="card-info-area">
                        <div class="card-title">
                            {{ Str::limit($employees_database[0]->employees_title, 16, $end = '') }}
                        </div>
                        <div class="card-content">{{ Str::limit($employees_database[0]->employees_content, 40) }}</div>
                        <a href="/employeesDetail/employees{{ $employees_database[0]->id }}">
                            <div class="card-btn">更多資訊</div>
                        </a>
                    </div>
                </div>
                <div class="employ-card">
                    <div class="card-img"><img src="{{ asset($employees_database[1]->employees_img_path) }}"
                            alt=""></div>
                    <div class="card-info-area">
                        <div class="card-title">
                            {{ Str::limit($employees_database[1]->employees_title, 16, $end = '') }}
                        </div>
                        <div class="card-content">{{ Str::limit($employees_database[1]->employees_content, 40) }}</div>
                        <a href="/employeesDetail/employees{{ $employees_database[1]->id }}">
                            <div class="card-btn">更多資訊</div>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="banner2">
            <img src="{{ asset('img/LF_LOGO_W.png') }}" alt="">
            <div class="slogan"><span>品質要第一</span><span>服務需至上</span><span>環境無汙染</span><span>工作零災害</span></div>
        </div>


        <div class="introduction-area">
            <div class="service-series">
                <div class="service-title">服務項目</div>
                <div class="service-showcase">
                    <div class="service-item">廢棄物清除業</div>
                    <div class="service-item">廢棄物資源回收業</div>
                    <div class="service-item">病媒防治業</div>
                    <div class="service-item">其他環境衛生</div>
                    <div class="service-item">污染防治服務業</div>
                    <div class="service-item">機密文件銷毀</div>
                    <div class="service-item">其他工程業</div>
                </div>
            </div>
            <div class="work-sop">
                <div class="work-title">報價流程</div>
                <div class="work-card-showcase">
                    <div class="work-card">
                        <div class="work-icon">
                            <img src="{{ asset('img/index/SVG-step1.svg') }}" alt="">
                        </div>
                        <div class="work-name">詢問報價</div>
                        <img class="arrow" src="{{ asset('img/index/SVG-next.svg') }}" alt="">
                    </div>

                    <div class="work-card">
                        <div class="work-icon">
                            <img src="{{ asset('') }}img/index/SVG-step2.svg" alt="">

                        </div>
                        <div class="work-name">提供詳細資訊</div>
                        <img class="arrow" src="{{ asset('img/index/SVG-next.svg') }}" alt="">
                    </div>


                    <div class="work-card">
                        <div class="work-icon">
                            <img src="{{ asset('img/index/SVG-step3.svg') }}" alt="">
                        </div>
                        <div class="work-name">現場場勘</div>
                        <img class="arrow" src="{{ asset('img/index/SVG-next.svg') }}" alt="">
                    </div>


                    <div class="work-card">
                        <div class="work-icon">
                            <img src="{{ asset('img/index/SVG-step4.svg') }}" alt="">

                        </div>
                        <div class="work-name">報價</div>
                        <img class="arrow" src="{{ asset('img/index/SVG-next.svg') }}" alt="">
                    </div>


                    <div class="work-card">
                        <div class="work-icon">
                            <img src="{{ asset('img/index/SVG-step5.svg') }}" alt="">

                        </div>
                        <div class="work-name">雙方簽約</div>
                        <img class="arrow" src="{{ asset('img/index/SVG-next.svg') }}" alt="">
                    </div>


                    <div class="work-card">
                        <div class="work-icon">
                            <img src="{{ asset('img/index/SVG-step6.svg') }}" alt="">

                        </div>
                        <div class="work-name">清運日前一天完成放桶，並依合約時間開始清運。</div>
                    </div>
                </div>

            </div>
            <div id="question-board">
                <div class="question-title">相關問題</div>
                <div class="question-showcase">
                    <div class="question-content">
                        <div class="question">問:服務區域</div>
                        <div class="answer">答:台中市市內八區及大里區、太平區、烏日區。</div>
                    </div>
                    <div class="question-content">
                        <div class="question">問：可以開發票嗎?</div>
                        <div class="answer">答：可以 。</div>
                    </div>
                    <div class="question-content">
                        <div class="question">問：是否協助辦理停徵清除處理費?</div>
                        <div class="answer">答：本公司免費協助已簽約客戶代辦停徵清除處理費。</div>
                    </div>
                    <div class="question-content">
                        <div class="question">問：我要如何登記載運大型傢俱?</div>
                        <div class="answer">答：委託民營單位收運之社區大樓，可由管委會來電洽詢；如為臺中市政府環境保護局委託代清除機構代清運之服務對象，請備好水單後逕行來電洽詢。</div>
                    </div>
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

    <script src="{{ asset('js/header.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
