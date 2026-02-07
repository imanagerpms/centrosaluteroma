<?php
/**
 * Centro Salute Roma - Invio form contatto
 * Gestione invio email dal form di contatto (hosting Aruba)
 */

// Destinatario: sostituire con l'email del poliambulatorio
$destinatario = 'info@centrosaluteroma.it';

// Oggetto email
$oggetto = 'Richiesta da sito Centro Salute Roma';

// Campi obbligatori
$nome     = isset($_POST['nome']) ? trim(strip_tags($_POST['nome'])) : '';
$email    = isset($_POST['email']) ? trim($_POST['email']) : '';
$telefono = isset($_POST['telefono']) ? trim(strip_tags($_POST['telefono'])) : '';
$messaggio = isset($_POST['messaggio']) ? trim(strip_tags($_POST['messaggio'])) : '';

$errore = '';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: index.php#contatti');
  exit;
}

if (empty($nome) || strlen($nome) < 2) {
  $errore = 'Inserire nome e cognome.';
} elseif (empty($email)) {
  $errore = 'Inserire un indirizzo email valido.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errore = 'Indirizzo email non valido.';
} elseif (empty($messaggio) || strlen($messaggio) < 10) {
  $errore = 'Inserire un messaggio (almeno 10 caratteri).';
}

if ($errore !== '') {
  header('Location: index.php?invio=errore&msg=' . urlencode($errore) . '#contatti');
  exit;
}

// Intestazioni email
$headers = [
  'MIME-Version: 1.0',
  'Content-type: text/plain; charset=UTF-8',
  'From: ' . $email,
  'Reply-To: ' . $email,
  'X-Mailer: PHP/' . phpversion(),
];

// Corpo messaggio
$corpo = "Richiesta inviata dal form di contatto del sito centrosaluteroma.it\n\n";
$corpo .= "Nome e cognome: " . $nome . "\n";
$corpo .= "Email: " . $email . "\n";
$corpo .= "Telefono: " . ($telefono ?: 'Non indicato') . "\n\n";
$corpo .= "Messaggio:\n" . $messaggio . "\n";

$invio = @mail($destinatario, $oggetto, $corpo, implode("\r\n", $headers));

if ($invio) {
  header('Location: index.php?invio=ok#contatti');
} else {
  header('Location: index.php?invio=errore&msg=' . urlencode('Invio non riuscito. Riprova o contattaci per telefono.') . '#contatti');
}
exit;
