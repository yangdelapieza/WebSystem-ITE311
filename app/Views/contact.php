<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <div class="p-4 bg-white rounded shadow-sm border">
        <h1>Contact</h1>
        <p>Feel free to reach out to us through this form:</p>
        
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" id="name" class="form-control" placeholder="Enter your name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" id="email" class="form-control" placeholder="Enter your email">
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea id="message" class="form-control" rows="4" placeholder="Type your message"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Send Message</button>
        </form>
    </div>
<?= $this->endSection() ?>
