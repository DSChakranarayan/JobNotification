document.addEventListener('DOMContentLoaded', function () {

  // ===== FAQ ACCORDION =====
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(function (item) {
    const question = item.querySelector('.faq-question');
    question.addEventListener('click', function () {
      const isActive = item.classList.contains('active');
      faqItems.forEach(function (el) {
        el.classList.remove('active');
      });
      if (!isActive) {
        item.classList.add('active');
      }
    });
  });

  // ===== FADE-UP SCROLL ANIMATION =====
  const fadeEls = document.querySelectorAll('.fade-up');
  if (fadeEls.length) {
    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.1 });
    fadeEls.forEach(function (el) {
      observer.observe(el);
    });
  }

  // ===== STATS COUNTER ANIMATION =====
  const statNumbers = document.querySelectorAll('.stat-number');
  if (statNumbers.length) {
    const counterObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          const el = entry.target;
          const target = parseInt(el.getAttribute('data-target'), 10);
          if (target && !el.classList.contains('counted')) {
            el.classList.add('counted');
            animateCounter(el, target);
          }
        }
      });
    }, { threshold: 0.5 });
    statNumbers.forEach(function (el) {
      counterObserver.observe(el);
    });
  }

  function animateCounter(el, target) {
    let current = 0;
    const step = Math.ceil(target / 80);
    const timer = setInterval(function () {
      current += step;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      el.textContent = current.toLocaleString();
    }, 20);
  }

  // ===== SMOOTH SCROLL FOR NAV LINKS =====
  const navLinks = document.querySelectorAll('.navbar-job .nav-link');
  navLinks.forEach(function (link) {
    link.addEventListener('click', function (e) {
      const href = link.getAttribute('href');
      if (href && href.startsWith('#')) {
        e.preventDefault();
        const target = document.querySelector(href);
        if (target) {
          const offset = 80;
          const top = target.getBoundingClientRect().top + window.scrollY - offset;
          window.scrollTo({ top: top, behavior: 'smooth' });
        }
        const navbarCollapse = document.getElementById('navbarMain');
        if (navbarCollapse.classList.contains('show')) {
          const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
          if (bsCollapse) bsCollapse.hide();
        }
      }
    });
  });

  // ===== NAVBAR ACTIVE LINK ON SCROLL =====
  const sections = document.querySelectorAll('section[id]');
  if (sections.length) {
    window.addEventListener('scroll', function () {
      let current = '';
      sections.forEach(function (section) {
        const top = section.offsetTop - 120;
        if (window.scrollY >= top) {
          current = section.getAttribute('id');
        }
      });
      navLinks.forEach(function (link) {
        link.classList.remove('active');
        const href = link.getAttribute('href');
        if (href === '#' + current) {
          link.classList.add('active');
        }
      });
    });
  }

  // ===== NAVBAR SHADOW ON SCROLL =====
  const navbar = document.querySelector('.navbar-job');
  if (navbar) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 50) {
        navbar.style.boxShadow = '0 4px 30px rgba(15, 23, 42, 0.1)';
      } else {
        navbar.style.boxShadow = '0 2px 20px rgba(15, 23, 42, 0.06)';
      }
    });
  }

});
