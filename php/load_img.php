<?php
$images = glob('../data/img_list/*', GLOB_BRACE);
$images = array_map(function ($image) {
    return substr($image, 1);
}, $images);

$title = array_map(function($image) {
    return str_replace('./data/img_list/', '', $image);
}, $images);

$i = 0;
// var_dump($images);
?>
<?php foreach ($images as $image) : ?>
    <li class="memo_item">
        <img src="<?php echo $image; ?>" alt="Image">
        <p><?= $title[$i]?></p>
    </li>
    <?php $i++;?>
<?php endforeach; ?>
