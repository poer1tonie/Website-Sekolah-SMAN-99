           <div class="col-12">
              <div class="card recent-sales overflow-auto">
                 <div class="card-body">
				 
				 <table width="100%" border="0" cellpadding="0" cellspacing="0">
					  <tr>
						<td><h5 class="card-title">Data Profil</span></h5></td>
						<td> <div align="right"><a href="./index.php?aksi=Master&xaksi=profil&yaksi=2" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-print"></span>Tambah</a></div> 
            </td> 
					  </tr>
				   </table>
                    <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Judul</th>
                       <th scope="col">Isi profil</th> 
                        <th scope="col">Gambar</th>
                        <th scope="col">Delete</th>
                       <th scope="col">Edit</th>
                      </tr>
                    </thead>
                    <tbody> 
             <?php  
                  $no=1;
                  foreach($dataku as $row)
                  {
                  ?> 
									  <tr>
										<td><?php  echo $no++; ?> </td>
										<td><?php  echo $row['jenis']; ?></a></td>
                              <td><?php  echo $row['judul']; ?></td> 
                              <td><?php  echo $row['isi_profil']; ?></td>  
                           <td>  <img src="../images/profil/<?php echo htmlspecialchars($row['gambar']); ?>" alt="Gambar" style="width:200px; height: auto;"></td>

                    <td> <a href="./index.php?aksi=Master&xaksi=profil&yaksi=4&id=<?php echo  $row['id'];?>" class="text-primary"><span id="btnConfirm"  class="bi bi-trash"></span></a> 
                     <td><a href="./index.php?aksi=Master&xaksi=profil&yaksi=5&id=<?php echo  $row['id'];?>" class="text-primary"><span id="btnConfirm"  class="bi bi-eyedropper"></span></a>
                     </td>  
									  </tr>  
                 <?php } ?>  
                       </tbody>
                  </table>
                </div>
              </div>
            </div><!-- End Recent profil --> 
  