<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/game.css')}}">
</head>

<body>
    <div class="all">
        <div class="start_area">
            <button class="start_btn" onclick="start_btn()">開始遊戲</button>
            <div class="start_text">
                <h1>色差測試遊戲<br>挑戰神的領域</h1>
                <p>遊戲規則:<br>
                    請點擊顏色不同的方塊<br>
                    若點擊正確則進入下一關並且+1分<br>
                    錯誤則-1分<br>
                    挑戰一下自己的極限吧!
                </p>
            </div>
        </div>
        <div class="game_area">
            <div class="score_box"></div>
            <div class="game_block"></div>
            <div class="game_area_footer">
                <div class="time_box"></div>
                <button class="end_btn" onclick="end_page()">結束遊戲</button>
                <button class="hint_btn" onclick="hint()">提示</button>
            </div>

        </div>
        <div class="end_area">
            <div class="end_block">
                <div class="text">
                    <h1>!遊戲結束!</h1>
                    <br>
                    <p class="end_score_box"></p>
                    <br>
                    <p class="end_comments"></p>
                    <br>
                    <button class="restart" onclick="re_start()">重新開始</button>

                </div>
            </div>

        </div>
    </div>





    <script>

        const start_area = document.querySelector('.start_area');

        const game_block = document.querySelector('.game_block');
        const game_area = document.querySelector('.game_area');
        const score_box = document.querySelector('.score_box');
        const time_box = document.querySelector('.time_box');

        const end_area = document.querySelector('.end_area');
        const end_score = document.querySelector('.end_score_box');
        const end_comments = document.querySelector('.end_comments');

        const level_Num = Math.floor((Math.random() * (level * level)));

        let r = Math.floor(Math.random() * 256);
        let g = Math.floor(Math.random() * 256);
        let b = Math.floor(Math.random() * 256);
        let color = `rgb(${r}, ${g},${b})`;
        let answer = `rgb(${r - stage}, ${g - stage},${b - stage})`;

        var level = 2;
        var stage = 30;
        var score = 0;
        var timeleft = 60;
        var timer1
        var timer2




        function start_btn() {
            timer1 = setInterval(function timer_60sec() { }, 60000);
            timer2 = setInterval(function time_left() {
                timeleft--;
                time_box.innerHTML = "剩餘時間:" + timeleft + "秒";
                if (timeleft <= 0) {
                    clearInterval(timer2);
                    end_page();
                }

            }, 1000);

            game_area.classList.toggle('block_display');
            start_area.classList.toggle('block_none');

            time_box.innerHTML = "剩餘時間:" + timeleft + "秒";
            score_box.innerHTML = score;

            check_Level();
        }

        function check_Level() {

            if (score <= 5) {
                putblock();
            }

            else if (score > 5 && score <= 10 && level <= 3) {
                level = 3;
                stage = 30;
                putblock();
            }
            else if (score > 10 && score <= 15&& level <= 4) {
                level = 4;
                stage = 25;
                putblock();
            }
            else if (score > 15 && score <= 20&& level <= 5) {
                level = 5;
                stage = 20;
                putblock();
            }
            else if (score > 20 && score <= 25&& level <= 6) {
                level = 6;
                stage = 15;
                putblock();
            }
            else {
                level = 7;
                stage = 10;
                putblock();
            }
        }

        function putblock() {

            const level_Num = Math.floor((Math.random() * (level * level)));
            let r = Math.floor(Math.random() * 256);
            let g = Math.floor(Math.random() * 256);
            let b = Math.floor(Math.random() * 256);

            let color = `rgb(${r}, ${g},${b})`;
            let answer = `rgb(${r - stage}, ${g - stage},${b - stage})`;

            for (let i = 0; i < (level * level); i++) {

                if (i == level_Num) {
                    game_block.innerHTML += `<box class="level${level} current" style="background-color:${answer};" onclick="check('right');"></box>`
                }
                else {
                    game_block.innerHTML += `<box class="level${level}" style="background-color:${color};" onclick="check('wrong')"></box>`
                }
            }


        }

        function score_Add() {
            game_block.innerHTML = ``;
            score++;
            check_Level();
            score_box.innerHTML = score;
        }

        function check(which) {
            if (which == "right") {
                score_Add()
            }
            else {
                score--;
                score_box.innerHTML = score;
            }
        }

        function end_page() {

            game_area.classList.replace('block_display', 'block_none');
            end_area.classList.toggle('block_display');
            end_score.innerHTML = "您的分數為" + score + "分";
            if (score < 0) {
                end_comments.innerHTML = "你也太爛了吧";
            }
            else if (score < 5) {
                end_comments.innerHTML = "你的眼睛勉勉強強拉";
            }
            else if (score < 10) {
                end_comments.innerHTML = "你的眼睛有及格";
            }
            else if (score < 15) {
                end_comments.innerHTML = "你的眼睛不錯ㄛ";
            }
            else if (score < 20) {
                end_comments.innerHTML = "你的眼睛很有料ㄛ";
            }
            else {
                end_comments.innerHTML = "你是神之眼吧";
            }
        }

        function hint() {
            const current_answer = document.querySelector('.current')
            current_answer.classList.add('hint');
            score--;
            score_box.innerHTML = score;
        }

        function re_start() {
            clearInterval(timer1);
            clearInterval(timer2);


            level = 2;
            game_block.innerHTML = ``;
            putblock()

            stage = 30;

            score = 0;
            score_box.innerHTML = score;

            timeleft = 60;
            time_box.innerHTML = "剩餘時間:" + timeleft + "秒";

            timer1 = setInterval(function timer_30sec() { }, 60000);
            timer2 = setInterval(function time_left() {
                timeleft--;
                time_box.innerHTML = "剩餘時間:" + timeleft + "秒";
                if (timeleft <= 0) {
                    clearInterval(timer2);
                    end_page();
                }

            }, 1000);


            end_area.classList.toggle('block_display');
            game_area.classList.replace('block_none', 'block_display');
        }



    </script>
</body>

</html>
