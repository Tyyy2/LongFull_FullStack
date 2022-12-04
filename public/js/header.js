var phone_ham = document.querySelector('.phone-ham');
var phone_menu = document.querySelector('.phone-menu');
var phone_list = document.querySelectorAll('.phone-btn-list');


phone_ham.addEventListener('click', function phone_menu_toggle() {
    phone_menu.classList.toggle('phone-menu-toggle');

}
);


document.querySelector('.phone-about-btn').onclick = function () {
    document.querySelector('.phone-about-list').classList.toggle('about-list-toggle');
}

document.querySelector('.phone-news-btn').onclick = function () {
    document.querySelector('.phone-news-list').classList.toggle('news-list-toggle');
}

document.querySelector('.phone-service-btn').onclick = function () {
    document.querySelector('.phone-service-list').classList.toggle('service-list-toggle');
}


