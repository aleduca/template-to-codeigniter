<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/fragment.css'); ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- ======= Hero Slider Section ======= -->
    <!-- view_cell('App\Libraries\BannerHome::load')  -->
    <section id="hero-slider" class="hero-slider _bannerHome">
    </section><!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts _recent">
        <include-fragment src="/recent">
          <?php echo $this->include('_placeholders/_recent'); ?>
      </include-fragment>
    </section> <!-- End Post Grid Section -->

    <!-- ======= Culture Category Section ======= -->
    <section class="category-section _category_culture">
      <include-fragment src="/category/culture">
          <?php echo $this->include('_placeholders/_category'); ?>
      </include-fragment>
    </section><!-- End Culture Category Section -->

    <!-- ======= Business Category Section ======= -->
    <section class="category-section _category_business">
        <include-fragment src="/category/business">
          <?php echo $this->include('_placeholders/_category'); ?>
      </include-fragment>
    </section><!-- End Business Category Section -->

    <!-- ======= Lifestyle Category Section ======= -->
    <section class="category-section _category_lifestyle">
        <include-fragment src="/category/lifestyle">
          <?php echo $this->include('_placeholders/_category'); ?>
      </include-fragment>
    </section><!-- End Lifestyle Category Section -->
<?= $this->endSection() ?>

<?= $this->section('js') ?>

<script type="module">
  import 'https://unpkg.com/@github/include-fragment-element';
  import '/assets/js/loadHomeData.js';
  // import '/assets/js/build/fragment.js';
</script>

<?= $this->endSection() ?>
