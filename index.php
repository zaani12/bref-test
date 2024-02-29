<?php

class PageRenderer {
    private $page;
    public function __construct($page) {
        $this->page = $page;
    }
    public function render() {
        $page = $_GET['page'] ?? 'home';

        include 'templat.php';
    }
}

$renderer = new PageRenderer($page);
$renderer->render();
?>
