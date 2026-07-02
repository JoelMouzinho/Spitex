<?php
require_once __DIR__ . '/includes/config.php';

// Pick up a status flag from the contact-handler redirect (?sent=1 or ?sent=0)
$formStatus = $_GET['sent'] ?? null;

$pageTitle = $site['name'] . ' — ' . $site['tagline'];
require __DIR__ . '/includes/header.php';
?>

<main id="top">

  <!-- ===================== HERO ===================== -->
  <section class="hero">
    <div class="hero-visual">
      <img src="images/hero-illustration.svg" alt="Stilisierter Waldweg, sinnbildlich für Pflege auf vertrautem Terrain">
      <span class="visual-caption">Pflege dort, wo Sie sich zuhause fühlen</span>
    </div>
    <div class="hero-content">
      <span class="eyebrow">Spitex im Raum Seeland</span>
      <h1>Pflege zu Hause — <em>am Platz von Pflege mit Herz.</em></h1>
      <p class="hero-sub">Wir begleiten Menschen jeden Alters mit fachlicher Kompetenz und echter Wärme — bei Ihnen zu Hause, dort wo Sie sich am wohlsten fühlen.</p>
      <div class="hero-actions">
        <a class="btn btn-primary" href="#kontakt">Kostenloses Erstgespräch</a>
        <a class="btn btn-outline" href="tel:<?= htmlspecialchars($site['mobile_link']) ?>">Jetzt anrufen · <?= htmlspecialchars($site['mobile']) ?></a>
      </div>
      <div class="hero-stats">
        <div><strong>24h</strong><span>Mobile Erreichbarkeit</span></div>
        <div><strong>8+</strong><span>Pflege­angebote</span></div>
        <div><strong>DE / FR</strong><span>Zweisprachig betreut</span></div>
      </div>
    </div>
  </section>

  <!-- ===================== SERVICES ===================== -->
  <section class="services" id="angebot">
    <div class="container">
      <div class="services-head">
        <div>
          <span class="eyebrow" id="servicesEyebrow">Unser Angebot</span>
          <h2 id="servicesHeading" data-default="Umfassende Pflege, ganz auf Sie abgestimmt">Umfassende Pflege, ganz auf Sie abgestimmt</h2>
          <p class="services-desc" id="servicesDescription" data-default="Acht Leistungen, ein Ziel: dass Sie gut versorgt zu Hause bleiben können. Klicken Sie einen Punkt aus der Liste an, um mehr darüber zu erfahren.">Acht Leistungen, ein Ziel: dass Sie gut versorgt zu Hause bleiben können. Klicken Sie einen Punkt aus der Liste an, um mehr darüber zu erfahren.</p>
          <button type="button" class="services-reset" id="servicesReset" hidden>&larr; Alle Leistungen anzeigen</button>
        </div>
        <a class="btn btn-outline" href="#kontakt">Angebot besprechen</a>
      </div>

      <ul class="service-list" id="serviceList">
        <?php foreach ($services as $s): ?>
        <li>
          <button type="button" class="service-row" data-title="<?= htmlspecialchars($s['title']) ?>" data-info="<?= htmlspecialchars($s['info']) ?>" aria-pressed="false">
            <span class="service-icon">
              <svg viewBox="0 0 24 24"><?= service_icon($s['icon']) ?></svg>
            </span>
            <span class="service-text">
              <strong><?= htmlspecialchars($s['title']) ?></strong>
              <span><?= htmlspecialchars($s['desc']) ?></span>
            </span>
          </button>
        </li>
        <?php endforeach; ?>
      </ul>

      <div class="collab-banner">
        <svg viewBox="0 0 24 24"><path d="M2 12l4-4 4 2 3-3 4 4-3 3-4-2-1 1M13 15l2 2 4-4M8 16l2 2"/></svg>
        Zusammenarbeit mit Ärztinnen, Therapeuten und Institutionen
      </div>
    </div>
  </section>

  <!-- ===================== WHY US ===================== -->
  <section class="why" id="warum">
    <div class="container">
      <span class="eyebrow">Warum Spitex Wohl De Hei</span>
      <h2>Drei Gründe, uns zu vertrauen</h2>
      <div class="why-grid">
        <?php foreach ($why_us as $i => $w): ?>
        <div class="why-card">
          <span class="why-num">0<?= $i + 1 ?></span>
          <h3><?= htmlspecialchars($w['label']) ?></h3>
          <p><?= htmlspecialchars($w['text']) ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ===================== ABOUT / QUOTE ===================== -->
  <section class="quote-strip" id="ueber">
    <div class="container">
      <blockquote>
        „Spitex Wohl De Hei bedeutet für uns: Pflege, die sich nach dem Menschen richtet — nicht umgekehrt. Wir kommen zu Ihnen, hören zu und begleiten Sie mit Fachwissen und Herz.“
      </blockquote>
      <cite>— Team Spitex Wohl De Hei, Biel/Bienne</cite>
    </div>
  </section>

  <!-- ===================== CONTACT ===================== -->
  <section class="contact" id="kontakt">
    <div class="container contact-grid">
      <div>
        <span class="eyebrow">Kontakt</span>
        <h2>Wir sind für Sie da</h2>
        <p>Rufen Sie uns an, schreiben Sie uns oder nutzen Sie das Formular — wir melden uns rasch zurück.</p>

        <div class="contact-info-list">
          <div class="contact-info-item">
            <span class="ic"><svg viewBox="0 0 24 24"><path d="M12 2C7.6 2 4 5.6 4 10c0 6 8 12 8 12s8-6 8-12c0-4.4-3.6-8-8-8zm0 11a3 3 0 110-6 3 3 0 010 6z"/></svg></span>
            <div><strong>Adresse</strong><span><?= htmlspecialchars($site['address1']) ?>, <?= htmlspecialchars($site['address2']) ?></span></div>
          </div>
          <div class="contact-info-item">
            <span class="ic"><svg viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.5.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.5.1.4 0 .8-.3 1L6.6 10.8z"/></svg></span>
            <div><strong>Telefon &amp; Mobile (24h)</strong><span><a href="tel:<?= htmlspecialchars($site['phone_link']) ?>"><?= htmlspecialchars($site['phone']) ?></a> · <a href="tel:<?= htmlspecialchars($site['mobile_link']) ?>"><?= htmlspecialchars($site['mobile']) ?></a></span></div>
          </div>
          <div class="contact-info-item">
            <span class="ic"><svg viewBox="0 0 24 24"><path d="M2 5.5C2 4.7 2.7 4 3.5 4h17c.8 0 1.5.7 1.5 1.5v13c0 .8-.7 1.5-1.5 1.5h-17c-.8 0-1.5-.7-1.5-1.5v-13zM4 6l8 6 8-6"/></svg></span>
            <div><strong>E-Mail</strong><span><a href="mailto:<?= htmlspecialchars($site['email']) ?>"><?= htmlspecialchars($site['email']) ?></a></span></div>
          </div>
        </div>
      </div>

      <div class="contact-form">
        <h3>Nachricht senden</h3>
        <p class="form-note-top" style="color:var(--text-light);font-size:.9rem;">Pflichtfelder sind mit * gekennzeichnet.</p>

        <?php if ($formStatus === '1'): ?>
          <div class="form-alert success">Vielen Dank! Ihre Nachricht wurde versendet. Wir melden uns zeitnah bei Ihnen.</div>
        <?php elseif ($formStatus === '0'): ?>
          <div class="form-alert error">Leider ist etwas schiefgelaufen. Bitte prüfen Sie Ihre Angaben oder rufen Sie uns direkt an.</div>
        <?php endif; ?>

        <form action="contact-handler.php" method="POST" novalidate>
          <div class="form-row">
            <div class="field">
              <label for="name">Name *</label>
              <input type="text" id="name" name="name" required autocomplete="name">
            </div>
            <div class="field">
              <label for="phone">Telefon</label>
              <input type="tel" id="phone" name="phone" autocomplete="tel">
            </div>
          </div>
          <div class="field">
            <label for="email">E-Mail *</label>
            <input type="email" id="email" name="email" required autocomplete="email">
          </div>
          <div class="field">
            <label for="topic">Anliegen</label>
            <select id="topic" name="topic">
              <option value="Grundpflege">Grundpflege</option>
              <option value="Behandlungspflege">Behandlungspflege</option>
              <option value="Kinderspitex">Kinderspitex</option>
              <option value="Palliative Pflege">Palliative Pflege</option>
              <option value="Psychiatrische Begleitung">Psychiatrische Begleitung</option>
              <option value="Sonstiges">Sonstiges</option>
            </select>
          </div>
          <div class="field">
            <label for="message">Nachricht *</label>
            <textarea id="message" name="message" required></textarea>
          </div>
          <input type="text" name="website_url" class="hp-field" style="position:absolute;left:-9999px;" tabindex="-1" autocomplete="off" aria-hidden="true">
          <button type="submit" class="btn btn-primary" style="width:100%;">Nachricht senden</button>
          <p class="form-note">Wir behandeln Ihre Angaben vertraulich und ausschliesslich zur Bearbeitung Ihrer Anfrage.</p>
        </form>
      </div>
    </div>
  </section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
