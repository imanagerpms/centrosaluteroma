<?php
$page_base = 'index.php';
$base_url  = '';
require __DIR__ . '/data/branche-data.php';

$attive = branche_attive($BRANCHE);
$tutte  = $BRANCHE;

$page_title = 'Le nostre branche e specialità';
$meta_desc  = 'Centro Salute Roma: fisioterapia, osteopatia, chirurgia estetica, Biotekna e tutte le specialità. Scopri servizi, specialisti e prenota online.';
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo htmlspecialchars($meta_desc); ?>">
  <title><?php echo htmlspecialchars($page_title); ?> | Centro Salute Roma</title>
  <link rel="canonical" href="<?php echo htmlspecialchars('https://' . ($_SERVER['HTTP_HOST'] ?? 'centrosaluteroma.it') . $_SERVER['REQUEST_URI']); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $base_url; ?>css/style.css">
</head>
<body>
<?php include __DIR__ . '/includes/header.php'; ?>

  <main id="main" class="branche-page">
    <section class="section section--hero-sub">
      <div class="container">
        <h1 class="section__title section__title--large">Le nostre branche e specialità</h1>
        <p class="branche-page__intro">Dal recupero fisioterapico alla diagnostica avanzata Biotekna, dalla medicina specialistica alla chirurgia estetica: scopri le aree del centro e prenota la tua visita.</p>
      </div>
    </section>

    <section class="section section--light">
      <div class="container">
        <h2 id="branche-attive" class="section__title">Aree con approfondimento</h2>
        <div class="branche-grid">
          <?php foreach ($attive as $slug => $b): $b = branca_completa($b); ?>
          <article class="branche-card">
            <div class="branche-card__content">
              <h3 class="branche-card__title"><a href="<?php echo $base_url; ?>branca.php?b=<?php echo rawurlencode($slug); ?>"><?php echo htmlspecialchars($b['title']); ?></a></h3>
              <?php if (!empty($b['subtitle'])): ?>
                <p class="branche-card__subtitle"><?php echo htmlspecialchars($b['subtitle']); ?></p>
              <?php endif; ?>
              <p class="branche-card__text"><?php echo htmlspecialchars($b['intro']); ?></p>
              <a href="<?php echo $base_url; ?>branca.php?b=<?php echo rawurlencode($slug); ?>" class="btn btn--primary btn--sm">Scopri e prenota</a>
            </div>
          </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <h2 id="tutte-le-specialita" class="section__title">Tutte le specialità</h2>
        <p class="branche-page__intro">Elenco completo delle specialità mediche e delle prestazioni disponibili o in arrivo al centro.</p>
        <ul class="branche-list">
          <?php foreach ($tutte as $slug => $b):
            $full = isset($b['active']) && $b['active'] && !empty($b['intro']);
            $name = $b['title'] ?? $slug;
          ?>
          <li class="branche-list__item">
            <?php if ($full): ?>
              <a href="<?php echo $base_url; ?>branca.php?b=<?php echo rawurlencode($slug); ?>"><?php echo htmlspecialchars($name); ?></a>
            <?php else: ?>
              <span><?php echo htmlspecialchars($name); ?></span>
              <span class="badge badge--muted">Prossimamente</span>
            <?php endif; ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>

    <section class="cta">
      <div class="container">
        <h2 class="cta__title">Prenota la tua visita</h2>
        <p class="cta__text">Scegli la specialità e prenota comodamente online su MioDottore.</p>
        <a href="https://www.miodottore.it/" target="_blank" rel="noopener noreferrer" class="btn btn--white btn--lg">Prenota su MioDottore</a>
      </div>
    </section>
  </main>

<?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="<?php echo $base_url; ?>js/script.js"></script>
</body>
</html>
