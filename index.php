<?php
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
  <meta name="description" content="Pierre Gimond, développeur web spécialiste WordPress &amp; PrestaShop. <?php echo date('Y') - 2008 ?> ans d'expérience dans la conception de sites vitrine et e-commerce." />

  <link rel="stylesheet" href="assets/build/css/main.min.css?ver=<?php echo filemtime(__DIR__ . '/assets/build/css/main.min.css') ?>" />
  <script defer src="assets/build/js/main.min.js?ver=<?php echo filemtime(__DIR__ . '/assets/build/js/main.min.js') ?>"></script>

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
        <path id="curve" fill="transparent" d="M 0 0 C 10 0 90 0 100 0">
          <animate attributeName="d" values="M 0 0 C 10 0 90 0 100 0;M 0 0 C 0 50 100 50 100 0" dur="0.7s" begin="indefinite" fill="freeze" calcMode="spline" keyTimes="0;1" keySplines="0.165 0.84 0.44 1" />
        </path>
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
          Développeur web, spécialiste WordPress &amp; PrestaShop.
        </p>
        <p>
          <?php echo date('Y') - 2008 ?> ans d'expérience dans la conception de sites vitrine et e-commerce, du thème sur mesure à l'intégration complète.
        </p>
      </div>

      <div class="actions">
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

        <a class="link-secondary" target="_blank" rel="noopener" href="https://www.linkedin.com/in/pierre-gimond-20802117/">
          Me retrouver sur LinkedIn
        </a>
      </div>

    </div>
  </div>

  <div class="skills">
    <div class="wrapper">
      <div class="skills-title">
        <h2 class="title">Ce que je <strong>maîtrise</strong></h2>
      </div>
      <div class="skills-text">
        <div class="text-format">
          <p>
            Je développe des sites robustes et performants, en travaillant au plus près des designers et des équipes projet. Mon terrain de jeu principal : WordPress et PrestaShop, avec une attention particulière à la qualité du code et à la maintenabilité.
          </p>
        </div>
        <?php
        $stack = [
          'CMS' => ['WordPress', 'Timber', 'PrestaShop'],
          'Back' => ['PHP', 'Twig', 'Smarty'],
          'Front' => ['HTML5', 'SASS', 'TypeScript', 'Webpack'],
          'Outils' => ['Git', 'Docker'],
        ];
        ?>
        <dl class="stack">
          <?php foreach ($stack as $category => $items) { ?>
            <div class="stack-group">
              <dt><?php echo $category ?></dt>
              <?php foreach ($items as $item) { ?>
                <dd><?php echo $item ?></dd>
              <?php } ?>
            </div>
          <?php } ?>
        </dl>
      </div>
    </div>
  </div>

  <div class="links wrapper" id="contact">
    <div class="links-text">
      <h2 class="title">Envie d'échanger ?</h2>
      <div class="text-format">
        <p>Pour un contact professionnel ou simplement parler dev, je suis joignable ici.</p>
      </div>
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