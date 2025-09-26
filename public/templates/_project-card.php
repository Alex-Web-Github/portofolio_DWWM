<div class="project" data-type="<?= $project['type'] ?>">
  <div class="project__cover" style="background-image: url(<?= htmlspecialchars($project['cover']); ?>);"></div>
  <div class="project__content">
    <div class="project__tags">
      <?php if (is_array($project['tag']) && !empty($project['tag'])): ?>
        <?php foreach ($project['tag'] as $tag): ?>
          <span class="tag"><?php echo htmlspecialchars($tag); ?></span>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div class="project__header">
      <p class="title"><?php echo htmlspecialchars($project['title']); ?></p>
      <p class="subtitle"><?php echo htmlspecialchars($project['subtitle']); ?></p>
    </div>
    <div class="project__footer">
      <btn type="button" class="project__link btn-information" title="en savoir plus">+ de détails
      </btn>
      <div class="links-group">
        <?php if (isset($project['link-github']) && !empty($project['link-github'])): ?>
          <a href="<?= htmlspecialchars($project['link-github']); ?>" class="project__link" target="_blank" title="voir sur Github">code<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
              <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
            </svg></a>
        <?php endif; ?>
        <?php if (isset($project['link']) && !empty($project['link'])): ?>
          <a href="<?= htmlspecialchars($project['link']); ?>" class="project__link" target="_blank" title="voir le site">voir le site<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
              <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
            </svg></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="project__description">
    <div class="accordion-body">
      <?php if (isset($project['date']) && !empty($project['date'])): ?>
        <p class="description__date">Date du projet : <?= $project['date'] ?></p>
      <?php endif; ?>

      <p><?= htmlspecialchars($project['description']); ?></p>
    </div>
  </div>
</div>