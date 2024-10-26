<!-- Main Content Section --> 
 <section id="kontenutama" class="kontenutama">
    <div class="row">
          <div class="container my-4">
    <section class="main-section">
        <div class="row">
         
<?php
        $guru = $function_all->tampil_data_guru();   
        foreach($guru as $row)
        { ?>

            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="images/guru/<?php echo htmlspecialchars($row['gambar']); ?>" class="card-img-top1" alt="<?php echo $row['nama_guru'];   ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['nama_guru'];   ?></h5>
                        <p class="email"><i class="fas fa-envelope"></i> <?php echo $row['email'];   ?></p>
                    </div>
                </div>
            </div> 

       <?php } ?>    
            
            <!-- Tambahkan lebih banyak guru dengan modal serupa -->
        </div>
    </section>
    </div> 
</section>