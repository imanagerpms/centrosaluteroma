<?php
$page_base = 'index.php';
$base_url  = '';
require __DIR__ . '/data/branche-data.php';

$slug = isset($_GET['b']) ? trim($_GET['b']) : '';
if ($slug === '' || !isset($BRANCHE[$slug])) {
  header('HTTP/1.0 404 Not Found');
  include __DIR__ . '/404.php';
  exit;
}

$raw   = $BRANCHE[$slug];
$b     = branca_completa($raw);
$active = !empty($raw['active']) && !empty($raw['intro']);

if (!$active) {
  header('HTTP/1.0 404 Not Found');
  include __DIR__ . '/404.php';
  exit;
}

$page_title   = $b['title'] . ' | Centro Salute Roma';
$meta_desc    = !empty($b['meta_desc']) ? $b['meta_desc'] : strip_tags($b['intro']);
$canonical    = 'https://' . ($_SERVER['HTTP_HOST'] ?? 'centrosaluteroma.it') . '/branca.php?b=' . rawurlencode($slug);
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo htmlspecialchars($meta_desc); ?>">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $base_url; ?>css/style.css">
</head>
<body>
<?php include __DIR__ . '/includes/header.php'; ?>

  <main id="main" class="branca-page">
    <section class="branca-hero">
      <div class="container">
        <p class="branca-hero__breadcrumb"><a href="<?php echo $base_url; ?>index.php">Home</a> · <a href="<?php echo $base_url; ?>branche.php">Branche</a> · <span><?php echo htmlspecialchars($b['title']); ?></span></p>
        <h1 class="branca-hero__title"><?php echo htmlspecialchars($b['title']); ?></h1>
        <?php if (!empty($b['subtitle'])): ?>
          <p class="branca-hero__subtitle"><?php echo htmlspecialchars($b['subtitle']); ?></p>
        <?php endif; ?>
      </div>
    </section>

    <section class="section section--light">
      <div class="container container--narrow">
        <div class="prose branca-intro">
          <p><?php echo nl2br(htmlspecialchars($b['intro'])); ?></p>
        </div>
      </div>
    </section>

    <?php if (!empty($b['doctors'])): ?>
    <section class="section" id="referente">
      <div class="container">
        <h2 class="section__title">Referente di branca</h2>
        <div class="branca-doctors">
          <?php foreach ($b['doctors'] as $doc): ?>
          <article class="branca-doctor">
            <?php if (!empty($doc['image'])): ?>
              <div class="branca-doctor__media">
                <img src="<?php echo htmlspecialchars($doc['image']); ?>" alt="" width="160" height="160" loading="lazy">
              </div>
            <?php endif; ?>
            <div class="branca-doctor__content">
              <h3 class="branca-doctor__name"><?php echo htmlspecialchars($doc['name']); ?></h3>
              <p class="branca-doctor__role"><?php echo htmlspecialchars($doc['role']); ?></p>
              <?php if (!empty($doc['bio'])): ?>
                <p class="branca-doctor__bio"><?php echo nl2br(htmlspecialchars($doc['bio'])); ?></p>
              <?php endif; ?>
              <?php if (!empty($doc['vcard'])): ?>
                <a href="<?php echo htmlspecialchars($doc['vcard']); ?>" class="link" download>Scarica contatto vCard</a>
              <?php endif; ?>
            </div>
          </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($b['description'])): ?>
    <section class="section section--light">
      <div class="container container--narrow">
        <h2 class="section__title">Approfondimento</h2>
        <div class="prose">
          <?php foreach ($b['description'] as $para): ?>
            <p><?php echo nl2br(htmlspecialchars($para)); ?></p>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($b['methods'])): ?>
    <section class="section" id="metodi">
      <div class="container">
        <h2 class="section__title">Prestazioni e metodi</h2>
        <ul class="branca-methods">
          <?php foreach ($b['methods'] as $m): ?>
            <li><?php echo htmlspecialchars(is_array($m) ? ($m['name'] ?? '') : $m); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($b['equipment'])): ?>
    <section class="section section--light">
      <div class="container">
        <h2 class="section__title">Macchinari e strumenti</h2>
        <ul class="branca-equipment">
          <?php foreach ($b['equipment'] as $eq): ?>
            <li><?php echo htmlspecialchars(is_array($eq) ? ($eq['name'] ?? '') : $eq); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($b['media'])): ?>
    <section class="section" id="media">
      <div class="container">
        <h2 class="section__title">Video e immagini</h2>
        <div class="branca-media">
          <?php foreach ($b['media'] as $item):
            $type    = $item['type'] ?? 'image';
            $url     = $item['url'] ?? '';
            $caption = $item['caption'] ?? '';
            if ($url === '') continue;
          ?>
          <figure class="branca-media__item">
            <?php if ($type === 'video'): ?>
              <video src="<?php echo htmlspecialchars($url); ?>" controls width="100%" preload="metadata">Il browser non supporta il video.</video>
            <?php else: ?>
              <img src="<?php echo htmlspecialchars($url); ?>" alt="<?php echo htmlspecialchars($caption); ?>" loading="lazy">
            <?php endif; ?>
            <?php if ($caption !== ''): ?>
              <figcaption><?php echo htmlspecialchars($caption); ?></figcaption>
            <?php endif; ?>
          </figure>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <section class="cta">
      <div class="container">
        <h2 class="cta__title">Prenota per <?php echo htmlspecialchars($b['title']); ?></h2>
        <p class="cta__text">Prenotazioni comode e veloci su MioDottore.</p>
        <a href="<?php echo htmlspecialchars($b['cta_url']); ?>" target="_blank" rel="noopener noreferrer" class="btn btn--white btn--lg"><?php echo htmlspecialchars($b['cta_text']); ?></a>
      </div>
    </section>
  </main>

<?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="<?php echo $base_url; ?>js/script.js"></script>
</body>
</html>
