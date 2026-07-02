<section class="infobar" id="kontakt-info">
  <div class="container infobar-grid">
    <div class="infobar-item">
      <span class="ic"><svg viewBox="0 0 24 24"><path d="M12 2C7.6 2 4 5.6 4 10c0 6 8 12 8 12s8-6 8-12c0-4.4-3.6-8-8-8zm0 11a3 3 0 110-6 3 3 0 010 6z"/></svg></span>
      <div>
        <strong><?= htmlspecialchars($site['name']) ?></strong>
        <span><?= htmlspecialchars($site['address1']) ?><br><?= htmlspecialchars($site['address2']) ?></span>
      </div>
    </div>
    <div class="infobar-item">
      <span class="ic"><svg viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.5.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.5.1.4 0 .8-.3 1L6.6 10.8z"/></svg></span>
      <div>
        <strong>Telefon</strong>
        <span><a href="tel:<?= htmlspecialchars($site['phone_link']) ?>"><?= htmlspecialchars($site['phone']) ?></a></span>
      </div>
    </div>
    <div class="infobar-item">
      <span class="ic"><svg viewBox="0 0 24 24"><path d="M7 2h10a2 2 0 012 2v16a2 2 0 01-2 2H7a2 2 0 01-2-2V4a2 2 0 012-2zm5 17a1.2 1.2 0 100-2.4A1.2 1.2 0 0012 19z"/></svg></span>
      <div>
        <strong>Mobile (24h erreichbar)</strong>
        <span><a href="tel:<?= htmlspecialchars($site['mobile_link']) ?>"><?= htmlspecialchars($site['mobile']) ?></a></span>
      </div>
    </div>
    <div class="infobar-item">
      <span class="ic"><svg viewBox="0 0 24 24"><path d="M2 5.5C2 4.7 2.7 4 3.5 4h17c.8 0 1.5.7 1.5 1.5v13c0 .8-.7 1.5-1.5 1.5h-17c-.8 0-1.5-.7-1.5-1.5v-13zM4 6l8 6 8-6"/></svg></span>
      <div>
        <strong>E-Mail</strong>
        <span><a href="mailto:<?= htmlspecialchars($site['email']) ?>"><?= htmlspecialchars($site['email']) ?></a></span>
      </div>
    </div>
    <div class="infobar-item">
      <span class="ic"><svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm0 2c1.1 1.4 1.9 3.4 2.2 6H9.8c.3-2.6 1.1-4.6 2.2-6zM8.1 8H4.6a8 8 0 014.9-4.6A14.9 14.9 0 008.1 8zm-.4 2c-.1.7-.2 1.3-.2 2s.1 1.3.2 2H4.2a8 8 0 010-4h3.5zm.4 6c.5 1.9 1.3 3.5 2.4 4.6A8 8 0 014.6 16h3.5zm3.9 4.6c-1.1-1.1-1.9-2.7-2.2-4.6h4.4c-.3 1.9-1.1 3.5-2.2 4.6zM14 12c0-.7-.1-1.3-.1-2H10.1c0 .7-.1 1.3-.1 2s.1 1.3.1 2h3.8c0-.7.1-1.3.1-2zm-2.3 8.6c1.1-1.1 1.9-2.7 2.4-4.6h3.5a8 8 0 01-5.9 4.6zM16.2 8c-.3-1.7-.9-3.3-1.7-4.6A8 8 0 0119.4 8h-3.2zm.5 2h3.5a8 8 0 010 4h-3.5c.1-.7.2-1.3.2-2s-.1-1.3-.2-2zm-.5 6h3.2a8 8 0 01-4.9 4.6c.8-1.3 1.4-2.9 1.7-4.6z"/></svg></span>
      <div>
        <strong>Webseite</strong>
        <span><a href="https://<?= htmlspecialchars($site['website']) ?>" target="_blank" rel="noopener"><?= htmlspecialchars($site['website']) ?></a></span>
      </div>
    </div>
  </div>
</section>

<div class="tagline-bar">
  <div class="container">
    <p>Wir sind für Menschen jeden Alters da – kompetent, herzlich und zuverlässig im gesamten Raum Seeland.</p>
    <p class="lang-note">Deutsch und Französisch sprechend.</p>
  </div>
</div>

<footer class="site-footer">
  <div class="container footer-inner">
    <span>&copy; <?= date('Y') ?> <?= htmlspecialchars($site['name']) ?>. Alle Rechte vorbehalten.</span>
    <nav class="footer-links" aria-label="Fusszeilen-Navigation">
      <a href="index.php#angebot">Angebot</a>
      <a href="index.php#kontakt">Kontakt</a>
      <a href="impressum.php">Impressum</a>
      <a href="datenschutz.php">Datenschutz</a>
    </nav>
  </div>
</footer>

<script src="js/script.js"></script>
</body>
</html>
