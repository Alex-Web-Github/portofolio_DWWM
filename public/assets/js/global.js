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
  const projects = document.querySelectorAll('.project'); // Changed from .project-card to .project

  // Fonction de filtrage
  function filterProjects(type) {
    projects.forEach((project) => {
      const projectType = project.dataset.type;
      project.style.display = (type === projectType) ? 'block' : 'none';
    });

    // Mise à jour de la classe active sur les boutons
    filterButtons.forEach(btn => {
      if (btn.dataset.type === type) {
        btn.classList.add('active');
      } else {
        btn.classList.remove('active');
      }
    });
  }

  // Appliquer le filtre "personnal" au chargement
  filterProjects('personnal');

  // Gestionnaire de clic pour les boutons
  filterButtons.forEach((button) => {
    button.addEventListener('click', function () {
      filterProjects(this.dataset.type);
    });
  });


});




