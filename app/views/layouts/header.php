<?php
/**
 * Layout: Header
 * Bootstrap 5 + Modern UI shell. Opens the HTML document.
 * Variables available: $page, $pageTitle
 */
$currentPage = $page ?? 'home';
$title = isset($pageTitle) ? $pageTitle . ' — ' . SITE_NAME : SITE_NAME;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?></title>
    <meta name="description" content="Synapse — The All Nepal Medical College Meet organized by BPKIHS. Sports, Literary and Cultural Events.">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="icon" href="img/synapsefavico.png" type="image/png">
</head>
<body id="myPage" data-page="<?php echo htmlspecialchars($currentPage); ?>">

<?php require VIEW_PATH . '/layouts/nav.php'; ?>
