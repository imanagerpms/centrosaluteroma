<?php
/**
 * Footer e banner cookie riutilizzabili - Centro Salute Roma
 * Usa variabile opzionale per base URL (es. per sottocartelle):
 *   $base_url = ''  (default) per pagine in root
 */
if (!isset($base_url)) {
  $base_url = '';
}
?>
  <footer class="footer">
    <div class="container footer__inner">
      <p class="footer__copy">© <?php echo date('Y'); ?> Centro Salute Roma – Servizi Sanitari Privati S.r.l. P.IVA IT17944951007</p>
      <p><a href="<?php echo $base_url; ?>privacy.php" class="footer__link">Privacy e Cookie</a> · <a href="https://www.miodottore.it/" target="_blank" rel="noopener noreferrer" class="footer__link">Prenota</a></p>
    </div>
  </footer>

  <div id="cookie-banner" class="cookie-banner" role="dialog" aria-label="Informativa cookie" aria-describedby="cookie-banner-text" hidden>
    <div class="cookie-banner__inner">
      <p id="cookie-banner-text" class="cookie-banner__text">Utilizziamo cookie per il corretto funzionamento del sito e per migliorare la tua esperienza. Continuando la navigazione accetti la nostra <a href="<?php echo $base_url; ?>privacy.php#cookie">Cookie Policy</a>.</p>
      <div class="cookie-banner__actions">
        <a href="<?php echo $base_url; ?>privacy.php#cookie" class="btn btn--white btn--sm">Maggiori informazioni</a>
        <button type="button" id="cookie-accept" class="btn btn--primary btn--sm">Accetta</button>
      </div>
    </div>
  </div>

  <script src="<?php echo $base_url; ?>js/script.js"></script>
