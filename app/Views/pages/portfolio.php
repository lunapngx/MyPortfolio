<?php $this->extend('layouts/main') ?>

<?php $this->section('pages') ?>
<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

    <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
    </div>

    <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">Photography</li>
                <li data-filter=".filter-product">Cards</li>
                <li data-filter=".filter-branding">Website</li>
            </ul>

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                <?php for ($i = 1; $i <= 9; $i++):
                    // determine filter class by index
                    $filters = ['filter-app','filter-product','filter-branding'];
                    $filter = $filters[($i-1) % 3]; ?>
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item <?= $filter ?>">
                        <img src="<?= base_url("assets/img/masonry-portfolio/masonry-portfolio-{$i}.jpg") ?>"
                             class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><?= ucfirst(str_replace('-', ' ', $filter)) ?> <?= ceil($i/3) ?></h4>
                            <p>Parking System</p>
                            <a href="<?= base_url("assets/img/masonry-portfolio/masonry-portfolio-{$i}.jpg") ?>"
                               title="Preview <?= $i ?>" data-gallery="portfolio-gallery-<?= $filter ?>"
                               class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            </a>
                        </div>
                    </div>
                <?php endfor; ?>

            </div>
        </div>
    </div>

</section>
<?php $this->endSection() ?>
