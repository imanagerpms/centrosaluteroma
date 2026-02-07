<?php
$page_base = 'index.php';
if (!isset($base_url)) $base_url = '';
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina non trovata | Centro Salute Roma</title>
  <link rel="stylesheet" href="<?php echo $base_url; ?>css/style.css">
</head>
<body>
<?php include __DIR__ . '/includes/header.php'; ?>
  <main id="main" class="section" style="padding: 4rem 0; text-align: center;">
    <div class="container">
      <h1>Pagina non trovata</h1>
      <p>La pagina che cerchi non esiste o non è più disponibile.</p>
      <a href="<?php echo $base_url; ?>index.php" class="btn btn--primary">Torna alla home</a>
      <a href="<?php echo $base_url; ?>branche.php" class="btn btn--outline">Vedi le branche</a>
    </div>
  </main>
<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
