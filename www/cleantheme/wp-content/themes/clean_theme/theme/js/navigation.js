/* eslint no-unused-expressions: off */
(function() {
    'use strict';
    var navBar = document.querySelectorAll('nav.navbar'),
        navLen = navBar.length,
        menuLinks, menuLen, subMenuParent;

    navLen && attachSubMenuListeners();

    function attachSubMenuListeners() {
        for (var j = 0; j < navLen; j++) {
            if (navBar[j].querySelectorAll('ul.sub-menu').length) {
                menuLinks = navBar[j].querySelectorAll('.menu > li > a');
                menuLen = menuLinks.length;

                for (var i = 0; i < menuLen; i++) {

                    if (window.innerWidth > 768) {
                        menuLinks[i].addEventListener('mouseover', openSubMenu);
                    } else {
                        menuLinks[i].addEventListener('click', openSubMenu);
                    }

                }
            }
        }
    }

    function closeSubMenu(event) {
        var el = subMenuParent,
            isClickInside = el.contains(event.target);

        if (!isClickInside) {
            el.classList.remove('active');
            document.removeEventListener('click', closeSubMenu);
        }
    }

    function closeAllSubMenus() {
        for (var j = 0; j < navLen; j++) {
            if (navBar[j].querySelectorAll('ul.sub-menu').length) {
                menuLinks = navBar[j].querySelectorAll('.menu > li');
                menuLen = menuLinks.length;

                for (var i = 0; i < menuLen; i++) {
                    menuLinks[i].classList.remove('active');
                }
            }
        }
    }

    function openSubMenu(event) {
        this.nextElementSibling.classList.contains('sub-menu') && event.preventDefault();

        if (!this.parentNode.classList.contains('active')) {
            if (subMenuParent && subMenuParent !== this.parentNode) {
                closeAllSubMenus();
            }

            subMenuParent = this.parentNode;
            subMenuParent.classList.add('active');
            document.addEventListener('click', closeSubMenu);
        } else {
            subMenuParent.classList.remove('active');
            document.removeEventListener('click', closeSubMenu);
        }
    }
}());