<?php
require_once 'config.php';

// Get the requested path
$requestUri = $_SERVER['REQUEST_URI'];
// Remove base URL from the request URI if it exists
$requestUri = str_replace(BASE_URL, '', $requestUri);
$segments = explode('/', trim($requestUri, '/'));

// Redirect to default locale if no locale is specified
if (empty($segments[0])) {
    header("Location: " . BASE_URL . "/en");
    exit;
}

// Determine language
$langCode = $segments[0] ?? 'en';
$langFile = __DIR__ . "/languages/{$langCode}.php";
if (!file_exists($langFile)) {
    $langFile = __DIR__ . "/languages/en.php";
    $langCode = 'en';
}
$lang = include $langFile;

// Include page mapping
require_once 'pages.php';

// Determine page
$home = "marine-accelerator-for-sustainable-technologies";
$requestedSlug = $segments[1] ?? '';

// Look up the actual page file name from the mapping
$page = $home;
if (!empty($requestedSlug)) {
    $mappedPage = getPageFromSlug($requestedSlug, $langCode);
    if ($mappedPage !== null) {
        $page = $mappedPage;
    } elseif (file_exists(__DIR__ . "/pages/{$requestedSlug}.php")) {
        $page = $requestedSlug;
    }
}

$pageFile = __DIR__ . "/pages/{$page}.php";
if (!file_exists($pageFile)) {
    $pageFile = __DIR__ . "/pages/{$home}.php";
    $page = $home;
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo $lang['meta']['title']; ?></title>
        <meta name="date-modified" content="<?php echo $lang['meta']['date-modified']; ?>" />
        <meta name="description" content="<?php echo $lang['meta']['description']; ?>" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.design-system.alpha.canada.ca/@cdssnc/gcds-components@0.26.2/dist/gcds/gcds.css" />
        <script type="module" src="https://cdn.design-system.alpha.canada.ca/@cdssnc/gcds-components@0.26.2/dist/gcds/gcds.esm.js"></script>
        <script nomodule src="https://cdn.design-system.alpha.canada.ca/@cdssnc/gcds-components@0.26.2/dist/gcds/gcds.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/@cdssnc/gcds-components@latest/dist/gcds/gcds.css" />

        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css" />
        <?php include 'components/analytics.php'; ?>
    </head>
    <body>
        <?php include 'components/header.php'; ?>
        <main>
            <?php include $pageFile; ?>
            <?php include 'components/date-modified.php'; ?>
        </main>
        <?php include 'components/footer.php'; ?>
    </body>
</html>
