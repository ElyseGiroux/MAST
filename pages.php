<?php

require_once 'config.php';

// Page slug mapping
$pageMapping = [
    'en' => [
        'marine-accelerator-for-sustainable-technologies' => 'marine-accelerator-for-sustainable-technologies',
        'engagement' => 'engagement',
        'decarbonization-data-portal' => 'decarbonization-data-portal',
        'state-of-marine-decarbonization' => 'state-of-marine-decarbonization'
    ],
    'fr' => [
        'accelerateur-maritime-pour-les-technologies-durables' => 'marine-accelerator-for-sustainable-technologies',
        'engagement' => 'engagement',
        'portail-de-donnees-de-la-decarbonisation' => 'decarbonization-data-portal',
        'etat-de-la-decarbonisation-maritime' => 'state-of-marine-decarbonization'
    ]
];

/**
 * Get the page name from a slug
 * @param string $slug The URL slug
 * @param string $langCode The language code (en/fr)
 * @return string The page name or null if not found
 */
function getPageFromSlug($slug, $langCode) {
    global $pageMapping;
    return isset($pageMapping[$langCode][$slug]) ? $pageMapping[$langCode][$slug] : null;
}

/**
 * Get the slug for a page
 * @param string $page The page name
 * @param string $langCode The language code (en/fr)
 * @return string The URL slug
 */
function getSlugFromPage($page, $langCode) {
    global $pageMapping;
    $flipped = array_flip($pageMapping[$langCode]);
    return isset($flipped[$page]) ? $flipped[$page] : $page;
}

/**
 * Generate a full URL for a page
 * @param string $page The page name
 * @param string $langCode The language code (en/fr)
 * @param bool $isHome Whether to treat this as home page (optional)
 * @return string The full URL path
 */
function getPageUrl($page, $langCode, $isHome = false) {
    if ($page === 'marine-accelerator-for-sustainable-technologies' || $isHome) {
        return BASE_URL . "/{$langCode}";
    }
    $slug = getSlugFromPage($page, $langCode);
    return BASE_URL . "/{$langCode}/{$slug}";
}

?>
