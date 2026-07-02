<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($pageTitle ?? $site['name']) ?></title>
<meta name="description" content="<?= htmlspecialchars($site['tagline']) ?> — Spitex Wohl De Hei, Biel/Bienne. Grundpflege, Behandlungspflege, Kinderspitex, Palliative Pflege und mehr.">
<meta name="color-scheme" content="light dark">
<link rel="icon" href="assets/logo.svg" type="image/svg+xml">
<script>
/* Set the theme before CSS loads so there's no flash of the wrong palette. */
(function () {
  try {
    var stored = localStorage.getItem('spitex-theme');
    var theme = stored === 'dark' || stored === 'light'
      ? stored
      : (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
    document.documentElement.setAttribute('data-theme', theme);
  } catch (e) {}
})();
</script>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="site-header" id="siteHeader">
  <div class="header-inner">
    <a class="brand" href="index.php#top">
      <img src="assets/logo.svg" alt="<?= htmlspecialchars($site['name']) ?> Logo">
      <span class="brand-name"><?= htmlspecialchars($site['name']) ?><span>Pflege mit Herz</span></span>
    </a>

    <nav class="main-nav" id="mainNav" aria-label="Hauptnavigation">
      <ul>
        <li><a href="index.php#angebot">Unser Angebot</a></li>
        <li><a href="index.php#warum">Warum wir</a></li>
        <li><a href="index.php#ueber">Über uns</a></li>
        <li><a href="index.php#kontakt">Kontakt</a></li>
      </ul>
    </nav>

    <div class="header-cta">
      <a class="header-phone" href="tel:<?= htmlspecialchars($site['mobile_link']) ?>">
        <svg viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.5.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.5.1.4 0 .8-.3 1L6.6 10.8z"/></svg>
        <?= htmlspecialchars($site['mobile']) ?>
      </a>
      
      <a class="btn btn-primary" href="index.php#kontakt">Termin anfragen</a>
      <button class="nav-toggle" id="navToggle" aria-label="Menü öffnen" aria-expanded="false" aria-controls="mainNav">
        <span></span><span></span><span></span>
      </button>
      <button class="theme-toggle" id="themeToggle" type="button" aria-label="Dunkles Design umschalten" aria-pressed="false">
        <svg class="icon-sun" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4.2"/><path d="M12 2.5v2.4M12 19.1v2.4M4.4 4.4l1.7 1.7M17.9 17.9l1.7 1.7M2.5 12h2.4M19.1 12h2.4M4.4 19.6l1.7-1.7M17.9 6.1l1.7-1.7" stroke-linecap="round"/></svg>
        <svg class="icon-moon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 14.5A8.5 8.5 0 1110.5 4a6.7 6.7 0 009.5 10.5z"/></svg>
      </button>
    </div>
  </div>
</header>