<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/contactUs.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/header&footer.css') }}">
</head>

<body>



    <header>
        <div class="nav-bar">
            <div class="logo-container">
                <a class="logo" href="./">
                    <img class="logo-img" src="./img/Logo.png">
                </a>
                <div class="price-btn"><a href="./contactUs">我要估價&nbsp;&nbsp; <img
                            src="./img/header&footer/SVG-search.svg" alt=""></a></div>
            </div>

            <ul class="nav-btn-list">

                <li class="nav-btn btn-aboutUs"><a href="./aboutUs">關於我們</a>
                    <ul>
                        <li><a href="./aboutUs#info-area">證照執照</a></li>
                        <li><a href="./aboutUs#info-area">設備機具</a></li>
                        <li><a href="./aboutUs#history-area">創建歷史</a></li>
                        <li><a href="./benefits">員工福利</a></li>
                    </ul>
                </li>

                <li class="nav-btn"><a href="./index#bulletin-board">最新消息</a>
                    <ul>
                        <li><a href="./index#bulletin-board">最新消息</a></li>
                        <li><a href="./index#bulletin-board">人員招募</a></li>
                    </ul>
                </li>

                <li class="nav-btn"><a href="./service">服務實績</a>
                    <ul>
                        <li><a href="./service">績效照片</a></li>
                        <li><a href="./service">公益服務</a></li>
                    </ul>
                </li>

                <li class="nav-btn"><a href="./index#question-board">常見問題</a></li>
                <li class="nav-btn"><a href="./contactUs">聯絡我們</a></li>
            </ul>

            <div class="social-media-area">
                <a href="./contactUs">
                    <img src="./img/header&footer/SVG-mail.svg" alt="">
                </a>
                <a href="https://www.facebook.com/zzz70042123" target="_blank">
                    <img src="./img/header&footer/SVG-FB.svg" alt="">
                </a>

            </div>
        </div>

        <div class="phone-ham"></div>
        <div class="phone-menu">
            <ul class="phone-btn-list">

                <li class="phone-btn phone-about-btn">關於我們
                    <ul class="phone-about-list">
                        <li><a href="./aboutUs#info-area">證照執照</a></li>
                        <li><a href="./aboutUs#info-area">設備機具</a></li>
                        <li><a href="./aboutUs#history-area">創建歷史</a></li>
                        <li><a href="./benefits">員工福利</a></li>
                    </ul>
                </li>

                <li class="phone-btn phone-news-btn">最新消息
                    <ul class="phone-news-list">
                        <li><a href="./index#bulletin-board">最新消息</a></li>
                        <li><a href="./index#bulletin-board">人員招募</a></li>
                    </ul>
                </li>

                <li class="phone-btn phone-service-btn">服務實績
                    <ul class="phone-service-list">
                        <li><a href="./service">績效照片</a></li>
                        <li><a href="./service">公益服務</a></li>
                    </ul>
                </li>

                <li class="phone-btn"><a href="./index#question-board">常見問題</a></li>
                <li class="phone-btn"><a href="./contactUs">聯絡我們</a></li>
            </ul>

            <div class="phone-social-media">
                <a href="https://www.facebook.com/zzz70042123" target="_blank">
                    <img src="./img/header&footer/SVG-FB.svg" alt="">
                </a>
                <a href="./contactUs">
                    <img src="./img/header&footer/SVG-mail.svg" alt="">
                </a>

            </div>

        </div>
    </header>


    <main>
        <form action="" get="post">
            <h2>聯絡我們</h2>
            <div class="contact-input-info">
                <label for="name">姓名<input id="name" type="text" name="name"></label>
                <label for="phone">電話<input id="phone" type="text" name="phone"></label>
                <label for="email">信箱<input id="email" type="text" name="email"></label>
                <p>需求勾選</p>
                <label for="common"><span>一般垃圾</span><input id="common" name="trash" type="checkbox"></label>
                <label for="uncommon"><span>資源回收</span><input id="uncommon" name="trash" type="checkbox"></label>
                <label for="notcommon"><span>其他</span><input id="notcommon" name="notcommon" type="checkbox"></label>
            </div>
            <div class="contact-input-context">
                <label for="context">內文</label>
                <textarea name="context" id="context"></textarea>
            </div>
            <input type="submit" value="送出">
        </form>

    </main>

    <footer>
        <a class="footer-logo" href="./">
            <img class="logo-img" src="./img/Logo.png">
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
                    <img src="./img/header&footer/SVG-FB-black.svg" alt="">
                </a>
                <a href="./contactUs">
                    <img src="./img/header&footer/SVG-mail-black.svg" alt="">
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

    <script src="./js/header.js"></script>
</body>

</html>
