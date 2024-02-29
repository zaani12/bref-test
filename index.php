<?php
function render($page) {
    include  $page;
}
include 'templat.php';

$page = $_GET['page'] ?? 'home'; 
render($page);
?>
