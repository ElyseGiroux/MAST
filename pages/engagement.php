<gcds-container size="full" padding="200" center="true">
  <section>
    <h1 class="icon-title">
      <i class="fas fa-comments"></i>
      <?php echo $lang['pages']['engagement']['title']; ?>
    </h1>
    <p>
      <?php echo $lang['pages']['engagement']['description']; ?>
    </p>
    <h2>
      <?php echo $lang['pages']['engagement']['call-to-action']; ?>
    </h2>
    <h3 class="icon-title">
      <i class="fas fa-lightbulb"></i>
      <?php echo $lang['pages']['engagement']['why-we-need-your-input']; ?>
    </h3>
    <p>
      <?php echo $lang['pages']['engagement']['why-we-need-your-input-description']; ?>
    </p>
    <h3 class="icon-title">
      <i class="fas fa-chart-line"></i>
      <?php echo $lang['pages']['engagement']['how-we-will-use-your-input']; ?>
    </h3>
    <ul>
      <?php foreach ($lang['pages']['engagement']['how-we-will-use-your-input-descriptions'] as $description) : ?>
        <li>
          <?php 
            $words = explode(' ', $description);
            echo '<strong>' . $words[0] . '</strong> ' . implode(' ', array_slice($words, 1));
          ?>
        </li>
      <?php endforeach; ?>
    </ul>
    </p>
    <h3 class="icon-title">
      <i class="fas fa-pen-to-square"></i>
      <?php echo $lang['pages']['engagement']['feedback']; ?>
    </h3>
    <p>
      <?php echo $lang['pages']['engagement']['feedback-description']; ?>
    </p>
    <p>
      <a href="<?php echo $lang['pages']['engagement']['feedback-link'] ?>">
        <?php echo $lang['pages']['engagement']['provide-feedback'] ?>
      </a>
    </p>
  </section>
</gcds-container>
