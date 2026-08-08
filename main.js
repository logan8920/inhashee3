/* =========================================================
   INHASHEE — shared site behaviour
   ========================================================= */

document.addEventListener('DOMContentLoaded', function () {

  /* ---------- mobile nav toggle ---------- */
  var toggle = document.querySelector('.nav-toggle');
  var nav = document.querySelector('.main-nav');
  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      var isOpen = nav.classList.toggle('open');
      toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
    nav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () { nav.classList.remove('open'); });
    });
  }

  /* ---------- product filter chips (products.html) ---------- */
  var chips = document.querySelectorAll('.filter-chip');
  var cards = document.querySelectorAll('[data-category]');
  if (chips.length && cards.length) {
    chips.forEach(function (chip) {
      chip.addEventListener('click', function () {
        chips.forEach(function (c) { c.classList.remove('active'); });
        chip.classList.add('active');
        var target = chip.getAttribute('data-filter');
        cards.forEach(function (card) {
          var match = target === 'all' || card.getAttribute('data-category') === target;
          card.style.display = match ? '' : 'none';
        });
      });
    });
  }

  /* ---------- newsletter form (index / footer) ---------- */
  document.querySelectorAll('.newsletter-form').forEach(function (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var input = form.querySelector('input[type="email"]');
      var note = form.parentElement.querySelector('.form-note');
      if (!input) return;
      var valid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.value.trim());
      if (!note) return;
      if (valid) {
        note.textContent = 'Thanks — you\'re on the list.';
        note.style.color = 'var(--sage)';
        input.value = '';
      } else {
        note.textContent = 'Enter a valid email address.';
        note.style.color = '#B5443A';
      }
    });
  });

  /* ---------- contact form validation (contact.html) ---------- */
  var contactForm = document.querySelector('.contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      var valid = true;
      var fields = contactForm.querySelectorAll('[data-required]');

      fields.forEach(function (field) {
        var wrapper = field.closest('.field');
        var value = field.value.trim();
        var ok = value.length > 0;

        if (field.type === 'email' && ok) {
          ok = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
        }
        if (field.type === 'tel' && ok) {
          ok = /^[0-9+\-\s()]{7,}$/.test(value);
        }

        if (wrapper) wrapper.classList.toggle('error', !ok);
        if (!ok) valid = false;
      });

      var status = contactForm.querySelector('.form-status');
      if (valid) {
        status.textContent = 'Thanks for reaching out — we\'ll get back to you within 1–2 business days.';
        status.className = 'form-status show success';
        contactForm.reset();
      } else if (status) {
        status.textContent = 'Please fix the highlighted fields and try again.';
        status.className = 'form-status show';
        status.style.background = '#F5E1DE';
        status.style.color = '#8A2E24';
      }
    });
  }

  /* ---------- active nav link (fallback if not set server-side) ---------- */
  var here = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.main-nav a').forEach(function (link) {
    if (link.getAttribute('href') === here) link.classList.add('active');
  });

});
