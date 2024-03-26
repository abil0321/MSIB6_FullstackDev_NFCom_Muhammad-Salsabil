<?php
// Variabel untuk data diri
$nama = "Muhammad Salsabil";
$email = "salsabilmuhammad45@gmail.com";
$nomor_telepon = "085756959122";
$alamat = "Perumahan Bukit Cengkeh 2 Blok D2 no 15 RT 004 RW 016 Kel.Tugu
Kec. Cimanggis Kota Depok, Jawa Barat";
$tempat_lahir = "Makassar";
$tgl_lahir = "03 Oktober 2001";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Latihan Pertama</title>
  <link rel="stylesheet" href="css_latihan1.css" />
</head>

<body>
  <marquee behavior="alternate" direction="right" loop="infinite">
    <h1>Welcome To My Page</h1>
  </marquee>

  <div class="container">
    <img src="https://i.ibb.co/j4tGJ4m/Belajar-Siang.png" alt="Foto Profil Github" />
    <p>Nama saya <?php echo $nama ?>, saya sekarang masih duduk di bangku
      perkuliahan dan saya aktif di beberapa organisasi antara lain organisasi
      desain (Mudeng), Genquran, dan Shafa. Saya memiliki pemahaman yang kuat
      tentang pemrograman dan kemahiran dalam beberapa teknologi lain. Saya
      memiliki pengalaman mengajar sebagai guru privat selama beberapa semester,
      yang telah mengasah kemampuan komunikasi dan kemampuan adaptasi saya. Saya
      juga memiliki kemampuan untuk bekerja dalam tim serta mandiri dalam
      mengelola proyek-proyek.
    </p>
  </div>

  <fieldset id="pendidikan">
    <legend>
      <span>Tentang Saya</span>
    </legend>
    <ol type="1">
      <li>Nama: <?php echo $nama ?></li>
      <li>Email: <?php echo $email ?></li>
      <li>No Telpon: <?php echo $nomor_telepon ?></li>
      <li>Tempat Lahir: <?php echo $tempat_lahir ?></li>
      <li>Tanggal Lahir: <?php echo $tgl_lahir ?></li>
      <li>
        Alamat: <?php echo $alamat ?>
      </li>
      <li>Pendidikan</li>
      <ul type="square">
        <li>SMA ASY-SYUJAIYAH, Bogor</li>
        <li>Pesantren Teknologi Informasi dan Komunikasi, Depok</li>
        <li>STT Terpadu Nurul Fikri</li>
        <li>Kuliah</li>
      </ul>

      <li>Hobby</li>
      <ul type="disc">
        <li>Olahraga</li>
        <li>Menulis</li>
        <li>Membaca</li>
      </ul>
      <li>Menu Favorite</li>
      <ul type="">
        <li>Nasi Goreng</li>
        <li>Ayam Goreng</li>
        <li>Ayam Bakar</li>
      </ul>

      <ul type="">
        <li>Nasi Goreng</li>
        <li>Ayam Goreng</li>
        <li>Ayam Bakar</li>
      </ul>
    </ol>
  </fieldset>

  <br />

  <fieldset id="galeri">
    <legend>
      <font color="green" size="5" face="calibri" id="galeri">Gallery</font>
    </legend>

    <marquee behavior="scroll" direction="right" loop="infinite" scrollamount="100">
      <img src="https://th.bing.com/th/id/R.c76fdc3d84da569eb11df27244361d8d?rik=na4iVfLOtoE%2fVw&riu=http%3a%2f%2fcliparts.co%2fcliparts%2frTn%2frAn%2frTnrAnXxc.jpg&ehk=pg4klpZW7k0f5XqKBxeIPVlA03BdwbrizZVD6cJPTQw%3d&risl=&pid=ImgRaw&r=0" alt="" srcset="" width="20%" />
      <img src="https://www.wallpapertip.com/wmimgs/11-114646_wallpaper-kungfu-panda-in-action-gambar-kartun-lucu.jpg" alt="" srcset="" width="20%" />
      <img src="https://howieandbelle.com/wp-content/uploads/2018/10/gambar-kartun-lucu-3d.jpg" alt="" srcset="" width="20%" />
    </marquee>

    <marquee behavior="scroll" direction="left" loop="infinite" scrollamount="100">
      <img src="https://sharingconten.com/wp-content/uploads/2020/01/Gambar-Kartun-Lucu-dan-Imut.jpg" alt="" srcset="" width="20%" />
      <img src="https://www.pinclipart.com/picdir/big/577-5777017_kartun-hewan-kucing-lucu-clipart.png" alt="" srcset="" width="20%" />
      <img src="https://1.bp.blogspot.com/-ZT68un-Wczw/XtFdVzTUtfI/AAAAAAAAKcs/OLIOI-nW358j2sYink7Ci4EFhSNtH6lwgCLcBGAsYHQ/s1600/cropped-cute-agnes-gru-despicable-me2.jpg" alt="" srcset="" width="20%" />

    </marquee>
  </fieldset>
</body>

</html>