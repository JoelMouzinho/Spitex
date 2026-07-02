<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'Datenschutz — ' . $site['name'];
require __DIR__ . '/includes/header.php';
?>
<main class="container" style="padding:80px 28px;max-width:800px;">
  <span class="eyebrow">Rechtliches</span>
  <h1>Datenschutzerklärung</h1>
  <p>Wir nehmen den Schutz Ihrer persönlichen Daten ernst. Über das Kontaktformular übermittelte Angaben (Name, E-Mail, Telefon, Nachricht) verwenden wir ausschliesslich zur Bearbeitung Ihrer Anfrage und geben sie nicht an Dritte weiter.</p>

  <h2>Kontaktformular</h2>
  <p>Die von Ihnen im Formular eingegebenen Daten werden per E-Mail an <?= htmlspecialchars($site['email']) ?> übermittelt und dort zur Beantwortung Ihrer Anfrage gespeichert.</p>

  <h2>Kontakt</h2>
  <p>Bei Fragen zum Datenschutz erreichen Sie uns unter <a href="mailto:<?= htmlspecialchars($site['email']) ?>"><?= htmlspecialchars($site['email']) ?></a> oder <a href="tel:<?= htmlspecialchars($site['phone_link']) ?>"><?= htmlspecialchars($site['phone']) ?></a>.</p>

  <p><a class="btn btn-outline" href="index.php">&larr; Zurück zur Startseite</a></p>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
