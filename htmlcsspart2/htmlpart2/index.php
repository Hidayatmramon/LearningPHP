<!DOCTYPE html>
<html>
  <head>
    <title>Rekayasa Perangkat Lunak</title>
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
  <?php include('nav.php'); ?>

    <?php
      // mengecek apakah terdapat parameter 'page' pada URL
      if (isset($_GET['page'])) {
        // menyimpan nilai dari parameter 'page' pada variabel $page
        $page = $_GET['page'];

        // menampilkan konten halaman yang sesuai dengan nilai variabel $page
        switch ($page) {
          case 'home':
            include "home.php";
            break;
          case 'sejarah':
            include "sejarah.php";
            break;
          case 'tugas-martikulasi':
            include "tugas-martikulasi.php";
            break;
          case 'kantin':
            include "kantin.php";
            break;
          case 'perpustakaan':
            include "perpustakaan.php";
            break;
          case 'eskul':
            include "eskul.php";
            break;
          default:
            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
            break;
        }
      } else {
        include "home.php";
      }
    ?>

<?php include('section.php'); ?>
  </body>
</html>
