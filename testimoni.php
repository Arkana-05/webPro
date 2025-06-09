<?php
include 'koneksi.php';

$sql = "SELECT nama, img, course, testimoni, rating FROM user ORDER BY id_user DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="testi-style1">';
        echo '  <div class="testi-content">';
        echo '    <p class="testi-text">“ ' . htmlspecialchars($row['testimoni']) . ' ”</p>';
        echo '  </div>';
        echo '  <div class="testi-client">';
        echo '    <img src="assets/img/apply/' . htmlspecialchars($row['img']) . '" alt="Foto Pengguna">';
        echo '    <h3 class="testi-name h5">' . htmlspecialchars($row['nama']) . '</h3>';
        echo '    <span class="testi-degi">' . htmlspecialchars($row['course']). '</span>';
        echo '    <div class="testi-rating">';
        $rating = (int)$row['rating'];
        for ($i = 1; $i <= 5; $i++) {
            echo '<i class="bi bi-star' . ($i <= $rating ? '-fill' : '') . '"></i>';
        }
        echo '    </div>';
        echo '  </div>';
        echo '</div>';
    }
} else {
    echo '<p>Belum ada testimoni.</p>';
}

$conn->close();
?>
