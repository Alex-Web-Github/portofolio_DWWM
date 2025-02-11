document.addEventListener('DOMContentLoaded', function () {

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
          otherProject.querySelector('.project__description').style.overflowY = 'hidden';
        }
      });

      if (projectDescription.style.maxHeight) {
        projectDescription.style.maxHeight = null;
        projectDescription.style.overflowY = 'hidden';
      } else {
        projectDescription.style.maxHeight = '250px';
        projectDescription.style.overflowY = 'scroll';
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




