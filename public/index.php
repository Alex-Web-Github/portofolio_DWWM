<?php require_once './templates/_header.php'; ?>


<section class="section-l">
  <h2 class="section__title">Compétences</h2>
  <div class="section__content section__skills">
    <div class="skill__block">
      <div class="block__title">
        <img src="/assets/images/icons/icon-front-end-60px.webp" width="60px" height="60px" alt="icon Front-End">
        <h3 class="skill__title">Front-End</h3>
      </div>
      <ul class="skill__list">
        <li class="skill__list__item">Maquetter une application</li>
        <li class="skill__list__item">Développer une interface utilisateur web Responsive</li>
        <li class="skill__list__item">Développer un thème WordPress sur-mesure</li>
        <li class="skill__list__item">Référencement naturel & web-performances :<br>application des bonnes pratiques </li>
      </ul>
      <!-- Icones des Compétences -->
      <div class="block__icons">
        <img src="/assets/images/icons/html5-original.svg" width="50px" height="50px" title="HTML 5" class="icons" alt="icon html">
        <img src="/assets/images/icons/css3-original.svg" width="50px" height="50px" title="CSS 3" class="icons" alt="icon css">
        <img src="/assets/images/icons/javascript-original.svg" width="50px" height="50px" title="JavaScript" class="icons" alt="icon javascript">
        <img src="/assets/images/icons/bootstrap-original.svg" width="50px" height="50px" title="Bootstrap" class="icons" alt="icon bootstrap">
        <img src="/assets/images/icons/sass-original.svg" width="50px" height="50px" title="préprocesseur SASS" class="icons" alt="icon sass">
        <img src="/assets/images/icons/figma-original.svg" width="50px" height="50px" title="Figma" class="icons" alt="icon figma">

      </div>
    </div>
    <!-- skills Front-End -->
    <div class="skill__block">
      <div class="block__title">
        <img src="/assets/images/icons/icon-back-end-60px.webp" width="60px" height="60px" alt="icon Back-End">
        <h3 class="skill__title">Back-End</h3>
      </div>
      <ul class="skill__list">
        <li class="skill__list__item">Concevoir une application</li>
        <li class="skill__list__item">Concevoir et mettre en place une base de données</li>
        <li class="skill__list__item">Développer des composants métier</li>
        <li class="skill__list__item">Développer la partie back-end d'une application web</li>
      </ul>
      <!-- Icones des Compétences -->
      <div class="block__icons">
        <img src="/assets/images/icons/php-original.svg" width="50px" height="50px" title="PHP" class="icons" alt="icon php">
        <img src="/assets/images/icons/mysql-original-wordmark.svg" width="50px" height="50px" title="MySQL" class="icons" alt="icon mysql">
        <img src="/assets/images/icons/symfony-original-wordmark.svg" width="50px" height="50px" title="Symfony" class="icons" alt="icon symfony">
        <img src="/assets/images/icons/wordpress-original.svg" width="50px" height="50px" title="WordPress" class="icons" alt="icon wordpress">
        <img src="/assets/images/icons/git-original-wordmark.svg" width="50px" height="50px" title="Git" class="icons" alt="icon git">
        <img src="/assets/images/icons/github-original.svg" width="50px" height="50px" title="GitHub" class="icons" alt="icon github">
      </div>
    </div>
    <!-- skills Back-End -->
  </div>
</section>

<section class="section-l  wide-size">
  <h2 class="section__title">Réalisations</h2>
  <div class="section__content">
    <!-- Boutons de filtre -->
    <div class="filter__container">
      <button class="filter active" data-type="personnal">Mes Réalisations</button>
      <button class="filter" data-type="student">Projets étudiants</button>
      <button class="filter" data-type="sequane">Réalisations Séquane</button>
    </div>
    <!-- Projets -->
    <div class="project__container">
      <?php
      // Récupération des projets depuis le fichier JSON
      $projectsJson = file_get_contents('data/my-projects.json');
      $projects = json_decode($projectsJson, true); ?>
      <?php foreach ($projects as $project): ?>
        <?php include 'templates/_project-card.php'; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section-l">
  <h2 class="section__title">Qui suis-je ?</h2>
  <div class="section__content">
    <p class="presentation__text">
      Tout a commencé dans les années 80, lorsque j’ai posé mes mains sur un ordinateur pour la première fois (un Thomson TO7...) et taper mes premières ligne de code (en Microsoft Basic) : Une révélation ! De ces premiers instants passés à explorer l’informatique est née une curiosité insatiable. En 2001, avec l'arrivée d'Internet, j’ai mis en ligne ma première page web, sans me douter que cette expérience poserait les bases d’une nouvelle aventure.</p>
    <p class="presentation__text">
      Les années ont passé, et mon chemin m’a mené vers une autre passion : la Montagne (<span class="text--underline"><a href="https://sportsnatureevasion.com" target="_blank">découvrir mon activité de Guide&nbsp
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
          </svg>
          )</a></span>. Mais très vite, un constat s’est imposé : être visible en ligne devenait essentiel. Ce besoin a ravivé une flamme... J'ai alors choisi d'évoluer et de me reéinventer. Je me suis formé aux nouvelles technologies du web pour assouvir mon besoin d'apprendre, disposer de plus de connaissances pour créer selon mes besoins/envies mais aussi mieux comprendre les évolutions futures de ce secteur.
    </p>
    <p class="presentation__text">Curieux, rigoureux, enthousiaste, je me suis façonné à travers les défis. Aujourd’hui, chaque projet est une nouvelle exploration, un challenge à relever.</br>
      Mon ambition ? Concevoir des expériences web modernes, performantes et uniques.</p>
  </div>
</section>

<section class="section-l">
  <h2 class="section__title">Parcours / Expériences</h2>
  <div class="section__content section__path">
    <div class="step step--right">
      <p class="step__title"> Freelance - depuis Septembre 2025</p>
      <p class="step__description">Développeur WordPress | Applications PHP / Symfony</p>
    </div>
    <div class="step step--left">
      <p class="step__title">Apprentissage | SÉQUANE - Nov. 2023 - Déc. 2024</p>
      <p class="step__description">Concepteur Développeur d'Applications PHP / Symfony</p>
    </div>
    <div class="step step--right">
      <p class="step__title">STUDI / Digital School - Oct. 2022 - Juin 2023</p>
      <p class="step__description">Titre Professionnel Développeur Web / Web Mobile</p>
    </div>
    <div class="step step--left">
      <p class="step__title">WP Chef - 2021</p>
      <p class="step__description">Certification RS 5170 : Concevoir des sites WordPress professionnels</p>
    </div>
    <div class="step step--right">
      <p class="step__title">École Française de Papeterie et des Industries
        Graphiques de Grenoble</p>
      <p class="step__description">Obtention du diplôme d’Ingénieur en 09/2000</p>
    </div>
  </div>
</section>


<?php require_once './templates/_footer.php'; ?>