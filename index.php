<!DOCTYPE html><?php 
$seite = (string) ($_GET['seite'] ?? '_h0');
// Test
$link = '/views/themen/' . $seite . '.php';

if (file_exists(__DIR__ . $link)) {
    require __DIR__ . $link;
} else {
    require __DIR__ .'/views/themen/_error.php';
    exit();
}
?>
