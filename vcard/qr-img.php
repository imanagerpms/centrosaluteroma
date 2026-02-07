<?php
/**
 * Restituisce l’immagine del QR code per una vCard (per download con nome file corretto)
 * Uso: qr-img.php?id=danielebocci
 */

$sito_base = 'https://www.centrosaluteroma.it';
$vcard_dir = __DIR__;

$id = isset($_GET['id']) ? preg_replace('/[^a-z0-9_-]/i', '', $_GET['id']) : '';
if ($id === '') {
  http_response_code(400);
  exit('Parametro id mancante');
}

$vcf_file = $vcard_dir . '/' . $id . '.vcf';
if (!is_file($vcf_file)) {
  http_response_code(404);
  exit('vCard non trovata');
}

$vcf_url = $sito_base . '/vcard/' . $id . '.vcf';
$size = isset($_GET['size']) ? min(1000, max(100, (int)$_GET['size'])) : 400;
$qr_url = 'https://api.qrserver.com/v1/create-qr-code/?size=' . $size . 'x' . $size . '&data=' . rawurlencode($vcf_url) . '&format=png';

$img = @file_get_contents($qr_url);
if ($img === false) {
  http_response_code(502);
  exit('Impossibile generare il QR');
}

header('Content-Type: image/png');
header('Content-Disposition: attachment; filename="' . $id . '-qr.png"');
header('Cache-Control: public, max-age=86400');
echo $img;
