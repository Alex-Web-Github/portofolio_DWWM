document.addEventListener('DOMContentLoaded', function () {

  // Ouverture de l'Accordéon dans Mes Réalisations
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

      if (projectDescription.style.maxHeight) {
        projectDescription.style.maxHeight = null;
      } else {
        projectDescription.style.maxHeight = projectDescription.scrollHeight + 'px';
      }
    });
  });
});
