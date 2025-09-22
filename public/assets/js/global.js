document.addEventListener('DOMContentLoaded', function () {

  // Afficher mon adresse e-mail au clic sur le bouton
  const btnEmail = document.querySelector('.email__btn');
  btnEmail.addEventListener('click', function () {
    const email = 'contact' + '@' + 'alexcreationweb' + '.fr';
    btnEmail.innerHTML = email;
    // ajouter l'attribut title pour un texte au survol
    btnEmail.setAttribute('title', 'Cliquez pour envoyer un e-mail');

    btnEmail.addEventListener('click', function () {
      window.location.href = 'mailto:' + email + '?Subject=Nouvelle demande depuis le site alexcreationweb.fr';
    });
  });


  // Ouverture de l'Accordéon "Savoir +" dans Mes Réalisations
  const btnInfo = document.querySelectorAll('.project__content .btn-information');
  btnInfo.forEach((item) => {
    item.addEventListener('click', function () {
      const project = item.closest('.project');
      const projectDescription = project.querySelector('.project__description');

      // Au click, refermer les autres accordéons déjà ouverts
      const otherProjects = document.querySelectorAll('.project');
      otherProjects.forEach((otherProject) => {
        if (otherProject !== project) {
          otherProject.querySelector('.project__description').style.maxHeight = null;
        }
      });
      // Puis on ouvre l'accordéon du projet cliqué
      if (projectDescription.style.maxHeight) {
        projectDescription.style.maxHeight = null;
      } else {
        projectDescription.style.maxHeight = projectDescription.scrollHeight + 'px';
      }
    });
  });


  ///////////////////////////////////////
  // Gestion des Projets avec filtres
  ///////////////////////////////////////
  const filterButtons = document.querySelectorAll('.filter');

  filterButtons.forEach((button) => {
    button.addEventListener('click', function () {
      // Toggle la classe .active sur le bouton cliqué
      filterButtons.forEach((btn) => btn.classList.remove('active'));
      button.classList.add('active');

      // Affichage des Projets selon bouton de filtre cliqué
      const type = button.dataset.type;
      const projects = document.querySelectorAll('.project');
      projects.forEach((project) => {
        const projectType = project.dataset.type;
        project.style.display = (type === 'all' || type === projectType) ? 'block' : 'none';
      });
    });
  });


});




