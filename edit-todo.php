<?php
//instructions
$_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$id = $_GET['id'] ?? '';

if ($id) {
    $data = file_get_contents($filename);
    $todos = json_decode($data, true) ?? [];
    if (count($todos)) {
        $todoIndex = array_search($id, array_column($todos, 'id'));
        $todos[$todoIndex]['done'] = $todos[$todoIndex]['done'];
    }
}
// print_r(array_column($todos, 'id'));
// header('location: ./');
///http://localhost:3000 = ./
// print_r($_GET);
