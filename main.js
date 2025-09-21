'use strict';

window.addEventListener('load', (event) => {

    // スマホのメニュー表示制御
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

    // 選択中のナビにアクティブclassを付与
    document.querySelectorAll('.page_item').forEach(ele => {
        if (ele.children[0].href === window.location.href) {
            ele.children[0].classList.add('active')
        }
    })
});