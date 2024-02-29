<?php

$page = $_GET['page'] ?? 'home'; 

function render($page) {
    include 'templat.php';
    
}

render($page);
?>
