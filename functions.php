<?php

function renderTemplate($path, array $data) {
    if (file_exists(__DIR__ . $path)) {
        ob_start();
        require(__DIR__ . $path);
        $data;
        return ob_get_clean();
    }
    return null;
}

function sumFormat($number) {
    return number_format($number, 0, '', ' ') . ' ₽';
}

function lotLifeTime() {

    list($mouth, $day, $year) = explode('-', date('m-d-Y'));

    $tomorrow = mktime (0,0,0, $mouth,$day + 1, $year);

    $now = time();

    $event_time = $tomorrow - $now;

    $hours = floor($event_time / 3600);
    $minutes = floor(($event_time - ($hours * 3600)) / 60);
    $seconds = $event_time - ($hours * 3600 + $minutes * 60);
    return $hours . ':' . $minutes . ':' . $seconds;
}

function esc($string) {
    return htmlspecialchars($string);
}