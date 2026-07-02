<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($pageTitle ?? $site['name']) ?></title>
<meta name="description" content="<?= htmlspecialchars($site['tagline']) ?> — Spitex Wohl De Hei, Biel/Bienne. Grundpflege, Behandlungspflege, Kinderspitex, Palliative Pflege und mehr.">
<link rel="icon" href="assets/logo.svg" type="image/svg+xml">
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
    </div>
  </div>
</header>
