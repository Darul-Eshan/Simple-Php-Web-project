<?php

function view($view, $data = [], $print = true) {
    $output = "View not Found";
    $filepath = __DIR__ . '/../views/' . $view . '.php';

    if (file_exists($filepath)) {
        extract($data);
        ob_start();
        include $filepath;
        $output = ob_get_clean();
    }

    if ($print) {
        echo $output;
    }

    return $output;
}