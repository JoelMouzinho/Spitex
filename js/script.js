document.addEventListener('DOMContentLoaded', function () {
  var header = document.getElementById('siteHeader');
  var toggle = document.getElementById('navToggle');
  var nav = document.getElementById('mainNav');

  if (toggle && header && nav) {
    toggle.addEventListener('click', function () {
      var isOpen = header.classList.toggle('open');
      toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });

    nav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        header.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  // Smooth-scroll offset correction isn't needed thanks to CSS scroll-behavior,
  // but close the mobile menu on Escape for keyboard users.
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && header && header.classList.contains('open')) {
      header.classList.remove('open');
      toggle.setAttribute('aria-expanded', 'false');
    }
  });

  // ---- "Unser Angebot" interactive detail panel ----
  var heading   = document.getElementById('servicesHeading');
  var desc      = document.getElementById('servicesDescription');
  var resetBtn  = document.getElementById('servicesReset');
  var rows      = document.querySelectorAll('.service-row');

  if (heading && desc && rows.length) {
    var defaultTitle = heading.getAttribute('data-default') || heading.textContent;
    var defaultDesc  = desc.getAttribute('data-default') || desc.textContent;

    function showDefault() {
      heading.textContent = defaultTitle;
      desc.textContent = defaultDesc;
      rows.forEach(function (r) {
        r.classList.remove('is-active');
        r.setAttribute('aria-pressed', 'false');
        var item = r.closest('li');
        if (item) item.hidden = false;
      });
      if (resetBtn) resetBtn.hidden = true;
    }

    function showService(row) {
      heading.textContent = row.getAttribute('data-title') || defaultTitle;
      desc.textContent = row.getAttribute('data-info') || defaultDesc;
      rows.forEach(function (r) {
        var active = r === row;
        r.classList.toggle('is-active', active);
        r.setAttribute('aria-pressed', active ? 'true' : 'false');
        var item = r.closest('li');
        if (item) item.hidden = !active;
      });
      if (resetBtn) resetBtn.hidden = false;
    }

    rows.forEach(function (row) {
      row.addEventListener('click', function () {
        // Clicking the already-active service returns to the overview.
        if (row.classList.contains('is-active')) {
          showDefault();
        } else {
          showService(row);
        }
      });
    });

    if (resetBtn) {
      resetBtn.addEventListener('click', showDefault);
    }
  }

  var themeToggle = document.getElementById('themeToggle');
  var rootEl = document.documentElement;

  if(themeToggle) {
    themeToggle.setAttribute('aria-pressed', rootEl.getAttribute('data-theme') === 'dark' ? 'true' : 'false');

    themeToggle.addEventListener('click', function () {
      var next = rootEl.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
      rootEl.setAttribute('data-theme', next);
      themeToggle.setAttribute('aria-pressed', next === 'dark' ? 'true' : 'false');
      try { localStorage.setItem('spitex-theme', next); } catch(e) {} 
    });
  }
});
