           <div class="col-12">
              <div class="card recent-sales overflow-auto">
                 <div class="card-body">
				 
				 <table width="100%" border="0" cellpadding="0" cellspacing="0">
					  <tr>
						<td><h5 class="card-title">Data Pesan</span></h5></td> 
					  </tr>
				   </table>
                    <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama </th>
                        <th scope="col">email</th>
                       <th scope="col">Message</th>
                       <th scope="col">tgl Kirim</th> 
                        <th scope="col">Delete</th> 
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
										<td><?php  echo $row['name']; ?></a></td>
                              <td><?php  echo $row['email']; ?></td> 
                              <td><?php  echo $row['message']; ?></td> 
                              <td><?php  echo $row['submitted_at']; ?></td>  

                    <td> <a href="./index.php?aksi=Master&xaksi=pesan&yaksi=4&id=<?php echo  $row['id'];?>" class="text-primary"><span id="btnConfirm"  class="bi bi-trash"></span></a>  
									  </tr>  
                 <?php } ?>  
                       </tbody>
                  </table>
                </div>
              </div>
            </div><!-- End Recent pesan --> 
  