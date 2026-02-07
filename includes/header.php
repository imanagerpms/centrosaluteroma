<?php
/**
 * Header riutilizzabile - Centro Salute Roma
 * Prima di includere, opzionalmente imposta:
 *   $page_base = ''        per la home (link nav: #chi-siamo, #servizi, ...)
 *   $page_base = 'index.php'  per le altre pagine (link nav: index.php#chi-siamo, ...)
 */
if (!isset($page_base)) {
  $page_base = 'index.php';
}
$nav_prefix = $page_base ? $page_base . '#' : '#';
?>
  <a href="#main" class="skip-link">Vai al contenuto principale</a>

  <header class="header" id="header">
    <div class="container header__inner">
      <a href="<?php echo $page_base ? $page_base : '#hero'; ?>" class="logo" aria-label="Centro Salute Roma - Home">Centro Salute Roma</a>
      <button type="button" class="nav-toggle" aria-expanded="false" aria-controls="nav-menu" aria-label="Apri menu">
        <span class="nav-toggle__bar"></span>
        <span class="nav-toggle__bar"></span>
        <span class="nav-toggle__bar"></span>
      </button>
      <nav id="nav-menu" class="nav" aria-label="Menu principale">
        <ul class="nav__list">
          <li><a href="<?php echo $nav_prefix; ?>chi-siamo">Chi siamo</a></li>
          <li><a href="<?php echo $nav_prefix; ?>servizi">Servizi</a></li>
          <li><a href="<?php echo $nav_prefix; ?>orari">Orari</a></li>
          <li><a href="<?php echo $nav_prefix; ?>dove-siamo">Dove siamo</a></li>
          <li><a href="<?php echo $nav_prefix; ?>contatti">Contatti</a></li>
          <li><a href="https://www.miodottore.it/" target="_blank" rel="noopener noreferrer" class="btn btn--primary btn--nav">Prenota</a></li>
        </ul>
      </nav>
    </div>
  </header>
