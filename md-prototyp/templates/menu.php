<?php
$menuItems = [];
foreach (glob(__DIR__ . '/content/**/*.md') as $file) {
    $content = file_get_contents($file);
    if (preg_match('/^---\s*(.*?)\s*---/s', $content, $matches)) {
        $data = yaml_parse($matches[1]);
        if (!empty($data['menu'])) {
            $menuItems[$data['menu']][] = [
                'slug'  => $data['slug'],
                'title' => $data['title'],
                'order' => $data['order'] ?? 0,
            ];
        }
    }
}
// Jetzt $menuItems sortieren und in menu.php verwenden
