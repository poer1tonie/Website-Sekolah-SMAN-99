<div class="col-12">
  <div class="card recent-sales overflow-auto">
    <div class="card-body">
      <h5 class="card-title">Ubah data Artikel</h5>

      <!-- Horizontal Form -->
      <form class="form-horizontal" action="./index.php?aksi=Master&xaksi=artikel&yaksi=6" method="post" enctype="multipart/form-data">
        <?php foreach($dataku as $row) { ?> 
            <input type="text" class="form-control" readonly="true" value="<?php echo $row['id']; ?>" name="id" id="id" hidden>
    
            <div class="row mb-3">
                <label for="category" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <select class="form-control" name="category" id="category">
                        <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
                        <option value="Kegiatan">Kegiatan</option>
                        <option value="informasi">informasi</option>
                        <option value="Prestasi">Prestasi</option>
                        <option value="Berita">Berita</option>
  
                    </select>
                </div>
            </div>


        <div class="row mb-3">
          <label for="judul" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="<?php echo $row['judul']; ?>" id="judul" name="judul">
          </div>
        </div>
        <div class="row mb-3">
          <label for="isi_artikel" class="col-sm-2 col-form-label">Isi Artikel</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="<?php echo $row['isi_artikel']; ?>" id="isi_artikel" name="isi_artikel">
          </div>
        </div>
         

        <div class="row mb-3">
          <label for="gambar_lama" class="col-sm-2 col-form-label">Gambar Saat Ini</label>
          <div class="col-sm-10">
            <img src="../images/artikel/<?php echo $row['gambar']; ?>" alt="Slide Image" width="200">
            <input type="hidden" name="gambar_lama" value="<?php echo $row['gambar']; ?>">
          </div>
        </div>

        <div class="row mb-3">
          <label for="gambar" class="col-sm-2 col-form-label">Upload Gambar Baru</label>
          <div class="col-sm-10">
            <input type="file" class="form-control" name="gambar" id="gambar" accept="image/*">
          </div>
        </div>

        <?php } ?>
        <div class="text-center">
          <button type="submit" id="update" name="update" class="btn btn-primary">Update</button>
          <button type="reset" class="btn btn-secondary">Clear</button>
        </div>
      </form>
    </div>
  </div>
</div>
