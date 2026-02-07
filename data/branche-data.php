<?php
/**
 * Dati centralizzati per le branche / specialità - Centro Salute Roma
 * Ogni branca: slug, title, intro, doctors, description, methods, equipment, media, active.
 * Per aggiungere una branca: copia un blocco, cambia slug e contenuti.
 * Per branche "in arrivo": active = false (compariranno in elenco con badge "Prossimamente").
 */

if (!defined('BRANCHE_DATA_LOADED')) {
  define('BRANCHE_DATA_LOADED', true);
}

$BRANCHE = [
  'fisioterapia' => [
    'slug'        => 'fisioterapia',
    'title'       => 'Fisioterapia',
    'subtitle'    => 'Rieducazione, terapia strumentale e recupero funzionale',
    'meta_desc'   => 'Fisioterapia a Roma: Tecar, laser, magnetoterapia, TENS, ultrasuoni e rieducazione. Prenota al Centro Salute Roma.',
    'active'      => true,
    'intro'       => 'Presso il nostro centro trovi un’offerta completa di fisioterapia: dalla rieducazione motoria e posturale alla terapia strumentale con macchinari all’avanguardia, per il recupero funzionale e la gestione del dolore.',
    'doctors'     => [
      [
        'name'   => 'Dottore di riferimento',
        'role'   => 'Fisioterapista',
        'bio'    => 'Inserisci qui una breve presentazione del professionista di riferimento per la fisioterapia.',
        'image'  => '', // es. images/branche/fisioterapia-dottore.jpg
        'vcard'  => '', // es. vcard/xxx.vcf
      ],
    ],
    'description' => [
      'La fisioterapia è parte integrante del poliambulatorio: lavoriamo in équipe con medici e specialisti per definire percorsi riabilitativi personalizzati.',
      'Disponiamo di tecnologie all’avanguardia (Tecarterapia, laser ad alta potenza, magnetoterapia, TENS, ultrasuoni e altri) e di tecniche manuali e rieducative, per trattare disturbi muscolo-scheletrici, post-operatori e cronici.',
    ],
    'methods' => [
      'Fisiokinesiterapia (FKT)',
      'Rieducazione motoria',
      'Massoterapia',
      'Rieducazione posturale',
      'Tecarterapia',
      'Laserterapia',
      'Laserterapia ad alta potenza',
      'Onde d’urto',
      'Crioultrasuoni',
      'Ultrasuoni',
      'Ionoforesi',
      'T.E.N.S.',
      'Elettrostimolazioni',
      'Magnetoterapia',
      'Infrarossoterapia',
      'Infiltrazioni articolari',
      'Ipertermia',
    ],
    'equipment' => [
      'Tecarterapia',
      'Ipertermia',
      'Laser ad alta potenza',
      'Laserterapia',
      'Ultrasuono',
      'Magnetoterapia',
      'TENS',
    ],
    'media' => [
      // Aggiungi qui video e figure: type = 'video' o 'image', url = path o URL, caption = didascalia
      // Es: ['type' => 'video', 'url' => '/video/branche/fisioterapia.mp4', 'caption' => 'Presentazione fisioterapia'],
      // Es: ['type' => 'image', 'url' => '/images/branche/fisioterapia-macchinari.jpg', 'caption' => 'Sala strumentale'],
    ],
    'cta_text' => 'Prenota una seduta',
    'cta_url'  => 'https://www.miodottore.it/',
  ],

  'osteopatia' => [
    'slug'        => 'osteopatia',
    'title'       => 'Osteopatia',
    'subtitle'    => 'Approccio manuale globale per il benessere',
    'meta_desc'   => 'Osteopatia a Roma al Centro Salute Roma. Trattamenti manuali per disturbi muscolo-scheletrici e viscerali. Prenota su MioDottore.',
    'active'      => true,
    'intro'       => 'L’osteopatia è una disciplina che, attraverso un approccio manuale globale, mira a ripristinare l’equilibrio e la funzionalità del corpo, senza ricorrere a farmaci o chirurgia.',
    'doctors'     => [
      [
        'name'   => 'Dottore di riferimento',
        'role'   => 'Osteopata',
        'bio'    => 'Inserisci qui la presentazione del professionista di riferimento per l’osteopatia.',
        'image'  => '',
        'vcard'  => '',
      ],
    ],
    'description' => [
      'L’osteopata valuta e tratta il paziente nel suo insieme, considerando la relazione tra strutture e funzioni. Il trattamento è adatto a disturbi muscolo-scheletrici, cefalee, disturbi digestivi e altri quadri funzionali.',
      'Presso il centro l’osteopatia si integra con fisioterapia e medicina per offrire un percorso personalizzato.',
    ],
    'methods'  => [],
    'equipment' => [],
    'media'     => [],
    'cta_text'  => 'Prenota una visita',
    'cta_url'   => 'https://www.miodottore.it/',
  ],

  'chirurgia-estetica' => [
    'slug'        => 'chirurgia-estetica',
    'title'       => 'Chirurgia estetica e medicina antiaging',
    'subtitle'    => 'Trattamenti per il ringiovanimento e il benessere estetico',
    'meta_desc'   => 'Chirurgia estetica e medicina antiaging a Roma. Centro Salute Roma: trattamenti personalizzati. Prenota una consulenza.',
    'active'      => true,
    'intro'       => 'Offriamo consulenza e trattamenti di chirurgia estetica e medicina antiaging, con un approccio personalizzato e protocolli aggiornati.',
    'doctors'     => [
      [
        'name'   => 'Dottore di riferimento',
        'role'   => 'Chirurgo estetico',
        'bio'    => 'Inserisci qui la presentazione dello specialista di riferimento.',
        'image'  => '',
        'vcard'  => '',
      ],
    ],
    'description' => [
      'Dalla valutazione iniziale alla scelta del percorso più adatto: il chirurgo estetico e l’équipe ti accompagnano con chiarezza e professionalità.',
      'I trattamenti sono eseguiti in ambiente dedicato, nel rispetto di standard di sicurezza e qualità.',
    ],
    'methods'  => [],
    'equipment' => [],
    'media'     => [],
    'cta_text'  => 'Prenota una consulenza',
    'cta_url'   => 'https://www.miodottore.it/',
  ],

  'biotekna' => [
    'slug'        => 'biotekna',
    'title'       => 'Biotekna',
    'subtitle'    => 'Diagnostica e medicina integrata con tecnologie avanzate',
    'meta_desc'   => 'Biotekna a Roma: BIA, PPG, HEG, TomEex, Regmatex, Medmatrix. Medicina integrata e diagnostica di precisione. Centro Salute Roma.',
    'active'      => true,
    'intro'       => 'Biotekna rappresenta l’area innovativa del centro: diagnostica e strumenti all’avanguardia per la valutazione della composizione corporea, dello stress, della funzione cerebrale e dell’equilibrio elettrolitico, in un’ottica di medicina integrata.',
    'doctors'     => [
      [
        'name'   => 'Dottore di riferimento',
        'role'   => 'Referente area Biotekna',
        'bio'    => 'Inserisci qui la presentazione del referente per l’area Biotekna e la medicina integrata.',
        'image'  => '',
        'vcard'  => '',
      ],
    ],
    'description' => [
      'Utilizziamo protocolli e tecnologie che consentono una lettura più approfondita dello stato di salute: dalla BIA (analisi della composizione corporea) alla pletismografia PPG per lo stress e il flusso, dall’emoencefalografia (HEG) alla tomografia elettrolitica extracellulare (TomEex), fino a Regmatex e Medmatrix.',
      'L’OMS (WHO) ha approvato dal 2025 un piano per l’integrazione della medicina tradizionale e complementare nei sistemi sanitari: le nostre metodiche si inseriscono in questo quadro di medicina evidence-based e personalizzata.',
    ],
    'methods' => [
      'BIA_ACC (analisi composizione corporea)',
      'Pletismografia PPG (stress e flusso)',
      'Emoencefalografia (HEG)',
      'Tomografia elettrolitica extracellulare (TomEex)',
      'Regmatex',
      'Medmatrix',
    ],
    'equipment' => [
      'BIA_ACC',
      'Pletismografia PPG stress flow',
      'Emoencefalografia HEG',
      'Tomografia elettrolitica extracellulare TomEex',
      'Regmatex',
      'Medmatrix',
    ],
    'media' => [],
    'cta_text' => 'Scopri i percorsi Biotekna',
    'cta_url'  => 'https://www.miodottore.it/',
  ],

  // --- Specialità dal poster Servizi (schede attive quando avrai contenuti) ---
  'allergologia'       => ['slug' => 'allergologia',       'title' => 'Allergologia',       'active' => false, 'intro' => ''],
  'andrologia'         => ['slug' => 'andrologia',         'title' => 'Andrologia',           'active' => false, 'intro' => ''],
  'cardiologia'        => ['slug' => 'cardiologia',        'title' => 'Cardiologia',          'active' => false, 'intro' => ''],
  'chirurgia-vascolare'=> ['slug' => 'chirurgia-vascolare','title' => 'Chirurgia vascolare',  'active' => false, 'intro' => ''],
  'diabetologia'       => ['slug' => 'diabetologia',       'title' => 'Diabetologia',         'active' => false, 'intro' => ''],
  'dietologia'         => ['slug' => 'dietologia',         'title' => 'Dietologia',           'active' => false, 'intro' => ''],
  'endocrinologia'     => ['slug' => 'endocrinologia',     'title' => 'Endocrinologia',       'active' => false, 'intro' => ''],
  'fisiatria'          => ['slug' => 'fisiatria',         'title' => 'Fisiatria',            'active' => false, 'intro' => ''],
  'gastroenterologia'  => ['slug' => 'gastroenterologia', 'title' => 'Gastroenterologia',   'active' => false, 'intro' => ''],
  'ginecologia'        => ['slug' => 'ginecologia',       'title' => 'Ginecologia',          'active' => false, 'intro' => ''],
  'immunologia'        => ['slug' => 'immunologia',       'title' => 'Immunologia',          'active' => false, 'intro' => ''],
  'neurologia'         => ['slug' => 'neurologia',        'title' => 'Neurologia',           'active' => false, 'intro' => ''],
  'otorinolaringoiatria'=> ['slug' => 'otorinolaringoiatria','title' => 'Otorinolaringoiatria','active' => false, 'intro' => ''],
  'ortopedia'          => ['slug' => 'ortopedia',         'title' => 'Ortopedia',            'active' => false, 'intro' => ''],
  'pneumologia'        => ['slug' => 'pneumologia',       'title' => 'Pneumologia',          'active' => false, 'intro' => ''],
  'reumatologia'       => ['slug' => 'reumatologia',       'title' => 'Reumatologia',         'active' => false, 'intro' => ''],
  'urologia'           => ['slug' => 'urologia',         'title' => 'Urologia',              'active' => false, 'intro' => ''],

  // Prestazioni diagnostiche (possono essere una branca "Diagnostica" o voci in altre branche)
  'diagnostica' => [
    'slug'        => 'diagnostica',
    'title'       => 'Esami e diagnostica',
    'subtitle'    => 'Ecografie, ECG, Holter, elettromiografia e altro',
    'meta_desc'   => 'Esami e diagnostica a Roma: ecografia, ecocolordoppler, ECG, test da sforzo, Holter, EMG, uroflussometria, PAP test. Centro Salute Roma.',
    'active'      => true,
    'intro'       => 'In sede sono disponibili esami strumentali e diagnostici per un inquadramento completo: ecografie, ecocolordoppler, ECG, test da sforzo, Holter cardiaco e pressorio, elettromiografia, uroflussometria, PAP test e altri.',
    'doctors'     => [],
    'description' => [
      'Gli esami vengono eseguiti con apparecchiature affidabili e refertazione da parte di specialisti, in coordinamento con le altre aree del poliambulatorio.',
    ],
    'methods' => [
      'Ecografia',
      'Ecocolordoppler',
      'Ecocardiocolordoppler',
      'Elettrocardiogramma (ECG)',
      'Test da sforzo',
      'Holter cardiaco',
      'Holter pressorio',
      'Elettromiografia (EMG)',
      'Uroflussometria',
      'PAP TEST – THINPrep',
    ],
    'equipment' => [],
    'media'     => [],
    'cta_text'  => 'Prenota un esame',
    'cta_url'   => 'https://www.miodottore.it/',
  ],
];

// Helper: restituisce solo branche con pagina completa (per menu / listing "attive")
function branche_attive($branche) {
  return array_filter($branche, function ($b) {
    return !empty($b['active']) && !empty($b['intro']);
  });
}

// Helper: normalizza una branca "minima" (solo slug, title, active, intro) per la scheda singola
function branca_completa($b) {
  $defaults = [
    'subtitle'    => '',
    'meta_desc'   => '',
    'doctors'     => [],
    'description' => [],
    'methods'     => [],
    'equipment'   => [],
    'media'       => [],
    'cta_text'    => 'Prenota',
    'cta_url'     => 'https://www.miodottore.it/',
  ];
  return array_merge($defaults, $b);
}
