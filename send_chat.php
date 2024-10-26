<?php
 include('function_all.php'); 
$function_all = new function_all();
 
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']); 
    $result = $function_all->input_data_chat($name,$message); 
   if ($result) {
            //  echo '<div class="alert alert-success">Data berhasil ditambah</div>';
    } else {
            //  echo '<div class="alert alert-danger">Data gagal ditambah</div>';
    }
} 
 
?>
