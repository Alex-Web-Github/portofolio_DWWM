<div class="project">
  <div class="project__cover" style="background-image: url(<?php echo htmlspecialchars($project['cover']); ?>);"></div>
  <div class="project__content">
    <span class="project__badge"><?php echo htmlspecialchars($project['badge']); ?></span>
    <p class="project__title"><?php echo htmlspecialchars($project['title']); ?></p>
    <p class="project__subtitle"><?php echo htmlspecialchars($project['subtitle']); ?></p>
    <div class="project__footer"><a href="<?php echo htmlspecialchars($project['link']); ?>" target="_blank">Voir le projet</a></div>
  </div>
</div>