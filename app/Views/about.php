<?= $this->extend('commanfile/header'); ?>
<?= $this->section('content'); ?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About Us</h2>
          <ol>
            <li><a href="<?=base_url()?>">Home</a></li>
            <li>About Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
            <img src="<?=base_url()?>img/hero-img.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>Disrupting The Way  Developers Learn</h3>
            <p class="fst-italic">
              We are building a platform that would fundamentally change the way tech is learnt through our “work-like”
              Micro-Experiences. Pointer IT Education Micro-Experiences provide an environment optimised for learning,
              with real world
              problems curated from the industry.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Tech is transforming every industry, and quality developers are
                going to be the driving force behind that change.</li>
              <li><i class="bi bi-check-circle"></i> Existing ways of developing talent through video based learning and
                traditional universities are not making the cut.</li>
              <li><i class="bi bi-check-circle"></i> We believe developers need and deserve better ways to learn and
                shape the new world.</li>
            </ul>
            <a class="apply-now inner-page" onclick="openPopup()">Apply Now <i class="bi-chevron-double-right"></i></a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Skilling Exercises</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-list-check"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="03" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Work Like Projects</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-list-check"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="01" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Full Stack Project</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

  </main><!-- End #main -->

  <?= $this->endSection(); ?>