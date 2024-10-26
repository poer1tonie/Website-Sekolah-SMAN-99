<!-- Main Content Section -->
<section id="kontenutama" class="kontenutama">
    <div class="container">
        <div class="row">
  
<!-- Kolom pertama -->
  <div class="col-md-8 mb-8">
    <div class="p-4 bg-light border shadow-sm rounded konten-container">
        <h4 class="konten-title">Hubungi Kami</h4> 
            <form id="contactForm" class="needs-validation" action="contact/simpan_message.php" method="POST" novalidate>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    <div class="invalid-feedback">
                        Nama wajib diisi.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <div class="invalid-feedback">
                        Masukkan alamat email yang valid.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    <div class="invalid-feedback">
                        Pesan wajib diisi.
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form> 
    </div>
</div>

<!-- Modal Bootstrap -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Pesan Terkirim</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Pesan Anda telah berhasil dikirim. Kami akan segera menghubungi Anda.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>





            <!-- Kolom kedua -->
             <div class="col-md-4 mb-4">
    <div class="p-3 bg-light border shadow-sm rounded konten-container">
        <h4 class="konten-title">Artikel lain</h4>

       <?php
        $artikel = $function_all->tampil_data_artikel();  
        foreach($artikel as $row)
        {  
            $id=$row['id'];
            ?> 

            <div class="artikel-lainnya">
            <!-- Artikel 1 -->
            <div class="artikel-lainnya-item d-flex align-items-start mb-3">
                <div class="icon-circle text-white bg-primary me-2">
                    <i class="fas fa-arrow-right"></i>
                </div> 
<a href="./index.php?aksi=artikeldet&id=<?php echo $id; ?>" class="artikel-link"><?php echo $row['judul']; ?></a>
            </div>
<?php } ?>

           
        </div>
    </div>
</div>

        </div>
    </div>
</section>