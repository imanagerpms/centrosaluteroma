<?php $page_base = ''; ?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Centro Salute Roma - Poliambulatorio a Roma. Visite, esami e specialisti. Prenota online su MioDottore.">
  <title>Centro Salute Roma | Poliambulatorio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include __DIR__ . '/includes/header.php'; ?>

  <main id="main">
    <section class="hero" id="hero" aria-labelledby="hero-title">
      <div class="hero__bg" aria-hidden="true"></div>
      <div class="hero__media" aria-hidden="true">
        <video class="hero__video" autoplay muted loop playsinline preload="auto" poster="/video/poster.jpg">
          <source src="/video/videopoliambulatorio.mp4" type="video/mp4">
        </video>
      </div>
      <div class="container hero__content">
        <h1 id="hero-title" class="hero__title">Centro Salute Roma</h1>
        <p class="hero__tagline">Poliambulatorio: cure, prevenzione e specialisti a tua disposizione.</p>
        <a href="https://www.miodottore.it/" target="_blank" rel="noopener noreferrer" class="btn btn--white btn--lg">Prenota una visita</a>
      </div>
      <div class="hero__scroll" aria-hidden="true">
        <span>Scorri</span>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 5v14M5 12l7 7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </div>
    </section>

    <section class="section section--light" id="chi-siamo" aria-labelledby="chi-siamo-title">
      <div class="container">
        <h2 id="chi-siamo-title" class="section__title">Chi siamo</h2>
        <div class="prose">
          <b>Centro Salute Roma</b> nasce per offrire un punto di riferimento unico per la prevenzione, la diagnosi e la cura, con un approccio integrato e centrato sulla persona.
Mettiamo insieme professionisti qualificati e percorsi clinici chiari, per aiutarti a ottenere risultati concreti e misurabili.
<br/><br/>Crediamo nella qualità del tempo in visita: ascolto, chiarezza e spiegazioni semplici, senza fretta.
Utilizziamo protocolli aggiornati e tecnologie affidabili, scegliendo sempre ciò che ha reale valore per il paziente.
<br/><br/>Il nostro obiettivo è accompagnarti passo dopo passo, dalla prima valutazione al follow-up.
Lavoriamo in équipe quando serve, così ogni specialista contribuisce al percorso in modo coordinato.
<br/><br/>Ci occupiamo sia di esigenze acute che di gestione della cronicità, con piani personalizzati.
<br/><br/>Accoglienza, riservatezza e organizzazione sono parte del servizio, non un dettaglio.
Siamo a Roma e lavoriamo ogni giorno per rendere la salute più accessibile e più comprensibile.
Centro Salute Roma: competenza, metodo e attenzione reale alle persone.
        </div>
      </div>
    </section>

    <section class="section" id="servizi" aria-labelledby="servizi-title">
      <div class="container">
        <h2 id="servizi-title" class="section__title">Servizi e prestazioni</h2>
        <div class="servizi-grid">
          <article class="card">
            <div class="card__icon" aria-hidden="true">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="5" r="2.5"/><path d="M8 8v7M8 15l-2 7M8 15l2 7M8 10l4-1"/><circle cx="16" cy="5" r="2.5"/><path d="M16 8v7M16 15l-2 7M16 15l2 7M16 11l-3-1"/></svg>
            </div>
            <h3 class="card__title">Fisioterapia/Infermieristica</h3>
            <p class="card__text">Fisioterapia, laserterapia, teker terapia, magneto terapia. Infermieristica anche a domicilio</p>
          </article>
          <article class="card">
            <div class="card__icon" aria-hidden="true">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/><circle cx="12" cy="12" r="3"/></svg>
            </div>
            <h3 class="card__title">Medicina generale</h3>
            <p class="card__text">Visite di base, follow-up e certificazioni con medici di medicina generale.</p>
          </article>
          <article class="card">
            <div class="card__icon" aria-hidden="true">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5"/></svg>
            </div>
            <h3 class="card__title">Specialisti</h3>
            <p class="card__text">Cardiologia, dermatologia, ginecologia, ortopedia e altre specialità.</p>
          </article>
          <article class="card">
            <div class="card__icon" aria-hidden="true">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
            </div>
            <h3 class="card__title">Esami e diagnostica</h3>
            <p class="card__text">Analisi Biotekna, ecografie, ECG e altri esami strumentali in sede.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section section--light" id="orari" aria-labelledby="orari-title">
      <div class="container">
        <h2 id="orari-title" class="section__title">Orari e informazioni</h2>
        <div class="orari-grid">
          <div class="orari-block">
            <h3 class="orari-block__title">Orari di apertura</h3>
            <ul class="orari-block__list">
              <li><strong>Lunedì – Venerdì</strong> 8:00 – 20:00</li>
              <li><strong>Sabato</strong> 8:00 – 13:00</li>
              <li><strong>Domenica</strong> Chiuso</li>
            </ul>
          </div>
          <div class="orari-block">
            <h3 class="orari-block__title">Informazioni utili</h3>
            <p>Prime visite e prestazioni su appuntamento. Convenzioni con principali assicurazioni e fondi sanitari. Contattaci per verificare la tua convenzione.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="dove-siamo" aria-labelledby="dove-siamo-title">
      <div class="container">
        <h2 id="dove-siamo-title" class="section__title">Dove siamo</h2>
        <div class="dove-siamo__content">
          <div class="dove-siamo__info">
            <p class="dove-siamo__indirizzo">Via Pietro Rovetti 179, 00177 Roma (RM)</p>
            <p>Mezzi pubblici: Metro C – Pigneto/Parco di Centocelle.</p>
            <p><a href="tel:+393283140787" class="link">Tel. 328 3140 787</a></p>
          </div>
          <div class="dove-siamo__mappa">
            <iframe
              src="https://www.google.com/maps?q=Via%20Pietro%20Rovetti%2C%20179%2C%2000177%20Roma%20RM&output=embed"
              width="100%"
              height="100%"
              style="border:0;"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="Mappa: Centro Salute Roma"
            ></iframe>
          </div>
        </div>
      </div>
    </section>

    <section class="section section--light" id="contatti" aria-labelledby="contatti-title">
      <div class="container container--narrow">
        <h2 id="contatti-title" class="section__title">Contatti</h2>
        <div class="contatti-grid">
          <div id="form-feedback" class="form-feedback" role="alert" aria-live="polite" hidden></div>
          <div class="contatti-info">
            <p><strong>Telefono</strong><br><a href="tel:+393283140787">328 3140 787</a></p>
            <p><strong>Email</strong><br><a href="mailto:info@centrosaluteroma.it">info@centrosaluteroma.it</a></p>
            <p>Per prenotazioni visita utilizzare il link <a href="https://www.miodottore.it/" target="_blank" rel="noopener noreferrer">MioDottore</a>.</p>
          </div>
          <form class="form" action="invio.php" method="post">
            <label for="nome">Nome e cognome *</label>
            <input type="text" id="nome" name="nome" required autocomplete="name">
            <label for="email">Email *</label>
            <input type="email" id="email" name="email" required autocomplete="email">
            <label for="telefono">Telefono</label>
            <input type="tel" id="telefono" name="telefono" autocomplete="tel">
            <label for="messaggio">Messaggio *</label>
            <textarea id="messaggio" name="messaggio" rows="4" required></textarea>
            <button type="submit" class="btn btn--primary btn--full">Invia messaggio</button>
          </form>
        </div>
      </div>
    </section>

    <section class="cta" id="prenota" aria-labelledby="prenota-title">
      <div class="container">
        <h2 id="prenota-title" class="cta__title">Prenota la tua visita</h2>
        <p class="cta__text">Prenotazioni comode e veloci su MioDottore. Scegli data, ora e specialista.</p>
        <a href="https://www.miodottore.it/" target="_blank" rel="noopener noreferrer" class="btn btn--white btn--lg">Prenota su MioDottore</a>
      </div>
    </section>
  </main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
