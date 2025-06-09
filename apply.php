<?php
require 'koneksi.php';
$name = $_POST["name"];
$course = $_POST["coursenames"];
$testimoni = $_POST["testimoni"];
$rating = $_POST["rating"];

$img_name = $_FILES['img']['name'];
$tmp_name  = $_FILES['img']['tmp_name'];
$folder    = "assets/img/apply/" . $img_name;

move_uploaded_file($tmp_name, $folder);

$sql = "INSERT INTO user (nama, course, testimoni, rating, img)
        VALUES ('$name', '$course', '$testimoni', $rating, '$img_name')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php#testimoni-section");
} else {
    echo "Apply Gagal :" . mysqli_error($conn);
}
?>