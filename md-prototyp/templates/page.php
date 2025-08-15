<!-- templates/page.php -->
<main class="content-container">
    <h1><?php echo htmlspecialchars($frontMatter['title'] ?? ''); ?></h1>
    <?php echo $htmlContent; ?>
</main>
