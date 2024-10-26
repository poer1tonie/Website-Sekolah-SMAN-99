<?php 	 
include('function/fpesan.php'); 
$fpesan = new fpesan();   

if(isset($_GET['xaksi']))
{ 
  $status=$_GET['yaksi']; 

	if($status=='1') 
	{ 

      $dataku = $fpesan->tampil_data();
      include "./view/vpesan.php";   
	}

   
   
     if($status=='4') 
      	{ 
                $id=$_GET['id'];
                $result=$fpesan->hapus_data($id);  
                      if($result)
                        {  
                            echo'<div class="alert alert-success">Data Berhasil dihapus</div>';
                        }
                        else
                        {
                          echo'<div class="alert alert-danger">Data gagal dihapus</div>';  
                         }
                          echo '<meta http-equiv="refresh" content="1;url=?aksi=Master&xaksi=pesan&yaksi=1">';  
       
      	}
 
 
 
} 
?> 