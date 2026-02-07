/**
 * Centro Salute Roma - Poliambulatorio
 * Single-page site: mobile nav, smooth scroll, header scroll state
 */

(function () {
  'use strict';

  var header = document.getElementById('header');
  var nav = document.getElementById('nav-menu');
  var navToggle = document.querySelector('.nav-toggle');
  var navLinks = document.querySelectorAll('.nav a[href^="#"]');

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

  // Smooth scroll for anchor links (same page)
  function handleNavClick(e) {
    var href = this.getAttribute('href');
    if (href === '#') return;
    var target = document.querySelector(href);
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      closeNav();
    }
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
