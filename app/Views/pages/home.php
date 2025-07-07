<?php $this->extend('layouts/main') ?>

<?php $this->section('pages') ?>
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <img src="<?= base_url('assets/img/background.png') ?>" alt="" data-aos="fade-in">
        <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2>ANGIELYNE BANDE</h2>
                    <p>I'm a Multimedia Developer</p>
                    <a href="<?= base_url('about') ?>" class="btn-get-started">About Me</a>
                </div>
            </div>
        </div>
    </section>

</main>
<?php $this->endSection() ?>
