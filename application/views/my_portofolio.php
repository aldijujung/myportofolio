<!DOCTYPE html>
<html lang="en">

 <?php $this->load->view('includes/head.php') ?>

<body id="page-top">

  <?php $this->load->view('includes/nav.php') ?>
  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
          <h2 class="mb-0">Slamet
          <span class="text-primary">Aldiansyah</span>
        </h2>
        <div class="subheading mb-5">Street : Pulo Gebang · Cakung, Jakarta-Timur · 
            <a href="https://api.whatsapp.com/send?phone=6281210801673&text=Halo%20saya%20baru%20saja%20menghubungi%20anda%20diweb" style="color: green "> <i class="fab fa-whatsapp"></i> (0812) 1080-1673 </a>
            <a href="mailto:aldi.ansych@gmail.com" title="kirim email ke Admin"><i class="fas fa-envelope"></i> aldi.ansych@gmail.com</a>
        </div>
        <p class="lead mb-5">Saya Adalah Junior Programming, Saya suka pekerjaan dengan kreatifitas. Tepat waktu dalam menyelesaikan pekerjaan adalah hal yang wajib untuk saya. menjalin komunikasi dengan rekan tim, membangun kepercayaan, dan tidak takut bertanya adalah cara saya untuk bersosialisai dengan lingkungan baru . Anda bisa melihat sosial media saya dibawah ini :</p>
        <div class="social-icons">
          <a href="https://www.instagram.com/aldiansyah96">
            <i class="fab fa-instagram"></i>
          </a>
<!--          <a href="#">
            <i class="fab fa-github"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>-->
          <a href="https://www.facebook.com/yansyachdialdi">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <?php $this->load->view('content/pengalaman') ?>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
<?php $this->load->view('content/pendidikan.php') ?>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <?php $this->load->view('content/kemampuan') ?>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
        <?php $this->load->view('content/history_project') ?>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <?php $this->load->view('content/sertifikat.php') ?>
    </section>

  </div>

 <?php $this->load->view('includes/js.php') ?>

</body>

</html>
