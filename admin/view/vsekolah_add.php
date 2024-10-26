      <div class="col-12">
              <div class="card recent-sales overflow-auto">
                 <div class="card-body"> 
              <h5 class="card-title">Tambah Data Fasilitas </h5>

              <!-- Horizontal Form -->
             <form class="form-horizontal" action="./index.php?aksi=Master&xaksi=fasilitas&yaksi=3" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="fasilitas" class="col-sm-2 col-form-label">Nama Fasilitas</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nm_fasilitas" id="nm_fasilitas">
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                  <div class="col-sm-10">
                     <textarea class="form-control" name="keterangan" id="keterangan" rows="4"></textarea>
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