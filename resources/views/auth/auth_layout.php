<?php ob_start(); ?>

<?php
if (isset($url)) {
    include $url . '.php';
}
?>

<?php $body = ob_get_clean(); ?>


<?php include 'resources/views/master_layout/master.php'; ?>