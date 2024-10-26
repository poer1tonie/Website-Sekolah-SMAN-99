           <div class="col-12">
              <div class="card recent-sales overflow-auto">
                 <div class="card-body">
				 
				 <table width="100%" border="0" cellpadding="0" cellspacing="0">
					  <tr>
						<td><h5 class="card-title">Data Fasilitas</span></h5></td>
						 
					  </tr>
				   </table>
                    <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">sekolah</th>
                        <th scope="col">Motto</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Telepon</th>                        
                        <th scope="col">Email</th>                        
                        <th scope="col">Gambar</th> 
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
										<td><?php  echo $row['nama_sekolah']; ?></a></td>
	                          <td><?php  echo $row['motto']; ?></td>  
                              <td><?php  echo $row['alamat']; ?></td>                           <td><?php  echo $row['telepon']; ?></td>  
                              <td><?php  echo $row['email']; ?></td>                                
                           <td>  <img src="../images/sekolah/<?php echo htmlspecialchars($row['gambar']); ?>" alt="Gambar" style="width:200px; height: auto;"></td>

                      <td><a href="./index.php?aksi=Master&xaksi=sekolah&yaksi=5&id=<?php echo  $row['id'];?>" class="text-primary"><span id="btnConfirm"  class="bi bi-eyedropper"></span></a>
                     </td>  
		      </tr>  
                 <?php } ?>  
                       </tbody>
                  </table>
                </div>
              </div>
            </div><!-- End Recent Sales --> 
  