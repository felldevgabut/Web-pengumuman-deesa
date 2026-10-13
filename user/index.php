<?php
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkungan IV</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
    <div class="fullcontainer">
       <nav class="navbar">
        
        <div class="judulbar">
            <div class="pertama">Lingkungan</div>
            <div class="kedua">IV</div>
        </div>

        <ul class="nav">
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="#pengumuman">Pengumuman</a></li>
            <li><a href="#gallery">Galeri</a></li>
        </ul>
       </nav>

       <div id="beranda" class="container">
        <div class="content">
            <h1>Selamat Datang Di Website Lingkungan IV</h1>
            <p>Website ini digunakan untuk menampilkan informasi terkini tentang lingkungan IV.</p>
            <a href="#pengumuman" class="btn">Lihat Pengumuman</a>
            <a href="#gallery" class="btn">Lihat Galeri UMKM</a>
            </div>
        </div>

         <div id="pengumuman" class="container">
                <div class="content">
                 <h2>Pengumuman Dokumen</h2>
                 <p>Berikut adalah dokumen pengumuman terbaru dari lingkungan IV. Klik pada dokumen untuk membukanya secara langsung.</p>
                 <ul class="doc-list">
                      <?php
                        $query = mysqli_query($conn, "SELECT * FROM dokumen_pengumuman ORDER BY id DESC");
                        while ($row = mysqli_fetch_assoc($query)) {
                            $icon = "📄";
                            if($row['Jenis_Dokumen'] === 'pdf') $icon = "📕";
                            else if($row['Jenis_Dokumen'] === 'excel' || $row['Jenis_Dokumen'] === 'xlsx') $icon = "📗";
                            else if($row['Jenis_Dokumen'] === 'word' || $row['Jenis_Dokumen'] === 'docx') $icon = "📘";
                            else if($row['Jenis_Dokumen'] === 'ppt' || $row['Jenis_Dokumen'] === 'pptx') $icon = "📙";

                            $fileUrl = "http://localhost/Web pengumuman deesa/uploads/dokumen/" . $row['file_dokumen'];
                      ?>
                            <li class="doc-item" onclick="window.open('<?php echo $fileUrl; ?>', '_blank')">
                                <div class="doc-icon"><?php echo $icon; ?></div>
                                <a href="<?php echo $fileUrl; ?>" target="_blank" class="doc-link"><?php echo htmlspecialchars($row['Nama_Dokumen']); ?></a>
                                <span class="view-btn">Buka <span style="font-size: 12px;">↗</span></span>
                            </li>
                      <?php } ?>
                 </ul>
                </div>
       </div>

         <div id="gallery" class="container">
                 <div class="content">
                  <h2>Galeri UMKM Lingkungan IV</h2>
                  <p>Berikut adalah beberapa foto dari UMKM di lingkungan IV.</p>
                  <div class="gallery">
                      <?php
                          $query_galeri = mysqli_query($conn, "SELECT * FROM gallery_umkm ORDER BY id DESC");
                          while($foto = mysqli_fetch_assoc($query_galeri)) {
                              $url_foto = "http://localhost/Web pengumuman deesa/uploads/galeri/" . $foto['file_foto'];
                      ?>
                          <div class="gallery-item">
                              <img src="<?php echo $url_foto; ?>" 
                                   alt="<?php echo htmlspecialchars($foto['Judul_Foto']); ?>">
                              <div class="gallery-caption"><?php echo htmlspecialchars($foto['Judul_Foto']); ?></div>
                          </div>
                      <?php } ?>
                  </div>
                 </div>
        </div>
    </div>

</body>
</html>