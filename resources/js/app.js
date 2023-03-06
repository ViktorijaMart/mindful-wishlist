import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

console.log('hello')

const dropdownBtn = document.getElementById('btn');
const dropdownLinks = document.getElementById('dropdown_links');
const toggleArrowIcon = document.getElementById('arrow_icon');

const toggleDropdown = function () {
    dropdownLinks.classList.toggle("show_dropdown");
    toggleArrowIcon.classList.toggle("arrow_icon");
    console.log('clicked')
};

dropdownBtn.addEventListener("click", function (e) {
    e.stopPropagation();
    toggleDropdown();
});

document.documentElement.addEventListener("click", function () {
    if (dropdownLinks.classList.contains("show_dropdown")) {
        toggleDropdown();
    }
});
