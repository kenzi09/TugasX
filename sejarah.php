<?php
session_start();


    if ( !isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah Sushi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body style="
    height: 100vh;
    background-image: url('img/bg-sushi.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    ">

<!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg animate__animated animate__fadeInDown">
        <div class="container-fluid">
            <a class="navbar-brand position-absolute top-50 start-0 translate-middle-y" style="font-size: 30px; font-family: 'Cherry Bomb One', cursive; color: rgb(230, 230, 230);">Sejarah Sushi</a>

            <div class="navbar-collapse " id="navbarSupportedContent">
                <p><a href="logout.php" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover position-relative position-absolute top-50 end-0 translate-middle" style="font-size: 20px; text-decoration: none;">Log Out</a></p>
            </div>

        </div>
    </nav>
<!-- NAVBAR END -->

<div class="" style="
            height: 85vh; 
            text-align: center; 
            margin-top: 40px;
            ">
    <img src="img/ss-no-ken.png" alt="" style=" width: 25rem;"
                                        class="  animate__animated animate__fadeIn animate__slower">
    <img src="img/feni.jpg" alt="" style=" width: 28rem; border-radius: 30px;"
                                        class="  animate__animated animate__fadeInUp">
</div>

<br><br><br><br><br><br>
<div class="susi" style=" width: 75%; margin: 0 auto; text-align: center;">

<h1 style="font-size: 48px; font-family: 'Cherry Bomb One', cursive;" data-aos="fade-up">Sejarah Sushi</h1>

    <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">
    Konon kebiasaan mengawetkan ikan dengan menggunakan beras dan cuka berasal dari daerah pegunungan di Asia Tenggara. 
    Istilah sushi berasal dari bentuk tata bahasa kuno yang tidak lagi dipergunakan dalam konteks lain; secara harfiah, 
    "sushi" berarti "itu (berasa) masam", suatu gambaran mengenai proses fermentasi dalam sejarah akar katanya. 
    Dasar ilmiah di balik proses fermentasi ikan yang dikemas di dalam nasi ialah bahwa cuka yang dihasilkan dari 
    fermentasi nasi menguraikan asam amino dari daging ikan. Hasilnya ialah salah satu dari lima rasa dasar, yang 
    disebut umami dalam bahasa Jepang.</p>

<br>
    <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">
    Nigirizushi dikenal di Jepang sejak zaman Edo. Sebelum zaman Edo, sebagian besar susyi yang dikenal 
    di Jepang adalah jenis oshizushi (susyi yang dibentuk dengan cara ditekan-tekan di dalam wadah kayu persegi). 
    Pada zaman dulu, orang Jepang mungkin kuat makan karena susyi selalu dihidangkan dalam porsi besar. 
    Susyi sebanyak 1 kan (1 porsi) setara dengan 9 kan (9 porsi) susyi zaman sekarang, atau kira-kira sama dengan 18 kepal 
    susyi (360 gram). Satu porsi susyi zaman dulu yang disebut ikkanzushi mempunyai neta yang terdiri dari 9 jenis makanan laut atau lebih.</p>

<br>

    <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">
    Pada zaman Edo periode akhir, di Jepang mulai dikenal bentuk awal dari nigirizushi. Namun ukuran porsi nigirizushi sudah dikurangi  
    agar lebih mudah dinikmati. Ahli susyi bernama Hanaya Yohei menciptakan susyi jenis baru yang sekarang disebut edomaezushi. 
    Namun ukuran susyi ciptaannya besar-besar seperti onigiri. Pada masa itu, teknik pendinginan ikan masih belum maju. 
    Akibatnya, ikan yang diambil dari laut sekitar Jepang harus diolah lebih dulu agar tidak rusak bila dijadikan susyi.</p>

<br>

    <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">
    Sampai tahun 1970-an susyi masih merupakan makanan mewah. Rakyat biasa di Jepang hanya makan susyi untuk merayakan acara-acara khusus, 
    dan terbatas pada susyi pesan-antar. Dalam manga, sering digambarkan pegawai kantor yang pulang tengah malam ke rumah dalam keadaan mabuk. 
    Oleh-oleh yang dibawa untuk menyogok istri yang menunggu di rumah adalah susyi. Walaupun rumah makan kaitenzushi yang pertama sudah dibuka tahun 1958 di Osaka, 
    penyebarannya ke daerah-daerah lain di Jepang memakan waktu lama. Makan susyi sebagai acara seluruh anggota keluarga terwujud pada tahun 1980-an sejalan dengan makin meluasnya kaitenzushi.</p>

<br>

    <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">
    Keberhasilan kaitenzushi mendorong perusahaan makanan untuk memperkenalkan berbagai macam bumbu susyi instan yang memudahkan ibu rumah tangga membuat susyi di rumah. 
    chirashizushi atau temakizushi dapat dibuat dengan bumbu instan ditambah nasi, makanan laut, tamagoyaki dan nori.</p>

<br>

    <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">
    <a href="index.php">Kembali</a>
    </p>

</div>

<br><br><br><br><br>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
</script>
<script>

   AOS.init({
      duration:800,
      delay:200
   });

</script>

</body>

<footer>
    <div style="background-color: #211D11; height: 50vh; color: white;">
    <br>
        <h1 style="font-size: 25px; font-family: 'Cherry Bomb One', cursive;" data-aos="fade-up"> Contact</h1>
        <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">
        <ul data-aos="fade-right">
            email
            <li>kenzibadrika@smkwikrama.sch.id</li>
        </ul>
        <ul data-aos="fade-right">
            telepon
            <li>085174337673</li>
        </ul>
        </p>
    </div>
</footer>

</html>