<?php
$env = $_SERVER['HTTP_HOST'] == 'localhost' ? 'dev' : 'prod';

$themeClass = 'no-theme';
if (!empty($_COOKIE['theme'])) {
  if ($_COOKIE['theme'] == 'dark') {
    $themeClass = 'dark-mode';
  } else if ($_COOKIE['theme'] == 'light') {
    $themeClass = 'light-mode';
  }
}
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pierre Gimond - Développeur web</title>
  <meta name="title" content="Pierre Gimond - Développeur web" />
  <meta name="description" content="Je mets à votre service mes <?php echo date('Y') - 2008 ?> ans d'expérience dans le développement web pour confectionner des sites vitrine ou e-commerce clés en main. Vous avez un projet ? Contactez-moi pour en parler." />

  <link rel="stylesheet" href="assets/build/css/main.min.css<?php echo ($env == 'dev' ? '?ver=' . time() : '') ?>" />
  <script defer src="assets/build/js/main.min.js<?php echo ($env == 'dev' ? '?ver=' . time() : '') ?>"></script>

  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="msapplication-TileColor" content="#da532c" />
  <meta name="theme-color" content="#ffffff" />
  <meta name="color-scheme" content="dark light" />
</head>

<body class="<?php echo $themeClass; ?>">
  <button class="btn-toggle-theme" title="Changer de thème"></button>
  <div class="top wrapper">
    <div class="image">
      <svg preserveaspectratio="none" overflow="visible" viewBox="0 0 100 50" width="100" height="50">
        <path id="curve" fill="transparent" d="M 0 0 C 10 0 90 0 100 0" />
        <text width="100">
          <textPath text-anchor="middle" startOffset="50%" xlink:href="#curve">
            Bonjour !
          </textPath>
        </text>
      </svg>
      <div class="face">
        <img src="assets/build/img/profil.webp" width="338" height="357" alt="" />
      </div>
    </div>

    <div class="text">
      <h1 class="title">
        Je suis <strong>Pierre Gimond</strong>.
      </h1>
      <div class="text-format">
        <p>
          Développeur web, expert <strong>Wordpress</strong>.
        </p>
        <p>
          Je mets à votre service mes <strong><?php echo date('Y') - 2008 ?> ans</strong> d'expérience dans le développement web pour confectionner des sites vitrine ou e-commerce <strong>clés en main.</strong>
        </p>
      </div>

      <a class="pushable scrollto" href="#contact">
        <span class="shadow"></span>
        <span class="edge"></span>
        <span class="front">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="28" fill="currentColor">
            <path d="M16.907 4.44l-7.655 7.655c.227.325.42.676.575 1.048l1.91 4.599 5.17-13.303zm-9.002 6.308l7.656-7.656-13.303 5.17 4.599 1.911a5.51 5.51 0 0 1 1.048.575zm11.618-7.862l-6.027 15.506c-.38.98-1.477 1.483-2.449 1.124a1.831 1.831 0 0 1-1.057-1.017L8.08 13.9a3.662 3.662 0 0 0-1.98-1.98l-4.6-1.91C.546 9.613.11 8.51.528 7.544a1.95 1.95 0 0 1 1.08-1.04L17.114.475a1.852 1.852 0 0 1 2.41 2.41z"></path>
          </svg>
          Contactez-moi
        </span>
      </a>

    </div>
  </div>

  <div class="profil">
    <div class="wrapper">
      <div class="profil-title">
        <h2 class="title">Ce que je peux faire <strong>pour vous</strong></h2>

        <a href="cv_pierre_gimond.pdf" target="_blank" class="pushable">
          <span class="shadow"></span>
          <span class="edge"></span>
          <span class="front">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-5 -5 24 24" width="28" fill="currentColor">
              <path d="M8 6.641l1.121-1.12a1 1 0 0 1 1.415 1.413L7.707 9.763a.997.997 0 0 1-1.414 0L3.464 6.934A1 1 0 1 1 4.88 5.52L6 6.641V1a1 1 0 1 1 2 0v5.641zM1 12h12a1 1 0 0 1 0 2H1a1 1 0 0 1 0-2z"></path>
            </svg>
            Télécharger mon CV
          </span>
        </a>

      </div>
      <div class="profil-text text-format">
        <h3><strong>Vous avez besoin d'un site ?</strong></h3>
        <p>
          En tant que développeur web expérimenté, je crée des sites web performants et fonctionnels, adaptés à vos besoins spécifiques.<br>
          Je collabore avec votre graphiste ou vous guide dans le choix de thèmes pour garantir un design qui vous corresponde.<br>
          Mon engagement envers la qualité assure des projets web qui renforcent votre présence en ligne.
        </p>
        <h3><strong>Vous êtes une agence web ?</strong></h3>
        <p>
          En renfort technique pour vos projets, je propose une expertise avancée en développement web.<br>
          Maîtrisant WordPress avec Timber, PrestaShop, GIT, Docker, PHP, SASS, HTML5, twig, smarty, webpack, TypeScript, etc... Je garantis des solutions robustes et performantes.<br>
          Ma méthodologie et mon expérience avec de grandes entreprises font de moi un partenaire idéal pour concrétiser vos projets web les plus exigeants.
        </p>
      </div>
    </div>
  </div>

  <div class="references wrapper">
    <h2 class="title">Références</h2>
    <?php
    $references = [
      [
        'Malongo',
        'malongo.webp',
        'Lead développeur. Site institutionnel sur Wordpress et boutique sur Prestashop.',
        'https://www.malongo.com/'
      ],
      [
        'Carambar & co',
        'carambar.webp',
        'Lead développeur. Site institutionnel sur Wordpress et boutique sur Prestashop.',
        'https://www.carambarco.com/'
      ],
      [
        'Librairie Garin',
        'garin.webp',
        'Lead développeur. Site institutionnel de librairie sur Wordpress.',
        'https://www.librairiegarin.fr/'
      ],
      [
        'JLSO',
        'jlso.webp',
        'Lead développeur. Site institutionnel d\'agence événementielle.',
        'https://jlso.fr/'
      ],
      [
        'L\'avant gardiste',
        'avant_gardiste.webp',
        'Lead développeur. Boutique de cadeaux originaux sur Prestashop.',
        'https://www.lavantgardiste.com/'
      ],
      [
        'Fabulous biscuits',
        'fabulous_biscuits.webp',
        'Lead développeur. Boutique de biscuits personnalisables sur Prestashop.',
        'https://www.fabulous-biscuits.com/'
      ],
      [
        'Janod',
        'janod.webp',
        'Lead développeur. Boutique de jouets sur Prestashop.',
        'https://www.janod.com/fr/'
      ],
      [
        'Le passe temps',
        'passe_temps.webp',
        'Lead développeur. Boutique de jeux de société sur Prestashop.',
        'https://www.le-passe-temps.com/'
      ],
      [
        'Radio Ellebore',
        'ellebore.webp',
        'Lead développeur. Site institutionnel de radio locale sur Wordpress.',
        'https://www.radio-ellebore.com/'
      ],
      // [
      //   'Riviera des alpes', 'riviera.webp', 'Lead développeur. Site institutionnel de marque sur Wordpress.'
      // ],
    ];
    ?>
    <ul>
      <?php
      foreach ($references as $ref) {
        list($name, $image, $desc, $link) = $ref;
      ?>
        <li>
          <a href="<?php echo $link ?>" target="_blank" rel="noopener">
            <img src="assets/build/img/<?php echo $image ?>" alt="">
            <div class="text text-format">
              <h3><?php echo $name ?></h3>
              <p><?php echo $desc ?></p>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                <path fill-rule="evenodd" d="M5 2h2a1 1 0 0 1 .117 1.993L7 4H5a1 1 0 0 0-.993.883L4 5v14a1 1 0 0 0 .883.993L5 20h14a1 1 0 0 0 .993-.883L20 19v-2a1 1 0 0 1 1.993-.117L22 17v2a3 3 0 0 1-2.824 2.995L19 22H5a3 3 0 0 1-2.995-2.824L2 19V5a3 3 0 0 1 2.824-2.995L5 2h2zm16 0 .081.003.12.017.111.03.111.044.098.052.096.067.09.08.097.112.071.11.031.062.034.081.024.076.03.148L22 3v6a1 1 0 0 1-2 0V5.414l-6.293 6.293a1 1 0 0 1-1.32.083l-.094-.083a1 1 0 0 1-.083-1.32l.083-.094L18.584 4H15a1 1 0 0 1 0-2z" />
              </svg>
            </div>
          </a>
        </li>
      <?php
      }
      ?>
    </ul>
  </div>

  <div class="links wrapper" id="contact">
    <div class="links-text">
      <h2 class="title">Un projet <strong>?</strong><br>Des questions <strong>?</strong></h2> Parlons-en.
    </div>
    <ul>
      <li>
        <a title="Profil Linkedin" target="_blank" rel="noopener" href="https://www.linkedin.com/in/pierre-gimond-20802117/" class="inline-block p-1 border border-blue-600 border-opacity-0 rounded-full hover:border-opacity-100 duration-200">
          <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6 9.6-4.298 9.6-9.6S15.302.4 10 .4zM7.65 13.979H5.706V7.723H7.65v6.256zm-.984-7.024c-.614 0-1.011-.435-1.011-.973 0-.549.409-.971 1.036-.971s1.011.422 1.023.971c0 .538-.396.973-1.048.973zm8.084 7.024h-1.944v-3.467c0-.807-.282-1.355-.985-1.355-.537 0-.856.371-.997.728-.052.127-.065.307-.065.486v3.607H8.814v-4.26c0-.781-.025-1.434-.051-1.996h1.689l.089.869h.039c.256-.408.883-1.01 1.932-1.01 1.279 0 2.238.857 2.238 2.699v3.699z" />
          </svg>
        </a>
      </li>
      <li>
        <a title="Adresse e-mail" href="&#109;a&#105;&#108;t&#111;&#58;%6&#56;e%6&#67;lo&#64;&#103;%6&#57;%6Do&#37;&#54;&#69;%64%2Ef&#37;72" class="inline-block p-1 border border-blue-600 border-opacity-0 rounded-full hover:border-opacity-100 duration-200">
          <svg class="w-8 h-8 fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6 9.6-4.298 9.6-9.6S15.302.4 10 .4zM6.231 7h7.52c.399 0 .193.512-.024.643-.217.13-3.22 1.947-3.333 2.014s-.257.1-.403.1a.793.793 0 01-.402-.1L6.255 7.643C6.038 7.512 5.833 7 6.231 7zM14 12.5c0 .21-.252.5-.444.5H6.444C6.252 13 6 12.71 6 12.5V8.853c0-.092-.002-.211.172-.11l3.417 2.015a.69.69 0 00.402.1c.146 0 .252-.011.403-.1l3.434-2.014c.174-.102.172.018.172.11V12.5z" />
          </svg>
        </a>
      </li>
    </ul>
  </div>

  <div class="characters">
    <img src="assets/build/img/monsieur.webp" class="characters-man" alt="">
    <img src="assets/build/img/loup.webp" class="characters-wolf" alt="">
  </div>

  <div class="background">
    <img srcset="
          assets/build/img/home-400w.webp   400w,
          assets/build/img/home-600w.webp   600w,
          assets/build/img/home-800w.webp   800w,
          assets/build/img/home-1000w.webp 1000w,
          assets/build/img/home-1200w.webp 1200w,
          assets/build/img/home-1600w.webp 1600w,
          assets/build/img/home-2000w.webp 2000w
        " sizes="(max-width: 400px) 400px, (max-width: 600px) 600px, (max-width: 800px) 800px, (max-width: 1000px) 1000px, (max-width: 1200px) 1200px, (max-width: 1600px) 1600px, (min-width: 1601px) 2000px" src="assets/build/img/home-2000w.webp" alt="" width="2000" height="1400" loading="lazy" class="light" />
    <img srcset="
          assets/build/img/home_dark-400w.webp   400w,
          assets/build/img/home_dark-600w.webp   600w,
          assets/build/img/home_dark-800w.webp   800w,
          assets/build/img/home_dark-1000w.webp 1000w,
          assets/build/img/home_dark-1200w.webp 1200w,
          assets/build/img/home_dark-1600w.webp 1600w,
          assets/build/img/home_dark-2000w.webp 2000w
        " sizes="(max-width: 400px) 400px, (max-width: 600px) 600px, (max-width: 800px) 800px, (max-width: 1000px) 1000px, (max-width: 1200px) 1200px, (max-width: 1600px) 1600px, (min-width: 1601px) 2000px" src="assets/build/img/home_dark-2000w.webp" alt="" width="2000" height="1400" loading="lazy" class="dark" />
  </div>
</body>

</html>