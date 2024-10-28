<gcds-container size="full" padding="200" center="true">
<section>
  <h1 class="icon-title">
    <i class="fas fa-database"></i>
    <?php echo $lang['pages']['decarbonization-data-portal']['title']; ?>
  </h1>
  <p>
    <?php echo $lang['pages']['decarbonization-data-portal']['description']; ?>
  </p>
  <p>
    <?php echo $lang['pages']['decarbonization-data-portal']['description-2']; ?>
  </p>
  <h2 class="icon-title">
    <i class="fas fa-bullseye"></i>
    <?php echo $lang['pages']['decarbonization-data-portal']['what-you-can-expect']; ?>
  </h2>
  <p>
    <?php echo $lang['pages']['decarbonization-data-portal']['what-you-can-expect-description']; ?>
  </p>
  <h2 class="icon-title">
    <i class="fas fa-database"></i>
    <?php echo $lang['pages']['decarbonization-data-portal']['what-you-can-access-now']; ?>
  </h2>
  <h3>
    <?php echo $lang['pages']['decarbonization-data-portal']['national-research-council']; ?>
  </h3>
  <ul>
    <?php foreach ($lang['pages']['decarbonization-data-portal']['national-research-council-projects'] as $project) : ?>
      <li>
        <a target="_blank" href="<?php echo $project['link']; ?>"><?php echo $project['title']; ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
  <h3>
    <?php echo $lang['pages']['decarbonization-data-portal']['standing-offers']; ?>
  </h3>
  <ul>
    <?php foreach ($lang['pages']['decarbonization-data-portal']['standing-offers-projects'] as $project) : ?>
      <li>
        <a target="_blank" href="<?php echo $project['link']; ?>"><?php echo $project['title']; ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
  <h3>
    <?php echo $lang['pages']['decarbonization-data-portal']['news-releases']; ?>
  </h3>
  <ul>
    <?php foreach ($lang['pages']['decarbonization-data-portal']['news-releases-projects'] as $project) : ?>
      <li>
        <a target="_blank" href="<?php echo $project['link']; ?>"><?php echo $project['title']; ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
</section>
</gcds-container>
