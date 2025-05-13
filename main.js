'use strict';

// スマホのメニュー表示制御
window.addEventListener('load', (event) => {
    let open = document.querySelector('#open');
    let close = document.querySelector('#close');
    let overlay = document.querySelector('.overlay');

    open.addEventListener('click', () => {
        overlay.classList.add('show');
        open.classList.add('hide');
    });

    close.addEventListener('click', () => {
        overlay.classList.remove('show');
        open.classList.remove('hide');
    });
});