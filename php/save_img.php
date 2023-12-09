<?php
if ($_FILES['file']['error'] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $upload_dir = "../data/img_list/";
    $i = 0;
    $parts = pathinfo($name);

    while (file_exists($upload_dir . $name)) {
        $i++;
        $name = $parts['filename'] . '-' . $i . '.' . $parts['extension'];
    }

    if (move_uploaded_file($tmp_name, "../data/img_list/$name")) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
}
