<gcds-header 
    lang="<?php echo $langCode; ?>" 
    lang-href="<?php echo getPageUrl($page, ($langCode === 'en' ? 'fr' : 'en')); ?>" 
    role="banner" 
    class="hydrated">
  
  <gcds-top-nav slot="menu" label="Main menu" alignment="right" class="hydrated">
    <gcds-nav-link 
        slot="home" 
        href="<?php echo BASE_URL . '/' . $langCode ?>" 
        class="home-link link-inherit link-no-underline hydrated" 
        role="listitem">
        <?php echo $lang['pages']['marine-accelerator-for-sustainable-technologies']['title']; ?>
    </gcds-nav-link>

    <gcds-nav-group 
        open-trigger="<?php echo $lang['components']['header']['marine-decarbonization'] ?>" 
        menu-label="<?php echo $lang['components']['header']['marine-decarbonization'] ?>">
      <gcds-nav-link 
          <?php if ($page === 'marine-accelerator-for-sustainable-technologies') echo 'current'; ?> 
          href="<?php echo BASE_URL . '/' . $langCode ?>">
          <?php echo $lang['pages']['marine-accelerator-for-sustainable-technologies']['title']; ?>
      </gcds-nav-link>
      
      <gcds-nav-link 
          <?php if ($page === 'state-of-marine-decarbonization') echo 'current'; ?> 
          href="<?php echo getPageUrl('state-of-marine-decarbonization', $langCode) ?>">
          <?php echo $lang['pages']['state-of-marine-decarbonization']['title']; ?>
      </gcds-nav-link>
      
      <gcds-nav-link 
          <?php if ($page === 'decarbonization-data-portal') echo 'current'; ?> 
          href="<?php echo getPageUrl('decarbonization-data-portal', $langCode) ?>">
          <?php echo $lang['pages']['decarbonization-data-portal']['title']; ?>
      </gcds-nav-link>
      
      <gcds-nav-link 
          <?php if ($page === 'engagement') echo 'current'; ?> 
          href="<?php echo getPageUrl('engagement', $langCode) ?>">
          <?php echo $lang['pages']['engagement']['title']; ?>
      </gcds-nav-link>
    </gcds-nav-group>
  </gcds-top-nav>
  
  <gcds-breadcrumbs lang="<?php echo $langCode ?>" slot="breadcrumb" class="hydrated">
    <gcds-breadcrumbs-item 
        href="https://www.dfo-mpo.gc.ca/index-<?php echo $langCode === 'en' ? 'eng' : 'fra'; ?>.html" 
        role="listitem" 
        class="gcds-breadcrumbs-item hydrated">
        <?php echo $lang['components']['header']['fisheries-and-oceans-canada']; ?>
    </gcds-breadcrumbs-item>
    
    <gcds-breadcrumbs-item 
        href="<?php echo getPageUrl($page, $langCode, $page === 'marine-accelerator-for-sustainable-technologies') ?>" 
        role="listitem" 
        class="gcds-breadcrumbs-item hydrated">
        <?php echo $lang['pages'][$page]['title']; ?>
    </gcds-breadcrumbs-item>
  </gcds-breadcrumbs> 
</gcds-header>
