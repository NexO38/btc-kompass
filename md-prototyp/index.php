<?php
require 'vendor/autoload.php'; // Composer-Autoloader

$slug = $_GET['seite'] ?? 'quick-was-ist-bitcoin';
$filepath = __DIR__ . '/content/' . $slug . '.md';
if (!file_exists($filepath)) {
    $filepath = __DIR__ . '/content/404.md';
}

// Datei einlesen
$content = file_get_contents($filepath);

// Front-Matter und Markdown trennen (--- ... ---)
$frontMatter = [];
$markdown    = $content;
if (preg_match('/^---\s*(.*?)\s*---\s*(.*)$/s', $content, $matches)) {
    $yamlBlock = $matches[1];
    $markdown  = $matches[2];
    if (function_exists('yaml_parse')) {
        $frontMatter = yaml_parse($yamlBlock);
    } else {
        // Fallback: sehr einfaches Parsen per JSON-Kodierung
        $frontMatter = json_decode(json_encode(yaml_parse($yamlBlock)), true);
    }
}

// Markdown in HTML umwandeln
$parsedown   = new Parsedown();
$htmlContent = $parsedown->text($markdown);

// Templates einbinden
include __DIR__ . '/templates/header.php';
include __DIR__ . '/templates/menu.php';
include __DIR__ . '/templates/page.php';
include __DIR__ . '/templates/footer.php';
