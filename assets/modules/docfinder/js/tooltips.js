/*
 * DocFinder - tooltips
 *
 * Copy of evo.tooltips() from manager/media/script/main.js (Evolution 1.4).
 * The module page is a standalone document and does not load main.js,
 * so the [data-tooltip] icons are initialised here. The look comes from
 * the .evo-tooltip rules of the manager theme (style.css -> custom.css).
 */
(function () {
    'use strict';

    function dfTooltips(a) {
        a = 'string' === typeof a ? document.querySelectorAll(a) : a;
        if (!a || !a.length) {
            return;
        }
        var b = document.querySelector('.evo-tooltip');
        if (!b) {
            b = document.createElement('div');
            b.className = 'evo-tooltip';
            document.body.appendChild(b);
        }
        b.style.pointerEvents = 'none';
        var c = parseFloat(getComputedStyle(b).marginTop) || 0;
        for (var i = 0; i < a.length; i++) {
            a[i].addEventListener('mouseenter', function (e) {
                if (e.buttons) {
                    return;
                }
                var x = e.clientX, y = e.clientY;
                var t = this.getAttribute('data-tooltip');
                b.innerHTML = t ? (t.charAt(0) === '#' && document.querySelector(t) ? document.querySelector(t).innerHTML : t) : this.innerHTML;
                if (x + b.offsetWidth + (c * 2) > window.innerWidth) {
                    b.style.left = Math.round(x - b.offsetWidth - (c * 2)) + 'px';
                    b.classList.add('evo-tooltip-right');
                } else {
                    b.style.left = Math.round(x) + 'px';
                    b.classList.add('evo-tooltip-left');
                }
                if (y - (b.offsetHeight / 2) - c < 0) {
                    b.style.top = 0;
                } else if (y + (b.offsetHeight / 2) > window.innerHeight) {
                    b.style.top = Math.round(window.innerHeight - b.offsetHeight) - (c * 2) + 'px';
                } else {
                    b.style.top = Math.round(y - (b.offsetHeight / 2)) - c + 'px';
                }
                b.classList.add('show');
            });
            a[i].addEventListener('mouseleave', function () {
                b.className = 'evo-tooltip';
            });
            a[i].addEventListener('mousedown', function () {
                b.className = 'evo-tooltip';
            });
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function () {
            dfTooltips('#docfinder [data-tooltip]');
        });
    } else {
        dfTooltips('#docfinder [data-tooltip]');
    }
})();
