<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <div class="p-4 bg-light rounded shadow-sm">
        <h1>About Us</h1>
        <p>
            This is the About page. You can add details about your website, company, or project here.
        </p>
        <a href="<?= base_url('contact') ?>" class="btn btn-outline-dark">Contact Us</a>
    </div>
<?= $this->endSection() ?>
