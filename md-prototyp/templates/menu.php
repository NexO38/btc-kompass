<?php
// templates/menu.php

// Inhalte aus dem content-Verzeichnis lesen (eine Ebene über templates)
$contentDir = dirname(__DIR__) . '/content';
$files = glob($contentDir . '/*.md');

$menuItems = [];

foreach ($files as $file) {
    $content = file_get_contents($file);
    if (preg_match('/^---\s*(.*?)\s*---/s', $content, $matches)) {
        if (function_exists('yaml_parse')) {
            $data = yaml_parse($matches[1]);
        } else {
            $data = []; // Fallback, falls YAML-Extension fehlt
        }
        if (!empty($data['menu'])) {
            $menuItems[$data['menu']][] = [
                'slug'  => $data['slug'],
                'title' => $data['title'],
                'order' => $data['order'] ?? 0,
            ];
        }
    }
}

// Optional: Menüpunkte sortieren
foreach ($menuItems as &$items) {
    usort($items, fn($a, $b) => $a['order'] <=> $b['order']);
}
unset($items);
?>

<nav class="menu-container">
    <ul>
    <?php foreach ($menuItems as $menuName => $items): ?>
        <li class="dropdown">
            <a href="#" class="dropbtn"><?php echo htmlspecialchars($menuName); ?></a>
            <div class="dropdown-content">
            <?php foreach ($items as $item): ?>
                <a href="index.php?seite=<?php echo htmlspecialchars($item['slug']); ?>">
                    <?php echo htmlspecialchars($item['title']); ?>
                </a>
            <?php endforeach; ?>
            </div>
        </li>
    <?php endforeach; ?>
    </ul>
</nav>
