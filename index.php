<?php
// Путь для локальной работы с проектом
require_once  __DIR__ . '/../vendor/autoload.php';

// Файл не включается на прямую
// Он загрузится автоматически благодаря автозагрузке
use Hexlet\Php\Runner;

print_r(Runner\run());