<?php
$menu = require __DIR__ . '/../config/menu.php';
?>
<nav class="menu-container">
    <ul>
    <?php foreach ($menu as $slug => $item): ?>
        <li class="dropdown">
            <a href="index_new.php?seite=<?php echo $slug; ?>" class="dropbtn">
                <?php echo htmlspecialchars($item['title']); ?>
            </a>
            <?php if (!empty($item['subpages'])): ?>
            <div class="dropdown-content">
                <?php foreach ($item['subpages'] as $subSlug => $subTitle): ?>
                    <a href="index_new.php?seite=<?php echo $subSlug; ?>">
                        <?php echo htmlspecialchars($subTitle); ?>
                    </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
    </ul>
</nav>
