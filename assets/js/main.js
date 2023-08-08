(function (factory) {
    typeof define === 'function' && define.amd ? define('main', factory) :
    factory();
})((function () { 'use strict';

    const toggleMenu = () => {
        const menu = document.querySelector('.JS__header-menu');
        const btnOpenMenu = document.querySelector('.JS__toggle-menu');
        const { body } = document;

        let isMenuOpen = false;

        btnOpenMenu.addEventListener('click', (e) => {
            if (!isMenuOpen) {
                menu.style.display = 'block';
                btnOpenMenu.classList.toggle('active');
                setTimeout(() => {
                    menu.style.opacity = '1';
                    body.classList.add('overflow-hidden');
                }, 10);
            } else {
                menu.style.opacity = '0';
                btnOpenMenu.classList.toggle('active');
                setTimeout(() => {
                    menu.style.display = 'none';
                    body.classList.remove('overflow-hidden');
                }, 300);
            }

            isMenuOpen = !isMenuOpen;
        });
    };

    document.addEventListener("DOMContentLoaded", () => {
    	toggleMenu();
    });

}));
