<?php
 include('function_all.php'); 
$function_all = new function_all();

        $chat = $function_all->tampil_data_chat();  
        foreach($chat as $row) {  
        echo "<div><strong>" . htmlspecialchars($row['name']) . ":</strong> " . htmlspecialchars($row['message']) . "</div>";
    }
?>
