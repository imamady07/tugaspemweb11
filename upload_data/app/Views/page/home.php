<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Home</h1>
            <?php
            d($tes);
            ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>