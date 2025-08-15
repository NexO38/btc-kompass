<?php
// index_new.php 
// Erlaubte Seiten definieren (aus config generieren)
$menu = require __DIR__ . '/views_new/config/menu.php';
$allowedPages = ['quickstart', '404'];
foreach ($menu as $slug => $item) {
    $allowedPages[] = $slug;
    foreach ($item['subpages'] as $subSlug => $title) {
        $allowedPages[] = $subSlug;
    }
}

$seite = $_GET['seite'] ?? 'quickstart';
if (!in_array($seite, $allowedPages, true)) {
    $seite = '404';
}

// Pfad zur Inhaltsseite
$contentFile = __DIR__ . '/views_new/pages/' . $seite . '.php';
if (!file_exists($contentFile)) {
    $seite      = '404';
    $contentFile = __DIR__ . '/views_new/pages/404.php';
}

// Layout einbinden
include __DIR__ . '/views_new/templates/header.php';
include __DIR__ . '/views_new/templates/menu.php';
include $contentFile;
include __DIR__ . '/views_new/templates/footer.php';
