<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/score.css') }}">
</head>

<body>
    <div class="container">
        <div class="block"></div>

        <div class="score-input">
            <h1>成績分級系統</h1>
            <h2>請輸入考試成績:</h2>

            <input type="text" id="score" placeholder="請輸入成績">
            <br>
            <div class="btn_all">
                <button class="sumbit">計算分數等級!</button>
                <button class="clear">清除</button>
            </div>

            <p class="output-text"></p>
        </div>
        <div class="score-level">
            <h1>成績參考標準</h1>
            <p>0~59 => 您的成績不及格</p>
            <p>60~69 => 您的成績勉勉強強</p>
            <p>70~79 => 您的成績普普通通</p>
            <p>80~89 => 您的成績好像不錯</p>
            <p>90~99 => 您的成績很棒</p>
            <p>100 => 您的成績有夠讚ㄝ</p>
        </div>
    </div>


    <script>
        var score = document.querySelector('#score');
        var btn_sumbit = document.querySelector('.sumbit')
        var btn_clear = document.querySelector('.clear');
        var output = document.querySelector('.output-text');


        btn_sumbit.onclick = function() {
            let getvalue = score.value;
            let socre_level = "";
            if (getvalue > 0 && getvalue <= 59) {
                score_level = "不及格";
            } else if (getvalue >= 60 && getvalue <= 69) {
                score_level = "勉勉強強";
                output.innerHTML = "您輸入的分數為" + getvalue + "分，您的學期成績為" + score_level + "!!";

            } else if (getvalue >= 70 && getvalue <= 79) {
                score_level = "普普通通";
                output.innerHTML = "您輸入的分數為" + getvalue + "分，您的學期成績為" + score_level + "!!";
            } else if (getvalue >= 80 && getvalue <= 89) {
                score_level = "好像不錯";
                output.innerHTML = "您輸入的分數為" + getvalue + "分，您的學期成績為" + score_level + "!!";
            } else if (getvalue >= 90 && getvalue <= 99) {
                score_level = "很棒";
                output.innerHTML = "您輸入的分數為" + getvalue + "分，您的學期成績為" + score_level + "!!";
            } else if (getvalue == 100) {
                score_level = "有夠讚ㄝ";
                output.innerHTML = "您輸入的分數為" + getvalue + "分，您的學期成績為" + score_level + "!!";
            } else {
                score_level = "您輸入的成績有誤，請重新輸入";
                output.innerHTML = score_level;
            }



        }

        btn_clear.onclick = function(clear) {
            score.value = "";
            output.innerHTML = "";
        }
    </script>
</body>

</html>
