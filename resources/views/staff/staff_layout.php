<?php ob_start(); ?>
<?php include 'resources/views/staff/nav.php'; ?>

<?php
if (isset($url)) {
    include $url . '.php';
}
?>

<?php include 'resources/views/landing/footer.php'; ?>
<?php $body = ob_get_clean(); ?>


<?php include 'resources/views/master_layout/master.php'; ?>