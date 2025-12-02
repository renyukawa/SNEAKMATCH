/**
 * Language Dropdown Module
 * Handles language selection and persistence via cookies
 */

(function() {
  'use strict';

  /**
   * Close all open language dropdown menus
   */
  function closeLang() {
    document.querySelectorAll('.language-dropdown').forEach(function(el) {
      el.classList.remove('open');
    });
  }

  /**
   * Toggle dropdown on button click
   */
  document.addEventListener('click', function(e) {
    var btn = e.target.closest && e.target.closest('.language-dropdown .lang-btn');
    var el = btn && btn.closest('.language-dropdown');
    
    if (!el) {
      closeLang();
      return;
    }
    
    var wasOpen = el.classList.contains('open');
    closeLang();
    if (!wasOpen) {
      el.classList.add('open');
       console.log('Language dropdown opened');
    }
  }, false);

  /**
   * Handle language selection
   */
  document.addEventListener('click', function(e) {
    var a = e.target.closest && e.target.closest('.language-dropdown .lang-content a');
    if (!a) return;
    
    e.preventDefault();
    var lang = a.getAttribute('data-lang') || 'en';
     console.log('Language selected:', lang);
    
    // Set cookie for language preference
    try {
      document.cookie = 'site_lang=' + encodeURIComponent(lang) + ';path=/;max-age=' + (60 * 60 * 24 * 365);
       console.log('Cookie set to:', lang);
    } catch(err) {
      console.error('Failed to set language cookie:', err);
    }
    
    // Update visible label and flag image immediately
    var wrap = a.closest('.language-dropdown');
    if (wrap) {
      var label = wrap.querySelector('.lang-label');
      var btnImg = wrap.querySelector('.lang-btn img');
      var srcImg = a.querySelector('img');
      
      if (label) {
        label.textContent = a.textContent.trim();
      }
      if (btnImg && srcImg) {
        btnImg.src = srcImg.src;
        btnImg.alt = srcImg.alt || a.textContent.trim();
      }
    }
    
    // Reload page to let server-side pick up cookie
    setTimeout(function() {
      location.reload();
    }, 180);
  }, false);

  /**
   * On page load, restore language selection from cookie
   */
  document.addEventListener('DOMContentLoaded', function() {
    try {
      var parts = document.cookie.split(';').map(function(s) {
        return s.trim();
      });
      var cookie = parts.find(function(p) {
        return p.indexOf('site_lang=') === 0;
      });
      
      if (cookie) {
        var cur = decodeURIComponent(cookie.split('=')[1] || 'en');
        var a = document.querySelector('.language-dropdown .lang-content a[data-lang="' + cur + '"]');
        if (a) {
          var lbl = document.querySelector('.language-dropdown .lang-label');
          if (lbl) {
            lbl.textContent = a.textContent.trim();
            // also update the flag image in the button
            var btnImg = document.querySelector('.language-dropdown .lang-btn img');
            var srcImg = a.querySelector('img');
            if (btnImg && srcImg) {
              btnImg.src = srcImg.src;
              btnImg.alt = srcImg.alt || lbl.textContent.trim();
            }
          }
        }
      }
    } catch(e) {
      console.error('Failed to restore language from cookie:', e);
    }
  });

  /**
   * Close dropdown on ESC key
   */
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      closeLang();
    }
  });
})();
