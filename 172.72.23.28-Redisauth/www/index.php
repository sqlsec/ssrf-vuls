<?php 
error_reporting(0);
highlight_file(__FILE__);
if (isset($_GET['file'])) {
    include($_GET['file']); 
} else {
    echo "easy lfi";
}
?>
