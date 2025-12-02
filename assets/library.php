<?php
function page_manipul($pages,$default='home'){

    $page = $_REQUEST['page'] ?? $default;

    if(!in_array($page,$pages)){
        return 404;
    }
    return $page;
}
?>