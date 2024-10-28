<gcds-container size="full" padding="200" center="true">
  <section>
    <h1 class="icon-title">
      <i class="fas fa-ship"></i>
      <?php echo $lang['pages']['state-of-marine-decarbonization']['title']; ?>
    </h1>
    <p>
      <?php echo $lang['pages']['state-of-marine-decarbonization']['description']; ?>
    </p>
    <p>
      <?php echo $lang['pages']['state-of-marine-decarbonization']['description-2']; ?>
    </p>
    <h2 class="icon-title">
      <i class="fas fa-chart-line"></i>
      <?php echo $lang['pages']['state-of-marine-decarbonization']['current-state']; ?>
    </h2>
    <p>
      <?php echo $lang['pages']['state-of-marine-decarbonization']['current-state-description']; ?>
    </p>
    <h2 class="icon-title">
      <i class="fas fa-file-alt"></i>
      <?php echo $lang['pages']['state-of-marine-decarbonization']['ofdp-title']; ?>
    </h2>
    <p>
      <?php echo $lang['pages']['state-of-marine-decarbonization']['ofdp-description']; ?>
    </p>
    <ol>
      <?php foreach ($lang['pages']['state-of-marine-decarbonization']['ofdp'] as $line) : ?>
        <li>
          <?php echo $line; ?>
        </li>
      <?php endforeach; ?>
      </li>
    </ol>
    <h2 class="icon-title">
      <i class="fas fa-exclamation-triangle"></i>
      <?php echo $lang['pages']['state-of-marine-decarbonization']['understanding-the-challenges']; ?>
    </h2>
    <ul>
      <?php foreach ($lang['pages']['state-of-marine-decarbonization']['challenges'] as $challenge) : ?>
        <li>
          <?php echo $challenge; ?>
        </li>
      <?php endforeach; ?>
    </ul>
    <h2 class="icon-title">
      <i class="fas fa-gas-pump"></i>
      <?php echo $lang['pages']['state-of-marine-decarbonization']['shifting-towards-low-carbon-fuels']; ?>
    </h2>
    <ul>
      <?php foreach ($lang['pages']['state-of-marine-decarbonization']['low-carbon-fuels'] as $line) : ?>
        <li>
          <?php echo $line; ?>
        </li>
      <?php endforeach; ?>
    </ul>
    <h2 class="icon-title">
      <i class="fas fa-microscope"></i>
      <?php echo $lang['pages']['state-of-marine-decarbonization']['assessing-next-gen-feasibility']; ?>
    </h2>
    <ul>
      <?php foreach ($lang['pages']['state-of-marine-decarbonization']['next-gen-feasibility'] as $line) : ?>
        <li>
          <?php echo $line; ?>
        </li>
      <?php endforeach; ?>
    </ul>
    <h2 class="icon-title">
      <i class="fas fa-handshake"></i>
      <?php echo $lang['pages']['state-of-marine-decarbonization']['enabling-federal-partners']; ?>
    </h2>
    <ul>
      <?php foreach ($lang['pages']['state-of-marine-decarbonization']['federal-partners'] as $partner) : ?>
        <li>
          <?php echo $partner; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>
</gcds-container>
