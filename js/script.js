/**
 * Centro Salute Roma - Poliambulatorio
 * Single-page site: mobile nav, smooth scroll, header scroll state
 */

(function () {
  'use strict';

  var header = document.getElementById('header');
  var nav = document.getElementById('nav-menu');
  var navToggle = document.querySelector('.nav-toggle');
  // Tutti i link di ancoraggio (#… o index.php#…), non solo href^="#"
  var navLinks = document.querySelectorAll('.nav a[href*="#"]');

  // Scroll: add/remove class on header for shadow
  function onScroll() {
    if (!header) return;
    if (window.scrollY > 20) {
      header.classList.add('is-scrolled');
    } else {
      header.classList.remove('is-scrolled');
    }
  }

  // Mobile nav: open/close
  function toggleNav() {
    if (!nav || !navToggle) return;
    var isOpen = nav.classList.toggle('is-open');
    navToggle.setAttribute('aria-expanded', isOpen);
    document.body.style.overflow = isOpen ? 'hidden' : '';
  }

  function closeNav() {
    if (!nav || !navToggle) return;
    nav.classList.remove('is-open');
    navToggle.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  function isIndexPage() {
    var file = (window.location.pathname.split('/').pop() || '').toLowerCase();
    return file === 'index.php' || file === '';
  }

  // Scroll morbido + URL con hash (es. …/index.php#eventi) così si può copiare il link
  function handleNavClick(e) {
    var href = this.getAttribute('href');
    if (!href || href.indexOf('#') === -1) return;

    var hashPos = href.indexOf('#');
    var pathBefore = href.slice(0, hashPos);
    var hash = href.slice(hashPos);
    if (hash.length < 2) return;

    var onIndex = isIndexPage();

    // index.php#sezione da un’altra pagina: lascia al browser (navigazione piena)
    if ((pathBefore === 'index.php' || pathBefore.endsWith('/index.php')) && !onIndex) {
      return;
    }

    // Solo sulla home gestiamo #sezione e index.php#sezione
    if (pathBefore !== '' && pathBefore !== 'index.php' && !pathBefore.endsWith('/index.php')) {
      return;
    }

    var id = decodeURIComponent(hash.slice(1));
    var target = document.getElementById(id);
    if (!target) return;

    e.preventDefault();
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    target.scrollIntoView({ behavior: reduce ? 'auto' : 'smooth', block: 'start' });
    history.replaceState(null, '', window.location.pathname + window.location.search + hash);
    closeNav();
  }

  // Init
  if (navToggle) {
    navToggle.addEventListener('click', toggleNav);
  }

  navLinks.forEach(function (link) {
    link.addEventListener('click', handleNavClick);
  });

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll(); // initial state

  // Apertura diretta tipo /index.php#eventi: riallinea dopo il layout (anche su load).
  function scrollToHashIfPresent() {
    var hash = window.location.hash;
    if (!hash || hash.length < 2) return;
    var id = decodeURIComponent(hash.slice(1));
    if (!id) return;
    var el = document.getElementById(id);
    if (!el) return;
    el.scrollIntoView({ block: 'start', behavior: 'auto' });
  }

  document.addEventListener('DOMContentLoaded', scrollToHashIfPresent);
  window.addEventListener('load', scrollToHashIfPresent);

  // Close nav on resize to desktop (optional)
  window.addEventListener('resize', function () {
    if (window.innerWidth >= 768) {
      closeNav();
    }
  });

  // Form feedback: show message after redirect from invio.php
  (function () {
    var params = new URLSearchParams(window.location.search);
    var invio = params.get('invio');
    var msg = params.get('msg');
    var el = document.getElementById('form-feedback');
    if (!el || !invio) return;
    if (invio === 'ok') {
      el.textContent = 'Messaggio inviato correttamente. Ti risponderemo al più presto.';
      el.className = 'form-feedback form-feedback--success';
      el.hidden = false;
    } else if (invio === 'errore' && msg) {
      el.textContent = decodeURIComponent(msg);
      el.className = 'form-feedback form-feedback--error';
      el.hidden = false;
    }
    if (invio) {
      history.replaceState(null, '', window.location.pathname + window.location.hash);
    }
  })();

  // Cookie banner: show if consent not yet given
  (function () {
    var COOKIE_CONSENT_KEY = 'centrosaluteroma_cookie_consent';
    var banner = document.getElementById('cookie-banner');
    var acceptBtn = document.getElementById('cookie-accept');

    function hasConsent() {
      try {
        return localStorage.getItem(COOKIE_CONSENT_KEY) === 'true';
      } catch (e) {
        return false;
      }
    }

    function setConsent() {
      try {
        localStorage.setItem(COOKIE_CONSENT_KEY, 'true');
      } catch (e) {}
      if (banner) banner.hidden = true;
    }

    if (banner && !hasConsent()) {
      banner.hidden = false;
    }
    if (acceptBtn) {
      acceptBtn.addEventListener('click', setConsent);
    }
  })();
})();
