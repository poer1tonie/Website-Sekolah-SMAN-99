      <div class="col-12">
              <div class="card recent-sales overflow-auto">
                 <div class="card-body"> 
              <h5 class="card-title">Tambah Data artikel </h5>

              <!-- Horizontal Form -->
             <form class="form-horizontal" action="./index.php?aksi=Master&xaksi=artikel&yaksi=3" method="post" enctype="multipart/form-data">
           <div class="row mb-3">
                <label for="category" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <select class="form-control" name="category" id="category"> 
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
                  <input type="text" class="form-control" name="judul" id="judul">
                  </div>
                </div> 
                 <div class="row mb-3">
                  <label for="isi_artikel" class="col-sm-2 col-form-label">Isi Artikel</label>
                  <div class="col-sm-10">
                     <textarea class="form-control" name="isi_artikel" id="isi_artikel" rows="4"></textarea>
                  </div>
                </div>  

                  <div class="row mb-3">
                    <label for="gambar" class="col-sm-2 col-form-label">Upload Gambar</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="gambar" id="gambar" accept="image/*">
                    </div>
                  </div>
                <div class="text-center">
                  <button type="submit" id="simpan" name="simpan" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-secondary">Clear</button>
                </div>
              </form> 

            </div>
          </div>       
        </div>