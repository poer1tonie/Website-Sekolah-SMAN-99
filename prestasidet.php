<!-- Main Content Section -->
<section id="kontenutama" class="kontenutama">
    <div class="container">
        <div class="row">
  
<!-- Kolom pertama -->
<div class="col-md-8 mb-4"> <!-- Ganti mb-8 dengan mb-4 untuk mengurangi jarak di bawah -->
    <div class="p-3 bg-light border shadow-sm rounded konten-container">
        
        <?php    
            $prestasi_det = $function_all->tampil_data_prestasi_det($id); 
            $prestasi_det = $prestasi_det[0]; // Mengambil row pertama 
        ?>
        
        <h4 class="konten-title">Prestasi: <?php echo $prestasi_det['judul']; ?></h4>
        
        <!-- Artikel 1 -->
        <div class="artikel-item border p-2 rounded d-flex flex-column flex-md-row"> <!-- Menggunakan flex-column untuk tampilan mobile -->
            <div class="artikel-img-container mb-3 mb-md-0"> <!-- Menambahkan mb-3 untuk jarak di mobile -->
                <img src="images/artikel/<?php echo htmlspecialchars($prestasi_det['gambar']); ?>" alt="" class="artikel-img img-fluid" style="max-width: 150px;"> <!-- Tambahkan img-fluid untuk responsivitas -->
            </div>
            <div class="artikel-text ms-3"> 
                <?php echo $prestasi_det['isi_artikel']; ?>
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