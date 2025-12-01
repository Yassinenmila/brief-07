<?php
function page_manipul($pages,$default='home'){

    $page = $_GET['page'] ?? $default;

    if(!in_array($page,$pages)){
        return 404;
    }
    return $page;
}
?>