<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <div class="text-center">
        <h1 class="mb-3">Welcome to My Site</h1>
        <p class="lead">This is the home page rendered using CodeIgniter 4 and Bootstrap.</p>
        <a href="<?= base_url('about') ?>" class="btn btn-primary mt-3">Learn More</a>
    </div>
<?= $this->endSection() ?>
