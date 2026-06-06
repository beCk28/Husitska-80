(function () {
  'use strict';

  const header = document.getElementById('header');
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileOverlay = document.getElementById('mobile-overlay');
  const menuIconOpen = document.getElementById('menu-icon-open');
  const menuIconClose = document.getElementById('menu-icon-close');
  const navLinks = document.querySelectorAll('.nav-link');
  const sections = document.querySelectorAll('section[id]');
  const revealElements = document.querySelectorAll('.reveal');
  const reservationForm = document.getElementById('reservation-form');
  const formSuccess = document.getElementById('form-success');
  const formError = document.getElementById('form-error');
  const dateInput = document.getElementById('date');

  let menuOpen = false;

  function setMinDate() {
    if (!dateInput) return;
    const today = new Date();
    const yyyy = today.getFullYear();
    const mm = String(today.getMonth() + 1).padStart(2, '0');
    const dd = String(today.getDate()).padStart(2, '0');
    dateInput.min = `${yyyy}-${mm}-${dd}`;
  }

  function updateHeader() {
    if (window.scrollY > 40) {
      header.classList.add('bg-luxury-black/90', 'backdrop-blur-md', 'border-b', 'border-luxury-border/50', 'shadow-lg', 'shadow-black/20');
    } else {
      header.classList.remove('bg-luxury-black/90', 'backdrop-blur-md', 'border-b', 'border-luxury-border/50', 'shadow-lg', 'shadow-black/20');
    }
  }

  function openMenu() {
    menuOpen = true;
    mobileMenu.classList.add('open');
    mobileOverlay.classList.remove('opacity-0', 'pointer-events-none');
    mobileOverlay.classList.add('opacity-100');
    menuIconOpen.classList.add('hidden');
    menuIconClose.classList.remove('hidden');
    menuBtn.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }

  function closeMenu() {
    menuOpen = false;
    mobileMenu.classList.remove('open');
    mobileOverlay.classList.add('opacity-0', 'pointer-events-none');
    mobileOverlay.classList.remove('opacity-100');
    menuIconOpen.classList.remove('hidden');
    menuIconClose.classList.add('hidden');
    menuBtn.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  function toggleMenu() {
    menuOpen ? closeMenu() : openMenu();
  }

  function setActiveNav() {
    const scrollPos = window.scrollY + 120;
    let current = '';

    sections.forEach((section) => {
      const top = section.offsetTop;
      const height = section.offsetHeight;
      if (scrollPos >= top && scrollPos < top + height) {
        current = section.getAttribute('id');
      }
    });

    navLinks.forEach((link) => {
      const href = link.getAttribute('href').slice(1);
      link.classList.toggle('active', href === current);
      link.classList.toggle('text-gold-400', href === current);
      link.classList.toggle('text-gray-300', href !== current);
    });
  }

  function initReveal() {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
    );

    revealElements.forEach((el) => observer.observe(el));
  }

  function handleSmoothScroll(e) {
    const href = e.currentTarget.getAttribute('href');
    if (!href || !href.startsWith('#')) return;

    const target = document.querySelector(href);
    if (!target) return;

    e.preventDefault();
    closeMenu();

    const headerHeight = header.offsetHeight;
    const top = target.getBoundingClientRect().top + window.scrollY - headerHeight;

    window.scrollTo({ top, behavior: 'smooth' });
    history.pushState(null, '', href);
  }

  function validateForm(formData) {
    const name = formData.get('name')?.trim();
    const phone = formData.get('phone')?.trim();
    const service = formData.get('service');
    const date = formData.get('date');
    const time = formData.get('time');

    if (!name || !phone || !service || !date || !time) return false;

    const phoneDigits = phone.replace(/\D/g, '');
    if (phoneDigits.length < 9) return false;

    return true;
  }

  function handleFormSubmit(e) {
    e.preventDefault();
    formSuccess.classList.add('hidden');
    formError.classList.add('hidden');

    const formData = new FormData(reservationForm);

    if (!validateForm(formData)) {
      formError.classList.remove('hidden');
      return;
    }

    const data = Object.fromEntries(formData.entries());
    console.log('Rezervace:', data);

    formSuccess.classList.remove('hidden');
    reservationForm.reset();
    setMinDate();

    setTimeout(() => {
      formSuccess.classList.add('hidden');
    }, 6000);
  }

  menuBtn?.addEventListener('click', toggleMenu);
  mobileOverlay?.addEventListener('click', closeMenu);

  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', handleSmoothScroll);
  });

  window.addEventListener('scroll', () => {
    updateHeader();
    setActiveNav();
  }, { passive: true });

  window.addEventListener('resize', () => {
    if (window.innerWidth >= 1024 && menuOpen) closeMenu();
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && menuOpen) closeMenu();
  });

  reservationForm?.addEventListener('submit', handleFormSubmit);

  setMinDate();
  updateHeader();
  setActiveNav();
  initReveal();
})();
