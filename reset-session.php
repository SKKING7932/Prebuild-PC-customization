<?php

session_start(); // Start the PHP session
 unset($_SESSION['selected_processor_id']);
unset($_SESSION['Total_Price']);
unset($_SESSION['selected_motherboard_id']);
unset($_SESSION['selected_storage_id']);
unset($_SESSION['selected_coolingfan_id']);
unset($_SESSION['selected_graphicscard_id']);
unset($_SESSION['selected_cabinet_id']);
unset($_SESSION['selected_psu_id']);
unset($_SESSION['selected_ram_id']);

echo "Session variables reset successfully";
?>
