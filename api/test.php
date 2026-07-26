<?php
header('Content-Type: application/json');
echo json_encode([
    'php_version' => phpversion(),
    'extensions' => get_loaded_extensions(),
    'memory_limit' => ini_get('memory_limit'),
    'max_execution_time' => ini_get('max_execution_time'),
]);
