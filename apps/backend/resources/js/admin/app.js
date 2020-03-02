require('./bootstrap');

import * as Helper from './helpers.js';

// index admin page
document.addEventListener('DOMContentLoaded', function() {
    let width = window.innerWidth;
    let nav = document.getElementById('main_navigation');

    if (width < 1000) {
        Helper.removeClassFromElement(nav, /show/g);
    }
});

window.addEventListener('resize', function(event){
    let width = window.innerWidth;
    let nav = document.getElementById('main_navigation');

    if (width < 1000) {
        Helper.removeClassFromElement(nav, /show/g);
    } else {
        Helper.addClassToElement(nav, 'show');
    }
});
