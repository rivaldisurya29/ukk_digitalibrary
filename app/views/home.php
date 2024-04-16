<?php include '../app/views/templates/header.php'; ?>
<div class="container-fluid">
<div class="row">

<section class="py-5 text-center container card background-purple">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Perpustakaan Digital</h1>
        <p class="lead text-body-secondary">Membaca buku sangat baik sebagai latihan otak dan pikiran. Membaca dapat membantu menjaga otak agar selalu menjalankan fungsinya secara sempurna. Saat membaca, otak dituntut untuk berpikir, menganalisis berbagai masalah, mencari jalan keluar dan solusi hingga menemukan hal-hal baru.</p>
        <p>
          <a href="<?= urlTo('/perpustakaan'); ?>" class="btn btn-primary my-2 <?= menuActive(['perpustakaan']); ?>">Lihat Buku!</a>
        </p>
      </div>
    </div>
  </section>

        
          <!-- ./col -->
        </div>
</div>
<?php include '../app/views/templates/footer.php'; ?>