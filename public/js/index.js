var news_area = document.querySelector('.news-area');
var employ_area = document.querySelector('.employ-area');
var news_btn = document.querySelector('.news-title');
var employ_btn = document.querySelector('.employ-title');


news_btn.addEventListener('click', toggle_area_news);
employ_btn.addEventListener('click', toggle_area_employ);





//function

function toggle_area_news() {
    news_area.classList.remove('area_none');
    employ_area.classList.add('area_none');
}

function toggle_area_employ() {
    news_area.classList.add('area_none');
    employ_area.classList.remove('area_none');
}

//--End of function