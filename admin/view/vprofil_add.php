      <div class="col-12">
              <div class="card recent-sales overflow-auto">
                 <div class="card-body"> 
              <h5 class="card-title">Tambah Data Profil </h5>

              <!-- Horizontal Form -->
             <form class="form-horizontal" action="./index.php?aksi=Master&xaksi=profil&yaksi=3" method="post" enctype="multipart/form-data">
           <div class="row mb-3">
                <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                <div class="col-sm-10">
                    <select class="form-control" name="jenis" id="jenis"> 
                        <option value="Visi">Visi</option>
                        <option value="Misi">Misi</option>
                        <option value="Sambutan">Sambutan</option>
                        <option value="Lainnya">Lainnya</option>
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
                  <label for="isi_profil" class="col-sm-2 col-form-label">Isi Profil</label>
                  <div class="col-sm-10">
                     <textarea class="form-control" name="isi_profil" id="isi_profil" rows="4"></textarea>
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