<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'Impressum — ' . $site['name'];
require __DIR__ . '/includes/header.php';
?>
<main class="container" style="padding:80px 28px;max-width:800px;">
  <span class="eyebrow">Rechtliches</span>
  <h1>Impressum</h1>
  <p><strong><?= htmlspecialchars($site['name']) ?></strong><br>
  <?= htmlspecialchars($site['address1']) ?><br>
  <?= htmlspecialchars($site['address2']) ?><br>
  Schweiz</p>

  <p>Telefon: <a href="tel:<?= htmlspecialchars($site['phone_link']) ?>"><?= htmlspecialchars($site['phone']) ?></a><br>
  Mobile: <a href="tel:<?= htmlspecialchars($site['mobile_link']) ?>"><?= htmlspecialchars($site['mobile']) ?></a><br>
  E-Mail: <a href="mailto:<?= htmlspecialchars($site['email']) ?>"><?= htmlspecialchars($site['email']) ?></a></p>

  <h2>Haftungsausschluss</h2>
  <p>Alle Inhalte dieser Webseite wurden mit Sorgfalt zusammengestellt. Für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte übernehmen wir jedoch keine Gewähr.</p>

  <p><a class="btn btn-outline" href="index.php">&larr; Zurück zur Startseite</a></p>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
