<?php
header('Content-Type: application/json');

$historyFile = 'college_history.json';

if (file_exists($historyFile)) {
    unlink($historyFile);
}

echo json_encode(['success' => true, 'message' => 'All evaluation history cleared']);
?>
