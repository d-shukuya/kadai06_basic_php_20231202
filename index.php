<?php
$images = glob('./data/img_list/*', GLOB_BRACE);
$title = array_map(function ($image) {
    return substr($image, 16);
}, $images);
$i = 0;
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カメラメモ</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style_index.css">
</head>

<body>
    <header>
        <img src="./img/logo.jfif" alt="ロゴ">
    </header>
    <nav>
        <div id="camera_btn" class="nav_btn">
            <img src="./img/camera.svg" alt="カメラ起動ボタン">
        </div>
        <div id="file_btn" class="nav_btn">
            <img src="./img/file.svg" alt="ファイル選択ボタン">
        </div>
        <input type="file" id="file_upload" multiple>
    </nav>
    <main>
        <ul id="memo_list_box">
            <?php foreach ($images as $image) : ?>
                <li class="memo_item">
                    <img src="<?php echo $image; ?>" alt="Image">
                    <p><?= $title[$i] ?></p>
                </li>
                <?php $i++; ?>
            <?php endforeach; ?>
        </ul>
    </main>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="./js/script_index.js"></script>
</body>

</html>