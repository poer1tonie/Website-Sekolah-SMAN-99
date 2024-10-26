<?php 
include('database.php'); 

class fpesan extends  database {   

function tampil_data()
	{
		$sql = mysqli_query($this->koneksi,"select * from tbl_contacts");
		$number = mysqli_num_rows($sql);  
		if ($number==0) {  echo "Data tidak ada..."; 
		//exit; 
	} 
		while($row = mysqli_fetch_array($sql,MYSQLI_ASSOC)){
			$hasil[] = $row;
		} 
		return $hasil;
	}

  

 function hapus_data($id){ 
 	// Ambil nama file gambar yang akan dihapus 
        // Hapus data dari database
        $deleteQuery = "DELETE FROM tbl_contacts WHERE id='$id'";
        $deleteResult = mysqli_query($this->koneksi, $deleteQuery);    
 
        if ($deleteResult) {
              return true; // Berhasil menghapus data dan file gambar
        } else {
            return false; // Gagal menghapus data dari database
        }
    }
}
?>